<?php

namespace WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BaseController extends Controller
{

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
    public function getTranslations($context = false){
        $translations = $this->getConsumer()->getTranslations();

        if (count($translations['data']) > 0) {
            if ($translations['data']) {
                return $translations['data'];
            }
        }
        return false;
    }

}
