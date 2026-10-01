<?php

namespace WebBundle\Controller;

use WebBundle\Controller\BaseController as Controller;

class PartialsController extends Controller
{

    public function _footerAction($hasOfferButton = false,$hasUserActions = true,$showIyziLinkFooter = false)
    {
        $menuObject = $this->getMenus();
        $translations = $this->getTranslations();
        $region = $this->get('session')->get('_region');
        $isEurope = false;
        if ($region == "Europe") {
            $isEurope = true;
        }
        return $this->render('WebBundle:Partials:_footer.html.twig',
            array(
                'socialMedia'   => $menuObject->footer_social_media,
                'productsMenu'  => $menuObject->footer_products,
                'aboutMenu'     => $menuObject->footer_about,
                'resourcesMenu' => $menuObject->footer_resources,
                'translations'  => $translations,
                'hasOfferButton' => $hasOfferButton,
                'hasUserActions' => $hasUserActions,
                'showIyziLinkFooter' => $showIyziLinkFooter,
                'isEurope'      => $isEurope
            )
        );

    }
    public function _footerInternationalAction()
    {
        $menuObject = $this->getMenus();
        $translations = $this->getTranslations();

        return $this->render('WebBundle:Partials:_footerInternational.html.twig',
            array(
                'socialMedia' => $menuObject->footer_social_media,
                'translations' => $translations
            )
        );
    }

    public function _topMenuDesktopAction()
    {
        $menuObject =  $this->getMenus();
        $translations = $this->getTranslations();
        $region = $this->get('session')->get('_region');
        $topMenuObject = $menuObject->top_menu;
        $filteredObject = clone $topMenuObject;
        $isEurope = false;
        if ($region == "Europe") {
            $isEurope = true;
            $filteredMenu = $filteredObject->items;
            array_splice($filteredMenu,0,2);
            $filteredObject->items = $filteredMenu;
        }
        $data = array(
            'topMenu'   => $filteredObject,
            'translations'=>$translations,
            'isEurope' => $isEurope
        );


        return $this->render('WebBundle:Partials:_topMenuDesktop.html.twig',
            $data
        );
    }
    public function _topMenuMobileAction()
    {
        $translations = $this->getTranslations();
        return $this->render('WebBundle:Partials:_topMenuMobile.html.twig',
            array(
                'translations'=>$translations
            ));
    }
    public function _mobileMenuMarkupAction()
    {
        $menuObject =  $this->getMenus();
        $translations = $this->getTranslations();
        $region = $this->get('session')->get('_region');
        $topMenuObject = $menuObject->top_menu;
        $filteredObject = clone $topMenuObject;
        $isEurope = false;
        if ($region == "Europe") {
            $isEurope = true;
            $filteredMenu = $filteredObject->items;
            array_splice($filteredMenu,0,2);
            $filteredObject->items = $filteredMenu;
        }

        return $this->render('WebBundle:Partials:_mobileMenuMarkup.html.twig',
            array(
                'topMenu'   => $filteredObject,
                'translations'=>$translations,
                'isEurope' => $isEurope
            )
        );
    }

    public function _topMenuInternationalAction()
    {

        $translations = $this->getTranslations();

        return $this->render('WebBundle:Partials:_topMenuInternational.html.twig',
            array(
                'translations' => $translations
            )
        );
    }

    public function _subMenuAction($subMenuBase,$activeSubMenu = 1)
    {

        $menuObject =  $this->getMenus();
        $topMenu = $menuObject->top_menu;

        return $this->render('WebBundle:Partials:_subMenu.html.twig',
            array(
                'subMenu'   => $topMenu->items[$subMenuBase]->children,
                'activeSubMenu' => $activeSubMenu
            )
        );
    }
    public function _subMenuIntegrationAction($activeSubMenu = 1)
    {

        $menuObject =  $this->getMenus();
        $integrationMenu = $menuObject->integration;

        return $this->render('WebBundle:Partials:_subMenuIntegration.html.twig',
            array(
                'subMenu'   => $integrationMenu->items,
                'activeSubMenu' => $activeSubMenu
            )
        );

    }

    public function _joinUsFormAction($position = null)
    {
        $translations = $this->getTranslations();
        $consumer = $this->getConsumer();
        $jobListings = $consumer->retrievePostByCategory(23);

        $formType = "join";
        $utils = $this->get('web.utils_service');
        $shouldShowCaptcha = $utils->shouldShowCaptcha($formType,3);

        return $this->render('WebBundle:Partials:_joinUsForm.html.twig',
            array(
                'translations'=>$translations,
                'positions'=>$jobListings['data'],
                'selectedPosition'=>$position,
                'shouldShowCaptcha' => $shouldShowCaptcha
            )
        );
    }

