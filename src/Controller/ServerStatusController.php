<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\JsonResponse;
use App\Controller\BaseController as Controller;

class ServerStatusController extends BaseController
{

    public function indexAction(){
        $consumer = $this->getConsumer();
        $utils = $this->get('web.utils_service');
        $translations = $this->getTranslations();
        $pageContents = $consumer->retrievePageBySlug('servis-durumu');

        return $this->render('ServerStatus/index.html.twig',
            array(
                'pageInfo'=>$pageContents['data'],
                'translations'=>$translations
            )
        );
    }

    public function getLogAction($ruleName){
         $consumer = $this->getConsumer();
         $logs = $consumer->retrieveStatusLog($ruleName);
         return new JsonResponse($logs);
    }
    public function getDayAction($ruleName,$datetime){
         $consumer = $this->getConsumer();
         $logs = $consumer->retrieveStatusDay($ruleName,$datetime);
         return new JsonResponse($logs);
    }
}
