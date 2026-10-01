<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\DependencyInjection\ContainerInterface;

class BaseController extends AbstractController
{
    protected $fullContainer;

    public function __construct(ContainerInterface $fullContainer)
    {
        $this->fullContainer = $fullContainer;
    }

    protected function get(string $id)
    {
        if ($id === 'session') {
            return $this->fullContainer->get('request_stack')->getSession();
        }
        return $this->fullContainer->get($id);
    }

    public function getConsumer(){
        return $this->get('web.consumer_service');
    }
    public function getMenus(){
        $session  = $this->get("session");
        $locale = $this->get("session")->get('_locale');
        if (!$session->get('menuObject-'.$locale)) {
            $consumer = $this->getConsumer();
            $session->set('menuObject-'.$locale,json_encode($consumer->getAllMenus()));
        }
        return json_decode($session->get('menuObject-'.$locale));
    }
    public function getTranslations($context = false)
    {
        $translations = $this->getConsumer()->getTranslations();

        if (is_object($translations)) {
            $translations = (array) $translations;
        }

        if (isset($translations['data'])) {
            $data = is_object($translations['data']) ? (array) $translations['data'] : $translations['data'];
            if (!empty($data)) {
                return $translations['data'];
            }
        }

        return false;
    }

}