    public function _signupModalAction()
    {
        $formType = "signup";
        $utils = $this->get('web.utils_service');
        $shouldShowCaptcha = true;//$utils->shouldShowCaptcha($formType,3);

        $translations = $this->getTranslations();
        return $this->render('WebBundle:Partials:_signupModal.html.twig',
            array(
                'translations'   => $translations,
                'shouldShowCaptcha' => $shouldShowCaptcha
            )
        );
    }

    public function _debitCardNotificationAction()
    {
        $translations = $this->getTranslations();
        return $this->render('WebBundle:Partials:_debitCardNotification.html.twig',
            array(
                'translations'  => $translations,
                'isEnabled'     => false
            )
        );
    }

    public function _iyzilinkModalAction()
    {
        $formType = "iyzilink";
        $utils = $this->get('web.utils_service');
        $shouldShowCaptcha = true;//$utils->shouldShowCaptcha($formType,3);

        $translations = $this->getTranslations();
        return $this->render('WebBundle:Partials:_iyzilinkLeadModal.html.twig',
            array(
                'translations'   => $translations,
                'shouldShowCaptcha' => $shouldShowCaptcha
            )
        );
    }

    public function _offerModalAction()
    {
        $formType = "getoffer";
        $utils = $this->get('web.utils_service');
        $shouldShowCaptcha = $utils->shouldShowCaptcha($formType,3);

        $translations = $this->getTranslations();
        return $this->render('WebBundle:Partials:_offerModal.html.twig',
            array(
                'translations'   => $translations,
                'shouldShowCaptcha' => $shouldShowCaptcha
            )
        );
    }
    public function _cepPosOfferModalAction()
    {
        $formType = "getoffer";
        $utils = $this->get('web.utils_service');
        $shouldShowCaptcha = $utils->shouldShowCaptcha($formType,3);

        $translations = $this->getTranslations();
        return $this->render('WebBundle:Partials:_cepPosOfferModal.html.twig',
            array(
                'translations'   => $translations,
                'shouldShowCaptcha' => $shouldShowCaptcha
            )
        );
    }
    public function _pwiBrandsModalAction()
    {
        $formType = "getoffer";
        $utils = $this->get('web.utils_service');
        $shouldShowCaptcha = $utils->shouldShowCaptcha($formType,3);

        $translations = $this->getTranslations();
        return $this->render('WebBundle:Partials:_pwiBrandsModal.html.twig',
            array(
                'translations'   => $translations,
                'shouldShowCaptcha' => $shouldShowCaptcha
            )
        );
    }
    public function _appDownloadWithQRAction()
    {
        $formType = "getoffer";
        $utils = $this->get('web.utils_service');
        $shouldShowCaptcha = $utils->shouldShowCaptcha($formType,3);

        $translations = $this->getTranslations();
        return $this->render('WebBundle:Partials:_appDownloadWithQR.html.twig',
            array(
                'translations'   => $translations,
                'shouldShowCaptcha' => $shouldShowCaptcha
            )
        );
    }
    public function _appDownloadWithQRApplyForCardAction()
    {
        $formType = "getoffer";
        $utils = $this->get('web.utils_service');
        $shouldShowCaptcha = $utils->shouldShowCaptcha($formType,3);

        $translations = $this->getTranslations();
        return $this->render('WebBundle:Partials:_appDownloadWithQRApplyForCard.html.twig',
            array(
                'translations'   => $translations,
                'shouldShowCaptcha' => $shouldShowCaptcha
            )
        );
    }
    public function _pwiBrandsHowToModalAction()
    {
        $formType = "getoffer";
        $utils = $this->get('web.utils_service');
        $shouldShowCaptcha = $utils->shouldShowCaptcha($formType,3);

        $translations = $this->getTranslations();
        return $this->render('WebBundle:Partials:_pwiBrandsHowToModal.html.twig',
            array(
                'translations'   => $translations,
                'shouldShowCaptcha' => $shouldShowCaptcha
            )
        );
    }
    public function _registerNewMemberSignupModalAction()
    {
        $formType = "getoffer";
        $utils = $this->get('web.utils_service');
        $shouldShowCaptcha = $utils->shouldShowCaptcha($formType,3);

        $translations = $this->getTranslations();
        return $this->render('WebBundle:Partials:_registerNewMemberSignupModal.html.twig',
            array(
                'translations'   => $translations,
                'shouldShowCaptcha' => $shouldShowCaptcha
            )
        );
    }
    public function _consumerOfferRegisterOtpModalAction()
    {
        $formType = "getoffer";
        $utils = $this->get('web.utils_service');
        $shouldShowCaptcha = $utils->shouldShowCaptcha($formType,3);

        $translations = $this->getTranslations();
        return $this->render('WebBundle:Partials:_consumerOfferRegisterOtpModal.html.twig',
            array(
                'translations'   => $translations,
                'shouldShowCaptcha' => $shouldShowCaptcha
            )
        );
    }

