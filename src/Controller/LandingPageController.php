<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Request;
use App\Controller\BaseController as Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Response;


class LandingPageController extends BaseController
{
    const PERSONAL_HOME_LP_WIDGET_AREA = 'personal-home-lp-widgets';
    const PERSONAL_PWI_LP_WIDGET_AREA = 'personal-pwi-lp-widgets';
    const PERSONAL_BRANDS_LP_WIDGET_AREA = 'personal-brands-lp-widgets';
    const PERSONAL_CAMPAIGN_LP_WIDGET_AREA = 'personal-campaign-lp-widgets';
    const PERSONAL_BRANDS_KIT_LP_WIDGET_AREA = 'personal-brands-kit-lp-widgets';
    const PERSONAL_BP_LP_WIDGET_AREA = 'personal-buyer-protection-lp-widgets';
    const PERSONAL_DEERCASE_LP_WIDGET_AREA = 'personal-deercase-lp-widgets';
    const PERSONAL_CARD_LP_WIDGET_AREA = 'personal-card-lp-widgets';
    const PARTNER_SOLUTION_LP_WIDGET_AREA = 'partner-solution-lp-widgets';
    const IYZICO_ARAS_CARGO_PAGE_WIDGET_AREA = 'iyzico-aras-cargo-campaign-widgets';
    const BUSINESS_PWI_LP_WIDGET_AREA = 'business-pwi-lp-widgets';
    const BUSINESS_IYZICOCEP_POS_LP_WIDGET_AREA = 'business-iyzico-cep-pos-lp-widgets';
    const BUSINESS_BP_BT_LP_WIDGET_AREA = 'business-buyer-protection-bank-transfer-widgets';
    const BUSINESS_MP_OUT_LP_WIDGET_AREA = 'business-mass-pay-out-lp-widgets';
    const BUSINESS_FEMALE_ENTREPRENEUR_LP_WIDGET_AREA = 'business-female-entrepreneur-landing-page-widgets';
    const IYIDEN_IYIYE_LP_WIDGET_AREA = 'iyiden-iyiye-landing-page-widgets';


