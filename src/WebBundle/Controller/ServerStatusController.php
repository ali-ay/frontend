<?php

namespace WebBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use WebBundle\Controller\BaseController as Controller;

class ServerStatusController extends Controller
{

    public function indexAction(){
        $consumer = $this->getConsumer();
        $utils = $this->get('web.utils_service');
        $translations = $this->getTranslations();
        $pageContents = $consumer->retrievePageBySlug('servis-durumu');

        return $this->render('WebBundle:ServerStatus:index.html.twig',
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