    public function _cashPackageOfferModalAction()
    {
        $formType = "getoffer";
        $utils = $this->get('web.utils_service');
        $shouldShowCaptcha = $utils->shouldShowCaptcha($formType,3);

        $translations = $this->getTranslations();
        return $this->render('WebBundle:Partials:_cashPackageOfferModal.html.twig',
            array(
                'translations'   => $translations,
                'shouldShowCaptcha' => $shouldShowCaptcha
            )
        );
    }

    public function _consumerRegisterOfferModalAction()
    {
        $formType = "getoffer";
        $utils = $this->get('web.utils_service');

        $translations = $this->getTranslations();
        return $this->render('WebBundle:Partials:_consumerRegisterOfferModal.html.twig',
            array(
                'translations'   => $translations
            )
        );
    }

    public function _newconsumerRegisterFailOfferModalAction()
    {
        $formType = "getoffer";
        $utils = $this->get('web.utils_service');

        $translations = $this->getTranslations();
        return $this->render('WebBundle:Partials:_newconsumerRegisterFailOfferModal.html.twig',
            array(
                'translations'   => $translations
            )
        );
    }

    public function _newconsumerRegisterSucsessOfferModalAction()
    {
        $formType = "getoffer";
        $utils = $this->get('web.utils_service');

        $translations = $this->getTranslations();
        return $this->render('WebBundle:Partials:_newconsumerRegisterSucsessOfferModal.html.twig',
            array(
                'translations'   => $translations
            )
        );
    }

    public function _buyerProtectedMoneyTransferModalAction()
    {
        $formType = "getoffer";
        $utils = $this->get('web.utils_service');
        $shouldShowCaptcha = $utils->shouldShowCaptcha($formType,3);

        $translations = $this->getTranslations();
        return $this->render('WebBundle:Partials:_buyerProtectedMoneyTransferModal.html.twig',
            array(
                'translations'   => $translations,
                'shouldShowCaptcha' => $shouldShowCaptcha
            )
        );
    }

    public function _massPayOutModalAction()
    {
        $formType = "getoffer";
        $utils = $this->get('web.utils_service');
        $shouldShowCaptcha = $utils->shouldShowCaptcha($formType,3);

        $translations = $this->getTranslations();
        return $this->render('WebBundle:Partials:_massPayOutModal.html.twig',
            array(
                'translations'   => $translations,
                'shouldShowCaptcha' => $shouldShowCaptcha
            )
        );
    }

    public function _businessPwiModalAction()
    {
        $formType = "getoffer";
        $utils = $this->get('web.utils_service');
        $shouldShowCaptcha = $utils->shouldShowCaptcha($formType,3);

        $translations = $this->getTranslations();
        return $this->render('WebBundle:Partials:_businessPwiModal.html.twig',
            array(
                'translations'   => $translations,
                'shouldShowCaptcha' => $shouldShowCaptcha
            )
        );
    }

    public function _subscriptionOfferAction()
    {
        $formType = "getoffer";
        $utils = $this->get('web.utils_service');
        $shouldShowCaptcha = $utils->shouldShowCaptcha($formType,3);

        $translations = $this->getTranslations();
        return $this->render('WebBundle:Partials:_offerModal.html.twig',
            array(
                'translations'   => $translations,
                'shouldShowCaptcha' => $shouldShowCaptcha
            )
        );
    }

    public function _notificationsAction()
    {
        $translations = $this->getTranslations();
        return $this->render('WebBundle:Partials:_notifications.html.twig',
            array(
                'translations'   => $translations
            )
        );
    }

    public function _iyziStartBlogCaseStudyAction($route,$references = false)
    {
        $translations = $this->getTranslations();
        if ($route == "iyziglobe_landing_page") {
            $rssCategory = "uluslararasi-ticaret";
        } else {
            $rssCategory = "e-ticaret";
        }
        $blogPost = $this->getConsumer()->retrieveRssByCategory($rssCategory);
        return $this->render('WebBundle:Partials:_iyziStartBlogCaseStudy.html.twig',
            array(
                'translations'   => $translations,
                'blogPost' => $blogPost['data'],
                'references' => $references
            )
        );
    }
    public function _cookieNotificationAction()
    {
        $translations = $this->getTranslations();
        return $this->render('WebBundle:Partials:_cookieNotification.html.twig',
            array(
                'translations'   => $translations
            )
        );
    }
}