    public function mainLandingPageAction(Request $request){

        $consumer = $this->getConsumer();
        $cookies = $request->cookies;
        $translations = $this->getTranslations();
        $locale = $this->get("session")->get('_locale');
        $pageContents = $consumer->retrievePageBySlug('ana-sayfa');
        $utils = $this->get('web.utils_service');
        if($utils->isMobile()) {
            $deviceType = 'mobile';
        }else{
            $deviceType = 'desktop';
        }
        return $this->render('LandingPage/mainLandingPage.html.twig',
            array(
                'deviceType' => $deviceType,
                'pageContents' => $pageContents,
                'translations'=> $translations
            )
        );
    }
    public function personalHomeLandingPageAction(Request $request){
        $consumer = $this->getConsumer();
        $session = new Session();
        $session->remove('memberUserId');
        $utils = $this->get('web.utils_service');
        $cookie = new Cookie('iyzico-section','personal');
        $response = new Response();
        $response->headers->setCookie($cookie);
        $translations = $this->getTranslations();
        $locale = $this->get("session")->get('_locale');
        $pageContents = $consumer->retrievePageBySlug('kendim-icin-anasayfa');
        $partnerList = $pageContents['data']->contents->partners;
        $pageContents['campaignTitle'] = $partnerList;
        $campaignList = $pageContents['data']->contents->partners->list;
        $activeCampaign = array();
        $passiveCampaign = array();
        foreach($campaignList as $birincigrup => $camp){
            $campaignStatus = $camp->campaignStatus;
            if($campaignStatus == "active"){
                array_push($activeCampaign, $camp);
            } else {
                array_push($passiveCampaign, $camp);
            }
        }
        $output = array_slice($activeCampaign, 0, 3);
        $campaigns = array(
            'campaign' => array(
                'activeCampaign'    => $output,
                'passiveCampaign'   => $passiveCampaign,
            )
        );
        $pageContents['campaign'] = $campaigns['campaign'];
        $widgetArea = $consumer->retrieveWidgetArea(self::PERSONAL_HOME_LP_WIDGET_AREA);
        $formType = "getoffer";
        $shouldShowCaptcha = $utils->shouldShowCaptcha($formType,3);
        $utils = $this->get('web.utils_service');
        if($utils->isMobile()) {
            $deviceType = 'mobile';
        }else{
            $deviceType = 'desktop';
        }
        return $this->render('LandingPage/personalHomeLandingPage.html.twig',
            array(
                'deviceType' => $deviceType,
                'pageContents' => $pageContents,
                'widgets'=>$widgetArea['data'],
                'translations'=> $translations,
                'source' => $request->attributes->get('source'),
                'shouldShowCaptcha' => $shouldShowCaptcha
            )
        );
    }
    public function personalMainLandingPageAction(Request $request){
        $consumer = $this->getConsumer();
        $session = new Session();
        $session->remove('memberUserId');
        $utils = $this->get('web.utils_service');
        $cookie = new Cookie('iyzico-section','personal');
        $response = new Response();
        $response->headers->setCookie($cookie);
        $translations = $this->getTranslations();
        $locale = $this->get("session")->get('_locale');
        $pageContents = $consumer->retrievePageBySlug('kendim-icin');
        $widgetArea = $consumer->retrieveWidgetArea(self::PERSONAL_PWI_LP_WIDGET_AREA);
        $formType = "getoffer";
        $shouldShowCaptcha = $utils->shouldShowCaptcha($formType,3);
        $utils = $this->get('web.utils_service');
        return $this->render('LandingPage/personalMainLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'widgets'=>$widgetArea['data'],
                'translations'=> $translations,
                'source' => $request->attributes->get('source'),
                'shouldShowCaptcha' => $shouldShowCaptcha
            )
        );
    }
    public function personalPwiBrandsLandingPageAction(Request $request){
        $consumer = $this->getConsumer();
        $locale = $this->get("session")->get('_locale');
        $translations = $this->getTranslations();
        $session = new Session();
        $session->set('brandsItem', 'true');
        $session->remove('aliay');
        $pageContents = $consumer->retrievePageBySlug('personal-pwi-brands-lp');
        $widgetArea = $consumer->retrieveWidgetArea(self::PERSONAL_BRANDS_LP_WIDGET_AREA);
        return $this->render('LandingPage/personalPwiBrandsLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'widgets'=>$widgetArea['data'],
                'translations'=> $translations
            )
        );
    }
    public function personalBuyerProtectionLandingPageAction(Request $request){
        $consumer = $this->getConsumer();
        $locale = $this->get("session")->get('_locale');
        $translations = $this->getTranslations();
        $pageContents = $consumer->retrievePageBySlug('kendim-icin-korumali-alisveris');
        $widgetArea = $consumer->retrieveWidgetArea(self::PERSONAL_BP_LP_WIDGET_AREA);
        return $this->render('LandingPage/personalBuyerProtectionLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'widgets'=>$widgetArea['data'],
                'translations'=> $translations
            )
        );
    }
    public function personalDeercaseAction(Request $request){
        $consumer = $this->getConsumer();
        $locale = $this->get("session")->get('_locale');
        $translations = $this->getTranslations();
        $pageContents = $consumer->retrievePageBySlug('deercase-kampanyasi');
        $widgetArea = $consumer->retrieveWidgetArea(self::PERSONAL_DEERCASE_LP_WIDGET_AREA);
        return $this->render('LandingPage/personalDeercaseLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'widgets'=>$widgetArea['data'],
                'translations'=> $translations
            )
        );
    }
    public function personalFinishAction(Request $request){
        $consumer = $this->getConsumer();
        $locale = $this->get("session")->get('_locale');
        $translations = $this->getTranslations();
        $pageContents = $consumer->retrievePageBySlug('finish-kampanyasi');
        $widgetArea = $consumer->retrieveWidgetArea(self::PERSONAL_DEERCASE_LP_WIDGET_AREA);
        return $this->render('LandingPage/personalFinishLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'widgets'=>$widgetArea['data'],
                'translations'=> $translations
            )
        );
    }
    public function personalFinishJanuaryAction(Request $request){
        $consumer = $this->getConsumer();
        $locale = $this->get("session")->get('_locale');
        $translations = $this->getTranslations();
        $pageContents = $consumer->retrievePageBySlug('finish-kampanyasi');
        $widgetArea = $consumer->retrieveWidgetArea(self::PERSONAL_DEERCASE_LP_WIDGET_AREA);
        return $this->render('LandingPage/personalFinishJanuaryLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'widgets'=>$widgetArea['data'],
                'translations'=> $translations
            )
        );
    }
    public function personalFinishDecemberAction(Request $request){
        $consumer = $this->getConsumer();
        $locale = $this->get("session")->get('_locale');
        $translations = $this->getTranslations();
        $pageContents = $consumer->retrievePageBySlug('finish-kampanyasi');
        $widgetArea = $consumer->retrieveWidgetArea(self::PERSONAL_DEERCASE_LP_WIDGET_AREA);
        return $this->render('LandingPage/personalFinishDecemberLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'widgets'=>$widgetArea['data'],
                'translations'=> $translations
            )
        );
    }
    public function personalwwfAction(Request $request){
        $consumer = $this->getConsumer();
        $locale = $this->get("session")->get('_locale');
        $translations = $this->getTranslations();
        $pageContents = $consumer->retrievePageBySlug('wwf-kampanyasi');
        $widgetArea = $consumer->retrieveWidgetArea(self::PERSONAL_DEERCASE_LP_WIDGET_AREA);
        return $this->render('LandingPage/personalWwfLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'widgets'=>$widgetArea['data'],
                'translations'=> $translations
            )
        );
    }
    public function personalVitrutaAction(Request $request){
        $consumer = $this->getConsumer();
        $locale = $this->get("session")->get('_locale');
        $translations = $this->getTranslations();
        $pageContents = $consumer->retrievePageBySlug('vitruta-kampanyasi');
        $widgetArea = $consumer->retrieveWidgetArea(self::PERSONAL_DEERCASE_LP_WIDGET_AREA);
        return $this->render('LandingPage/personalVitrutaLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'widgets'=>$widgetArea['data'],
                'translations'=> $translations
            )
        );
    }
    public function personalCamperAction(Request $request){
        $consumer = $this->getConsumer();
        $locale = $this->get("session")->get('_locale');
        $translations = $this->getTranslations();
        $pageContents = $consumer->retrievePageBySlug('camper-kampanyasi');
        $widgetArea = $consumer->retrieveWidgetArea(self::PERSONAL_DEERCASE_LP_WIDGET_AREA);
        return $this->render('LandingPage/personalCamperLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'widgets'=>$widgetArea['data'],
                'translations'=> $translations
            )
        );
    }
    public function personalCamperMayAction(Request $request){
        $consumer = $this->getConsumer();
        $locale = $this->get("session")->get('_locale');
        $translations = $this->getTranslations();
        $pageContents = $consumer->retrievePageBySlug('camper-mayis-kampanyasi');
        $widgetArea = $consumer->retrieveWidgetArea(self::PERSONAL_DEERCASE_LP_WIDGET_AREA);
        return $this->render('LandingPage/personalCamperMayLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'widgets'=>$widgetArea['data'],
                'translations'=> $translations
            )
        );
    }
    public function personalCamperSeptemberAction(Request $request){
        $consumer = $this->getConsumer();
        $locale = $this->get("session")->get('_locale');
        $translations = $this->getTranslations();
        $pageContents = $consumer->retrievePageBySlug('camper-eylul-kampanyasi');
        $widgetArea = $consumer->retrieveWidgetArea(self::PERSONAL_DEERCASE_LP_WIDGET_AREA);
        return $this->render('LandingPage/personalCamperSeptemberLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'widgets'=>$widgetArea['data'],
                'translations'=> $translations
            )
        );
    }
    public function personalCamperOctoberAction(Request $request){
        $consumer = $this->getConsumer();
        $locale = $this->get("session")->get('_locale');
        $translations = $this->getTranslations();
        $pageContents = $consumer->retrievePageBySlug('camper-eylul-kampanyasi');
        $widgetArea = $consumer->retrieveWidgetArea(self::PERSONAL_DEERCASE_LP_WIDGET_AREA);
        return $this->render('LandingPage/personalCamperOctoberLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'widgets'=>$widgetArea['data'],
                'translations'=> $translations
            )
        );
    }
    public function personalBetoAction(Request $request){
        $consumer = $this->getConsumer();
        $locale = $this->get("session")->get('_locale');
        $translations = $this->getTranslations();
        $pageContents = $consumer->retrievePageBySlug('beto-kampanyasi');
        $widgetArea = $consumer->retrieveWidgetArea(self::PERSONAL_DEERCASE_LP_WIDGET_AREA);
        return $this->render('LandingPage/personalBetoLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'widgets'=>$widgetArea['data'],
                'translations'=> $translations
            )
        );
    }
    public function personalMilagronAction(Request $request){
        $consumer = $this->getConsumer();
        $locale = $this->get("session")->get('_locale');
        $translations = $this->getTranslations();
        $pageContents = $consumer->retrievePageBySlug('milagron-kampanyasi');
        $widgetArea = $consumer->retrieveWidgetArea(self::PERSONAL_DEERCASE_LP_WIDGET_AREA);
        return $this->render('LandingPage/personalMilagronLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'widgets'=>$widgetArea['data'],
                'translations'=> $translations
            )
        );
    }
    public function personalJustinBeautyAction(Request $request){
        $consumer = $this->getConsumer();
        $locale = $this->get("session")->get('_locale');
        $translations = $this->getTranslations();
        $pageContents = $consumer->retrievePageBySlug('justinbeauty-kampanyasi');
        $widgetArea = $consumer->retrieveWidgetArea(self::PERSONAL_DEERCASE_LP_WIDGET_AREA);
        return $this->render('LandingPage/personalJustinbeautyLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'widgets'=>$widgetArea['data'],
                'translations'=> $translations
            )
        );
    }
    public function personalelcaCosmeticsAction(Request $request){
        $consumer = $this->getConsumer();
        $locale = $this->get("session")->get('_locale');
        $translations = $this->getTranslations();
        $pageContents = $consumer->retrievePageBySlug('elca-kozmetik-kampanyasi');
        $widgetArea = $consumer->retrieveWidgetArea(self::PERSONAL_DEERCASE_LP_WIDGET_AREA);
        return $this->render('LandingPage/personalElcaKozmetikLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'widgets'=>$widgetArea['data'],
                'translations'=> $translations
            )
        );
    }
    public function personalelcaCosmeticsOctoberAction(Request $request){
        $consumer = $this->getConsumer();
        $locale = $this->get("session")->get('_locale');
        $translations = $this->getTranslations();
        $pageContents = $consumer->retrievePageBySlug('elca-kozmetik-ekim-kampanyasi');
        $widgetArea = $consumer->retrieveWidgetArea(self::PERSONAL_DEERCASE_LP_WIDGET_AREA);
        return $this->render('LandingPage/personalElcaKozmetikOctoberLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'widgets'=>$widgetArea['data'],
                'translations'=> $translations
            )
        );
    }
    public function personalSportimeAction(Request $request){
        $consumer = $this->getConsumer();
        $locale = $this->get("session")->get('_locale');
        $translations = $this->getTranslations();
        $pageContents = $consumer->retrievePageBySlug('sportime-kampanyasi');
        $widgetArea = $consumer->retrieveWidgetArea(self::PERSONAL_DEERCASE_LP_WIDGET_AREA);
        return $this->render('LandingPage/personalSportimeLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'widgets'=>$widgetArea['data'],
                'translations'=> $translations
            )
        );
    }
    public function personalFlavusAction(Request $request){
        $consumer = $this->getConsumer();
        $locale = $this->get("session")->get('_locale');
        $translations = $this->getTranslations();
        $pageContents = $consumer->retrievePageBySlug('flavus-kampanyasi');
        $widgetArea = $consumer->retrieveWidgetArea(self::PERSONAL_DEERCASE_LP_WIDGET_AREA);
        return $this->render('LandingPage/personalFlavusLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'widgets'=>$widgetArea['data'],
                'translations'=> $translations
            )
        );
    }
    public function personalFlavusSeptemberAction(Request $request){
        $consumer = $this->getConsumer();
        $locale = $this->get("session")->get('_locale');
        $translations = $this->getTranslations();
        $pageContents = $consumer->retrievePageBySlug('flavus-eylul-kampanyasi');
        $widgetArea = $consumer->retrieveWidgetArea(self::PERSONAL_DEERCASE_LP_WIDGET_AREA);
        return $this->render('LandingPage/personalFlavusSeptemberLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'widgets'=>$widgetArea['data'],
                'translations'=> $translations
            )
        );
    }
    public function personalFlavusNovemberAction(Request $request){
        $consumer = $this->getConsumer();
        $locale = $this->get("session")->get('_locale');
        $translations = $this->getTranslations();
        $pageContents = $consumer->retrievePageBySlug('flavus-eylul-kampanyasi');
        $widgetArea = $consumer->retrieveWidgetArea(self::PERSONAL_DEERCASE_LP_WIDGET_AREA);
        return $this->render('LandingPage/personalFlavusNovemberLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'widgets'=>$widgetArea['data'],
                'translations'=> $translations
            )
        );
    }
    public function personalShopigoAction(Request $request){
        $consumer = $this->getConsumer();
        $locale = $this->get("session")->get('_locale');
        $translations = $this->getTranslations();
        $pageContents = $consumer->retrievePageBySlug('shopigo-kampanyasi');
        $widgetArea = $consumer->retrieveWidgetArea(self::PERSONAL_DEERCASE_LP_WIDGET_AREA);
        return $this->render('LandingPage/personalShopigoLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'widgets'=>$widgetArea['data'],
                'translations'=> $translations
            )
        );
    }

    public function personalMinisoAction(Request $request){
        $consumer = $this->getConsumer();
        $locale = $this->get("session")->get('_locale');
        $translations = $this->getTranslations();
        $pageContents = $consumer->retrievePageBySlug('miniso-kampanyasi');
        $widgetArea = $consumer->retrieveWidgetArea(self::PERSONAL_DEERCASE_LP_WIDGET_AREA);
        return $this->render('LandingPage/personalMinisoLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'widgets'=>$widgetArea['data'],
                'translations'=> $translations
            )
        );
    }
    public function personalGuzelKelimelerDukkaniAction(Request $request){
        $consumer = $this->getConsumer();
        $locale = $this->get("session")->get('_locale');
        $translations = $this->getTranslations();
        $pageContents = $consumer->retrievePageBySlug('guzel-kelimeler-dukkani-kampanyasi');
        $widgetArea = $consumer->retrieveWidgetArea(self::PERSONAL_DEERCASE_LP_WIDGET_AREA);
        return $this->render('LandingPage/personalGuzelKelimelerDukkaniLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'widgets'=>$widgetArea['data'],
                'translations'=> $translations
            )
        );
    }

    public function personalMinisoAugustAction(Request $request){
        $consumer = $this->getConsumer();
        $locale = $this->get("session")->get('_locale');
        $translations = $this->getTranslations();
        $pageContents = $consumer->retrievePageBySlug('miniso-kampanyasi');
        $widgetArea = $consumer->retrieveWidgetArea(self::PERSONAL_DEERCASE_LP_WIDGET_AREA);
        return $this->render('LandingPage/personalMinisoAugustLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'widgets'=>$widgetArea['data'],
                'translations'=> $translations
            )
        );
    }

    public function personaldkDukkanAction(Request $request){
        $consumer = $this->getConsumer();
        $locale = $this->get("session")->get('_locale');
        $translations = $this->getTranslations();
        $pageContents = $consumer->retrievePageBySlug('dkdukkan-kampanyasi');
        $widgetArea = $consumer->retrieveWidgetArea(self::PERSONAL_DEERCASE_LP_WIDGET_AREA);
        return $this->render('LandingPage/personaldkDukkanLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'widgets'=>$widgetArea['data'],
                'translations'=> $translations
            )
        );
    }

    public function personaldkDukkanAugustAction(Request $request){
        $consumer = $this->getConsumer();
        $locale = $this->get("session")->get('_locale');
        $translations = $this->getTranslations();
        $pageContents = $consumer->retrievePageBySlug('dkdukkan-kampanyasi');
        $widgetArea = $consumer->retrieveWidgetArea(self::PERSONAL_DEERCASE_LP_WIDGET_AREA);
        return $this->render('LandingPage/personaldkDukkanAugustLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'widgets'=>$widgetArea['data'],
                'translations'=> $translations
            )
        );
    }

    public function personalSlazengerAction(Request $request){
        $consumer = $this->getConsumer();
        $locale = $this->get("session")->get('_locale');
        $translations = $this->getTranslations();
        $pageContents = $consumer->retrievePageBySlug('slazenger-kampanyasi');
        $widgetArea = $consumer->retrieveWidgetArea(self::PERSONAL_DEERCASE_LP_WIDGET_AREA);
        return $this->render('LandingPage/personalSlazengerLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'widgets'=>$widgetArea['data'],
                'translations'=> $translations
            )
        );
    }
    public function personalCashBackTenAction(Request $request){
        $consumer = $this->getConsumer();
        $locale = $this->get("session")->get('_locale');
        $translations = $this->getTranslations();
        $pageContents = $consumer->retrievePageBySlug('kendim-icin-sana-ozel-10');
        $widgetArea = $consumer->retrieveWidgetArea(self::PERSONAL_DEERCASE_LP_WIDGET_AREA);
        return $this->render('LandingPage/personalCashBackTenLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'widgets'=>$widgetArea['data'],
                'translations'=> $translations
            )
        );
    }
    public function personalCashBackTwentyAction(Request $request){
        $consumer = $this->getConsumer();
        $locale = $this->get("session")->get('_locale');
        $translations = $this->getTranslations();
        $pageContents = $consumer->retrievePageBySlug('kendim-icin-sana-ozel-20');
        $widgetArea = $consumer->retrieveWidgetArea(self::PERSONAL_DEERCASE_LP_WIDGET_AREA);
        return $this->render('LandingPage/personalCashBackTwentyLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'widgets'=>$widgetArea['data'],
                'translations'=> $translations
            )
        );
    }
    public function kgySupportLandingPageAction(Request $request){
        $consumer = $this->getConsumer();
        $locale = $this->get("session")->get('_locale');
        $translations = $this->getTranslations();
        $pageContents = $consumer->retrievePageBySlug('kgy-landingpage');
        $widgetArea = $consumer->retrieveWidgetArea(self::PERSONAL_DEERCASE_LP_WIDGET_AREA);
        return $this->render('LandingPage/kgySupportLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'widgets'=>$widgetArea['data'],
                'translations'=> $translations
            )
        );
    }
    public function businessMainLandingPageAction(Request $request){
        $consumer = $this->getConsumer();
        $cookie = new Cookie('iyzico-section','business');
        $response = new Response();
        $response->headers->setCookie($cookie);
        $translations = $this->getTranslations();
        $locale = $this->get("session")->get('_locale');
        $pageContents = $consumer->retrievePageBySlug('isim-icin');
        return $this->render('LandingPage/businessMainLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'translations'=> $translations
            )
        );
    }
    public function businessVirtualPosLandingPageAction(Request $request){
        $consumer = $this->getConsumer();
        $locale = $this->get("session")->get('_locale');
        $translations = $this->getTranslations();
        $pageContents = $consumer->retrievePageBySlug('isim-icin-sanal-pos');
        return $this->render('LandingPage/newBusinessVirtualPosLP.html.twig',
            array(
                'pageContents' => $pageContents,
                'translations'=> $translations
            )
        );
    }
    public function iyzicoCardLandingPageAction(Request $request){
        $consumer = $this->getConsumer();
        $locale = $this->get("session")->get('_locale');
        $translations = $this->getTranslations();
        $pageContents = $consumer->retrievePageBySlug('kendim-icin-iyzico-kart');
        $widgetArea = $consumer->retrieveWidgetArea(self::PERSONAL_CARD_LP_WIDGET_AREA);
        return $this->render('LandingPage/iyzicoCardLP.html.twig',
            array(
                'pageContents' => $pageContents,
                'widgets'=>$widgetArea['data'],
                'translations'=> $translations
            )
        );
    }
    public function businessMassPayOutLandingPageAction(Request $request){
        $consumer = $this->getConsumer();
        $locale = $this->get("session")->get('_locale');
        $translations = $this->getTranslations();
        $pageContents = $consumer->retrievePageBySlug('isim-icin-coklu-para-gonderimi');
        $widgetArea = $consumer->retrieveWidgetArea(self::BUSINESS_MP_OUT_LP_WIDGET_AREA);
        $utils = $this->get('web.utils_service');
        $formType = "getoffer";
        $shouldShowCaptcha = $utils->shouldShowCaptcha($formType,3);

        return $this->render('LandingPage/businessMassPayOutLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'widgets'=>$widgetArea['data'],
                'translations'=> $translations,
                'shouldShowCaptcha' => $shouldShowCaptcha
            )
        );
    }
    public function businessPayWithiyzicoLandingPageAction(Request $request){
        $consumer = $this->getConsumer();
        $locale = $this->get("session")->get('_locale');
        $translations = $this->getTranslations();
        $pageContents = $consumer->retrievePageBySlug('isim-icin-iyzico-ile-ode');
        $widgetArea = $consumer->retrieveWidgetArea(self::BUSINESS_PWI_LP_WIDGET_AREA);
        $utils = $this->get('web.utils_service');
        $formType = "getoffer";
        $shouldShowCaptcha = $utils->shouldShowCaptcha($formType,3);

        return $this->render('LandingPage/businessPayWithiyzicoLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'widgets'=>$widgetArea['data'],
                'translations'=> $translations,
                'shouldShowCaptcha' => $shouldShowCaptcha
            )
        );
    }
    public function businessiyzicoCepPosLandingPageAction(Request $request){
        $consumer = $this->getConsumer();
        $locale = $this->get("session")->get('_locale');
        $translations = $this->getTranslations();
        $pageContents = $consumer->retrievePageBySlug('isim-icin-iyzico-cep-pos');
        $widgetArea = $consumer->retrieveWidgetArea(self::BUSINESS_IYZICOCEP_POS_LP_WIDGET_AREA);
        $utils = $this->get('web.utils_service');
        $formType = "getoffer";
        $shouldShowCaptcha = $utils->shouldShowCaptcha($formType,3);
        if($utils->isMobile()) {
            $deviceType = 'mobile';
        }else{
            $deviceType = 'desktop';
        }
        return $this->render('LandingPage/businessiyzicoCepPosLandingPage.html.twig',
            array(
                'deviceType' => $deviceType,
                'pageContents' => $pageContents,
                'widgets'=>$widgetArea['data'],
                'translations'=> $translations,
                'shouldShowCaptcha' => $shouldShowCaptcha
            )
        );
    }
    public function businessBuyerProtectedBankTransferLandingPageAction(Request $request){
        $consumer = $this->getConsumer();
        $locale = $this->get("session")->get('_locale');
        $translations = $this->getTranslations();
        $pageContents = $consumer->retrievePageBySlug('isim-icin-korumali-havale-eft');
        $widgetArea = $consumer->retrieveWidgetArea(self::BUSINESS_BP_BT_LP_WIDGET_AREA);
        return $this->render('LandingPage/businessBuyerProtectedBankTransferLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'widgets'=>$widgetArea['data'],
                'translations'=> $translations
            )
        );
    }
    public function businessMarketplaceLandingPageAction(Request $request){
        $consumer = $this->getConsumer();
        $locale = $this->get("session")->get('_locale');
        $translations = $this->getTranslations();
        $pageContents = $consumer->retrievePageBySlug('isim-icin-pazaryeri');
        return $this->render('LandingPage/businessMpLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'translations'=> $translations
            )
        );
    }
    public function businessReceivePaymentLandingPageAction(Request $request){
        $consumer = $this->getConsumer();
        $locale = $this->get("session")->get('_locale');
        $translations = $this->getTranslations();
        $pageContents = $consumer->retrievePageBySlug('isim-icin-link-ile-odeme-al');
        return $this->render('LandingPage/businessReceivePaymentLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'translations'=> $translations
            )
        );
    }
    public function businessStandSalesLandingPageAction(Request $request){
        $consumer = $this->getConsumer();
        $locale = $this->get("session")->get('_locale');
        $translations = $this->getTranslations();
        $pageContents = $consumer->retrievePageBySlug('isim-icin-stand-satisi');
        return $this->render('LandingPage/businessStandSalesLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'translations'=> $translations
            )
        );
    }
    public function businessSocialMediaLandingPageAction(Request $request){
        $consumer = $this->getConsumer();
        $locale = $this->get("session")->get('_locale');
        $translations = $this->getTranslations();
        $pageContents = $consumer->retrievePageBySlug('isim-icin-sosyal-medya');
        return $this->render('LandingPage/businessSocialMediaLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'translations'=> $translations
            )
        );
    }
    public function businessEtsyLandingPageAction(Request $request){
        $consumer = $this->getConsumer();
        $locale = $this->get("session")->get('_locale');
        $translations = $this->getTranslations();
        $pageContents = $consumer->retrievePageBySlug('isim-icin-etsy');
        return $this->redirectToRoute( 'homepage', array(), 301 );
    }
    public function businessOnlineProceedsLandingPageAction(Request $request){
        $consumer = $this->getConsumer();
        $translations = $this->getTranslations();
        $locale = $this->get("session")->get('_locale');
        $pageContents = $consumer->retrievePageBySlug('isim-icin-online-tahsilat');
        return $this->render('LandingPage/businessOnlineProceedsLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'translations'=> $translations
            )
        );
    }
    public function businessFraudLandingPageAction(Request $request){
        $consumer = $this->getConsumer();
        $translations = $this->getTranslations();
        $locale = $this->get("session")->get('_locale');
        $pageContents = $consumer->retrievePageBySlug('isim-icin-fraud');
        return $this->render('LandingPage/businessFraudLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'translations'=> $translations
            )
        );
    }
    public function businessBuyerProtectionLandingPageAction(Request $request){
        $consumer = $this->getConsumer();
        $translations = $this->getTranslations();
        $locale = $this->get("session")->get('_locale');
        $pageContents = $consumer->retrievePageBySlug('isim-icin-korumali-alisveris');
        return $this->render('LandingPage/businessBuyerProtectionLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'translations'=> $translations
            )
        );
    }
    public function campaignLandingPageAction(Request $request){
        $consumer = $this->getConsumer();
        $translations = $this->getTranslations();
        $locale = $this->get("session")->get('_locale');
        $pageContents = $consumer->retrievePageBySlug('kampanyalar');
        $partnerList = $pageContents['data']->contents->partners;
        $pageContents['partners'] = $partnerList;
        return $this->render('LandingPage/campaingsLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'translations'=> $translations
            )
        );
    }
    public function personalCampaignLandingPageAction(Request $request){
        $consumer = $this->getConsumer();
        $translations = $this->getTranslations();
        $locale = $this->get("session")->get('_locale');
        $pageContents = $consumer->retrievePageBySlug('kendim-icin-kampanyalar');
        $partnerList = $pageContents['data']->contents->partners;
        $pageContents['campaignTitle'] = $partnerList;
        $campaignList = $pageContents['data']->contents->partners->list;
        $activeCampaign = array();
        $passiveCampaign = array();
        foreach($campaignList as $birincigrup => $camp){
            $campaignStatus = $camp->campaignStatus;
            if($campaignStatus == "active"){
                array_push($activeCampaign, $camp);
            } else {
                array_push($passiveCampaign, $camp);
            }
        }

        $campaigns = array(
            'campaign' => array(
                'activeCampaign'    => $activeCampaign,
                'passiveCampaign'   => $passiveCampaign,
            )
        );
        $pageContents['campaign'] = $campaigns['campaign'];

        $widgetArea = $consumer->retrieveWidgetArea(self::PERSONAL_CAMPAIGN_LP_WIDGET_AREA);
        return $this->render('LandingPage/personalCampaingsLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'widgets'=>$widgetArea['data'],
                'translations'=> $translations
            )
        );

    }
    public function dynamic3dsLandingPageAction(Request $request){
        $consumer = $this->getConsumer();
        $translations = $this->getTranslations();
        $locale = $this->get("session")->get('_locale');
        $pageContents = $consumer->retrievePageBySlug('isim-icin-dynamic-3ds-sistemi');
        return $this->render('LandingPage/dynamic3dsLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'translations'=> $translations
            )
        );
    }
    public function ihtiyacHaritasiLandingPageAction(Request $request){
        $consumer = $this->getConsumer();
        $translations = $this->getTranslations();
        $locale = $this->get("session")->get('_locale');
        $pageContents = $consumer->retrievePageBySlug('hakkimizda-ihtiyac-haritasi');
        return $this->render('LandingPage/ihtiyacHaritasiLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'translations'=> $translations
            )
        );
    }
    public function smartPaymentLandingPageAction(Request $request){
        $consumer = $this->getConsumer();
        $translations = $this->getTranslations();
        $locale = $this->get("session")->get('_locale');
        $pageContents = $consumer->retrievePageBySlug('isim-icin-akilli-odeme-yonlendirme-servisi');
        return $this->render('LandingPage/smartPaymentLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'translations'=> $translations
            )
        );
    }
    public function businessReferencessLandingPageAction(Request $request){
        $consumer = $this->getConsumer();
        $translations = $this->getTranslations();
        $locale = $this->get("session")->get('_locale');
        $pageContents = $consumer->retrievePageBySlug('isim-icin-referanslar');
        return $this->render('LandingPage/businessReferencessLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'translations'=> $translations
            )
        );
    }
    public function personalContractedSitesLandingPageAction(Request $request){
        $consumer = $this->getConsumer();
        $translations = $this->getTranslations();
        $locale = $this->get("session")->get('_locale');
        $pageContents = $consumer->retrievePageBySlug('kendim-icin-anlasmali-siteler');
        return $this->render('LandingPage/personalContractedSitesLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'translations'=> $translations
            )
        );
    }
    public function whoAreWeLandingPageAction(Request $request){
        $consumer = $this->getConsumer();
        $translations = $this->getTranslations();
        $locale = $this->get("session")->get('_locale');
        $pageContents = $consumer->retrievePageBySlug('biz-kimiz');
        return $this->render('LandingPage/whoAreWeLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'translations'=> $translations
            )
        );
    }
    public function february14LandingPageAction(Request $request){
        $consumer = $this->getConsumer();
        $translations = $this->getTranslations();
        $locale = $this->get("session")->get('_locale');
        $pageContents = [];
        if ($locale !== "tr") {
            $pageContents = array(
                'seo' => array(
                    'title'         => 'We are glad to help you.',
                    'description'   => 'en description',
                    'ogTitle'       => 'We are glad to help you.',
                    'ogImage'       => '',
                    'ogDescription' => 'en ogDescription',
                    )
                );
        } else {
            $pageContents = array(
                'seo' => array(
                    'title'         => '14 Şubat Sevgililer Günü - iyzico',
                    'description'   => 'Sevgililer Gününde Hediye Seçmek Şimdi Kolay!',
                    'ogTitle'       => '14 Şubat Sevgililer Günü - iyzico',
                    'ogImage'       => '',
                    'ogDescription' => 'Sevgililer Gününde Hediye Seçmek Şimdi Kolay!',
                )
            );
        }
        return $this->render('LandingPage/february14LandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'translations'=> $translations
            )
        );
    }
    public function personalBrandsLandingPageAction(Request $request){
        $consumer = $this->getConsumer();
        $translations = $this->getTranslations();
        $locale = $this->get("session")->get('_locale');
        $pageContents = [];
        if ($locale !== "tr") {
            $pageContents = array(
                'seo' => array(
                    'title'         => 'We are glad to help you.',
                    'description'   => 'en description',
                    'ogTitle'       => 'We are glad to help you.',
                    'ogImage'       => '',
                    'ogDescription' => 'en ogDescription',
                    )
                );
        } else {
            $pageContents = array(
                'seo' => array(
                    'title'         => 'iyzico ile Öde Fırsatları - iyzico',
                    'description'   => 'iyzico ile tek tıkla ödeme yapabileceğin markaları hemen incele!',
                    'ogTitle'       => 'iyzico ile Öde Fırsatları - iyzico',
                    'ogImage'       => '',
                    'ogDescription' => 'iyzico ile tek tıkla ödeme yapabileceğin markaları hemen incele!',
                )
            );
        }
        return $this->render('LandingPage/personalBrandsLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'translations'=> $translations
            )
        );
    }
    public function personalMothersdayLandingPageAction(Request $request){
        $consumer = $this->getConsumer();
        $translations = $this->getTranslations();
        $locale = $this->get("session")->get('_locale');
        $pageContents = [];
        if ($locale !== "tr") {
            $pageContents = array(
                'seo' => array(
                    'title'         => 'We are glad to help you.',
                    'description'   => 'en description',
                    'ogTitle'       => 'We are glad to help you.',
                    'ogImage'       => '',
                    'ogDescription' => 'en ogDescription',
                    )
                );
        } else {
            $pageContents = array(
                'seo' => array(
                    'title'         => 'Anneler Günü – iyzico',
                    'description'   => 'Anneler Günü’nde Hediye Seçmek Şimdi Kolay!',
                    'ogTitle'       => 'Anneler Günü – iyzico',
                    'ogImage'       => '',
                    'ogDescription' => 'Anneler Günü’nde Hediye Seçmek Şimdi Kolay!',
                )
            );
        }
        return $this->render('LandingPage/personalMothersdayLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'translations'=> $translations
            )
        );
    }
    public function personalLocaleBrandsLandingPageAction(Request $request){
        $consumer = $this->getConsumer();
        $translations = $this->getTranslations();
        $locale = $this->get("session")->get('_locale');
        $pageContents = [];
        if ($locale !== "tr") {
            $pageContents = array(
                'seo' => array(
                    'title'         => 'We are glad to help you.',
                    'description'   => 'en description',
                    'ogTitle'       => 'We are glad to help you.',
                    'ogImage'       => '',
                    'ogDescription' => 'en ogDescription',
                    )
                );
        } else {
            $pageContents = array(
                'seo' => array(
                    'title'         => 'iyzico ile Öde Fırsatları - iyzico',
                    'description'   => 'iyzico ile tek tıkla ödeme yapabileceğin markaları hemen incele!',
                    'ogTitle'       => 'iyzico ile Öde Fırsatları - iyzico',
                    'ogImage'       => '',
                    'ogDescription' => 'iyzico ile tek tıkla ödeme yapabileceğin markaları hemen incele!',
                )
            );
        }
        return $this->render('LandingPage/personalLocaleBrands.html.twig',
            array(
                'pageContents' => $pageContents,
                'translations'=> $translations
            )
        );
    }
    public function personalBlackFriday21LandingPageAction(Request $request){
        $consumer = $this->getConsumer();
        $translations = $this->getTranslations();
        $locale = $this->get("session")->get('_locale');
        $pageContents = [];
        if ($locale !== "tr") {
            $pageContents = array(
                'seo' => array(
                    'title'         => 'November Discounts – iyzico',
                    'description'   => 'Adventure-free shopping is now easy in November sales!',
                    'ogTitle'       => 'November Discounts – iyzico',
                    'ogImage'       => '',
                    'ogDescription' => 'Adventure-free shopping is now easy in November sales!',
                    )
                );
        } else {
            $pageContents = array(
                'seo' => array(
                    'title'         => 'Kasım İndirimleri – iyzico',
                    'description'   => 'Kasım indirimlerinde macerasız alışveriş şimdi kolay!',
                    'ogTitle'       => 'Kasım İndirimleri – iyzico',
                    'ogImage'       => '',
                    'ogDescription' => 'Kasım indirimlerinde macerasız alışveriş şimdi kolay!',
                )
            );
        }
        return $this->render('LandingPage/personalBlackFriday21.html.twig',
            array(
                'pageContents' => $pageContents,
                'translations'=> $translations
            )
        );
    }
    public function backtoschoolLandingPageAction(Request $request){
        $consumer = $this->getConsumer();
        $translations = $this->getTranslations();
        $locale = $this->get("session")->get('_locale');
        $pageContents = [];
        if ($locale !== "tr") {
            $pageContents = array(
                'seo' => array(
                    'title'         => 'We are glad to help you.',
                    'description'   => 'en description',
                    'ogTitle'       => 'We are glad to help you.',
                    'ogImage'       => '',
                    'ogDescription' => 'en ogDescription',
                    )
                );
        } else {
            $pageContents = array(
                'seo' => array(
                    'title'         => 'Okula Dönüş - iyzico',
                    'description'   => 'Okul Alışverişleri Şimdi Kolay!',
                    'ogTitle'       => 'Okula Dönüş - iyzico',
                    'ogImage'       => '',
                    'ogDescription' => 'Okul Alışverişleri Şimdi Kolay!',
                )
            );
        }
        return $this->render('LandingPage/personalBacktoschool.html.twig',
            array(
                'pageContents' => $pageContents,
                'translations'=> $translations
            )
        );
    }
    public function whyiyzicoLandingPageAction(Request $request){
        $consumer = $this->getConsumer();
        $translations = $this->getTranslations();
        $locale = $this->get("session")->get('_locale');
        $pageContents = $consumer->retrievePageBySlug('neden-iyzico');
        return $this->render('LandingPage/whyiyzico.html.twig',
            array(
                'pageContents' => $pageContents['data'],
                'translations'=> $translations
            )
        );
    }
    public function teamLandingPageAction(Request $request){
        $consumer = $this->getConsumer();
        $locale = $this->get("session")->get('_locale');
        $translations = $this->getTranslations();
        $pageContents = $consumer->retrievePageBySlug('ekip');
        $teamMemberList = $pageContents['data']->contents->teamMembers;
        shuffle($teamMemberList);
        $pageContents['teamMembers'] = $teamMemberList;
        return $this->render('LandingPage/teamLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'translations'=> $translations
            )
        );
    }
    public function careerLandingPageAction(){
        $consumer = $this->getConsumer();
        $locale = $this->get("session")->get('_locale');
        $translations = $this->getTranslations();
        $pageContents = $consumer->retrievePageBySlug('is-imkanlari');
        $pageContents = $pageContents['data'];
            return $this->render('LandingPage/careerLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'translations'=> $translations
            )
        );
    }
    public function cultureLandingPageAction(Request $request){

        $locale = $this->get("session")->get('_locale');
        $consumer = $this->getConsumer();
        $translations = $this->getTranslations();
        $pageContentsResponse = $consumer->retrievePageBySlug('is-imkanlari');
        $pageContentsReponseCulture = $consumer->retrievePageBySlug('kultur');
        $photos = array();
        if (property_exists((object) $pageContentsReponseCulture['data']->contents, 'culturePhotos')) {
            $photos = $pageContentsReponseCulture['data']->contents->culturePhotos;
        }

        $sortedChunks = array();
        $instagramChunks = array();
        if (count($photos) > 0){
            $instagramChunks = array_chunk($photos,1);
        }

        if (count($instagramChunks) > 0) {
            foreach($instagramChunks as $key=>$chunk) {
                $subChunks = array_chunk($chunk,1);
                for($i=0;$i<count($subChunks);$i++){
                    array_push($sortedChunks,$subChunks[$i]);
                }
            }
        }
        if ($locale !== "tr") {
            $pageContents = array(
                'seo' => array(
                    'title'         => 'Culture - iyzico',
                    'description'   => 'en description',
                    'ogTitle'       => 'Culture - iyzico',
                    'ogImage'       => '',
                    'ogDescription' => 'en ogDescription',
                    )
                );
        } else {
            $pageContents = array(
                'seo' => array(
                    'title'         => 'Kültür - iyzico',
                    'description'   => 'iyzico&#039;nun şirket kültürü hakkında bu sayfadan bilgi alabilirsiniz. Hızla büyüyen iyzico ailesinin bir parçası olmak için harekete geçin.',
                    'ogTitle'       => 'Kültür - iyzico',
                    'ogImage'       => '',
                    'ogDescription' => 'iyzico&#039;nun şirket kültürü hakkında bu sayfadan bilgi alabilirsiniz. Hızla büyüyen iyzico ailesinin bir parçası olmak için harekete geçin.',
                )
            );
        }

        $pageContents['positions'] = $pageContentsResponse['data']->contents->positions;
        $pageContents['instagramChunks'] = $instagramChunks;

        return $this->render('LandingPage/cultureLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'translations'=> $translations,
                'limited' => true
            )
        );
    }
    public function pressAction(){
        $monthNames = array(
            'tr'=>array(
                '01'=>'Ocak', '02'=>'Şubat','03'=>'Mart', '04'=>'Nisan','05'=>'Mayıs','06'=>'Haziran','07'=>'Temmuz','08'=>'Ağustos','09'=>'Eylül','10'=>'Ekim','11'=>'Kasım','12'=>'Aralık'
            ),
            'en'=>array(
                '01'=>'January', '02'=>'February','03'=>'March', '04'=>'April','05'=>'May','06'=>'June','07'=>'July','08'=>'August','09'=>'September','10'=>'October','11'=>'November','12'=>'December'
            )
        );
        $locale = $this->get("session")->get('_locale');
        $consumer = $this->getConsumer();
        $pageContents = $consumer->retrievePageBySlug('basin');
        $translations = $this->getTranslations();
        $pressCenterItems = $pageContents['data']->contents->pressCenter->items;
        $dateBasedPressCenterItems = array();
        foreach($pressCenterItems as $key=>$pressCenterItem) {
            $itemDate = \DateTime::createFromFormat('d-m-Y',$pressCenterItem->date);
            $year = $itemDate->format('Y');
            if (!isset($dateBasedPressCenterItems[$year])) $dateBasedPressCenterItems[$year] = array();
            array_push($dateBasedPressCenterItems[$year],array(
                'date'=>$itemDate->format('d').' '.$monthNames[$locale][$itemDate->format('m')],
                'title'=>$pressCenterItem->title,
                'tag'=>$pressCenterItem->tag,
                'buttonLink'=>$pressCenterItem->buttonLink,
                'link'=>$pressCenterItem->link,
                'content'=>$pressCenterItem->content
            ));
        }
        return $this->render('LandingPage/pressLandingPage.html.twig',
            array(
                'pageContents'=>$pageContents,
                'translations'=>$translations,
                'dateBasedPressCenterItems'=>$dateBasedPressCenterItems
            )
        );
    }
    public function careerDetailLandingPageAction($detailId){
        $translations = $this->getTranslations();
        $locale = $this->get("session")->get('_locale');
        $consumer = $this->getConsumer();
        $pageContentsResponse = $consumer->retrievePageBySlug('is-imkanlari');

        try {
            $postContents = $consumer->retrievePost($detailId);
        } catch (\Exception $e) {
            $router = $this->get('router');
            $referer = $router->generate('career');
            return $this->redirect($referer, 301);
        }

        $linkedinUrl = false;
        foreach($pageContentsResponse['data']->contents->positions as $key=>$position){
            if ($position->id == $postContents['data']->id) {
                $linkedinUrl = $position->linkedinUrl;
            }
        }
        $content = str_replace('details','', $postContents['data']->content->rendered);
        $content = str_replace('&#8211;','', $content);
        $content = explode('linkedin:',$content);
        $content = $content[0];
        $positionDetails  = array(
            'title'=> $postContents['data']->title->rendered,
            'content'=>$content,
            'linkedinUrl' => $linkedinUrl
        );

        $pageContents = [];
        if ($locale !== "tr") {
            $pageContents = array(
                'seo' => array(
                    'title'         => 'en title5',
                    'description'   => 'en description',
                    'ogTitle'       => 'en ogTitle',
                    'ogImage'       => '',
                    'ogDescription' => 'en ogDescription',
                    )
                );
        } else {
            $pageContents = array(
                'seo' => array(
                    'title'         => 'İş İmkanları | iyzico',
                    'description'   => 'iyzico&#039;nun güncel iş ve kariyer fırsatlarını takip edin, hızla büyüyen iyzico ailesinin bir parçası olmak için harekete geçin.',
                    'ogTitle'       => 'İş İmkanları | iyzico',
                    'ogImage'       => '',
                    'ogDescription' => 'iyzico&#039;nun güncel iş ve kariyer fırsatlarını takip edin, hızla büyüyen iyzico ailesinin bir parçası olmak için harekete geçin.',
                )
            );
        }
        $pageContents['positionDetails'] =  $positionDetails;
        $pageContents['positions'] = $pageContentsResponse['data']->contents->positions;

        return $this->render('LandingPage/careerDetailLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'translations'=> $translations,
                'limited' => true
            )
        );
    }

    private function getNormalizedCategories($questionCategories){
        $sortedCurrentLanguage = array();
        foreach($questionCategories as $key=>$mainCategory) {
            if (isset($mainCategory->ID)) {
                $sortedCurrentLanguage[$mainCategory->ID] = [
                    'name' => $mainCategory->Name,
                    'slug' => $mainCategory->Slug,
                ];

                if (isset($mainCategory->children)) {
                    foreach($mainCategory->children as $subKey=>$subCategory) {
                        if (isset($subCategory->ID)) {
                            $sortedCurrentLanguage[$subCategory->ID] = [
                                'name' => $subCategory->Name,
                                'slug' => $subCategory->Slug
                            ];
                        }
                    }
                }
            }
        }
        return $sortedCurrentLanguage;
    }

    private function getHelpCenterCategories(){
        $iconsById = array(
            '1'=>'icon--genel-bilgiler',
            '8'=>'icon--basvuru',
            '33'=>'icon--urunler',
            '14'=>'icon--uyeisyeriodemeleri',
            '20'=>'icon--entegrasyon',
            '34'=>'icon--guvenli-odeme'
        );
        $consumer = $this->getConsumer();

        $questionCategories = $consumer->retrieveQuestionCategories();
        $questionCategoriesOtherLanguage = $consumer->retrieveQuestionCategoriesOtherLanguage();

        $otherLanguageSortedCategories = $this->getNormalizedCategories($questionCategoriesOtherLanguage['data']);
        $categoriesToFilter = [3,31,26];
        $filteredCategories = array();
        $categories = array();

        foreach($questionCategories['data'] as $key=>$questionCategory){
            if (isset($iconsById[$questionCategory->ID])) $questionCategory->icon = $iconsById[$questionCategory->ID];
            if (!in_array($questionCategory->ID,$categoriesToFilter)) {
                array_push($filteredCategories,$questionCategory);
            }
            $categories[$questionCategory->ID] = array(
                'name' => $questionCategory->Name,
                'slug' => $questionCategory->Slug,
                'translatedSlug' => $otherLanguageSortedCategories[$questionCategory->ID]
            );
            if (isset($questionCategory->children)) {
                foreach($questionCategory->children as $keyC=>$questionCategoryC){
                    $categories[$questionCategoryC->ID] = array(
                        'name' => $questionCategoryC->Name,
                        'slug' => $questionCategoryC->Slug,
                        'translatedSlug' => $otherLanguageSortedCategories[$questionCategoryC->ID]
                    );
                }
            }
        }
        return array(
            'filteredCategories' => $filteredCategories,
            'categories' => $categories
        );
    }

    public function selectMerchantTypeAction(Request $request){
        $consumer = $this->getConsumer();
        $pageContents = $consumer->retrievePageBySlug('merchant-type-landing-page');
        $translations = $this->getTranslations();
        $utils = $this->get('web.utils_service');

        return $this->render('LandingPage/merchantTypeLandingPage.html.twig',
            array(
                'pageContents' => $pageContents['data'],
                'translations' => $translations,
                'source' => $request->attributes->get('source')
            )
        );
    }
    public function businessRegisterResultAction(Request $request){
        $consumer = $this->getConsumer();
        $router = $this->get('router');
        $memberUserId = $this->get("session")->get('memberUserId');
        $pageSlug = "new-business-landing-page";
        $pageType = "LandingPage/newBusinessMerchantResult.html.twig";
        $pageContents = $consumer->retrievePageBySlug($pageSlug);
        $translations = $this->getTranslations();
        $utils = $this->get('web.utils_service');
        return $this->render($pageType,
            array(
                'pageContents' => $pageContents['data'],
                'translations' => $translations,
            )
        );
    }

    public function registerNewMerchantAction(Request $request){
        $consumer = $this->getConsumer();
        $memberType = $request->attributes->get('memberType');
        $source = $request->attributes->get('source');
        $pageSlug = "new-business-landing-page";
        if ($memberType === "PERSONAL") {
            $pageSlug = "new-personal-landing-page";
        }
        if ($memberType == "FEMALEENT"){
            return $this->redirectToRoute( 'female_entrepreneur', array(), 301 );
        }
        $pageType = "LandingPage/newMerchant.html.twig";
        $pageContents = $consumer->retrievePageBySlug($pageSlug);
        $translations = $this->getTranslations();
        $utils = $this->get('web.utils_service');
        return $this->render($pageType,
            array(
                'pageContents' => $pageContents['data'],
                'translations' => $translations,
                'memberType' => $memberType,
                'source' => $source,
            )
        );
    }
    public function registerResultSuccessAction(Request $request){
        $consumer = $this->getConsumer();
        $router = $this->get('router');
        $memberUserId = $this->get("session")->get('memberUserId');
        if($memberUserId == null){
            $referer =  $router->generate('personal');
            return $this->redirect($referer);
        }
        $pageSlug = "new-business-landing-page";
        $pageType = "LandingPage/newMerchantResult.html.twig";
        $pageContents = $consumer->retrievePageBySlug($pageSlug);
        $translations = $this->getTranslations();
        $utils = $this->get('web.utils_service');
        return $this->render($pageType,
            array(
                'pageContents' => $pageContents['data'],
                'translations' => $translations,
            )
        );
    }

    public function registerResultFailAction(Request $request){
        $consumer = $this->getConsumer();
        $router = $this->get('router');
        $memberUserId = $this->get("session")->get('memberUserId');
        if($memberUserId == null){
            $referer =  $router->generate('personal');
            return $this->redirect($referer);
        }
        $pageSlug = "new-business-landing-page";
        $pageType = "LandingPage/newMerchantResultFail.html.twig";
        $pageContents = $consumer->retrievePageBySlug($pageSlug);
        $translations = $this->getTranslations();
        $utils = $this->get('web.utils_service');
        return $this->render($pageType,
            array(
                'pageContents' => $pageContents['data'],
                'translations' => $translations,
            )
        );
    }

    public function registerNewPersonalMerchantAction(Request $request){
        $consumer = $this->getConsumer();
        $session = new Session();
        $session->remove('memberUserId');
        $memberType = $request->attributes->get('memberType');
        $source = $request->attributes->get('source');
        $pageSlug = "new-business-landing-page";
        if ($memberType === "PERSONAL") {
            $pageSlug = "new-personal-landing-page";
        }
        $pageType = "LandingPage/newPersonalMerchant.html.twig";

        $pageContents = $consumer->retrievePageBySlug($pageSlug);
        $translations = $this->getTranslations();
        $utils = $this->get('web.utils_service');
        return $this->render($pageType,
            array(
                'pageContents' => $pageContents['data'],
                'translations' => $translations,
                'memberType' => $memberType,
                'source' => $source,
            )
        );
    }

    public function helpCenterLandingPageAction(Request $request){

        $locale = $this->get("session")->get('_locale');
        $translations = $this->getTranslations();
        $helpCenterCategories = $this->getHelpCenterCategories();

        $pageContents = [];
        if ($locale !== "tr") {
            $pageContents = array(
                'seo' => array(
                    'title'         => 'We are glad to help you.',
                    'description'   => 'en description',
                    'ogTitle'       => 'We are glad to help you.',
                    'ogImage'       => '',
                    'ogDescription' => 'en ogDescription',
                    )
                );
        } else {
            $pageContents = array(
                'seo' => array(
                    'title'         => 'Size yardımcı olmaktan mutluluk duyuyoruz.',
                    'description'   => 'Sorularınızın cevaplarına ve yaşadığınız sorunların çözümlerine yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                    'ogTitle'       => 'Size yardımcı olmaktan mutluluk duyuyoruz.',
                    'ogImage'       => '',
                    'ogDescription' => 'Sorularınızın cevaplarına ve yaşadığınız sorunların çözümlerine yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                )
            );
        }
        $pageContents['questionCategories'] = $helpCenterCategories['filteredCategories'];
        $pageContents['jsonCategories'] = $helpCenterCategories['categories'];

        return $this->render('LandingPage/helpCenterLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'translations'=> $translations
            )
        );
    }

    public function helpCenterCategoryAction($categorySlug){

        $helpCenterCategories = $this->getHelpCenterCategories();
        $translations = $this->getTranslations();
        $filteredCategories = $helpCenterCategories['filteredCategories'];
        $allCategories = $helpCenterCategories['categories'];


        $consumer = $this->getConsumer();
        $categoryQuestions = $consumer->retrieveQuestionsByCategorySlug($categorySlug);

        $locale = $this->get("session")->get('_locale');

        if($categorySlug == "genel-bilgiler" ){
            $pageContents = [];
            if ($locale !== "tr") {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'We are glad to help you.',
                        'description'   => 'en description',
                        'ogTitle'       => 'We are glad to help you.',
                        'ogImage'       => '',
                        'ogDescription' => 'en ogDescription',
                        )
                    );
            } else {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'Genel Bilgiler Yardım Merkezi - iyzico',
                        'description'   => 'iyzico ile ilgli genel bilgilendirme ve merak edilen soruların cevaplarına yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                        'ogTitle'       => 'Genel Bilgiler Yardım Merkezi - iyzico',
                        'ogImage'       => '',
                        'ogDescription' => 'iyzico ile ilgli genel bilgilendirme ve merak edilen soruların cevaplarına yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                    )
                );
            }

        }else if ($categorySlug == "basvuru"){
            $pageContents = [];
            if ($locale !== "tr") {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'We are glad to help you.',
                        'description'   => 'en description',
                        'ogTitle'       => 'We are glad to help you.',
                        'ogImage'       => '',
                        'ogDescription' => 'en ogDescription',
                        )
                    );
            } else {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'Başvuru Koşulları Yardım Merkezi - iyzico',
                        'description'   => 'Başvurular ile ilgi sorularınızın cevaplarına ve çözümlerine yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                        'ogTitle'       => 'Başvuru Koşulları Yardım Merkezi - iyzico',
                        'ogImage'       => '',
                        'ogDescription' => 'Başvurular ile ilgi sorularınızın cevaplarına ve çözümlerine yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                    )
                );
            }
        }else if ($categorySlug == "urunler-ve-ozellikler"){
            $pageContents = [];
            if ($locale !== "tr") {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'We are glad to help you.',
                        'description'   => 'en description',
                        'ogTitle'       => 'We are glad to help you.',
                        'ogImage'       => '',
                        'ogDescription' => 'en ogDescription',
                        )
                    );
            } else {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'Ürünler ve Özellikler Yardım Merkezi - iyzico',
                        'description'   => 'Ürünlerimiz ve özellikleri ile ilgili sorularınızın cevaplarına ve yaşadığınız sorunların çözümlerine yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                        'ogTitle'       => 'Ürünler ve Özellikler Yardım Merkezi - iyzico',
                        'ogImage'       => '',
                        'ogDescription' => 'Ürünlerimiz ve özellikleri ile ilgili sorularınızın cevaplarına ve yaşadığınız sorunların çözümlerine yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                    )
                );
            }
        }else if ($categorySlug == "uye-is-yeri-odemeleri"){
            $pageContents = [];
            if ($locale !== "tr") {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'We are glad to help you.',
                        'description'   => 'en description',
                        'ogTitle'       => 'We are glad to help you.',
                        'ogImage'       => '',
                        'ogDescription' => 'en ogDescription',
                        )
                    );
            } else {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'Üye İş Yeri Ödemeleri Yardım Merkezi - iyzico',
                        'description'   => 'Üye iş yeri ödemeleri ile ilgili sorularınızın cevaplarına yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                        'ogTitle'       => 'Üye İş Yeri Ödemeleri Yardım Merkezi - iyzico',
                        'ogImage'       => '',
                        'ogDescription' => 'Üye iş yeri ödemeleri ile ilgili sorularınızın cevaplarına yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                    )
                );
            }
        }else if ($categorySlug == "entegrasyon"){
            $pageContents = [];
            if ($locale !== "tr") {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'We are glad to help you.',
                        'description'   => 'en description',
                        'ogTitle'       => 'We are glad to help you.',
                        'ogImage'       => '',
                        'ogDescription' => 'en ogDescription',
                        )
                    );
            } else {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'Entegrasyon Yardım Merkezi - iyzico',
                        'description'   => 'Entegrasyon işlemi ile ilgili sorularınızın cevaplarına ve yaşadığınız sorunların çözümlerine yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                        'ogTitle'       => 'Entegrasyon Yardım Merkezi - iyzico',
                        'ogImage'       => '',
                        'ogDescription' => 'Entegrasyon işlemi ile ilgili sorularınızın cevaplarına ve yaşadığınız sorunların çözümlerine yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                    )
                );
            }
        }else if ($categorySlug == "guvenli-odeme"){
            $pageContents = [];
            if ($locale !== "tr") {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'We are glad to help you.',
                        'description'   => 'en description',
                        'ogTitle'       => 'We are glad to help you.',
                        'ogImage'       => '',
                        'ogDescription' => 'en ogDescription',
                        )
                    );
            } else {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'Güvenli Ödeme Yardım Merkezi - iyzico',
                        'description'   => 'Güvenli ödeme ile ilgili sorularınızın cevaplarına  yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                        'ogTitle'       => 'Güvenli Ödeme Yardım Merkezi - iyzico',
                        'ogImage'       => '',
                        'ogDescription' => 'Güvenli ödeme ile ilgili sorularınızın cevaplarına  yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                    )
                );
            }
        }else if ($categorySlug == "destek"){
            $pageContents = [];
            if ($locale !== "tr") {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'We are glad to help you.',
                        'description'   => 'en description',
                        'ogTitle'       => 'We are glad to help you.',
                        'ogImage'       => '',
                        'ogDescription' => 'en ogDescription',
                        )
                    );
            } else {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'Sıkça Sorulan Destek Soruları Yardım Merkezi - iyzico',
                        'description'   => 'Sıkça sorulan soruların cevaplarına ve çözümlerine yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                        'ogTitle'       => 'Sıkça Sorulan Destek Soruları Yardım Merkezi - iyzico',
                        'ogImage'       => '',
                        'ogDescription' => 'Sıkça sorulan soruların cevaplarına ve çözümlerine yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                    )
                );
            }
        }else {
            $pageContents = [];
            if ($locale !== "tr") {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'We are glad to help you.',
                        'description'   => 'en description',
                        'ogTitle'       => 'We are glad to help you.',
                        'ogImage'       => '',
                        'ogDescription' => 'en ogDescription',
                        )
                    );
            } else {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'Korumalı Alışveriş ve iyzico App Yardım Merkezi - iyzico',
                        'description'   => 'Korumalı alışveriş ile ilgili sorularınızın cevaplarına ve yaşadığınız sorunların çözümlerine yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                        'ogTitle'       => 'Korumalı Alışveriş ve iyzico App Yardım Merkezi - iyzico',
                        'ogImage'       => '',
                        'ogDescription' => 'Korumalı alışveriş ile ilgili sorularınızın cevaplarına ve yaşadığınız sorunların çözümlerine yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                    )
                );
            }
        }
        $pageContents['categoryQuestions'] =$categoryQuestions['data'];
        $pageContents['questionCategories'] = $filteredCategories;
        $pageContents['allCategories'] = $allCategories;
        $pageContents['jsonCategories'] = json_encode($allCategories);


        return $this->render('LandingPage/helpCenterCategoryDisplay.html.twig',
            array(
                'pageContents' => $pageContents,
                'translations'=> $translations
            )
        );

    }
    public function helpCenterSubCategoryAction($categorySlug,$subCategorySlug){

        $helpCenterCategories = $this->getHelpCenterCategories();
        $translations = $this->getTranslations();
        $filteredCategories = $helpCenterCategories['filteredCategories'];
        $allCategories = $helpCenterCategories['categories'];
        $consumer = $this->getConsumer();
        $categoryQuestions = $consumer->retrieveQuestionsByCategorySlug($subCategorySlug);
        $locale = $this->get("session")->get('_locale');
        if ($subCategorySlug == "baslarken" ){

            $pageContents = [];
            if ($locale !== "tr") {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'Help Center - iyzico',
                        'description'   => 'en description',
                        'ogTitle'       => 'Help Center - iyzico',
                        'ogImage'       => '',
                        'ogDescription' => 'en ogDescription',
                        )
                    );
            } else {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'Başlarken Yardım Merkezi - iyzico',
                        'description'   => 'Başlarken ile ilgili sorularınızın cevaplarına yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                        'ogTitle'       => 'Başlarken Yardım Merkezi - iyzico',
                        'ogImage'       => '',
                        'ogDescription' => 'Başlarken ile ilgili sorularınızın cevaplarına yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                    )
                );
            }

        } else if ($subCategorySlug == "fiyatlandirma" ){

            $pageContents = [];
            if ($locale !== "tr") {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'Help Center - iyzico',
                        'description'   => 'en description',
                        'ogTitle'       => 'Help Center - iyzico',
                        'ogImage'       => '',
                        'ogDescription' => 'en ogDescription',
                        )
                    );
            } else {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'Fiyatlandırma Yardım Merkezi - iyzico',
                        'description'   => 'Fiyatlandırma ile ilgili sorularınızın cevaplarına yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                        'ogTitle'       => 'Fiyatlandırma Yardım Merkezi - iyzico',
                        'ogImage'       => '',
                        'ogDescription' => 'Fiyatlandırma ile ilgili sorularınızın cevaplarına yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                    )
                );
            }

        } else if ($subCategorySlug == "taksitlendirme" ){

            $pageContents = [];
            if ($locale !== "tr") {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'Help Center - iyzico',
                        'description'   => 'en description',
                        'ogTitle'       => 'Help Center - iyzico',
                        'ogImage'       => '',
                        'ogDescription' => 'en ogDescription',
                        )
                    );
            } else {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'Taksitlendirme Yardım Merkezi - iyzico',
                        'description'   => 'Taksitlendirme ile ilgili sorularınızın cevaplarına ve yaşadığınız sorunların çözümlerine yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                        'ogTitle'       => 'Taksitlendirme Yardım Merkezi - iyzico',
                        'ogImage'       => '',
                        'ogDescription' => 'Taksitlendirme ile ilgili sorularınızın cevaplarına ve yaşadığınız sorunların çözümlerine yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                    )
                );
            }

        } else if ($subCategorySlug == "basvuru-kosullari" ){

            $pageContents = [];
            if ($locale !== "tr") {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'Help Center - iyzico',
                        'description'   => 'en description',
                        'ogTitle'       => 'Help Center - iyzico',
                        'ogImage'       => '',
                        'ogDescription' => 'en ogDescription',
                        )
                    );
            } else {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'Başvuru Koşulları Yardım Merkezi - iyzico',
                        'description'   => 'Başvurular ile ilgi sorularınızın cevaplarına ve çözümlerine yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                        'ogTitle'       => 'Başvuru Koşulları Yardım Merkezi - iyzico',
                        'ogImage'       => '',
                        'ogDescription' => 'Başvurular ile ilgi sorularınızın cevaplarına ve çözümlerine yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                    )
                );
            }

        } else if ($subCategorySlug == "gerekli-evraklar" ){

            $pageContents = [];
            if ($locale !== "tr") {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'Help Center - iyzico',
                        'description'   => 'en description',
                        'ogTitle'       => 'Help Center - iyzico',
                        'ogImage'       => '',
                        'ogDescription' => 'en ogDescription',
                        )
                    );
            } else {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'Başvuru İçin Gerekli Evraklar Yardım Merkezi - iyzico',
                        'description'   => 'Başvuru için gerekli evraklar  ile ilgi sorularınızın cevaplarına yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                        'ogTitle'       => 'Başvuru İçin Gerekli Evraklar Yardım Merkezi - iyzico',
                        'ogImage'       => '',
                        'ogDescription' => 'Başvuru için gerekli evraklar  ile ilgi sorularınızın cevaplarına yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                    )
                );
            }

        } else if ($subCategorySlug == "sozlesmeler" ){

            $pageContents = [];
            if ($locale !== "tr") {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'Help Center - iyzico',
                        'description'   => 'en description',
                        'ogTitle'       => 'Help Center - iyzico',
                        'ogImage'       => '',
                        'ogDescription' => 'en ogDescription',
                        )
                    );
            } else {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'Sözleşmeler Yardım Merkezi - iyzico',
                        'description'   => 'Sözleşmeler  ile ilgi sorularınızın cevaplarına ve yaşadığınız sorunların çözümlerine yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                        'ogTitle'       => 'Sözleşmeler Yardım Merkezi - iyzico',
                        'ogImage'       => '',
                        'ogDescription' => 'Sözleşmeler  ile ilgi sorularınızın cevaplarına ve yaşadığınız sorunların çözümlerine yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                    )
                );
            }

        } else if ($subCategorySlug == "basvuru-olusturma" ){

            $pageContents = [];
            if ($locale !== "tr") {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'Help Center - iyzico',
                        'description'   => 'en description',
                        'ogTitle'       => 'Help Center - iyzico',
                        'ogImage'       => '',
                        'ogDescription' => 'en ogDescription',
                        )
                    );
            } else {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'Başvuru Oluşturma Yardım Merkezi - iyzico',
                        'description'   => 'Başvuru oluşturma  ile ilgi sorularınızın cevaplarına ve yaşadığınız sorunların çözümlerine yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                        'ogTitle'       => 'Başvuru Oluşturma Yardım Merkezi - iyzico',
                        'ogImage'       => '',
                        'ogDescription' => 'Başvuru oluşturma  ile ilgi sorularınızın cevaplarına ve yaşadığınız sorunların çözümlerine yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                    )
                );
            }

        } else if ($subCategorySlug == "basvuru-durumu" ){

            $pageContents = [];
            if ($locale !== "tr") {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'Help Center - iyzico',
                        'description'   => 'en description',
                        'ogTitle'       => 'Help Center - iyzico',
                        'ogImage'       => '',
                        'ogDescription' => 'en ogDescription',
                        )
                    );
            } else {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'Başvuru Durum Yardım Merkezi - iyzico',
                        'description'   => 'Başvuru durumu  ile ilgi sorularınızın cevaplarına yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                        'ogTitle'       => 'Başvuru Durum Yardım Merkezi - iyzico',
                        'ogImage'       => '',
                        'ogDescription' => 'Başvuru durumu  ile ilgi sorularınızın cevaplarına yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                    )
                );
            }

        } else if ($subCategorySlug == "iyzico-cozumleri" ){

            $pageContents = [];
            if ($locale !== "tr") {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'Help Center - iyzico',
                        'description'   => 'en description',
                        'ogTitle'       => 'Help Center - iyzico',
                        'ogImage'       => '',
                        'ogDescription' => 'en ogDescription',
                        )
                    );
            } else {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'iyzico Çözümleri Yardım Merkezi.- iyzico',
                        'description'   => 'Ürünlerimiz ile ilgili merak edilen soruların ve çözüm yöntemlerimiz ile ilgili bilgilere yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                        'ogTitle'       => 'iyzico Çözümleri Yardım Merkezi.- iyzico',
                        'ogImage'       => '',
                        'ogDescription' => 'Ürünlerimiz ile ilgili merak edilen soruların ve çözüm yöntemlerimiz ile ilgili bilgilere yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                    )
                );
            }

        } else if ($subCategorySlug == "sanal-pos" ){

            $pageContents = [];
            if ($locale !== "tr") {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'Help Center - iyzico',
                        'description'   => 'en description',
                        'ogTitle'       => 'Help Center - iyzico',
                        'ogImage'       => '',
                        'ogDescription' => 'en ogDescription',
                        )
                    );
            } else {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'Sanal Pos Yardım Merkezi - iyzico',
                        'description'   => 'Sanal pos ürünü ile ilgili sorularınızın cevaplarına ve yaşadığınız sorunların çözümlerine yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                        'ogTitle'       => 'Sanal Pos Yardım Merkezi - iyzico',
                        'ogImage'       => '',
                        'ogDescription' => 'Sanal pos ürünü ile ilgili sorularınızın cevaplarına ve yaşadığınız sorunların çözümlerine yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                    )
                );
            }

        } else if ($subCategorySlug == "pazaryeri-odeme-cozumu" ){

            $pageContents = [];
            if ($locale !== "tr") {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'Help Center - iyzico',
                        'description'   => 'en description',
                        'ogTitle'       => 'Help Center - iyzico',
                        'ogImage'       => '',
                        'ogDescription' => 'en ogDescription',
                        )
                    );
            } else {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'Pazaryeri Ödeme Çözümü Yardım Merkezi - iyzico',
                        'description'   => 'Pazaryeri ödeme çözümü ile ilgili sorularınızın cevaplarına ve yaşadığınız sorunların çözümlerine yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                        'ogTitle'       => 'Pazaryeri Ödeme Çözümü Yardım Merkezi - iyzico',
                        'ogImage'       => '',
                        'ogDescription' => 'Pazaryeri ödeme çözümü ile ilgili sorularınızın cevaplarına ve yaşadığınız sorunların çözümlerine yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                    )
                );
            }

        } else if ($subCategorySlug == "link-ile-odeme-al" ){

            $pageContents = [];
            if ($locale !== "tr") {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'Help Center - iyzico',
                        'description'   => 'en description',
                        'ogTitle'       => 'Help Center - iyzico',
                        'ogImage'       => '',
                        'ogDescription' => 'en ogDescription',
                        )
                    );
            } else {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'Link Yöntemi Yardım Merkezi - iyzico ',
                        'description'   => 'Link ile ödeme alma ile ilgili sorularınızın cevaplarına ve yaşadığınız sorunların çözümlerine yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                        'ogTitle'       => 'Link Yöntemi Yardım Merkezi - iyzico ',
                        'ogImage'       => '',
                        'ogDescription' => 'Link ile ödeme alma ile ilgili sorularınızın cevaplarına ve yaşadığınız sorunların çözümlerine yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                    )
                );
            }
        } else if ($subCategorySlug == "odemeler" ){

            $pageContents = [];
            if ($locale !== "tr") {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'Help Center - iyzico',
                        'description'   => 'en description',
                        'ogTitle'       => 'Help Center - iyzico',
                        'ogImage'       => '',
                        'ogDescription' => 'en ogDescription',
                        )
                    );
            } else {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'Yardım Merkezi - iyzico',
                        'description'   => 'Sorularınızın cevaplarına ve yaşadığınız sorunların çözümlerine yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                        'ogTitle'       => 'Yardım Merkezi - iyzico',
                        'ogImage'       => '',
                        'ogDescription' => 'Sorularınızın cevaplarına ve yaşadığınız sorunların çözümlerine yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                    )
                );
            }
        } else if ($subCategorySlug == "iade-ve-iptal-islemleri" ){

            $pageContents = [];
            if ($locale !== "tr") {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'Help Center - iyzico',
                        'description'   => 'en description',
                        'ogTitle'       => 'Help Center - iyzico',
                        'ogImage'       => '',
                        'ogDescription' => 'en ogDescription',
                        )
                    );
            } else {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'İade ve İptal İşlemleri Yardım Merkezi - iyzico',
                        'description'   => 'İade ve iptal işlemleri ile ilgili sorularınızın cevaplarına yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                        'ogTitle'       => 'İade ve İptal İşlemleri Yardım Merkezi - iyzico',
                        'ogImage'       => '',
                        'ogDescription' => 'İade ve iptal işlemleri ile ilgili sorularınızın cevaplarına yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                    )
                );
            }
        } else if ($subCategorySlug == "faturalandirma" ){

            $pageContents = [];
            if ($locale !== "tr") {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'Help Center - iyzico',
                        'description'   => 'en description',
                        'ogTitle'       => 'Help Center - iyzico',
                        'ogImage'       => '',
                        'ogDescription' => 'en ogDescription',
                        )
                    );
            } else {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'Faturalandırma Yardım Merkezi - iyzico',
                        'description'   => 'Faturalandırma işlemi ile ilgili sorularınızın cevaplarına yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                        'ogTitle'       => 'Faturalandırma Yardım Merkezi - iyzico',
                        'ogImage'       => '',
                        'ogDescription' => 'Faturalandırma işlemi ile ilgili sorularınızın cevaplarına yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                    )
                );
            }
        } else if ($subCategorySlug == "hazir-altyapilar" ){

            $pageContents = [];
            if ($locale !== "tr") {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'Help Center - iyzico',
                        'description'   => 'en description',
                        'ogTitle'       => 'Help Center - iyzico',
                        'ogImage'       => '',
                        'ogDescription' => 'en ogDescription',
                        )
                    );
            } else {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'Hazır Altyapılar Yardım Merkezi - iyzico',
                        'description'   => 'Hazır altyapılar ile ilgili sorularınızın cevaplarına ve yaşadığınız sorunların çözümlerine yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                        'ogTitle'       => 'Hazır Altyapılar Yardım Merkezi - iyzico',
                        'ogImage'       => '',
                        'ogDescription' => 'Hazır altyapılar ile ilgili sorularınızın cevaplarına ve yaşadığınız sorunların çözümlerine yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                    )
                );
            }
        } else if ($subCategorySlug == "acik-kaynakli-altyapilar" ){

            $pageContents = [];
            if ($locale !== "tr") {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'Help Center - iyzico',
                        'description'   => 'en description',
                        'ogTitle'       => 'Help Center - iyzico',
                        'ogImage'       => '',
                        'ogDescription' => 'en ogDescription',
                        )
                    );
            } else {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'Açık Kaynaklı Altyapılar Yardım Merkezi - iyzico',
                        'description'   => 'Açık kaynaklı altyapılar ile ilgili sorularınızın cevaplarına ve yaşadığınız sorunların çözümlerine yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                        'ogTitle'       => 'Açık Kaynaklı Altyapılar Yardım Merkezi - iyzico',
                        'ogImage'       => '',
                        'ogDescription' => 'Açık kaynaklı altyapılar ile ilgili sorularınızın cevaplarına ve yaşadığınız sorunların çözümlerine yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                    )
                );
            }
        } else if ($subCategorySlug == "iyzico-api-entegrasyonu" ){

            $pageContents = [];
            if ($locale !== "tr") {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'Help Center - iyzico',
                        'description'   => 'en description',
                        'ogTitle'       => 'Help Center - iyzico',
                        'ogImage'       => '',
                        'ogDescription' => 'en ogDescription',
                        )
                    );
            } else {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'iyzico  API Entegrasyonu Yardım Merkezi - iyzico',
                        'description'   => 'API entegrasyonu ile ilgili sorularınızın cevaplarına ve yaşadığınız sorunların çözümlerine yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                        'ogTitle'       => 'iyzico  API Entegrasyonu Yardım Merkezi - iyzico',
                        'ogImage'       => '',
                        'ogDescription' => 'API entegrasyonu ile ilgili sorularınızın cevaplarına ve yaşadığınız sorunların çözümlerine yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                    )
                );
            }
        } else if ($subCategorySlug == "entegrasyon-durumu" ){

            $pageContents = [];
            if ($locale !== "tr") {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'Help Center - iyzico',
                        'description'   => 'en description',
                        'ogTitle'       => 'Help Center - iyzico',
                        'ogImage'       => '',
                        'ogDescription' => 'en ogDescription',
                        )
                    );
            } else {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'Entegrasyon Durumu Yardım Merkezi - iyzico',
                        'description'   => 'Entegrasyon durumu ile ilgili sorularınızın cevaplarına ve yaşadığınız sorunların çözümlerine yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                        'ogTitle'       => 'Entegrasyon Durumu Yardım Merkezi - iyzico',
                        'ogImage'       => '',
                        'ogDescription' => 'Entegrasyon durumu ile ilgili sorularınızın cevaplarına ve yaşadığınız sorunların çözümlerine yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                    )
                );
            }
        } else if ($subCategorySlug == "iyzico-fraud-sistemi" ){

            $pageContents = [];
            if ($locale !== "tr") {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'Help Center - iyzico',
                        'description'   => 'en description',
                        'ogTitle'       => 'Help Center - iyzico',
                        'ogImage'       => '',
                        'ogDescription' => 'en ogDescription',
                        )
                    );
            } else {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'iyzico Fraud Sistemi Yardım Merkezi - iyzico',
                        'description'   => 'Fraud sistemi ile ilgili sorularınızın cevaplarına ve yaşadığınız sorunların çözümlerine yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                        'ogTitle'       => 'iyzico Fraud Sistemi Yardım Merkezi - iyzico',
                        'ogImage'       => '',
                        'ogDescription' => 'Fraud sistemi ile ilgili sorularınızın cevaplarına ve yaşadığınız sorunların çözümlerine yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                    )
                );
            }
        } else if ($subCategorySlug == "ters-ibraz-chargeback" ){

            $pageContents = [];
            if ($locale !== "tr") {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'Help Center - iyzico',
                        'description'   => 'en description',
                        'ogTitle'       => 'Help Center - iyzico',
                        'ogImage'       => '',
                        'ogDescription' => 'en ogDescription',
                        )
                    );
            } else {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'Ters İbraz(Chargeback) Yardım Merkezi - iyzico',
                        'description'   => 'Ters ibraz(chargeback) ile ilgili sorularınızın cevaplarına ve yaşadığınız sorunların çözümlerine yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                        'ogTitle'       => 'Ters İbraz(Chargeback) Yardım Merkezi - iyzico',
                        'ogImage'       => '',
                        'ogDescription' => 'Ters ibraz(chargeback) ile ilgili sorularınızın cevaplarına ve yaşadığınız sorunların çözümlerine yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                    )
                );
            }
        } else if ($subCategorySlug == "genel-destek-sorulari" ){

            $pageContents = [];
            if ($locale !== "tr") {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'Help Center - iyzico',
                        'description'   => 'en description',
                        'ogTitle'       => 'Help Center - iyzico',
                        'ogImage'       => '',
                        'ogDescription' => 'en ogDescription',
                        )
                    );
            } else {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'Sıkça Sorulan Destek Soruları Yardım Merkezi - iyzico',
                        'description'   => 'Sıkça sorulan soruların cevaplarına ve çözümlerine yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                        'ogTitle'       => 'Sıkça Sorulan Destek Soruları Yardım Merkezi - iyzico',
                        'ogImage'       => '',
                        'ogDescription' => 'Sıkça sorulan soruların cevaplarına ve çözümlerine yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                    )
                );
            }
        } else if ($subCategorySlug == "kendim-icin-korumali-alisveris" ){

            $pageContents = [];
            if ($locale !== "tr") {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'Help Center - iyzico',
                        'description'   => 'en description',
                        'ogTitle'       => 'Help Center - iyzico',
                        'ogImage'       => '',
                        'ogDescription' => 'en ogDescription',
                        )
                    );
            } else {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'Kendim İçin Korumalı Alışveriş  Yardım Merkezi - iyzico',
                        'description'   => 'Kendiniz için korumalı alışveriş ile ilgili sorularınızın cevaplarına yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                        'ogTitle'       => 'Kendim İçin Korumalı Alışveriş  Yardım Merkezi - iyzico',
                        'ogImage'       => '',
                        'ogDescription' => 'Kendiniz için korumalı alışveriş ile ilgili sorularınızın cevaplarına yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                    )
                );
            }
        } else if ($subCategorySlug == "isim-icin-korumali-alisveris" ){

            $pageContents = [];
            if ($locale !== "tr") {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'Help Center - iyzico',
                        'description'   => 'en description',
                        'ogTitle'       => 'Help Center - iyzico',
                        'ogImage'       => '',
                        'ogDescription' => 'en ogDescription',
                        )
                    );
            } else {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'İşim İçin Korumalı Alışveriş Yardım Merkezi  - iyzico',
                        'description'   => 'İşiniz için korumalı alışveriş ile ilgili sorulanızın cevaplarına yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                        'ogTitle'       => 'İşim İçin Korumalı Alışveriş Yardım Merkezi  - iyzico',
                        'ogImage'       => '',
                        'ogDescription' => 'İşiniz için korumalı alışveriş ile ilgili sorulanızın cevaplarına yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                    )
                );
            }
        } else if ($subCategorySlug == "iyzico-app" ){

            $pageContents = [];
            if ($locale !== "tr") {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'Help Center - iyzico',
                        'description'   => 'en description',
                        'ogTitle'       => 'Help Center - iyzico',
                        'ogImage'       => '',
                        'ogDescription' => 'en ogDescription',
                        )
                    );
            } else {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'iyzico App Yardım Merkezi - iyzico',
                        'description'   => 'iyzico app ile ilgili sorularınzın ve yaşadığınız sorunların çmzpmlerine yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                        'ogTitle'       => 'iyzico App Yardım Merkezi - iyzico',
                        'ogImage'       => '',
                        'ogDescription' => 'iyzico app ile ilgili sorularınzın ve yaşadığınız sorunların çmzpmlerine yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                    )
                );
            }
        } else {

            $pageContents = [];
            if ($locale !== "tr") {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'Help Center - iyzico',
                        'description'   => 'en description',
                        'ogTitle'       => 'Help Center - iyzico',
                        'ogImage'       => '',
                        'ogDescription' => 'en ogDescription',
                        )
                    );
            } else {
                $pageContents = array(
                    'seo' => array(
                        'title'         => 'Yardım Merkezi - iyzico',
                        'description'   => 'Sorularınızın cevaplarına ve yaşadığınız sorunların çözümlerine yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                        'ogTitle'       => 'Yardım Merkezi - iyzico',
                        'ogImage'       => '',
                        'ogDescription' => 'Sorularınızın cevaplarına ve yaşadığınız sorunların çözümlerine yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                    )
                );
            }

        }

        $pageContents['categoryQuestions'] =$categoryQuestions['data'];
        $pageContents['questionCategories'] = $filteredCategories;
        $pageContents['allCategories'] = $allCategories;
        $pageContents['jsonCategories'] = json_encode($allCategories);


        return $this->render('LandingPage/helpCenterCategoryDisplay.html.twig',
            array(
                'pageContents' => $pageContents,
                'translations'=> $translations
            )
        );
    }
    public function openSourceLandingPageAction(Request $request){
        $locale = $this->get("session")->get('_locale');
        $consumer = $this->getConsumer();
        $translations = $this->getTranslations();
        $pageContents = $consumer->retrievePageBySlug('acik-kaynak');
        $partnerList = $pageContents['data']->contents->partners;
        $pageContents['partners'] = $partnerList;
        $widgetArea = $consumer->retrieveWidgetArea(self::PARTNER_SOLUTION_LP_WIDGET_AREA);
        return $this->render('LandingPage/openSourceLandingPage.html.twig',
            array(
                'pageInfo' => $pageContents['data'],
                'pageContents' => $pageContents,
                'widgets'=>$widgetArea['data'],
                'translations'=> $translations
            )
        );
    }
    public function readyIntegrationLandingPageAction(Request $request){
        $consumer = $this->getConsumer();
        $translations = $this->getTranslations();
        $locale = $this->get("session")->get('_locale');
        $pageContents = $consumer->retrievePageBySlug('hazir-altyapi');
        $partnerList = $pageContents['data']->contents->partners;
        $pageContents['partners'] = $partnerList;
        $widgetArea = $consumer->retrieveWidgetArea(self::PARTNER_SOLUTION_LP_WIDGET_AREA);
        return $this->render('LandingPage/readyIntegrationLandingPage.html.twig',
            array(
                'pageInfo' => $pageContents,
                'pageContents' => $pageContents,
                'widgets'=>$widgetArea['data'],
                'translations'=> $translations
            )
        );
    }
    public function failLandingPageAction(Request $request){

        $locale = $this->get("session")->get('_locale');
        $translations = $this->getTranslations();
        $pageContents = [];
        if ($locale !== "tr") {
            $pageContents = array(
                'seo' => array(
                    'title'         => '404 - iyzico',
                    'description'   => 'en description',
                    'ogTitle'       => '404 - iyzico',
                    'ogImage'       => '',
                    'ogDescription' => 'en ogDescription',
                    )
                );
        } else {
            $pageContents = array(
                'seo' => array(
                    'title'         => '404',
                    'description'   => '404',
                    'ogTitle'       => '404',
                    'ogImage'       => '',
                    'ogDescription' => '404',
                )
            );
        }
        return $this->render('LandingPage/failLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'translations'=> $translations
            )
        );
    }
    public function surveyLandingPageAction(Request $request){

        $locale = $this->get("session")->get('_locale');
        $translations = $this->getTranslations();
        $pageContents = [];
        if ($locale !== "tr") {
            $pageContents = array(
                'seo' => array(
                    'title'         => 'Anketimize katıldığınız için çok teşekkür ederiz. - iyzico',
                    'description'   => 'Teşekkür ederiz.',
                    'ogTitle'       => 'Anketimize katıldığınız için çok teşekkür ederiz. - iyzico',
                    'ogImage'       => '',
                    'ogDescription' => 'Teşekkür ederiz.',
                    )
                );
        } else {
            $pageContents = array(
                'seo' => array(
                    'title'         => 'Anketimize katıldığınız için çok teşekkür ederiz. - iyzico',
                    'description'   => 'Teşekkür ederiz.',
                    'ogTitle'       => 'Anketimize katıldığınız için çok teşekkür ederiz. - iyzico',
                    'ogImage'       => '',
                    'ogDescription' => 'Teşekkür ederiz.',
                )
            );
        }
        return $this->render('LandingPage/surveyLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'translations'=> $translations
            )
        );
    }
    public function contactUsSuccessLandingPageAction(Request $request){

        $locale = $this->get("session")->get('_locale');
        $translations = $this->getTranslations();
        $pageContents = [];
        if ($locale !== "tr") {
            $pageContents = array(
                'seo' => array(
                    'title'         => 'Contact Us - iyzico',
                    'description'   => 'en description',
                    'ogTitle'       => 'Contact Us - iyzico',
                    'ogImage'       => '',
                    'ogDescription' => 'en ogDescription',
                    )
                );
        } else {
            $pageContents = array(
                'seo' => array(
                    'title'         => 'İletişim - iyzico',
                    'description'   => 'Sorularınızın cevaplarına ve yaşadığınız sorunların çözümlerine yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                    'ogTitle'       => 'İletişim - iyzico',
                    'ogImage'       => '',
                    'ogDescription' => 'Sorularınızın cevaplarına ve yaşadığınız sorunların çözümlerine yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                )
            );
        }

        $contactAdresses = array(
            'Basvuru'=> $translations->contactUsForms->selectOne,
            'Destek'=> $translations->contactUsForms->selectTwo,
            'Sikayet'=> $translations->contactUsForms->selectThree,
            'Entegrasyon'=> $translations->contactUsForms->selectFour,
            'KorumaliAlisveris'=> $translations->contactUsForms->selectFive,
            'Odeme'=> $translations->contactUsForms->selectSix
        );
        $pageContents['contactAdresses'] = $contactAdresses;

        return $this->render('LandingPage/contactUsSuccessLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'translations'=> $translations
            )
        );
    }

    public function contactUsFailLandingPageAction(Request $request){

        $locale = $this->get("session")->get('_locale');
        $translations = $this->getTranslations();
        $pageContents = [];
        if ($locale !== "tr") {
            $pageContents = array(
                'seo' => array(
                    'title'         => 'Contact Us - iyzico',
                    'description'   => 'en description',
                    'ogTitle'       => 'Contact Us - iyzico',
                    'ogImage'       => '',
                    'ogDescription' => 'en ogDescription',
                    )
                );
        } else {
            $pageContents = array(
                'seo' => array(
                    'title'         => 'İletişim - iyzico',
                    'description'   => 'Sorularınızın cevaplarına ve yaşadığınız sorunların çözümlerine yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                    'ogTitle'       => 'İletişim - iyzico',
                    'ogImage'       => '',
                    'ogDescription' => 'Sorularınızın cevaplarına ve yaşadığınız sorunların çözümlerine yardım merkezimizi ziyaret ederek ulaşabilirsiniz.',
                )
            );
        }
        return $this->render('LandingPage/contactUsFailLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'translations'=> $translations
            )
        );
    }
    public function contactUsLandingPageAction(Request $request){
        $consumer = $this->getConsumer();
        $translations = $this->getTranslations();
        $locale = $this->get("session")->get('_locale');
        $pageContents = $consumer->retrievePageBySlug('bize-ulasin');
        $contactAdresses = array(
            'Basvuru'=> $translations->contactUsForms->selectOne,
            'Destek'=> $translations->contactUsForms->selectTwo,
            'Sikayet'=> $translations->contactUsForms->selectThree,
            'Entegrasyon'=> $translations->contactUsForms->selectFour,
            'KorumaliAlisveris'=> $translations->contactUsForms->selectFive,
            'Odeme'=> $translations->contactUsForms->selectSix
        );
        $pageContents['contactAdresses'] = $contactAdresses;
        return $this->render('LandingPage/contactUsLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'translations'=> $translations
            )
        );
    }

    public function brandsLandingPageAction(Request $request){
        $consumer = $this->getConsumer();
        $translations = $this->getTranslations();
        $locale = $this->get("session")->get('_locale');
        $pageContents = $consumer->retrievePageBySlug('hakkimizda-kurumsal-kimlik');
        $widgetArea = $consumer->retrieveWidgetArea(self::PERSONAL_BRANDS_KIT_LP_WIDGET_AREA);

        return $this->render('LandingPage/brandsLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'widgets'=>$widgetArea['data'],
                'translations'=> $translations
            )
        );
    }

    public function femaleEntrepreneurLandingPageAction(Request $request){
        $consumer = $this->getConsumer();
        $locale = $this->get("session")->get('_locale');
        $translations = $this->getTranslations();
        $session = new Session();
        $pageContents = $consumer->retrievePageBySlug('isim-icin-kadin-girisimci');
        $widgetArea = $consumer->retrieveWidgetArea(self::BUSINESS_FEMALE_ENTREPRENEUR_LP_WIDGET_AREA);
        return $this->render('LandingPage/businessFemaleEntrepreneurLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'widgets'=>$widgetArea['data'],
                'translations'=> $translations
            )
        );
    }
    public function arasCargoCampaignLandingPageAction(Request $request){
        $consumer = $this->getConsumer();
        $locale = $this->get("session")->get('_locale');
        $widgetArea = $consumer->retrieveWidgetArea(self::IYZICO_ARAS_CARGO_PAGE_WIDGET_AREA);
        $pageContents = $consumer->retrievePageBySlug('iyzico-aras-kargo-kampanyasi');
        $translations = $this->getTranslations();
        return $this->redirectToRoute( 'homepage', array(), 301 );
    }
    public function subscriptionLandingPageAction(Request $request){
        $consumer = $this->getConsumer();
        $locale = $this->get("session")->get('_locale');
        $pageContents = $consumer->retrievePageBySlug('subscription-landing-page');
        $translations = $this->getTranslations();

        $utils = $this->get('web.utils_service');
        $formType = "getoffer";
        $shouldShowCaptcha = $utils->shouldShowCaptcha($formType,3);

        return $this->render('LandingPage/subscriptionLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'translations'=> $translations,
                'shouldShowCaptcha' => $shouldShowCaptcha

            )
        );
    }
    public function goodToGoodLandingPageAction(Request $request){
        $consumer = $this->getConsumer();
        $locale = $this->get("session")->get('_locale');
        $widgetArea = $consumer->retrieveWidgetArea(self::IYIDEN_IYIYE_LP_WIDGET_AREA);
        $pageContents = $consumer->retrievePageBySlug('hakkimizda-ihtiyac-haritasi');
        $translations = $this->getTranslations();
        $utils = $this->get('web.utils_service');
        $formType = "getoffer";
        $shouldShowCaptcha = $utils->shouldShowCaptcha($formType,3);

        return $this->render('LandingPage/goodToGoodLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'widgets'=>$widgetArea['data'],
                'translations'=> $translations,
                'shouldShowCaptcha' => $shouldShowCaptcha
            )
        );
    }
    public function brandweekLandingPageAction(Request $request){
        $consumer = $this->getConsumer();
        $translations = $this->getTranslations();
        $locale = $this->get("session")->get('_locale');
        $pageContents = $consumer->retrievePageBySlug('brandweek');
        $session = new Session();
        $session->set('token', $request->query->get('code'));

        return $this->render('LandingPage/brandweekLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'translations'=> $translations
            )
        );
    }
    public function MassPayOutRegisterLandingPageAction(Request $request){
        $consumer = $this->getConsumer();
        $translations = $this->getTranslations();
        $locale = $this->get("session")->get('_locale');
        $pageContents = $consumer->retrievePageBySlug('merchant-type-landing-page');
        $token = $request->query->get('token');

        return $this->render('LandingPage/massPayOutRegisterLandingPage.html.twig',
            array(
                'pageContents' => $pageContents['data'],
                'translations'=> $translations,
                'token' => $token,
                'source' => $request->attributes->get('source')
            )
        );
    }
    public function privilegesLandingPageAction(Request $request){
        $consumer = $this->getConsumer();
        $translations = $this->getTranslations();
        $locale = $this->get("session")->get('_locale');
        $pageContents = $consumer->retrievePageBySlug('isim-icin-ayricaliklar');
        $partnerList = $pageContents['data']->contents->partners;
        $pageContents['partners'] = $partnerList;
        return $this->render('LandingPage/privilegesLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'translations'=> $translations
            )
        );
    }
    public function smeLandingPageAction(Request $request){
        $consumer = $this->getConsumer();
        $translations = $this->getTranslations();
        $locale = $this->get("session")->get('_locale');
        $pageContents = $consumer->retrievePageBySlug('sme-landingpage');
        return $this->render('LandingPage/smeLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'translations'=> $translations
            )
        );
    }
    public function newGraduateLandingPageAction(Request $request){
        $locale = $this->get("session")->get('_locale');
        $consumer = $this->getConsumer();
        $translations = $this->getTranslations();
        $pageContentsResponse = $consumer->retrievePageBySlug('is-imkanlari');
        $pageContentsReponseCulture = $consumer->retrievePageBySlug('new-graduate');
        $photos = array();
        if (property_exists((object) $pageContentsReponseCulture['data']->contents, 'culturePhotos')) {
            $photos = $pageContentsReponseCulture['data']->contents->culturePhotos;
        }

        $sortedChunks = array();
        $instagramChunks = array();
        if (count($photos) > 0){
            $instagramChunks = array_chunk($photos,1);
        }

        if (count($instagramChunks) > 0) {
            foreach($instagramChunks as $key=>$chunk) {
                $subChunks = array_chunk($chunk,1);
                for($i=0;$i<count($subChunks);$i++){
                    array_push($sortedChunks,$subChunks[$i]);
                }
            }
        }
        if ($locale !== "tr") {
            $pageContents = array(
                'seo' => array(
                    'title'         => 'iyzico New Graduate Program',
                    'description'   => 'en description',
                    'ogTitle'       => 'iyzico New Graduate Program',
                    'ogImage'       => '',
                    'ogDescription' => 'en ogDescription',
                    )
                );
        } else {
            $pageContents = array(
                'seo' => array(
                    'title'         => 'iyzico New Graduate Program',
                    'description'   => 'Looking for a best place to start your career? Apply to iyzico New Graduate Program and become an iyzinator!',
                    'ogTitle'       => 'iyzico New Graduate Program',
                    'ogImage'       => '',
                    'ogDescription' => 'Looking for a best place to start your career? Apply to iyzico New Graduate Program and become an iyzinator!',
                )
            );
        }

        $pageContents['positions'] = $pageContentsResponse['data']->contents->positions;
        $pageContents['instagramChunks'] = $instagramChunks;

        return $this->render('LandingPage/newGraduateLandingPage.html.twig',
            array(
                'pageContents' => $pageContents,
                'translations'=> $translations,
                'limited' => true
            )
        );
    }
}
