<?php

namespace WebBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use WebBundle\Controller\BaseController as Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class SupportController extends Controller
{
    public function privacyPolicyAction(){
        $consumer = $this->getConsumer();
        $translations = $this->getTranslations();
        $pageContents = $consumer->retrievePageBySlug('gizlilik-politikasi');
        return $this->render('WebBundle:Support:agreement.html.twig',array(
            'translations' => $translations,
            'pageInfo'=>$pageContents['data']
        ));
    }
    public function pPPrivacyPersonalDataPolicyAction(){
        $consumer = $this->getConsumer();
        $translations = $this->getTranslations();
        $pageContents = $consumer->retrievePageBySlug('gp-gizlilik-ve-kisisel-veri');
        return $this->render('WebBundle:Support:agreementSubPage.html.twig',array(
            'translations' => $translations,
            'pageInfo'=>$pageContents['data']
        ));
    }
    public function consentFromRegardingPersonalDataProcessingAction(){
        $consumer = $this->getConsumer();
        $translations = $this->getTranslations();
        $pageContents = $consumer->retrievePageBySlug('gp-kisisel-veri-riza-metni');
        return $this->render('WebBundle:Support:agreementSubPage.html.twig',array(
            'translations' => $translations,
            'pageInfo'=>$pageContents['data']
        ));
    }
    public function informationNoticeRegardingPersonalDataProcessingAction(){
        $consumer = $this->getConsumer();
        $translations = $this->getTranslations();
        $pageContents = $consumer->retrievePageBySlug('gp-kisisel-veri-aydinlatma-metni');
        return $this->render('WebBundle:Support:agreementSubPage.html.twig',array(
            'translations' => $translations,
            'pageInfo'=>$pageContents['data']
        ));
    }
    public function consentLetterOfCommercialCommunicationAction(){
        $consumer = $this->getConsumer();
        $translations = $this->getTranslations();
        $pageContents = $consumer->retrievePageBySlug('gp-ticari-iletisim-riza-metni');
        return $this->render('WebBundle:Support:agreementSubPage.html.twig',array(
            'translations' => $translations,
            'pageInfo'=>$pageContents['data']
        ));
    }
    public function customerInformationSecurityAwarenessAction(){
        $consumer = $this->getConsumer();
        $translations = $this->getTranslations();
        $pageContents = $consumer->retrievePageBySlug('gp-musteri-bilgi-guvenligi-farkindaligi');
        return $this->render('WebBundle:Support:agreementSubPage.html.twig',array(
            'translations' => $translations,
            'pageInfo'=>$pageContents['data']
        ));
    }
    public function userAgreementAction(){
        $consumer = $this->getConsumer();
        $translations = $this->getTranslations();
        $pageContents = $consumer->retrievePageBySlug('kendim-icin-kullanici-sozlesmesi');
        return $this->render('WebBundle:Support:agreement.html.twig',array(
            'translations' => $translations,
            'pageInfo'=>$pageContents['data']
        ));
    }
    public function iyzicoMobileApplicationUserAgreementAction(){
        $consumer = $this->getConsumer();
        $translations = $this->getTranslations();
        $pageContents = $consumer->retrievePageBySlug('kiks-iyzico-mobil-uygulamasi-kullanici-sozlesmesi');
        return $this->render('WebBundle:Support:agreementSubPage.html.twig',array(
            'translations' => $translations,
            'pageInfo'=>$pageContents['data']
        ));
    }
    public function frameworkEmoneyIssuanceAndPaymentServiceAgreementAction(){
        $consumer = $this->getConsumer();
        $translations = $this->getTranslations();
        $pageContents = $consumer->retrievePageBySlug('kiks-cerceve-e-para-ihraci-ve-odeme-hizmeti-sozlesmesi');
        return $this->render('WebBundle:Support:agreementSubPage.html.twig',array(
            'translations' => $translations,
            'pageInfo'=>$pageContents['data']
        ));
    }
    public function iyzicoCardStorageEndUserAgreementAction(){
        $consumer = $this->getConsumer();
        $translations = $this->getTranslations();
        $pageContents = $consumer->retrievePageBySlug('kiks-iyzico-yan-hizmetler-sozlesmesi');
        return $this->render('WebBundle:Support:agreementSubPage.html.twig',array(
            'translations' => $translations,
            'pageInfo'=>$pageContents['data']
        ));
    }
    public function generalTermsAction(){
        $consumer = $this->getConsumer();
        $translations = $this->getTranslations();
        $pageContents = $consumer->retrievePageBySlug('genel-sartlar');
        return $this->render('WebBundle:Support:agreement.html.twig',array(
            'translations' => $translations,
            'pageInfo'=>$pageContents['data']
        ));
    }
}

