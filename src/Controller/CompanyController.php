<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use App\Controller\BaseController as Controller;

class CompanyController extends BaseController
{

    public function referencesAction(){
        $consumer = $this->getConsumer();
        $pageContents = $consumer->retrievePageBySlug('referanslar');

        $referenceCards = $pageContents['data']->contents->references;
        $referenceWithContent = array();
        $referenceWithoutContent = array();
        $referenceWithVideo = array();
        foreach ($referenceCards as $key=>$referenceCard) {
            if (isset($referenceCard->content)) {
                array_push($referenceWithContent,$referenceCard);
            } else {
                if (isset($referenceCard->videomp4)) {
                    array_push($referenceWithVideo,$referenceCard);
                } else {
                    array_push($referenceWithoutContent,$referenceCard);
                }

            }
        }
        $referenceWithVideoChunks = array_chunk($referenceWithVideo,1);
        $referenceWithContentChunks = array_chunk($referenceWithContent,3);
        $referenceWithoutContentChunks = array_chunk($referenceWithoutContent,6);

        return $this->render('Company/references.html.twig',
            array(
                'pageInfo'=>$pageContents['data'],
                'referencesWithContentChunks'=>$referenceWithContentChunks,
                'referencesWithoutContentChunks'=>$referenceWithoutContentChunks,
                'referencesWithVideoChunks'=>$referenceWithVideoChunks
            )
        );
    }

}
