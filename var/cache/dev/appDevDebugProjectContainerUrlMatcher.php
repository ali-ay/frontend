<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // homepage.tr
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage.tr');
            }

            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::mainLandingPageAction',  '_locale' => 'tr',  '_route' => 'homepage.tr',);
        }

        // homepage.en
        if ($pathinfo === '/en') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::mainLandingPageAction',  '_locale' => 'en',  '_route' => 'homepage.en',);
        }

        // homepage_eu.tr
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage_eu.tr');
            }

            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::mainLandingPageAction',  '_locale' => 'tr',  '_route' => 'homepage_eu.tr',);
        }

        // homepage_eu.en
        if ($pathinfo === '/en') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::mainLandingPageAction',  '_locale' => 'en',  '_route' => 'homepage_eu.en',);
        }

        // remove_trailing_slash
        if (preg_match('#^/(?P<url>.*/)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_remove_trailing_slash;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'remove_trailing_slash')), array (  '_controller' => 'WebBundle\\Controller\\RedirectingController::removeTrailingSlashAction',));
        }
        not_remove_trailing_slash:

        // hesap_olustur_landing_page.tr
        if ($pathinfo === '/isim-icin/hesap-olustur') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::selectMerchantTypeAction',  'source' => 'regular',  '_locale' => 'tr',  '_route' => 'hesap_olustur_landing_page.tr',);
        }

        // hesap_olustur_landing_page.en
        if ($pathinfo === '/en/business/signup') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::selectMerchantTypeAction',  'source' => 'regular',  '_locale' => 'en',  '_route' => 'hesap_olustur_landing_page.en',);
        }

        // kurumsal_hesap_landing_page.tr
        if ($pathinfo === '/isim-icin/kurumsal-hesap-olustur') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::registerNewMerchantAction',  'memberType' => 'BUSINESS',  'source' => 'regular',  '_locale' => 'tr',  '_route' => 'kurumsal_hesap_landing_page.tr',);
        }

        // kurumsal_hesap_landing_page.en
        if ($pathinfo === '/en/business/signup-business-account') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::registerNewMerchantAction',  'memberType' => 'BUSINESS',  'source' => 'regular',  '_locale' => 'en',  '_route' => 'kurumsal_hesap_landing_page.en',);
        }

        // bireysel_hesap_landing_page.tr
        if ($pathinfo === '/isim-icin/bireysel-hesap-olustur') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::registerNewMerchantAction',  'memberType' => 'PERSONAL',  'source' => 'regular',  '_locale' => 'tr',  '_route' => 'bireysel_hesap_landing_page.tr',);
        }

        // bireysel_hesap_landing_page.en
        if ($pathinfo === '/en/business/signup-personal-account') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::registerNewMerchantAction',  'memberType' => 'PERSONAL',  'source' => 'regular',  '_locale' => 'en',  '_route' => 'bireysel_hesap_landing_page.en',);
        }

        // sandbox_landing_page.tr
        if ($pathinfo === '/sandbox') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::registerNewMerchantAction',  'memberType' => 'SANDBOX',  'source' => 'regular',  '_locale' => 'tr',  '_route' => 'sandbox_landing_page.tr',);
        }

        // sandbox_landing_page.en
        if ($pathinfo === '/en/sandbox') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::registerNewMerchantAction',  'memberType' => 'SANDBOX',  'source' => 'regular',  '_locale' => 'en',  '_route' => 'sandbox_landing_page.en',);
        }

        // female_register_lp.tr
        if ($pathinfo === '/isim-icin/kadin-girisimci-hesap-olustur') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::registerNewMerchantAction',  'memberType' => 'FEMALEENT',  'source' => 'regular',  '_locale' => 'tr',  '_route' => 'female_register_lp.tr',);
        }

        // female_register_lp.en
        if ($pathinfo === '/en/business/signup-female-entrepreneur-account') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::registerNewMerchantAction',  'memberType' => 'FEMALEENT',  'source' => 'regular',  '_locale' => 'en',  '_route' => 'female_register_lp.en',);
        }

        // form_new_member_signup.tr
        if ($pathinfo === '/forms/new-member-sign-up') {
            return array (  '_controller' => 'WebBundle\\Controller\\FormsController::newMemberSignupAction',  '_locale' => 'tr',  '_route' => 'form_new_member_signup.tr',);
        }

        // form_new_member_signup.en
        if ($pathinfo === '/en/forms/new-member-sign-up') {
            return array (  '_controller' => 'WebBundle\\Controller\\FormsController::newMemberSignupAction',  '_locale' => 'en',  '_route' => 'form_new_member_signup.en',);
        }

        // form_get_offer.tr
        if ($pathinfo === '/forms/offer') {
            return array (  '_controller' => 'WebBundle\\Controller\\FormsController::offerAction',  '_locale' => 'tr',  '_route' => 'form_get_offer.tr',);
        }

        // form_get_offer.en
        if ($pathinfo === '/en/forms/offer') {
            return array (  '_controller' => 'WebBundle\\Controller\\FormsController::offerAction',  '_locale' => 'en',  '_route' => 'form_get_offer.en',);
        }

        // form_get_cash_package_offer.tr
        if ($pathinfo === '/forms/cash-package-offer') {
            return array (  '_controller' => 'WebBundle\\Controller\\FormsController::cashPackageOfferAction',  '_locale' => 'tr',  '_route' => 'form_get_cash_package_offer.tr',);
        }

        // form_get_cash_package_offer.en
        if ($pathinfo === '/en/forms/cash-package-offer') {
            return array (  '_controller' => 'WebBundle\\Controller\\FormsController::cashPackageOfferAction',  '_locale' => 'en',  '_route' => 'form_get_cash_package_offer.en',);
        }

        // cep_pos_offer.tr
        if ($pathinfo === '/forms/cep-pos-offer') {
            return array (  '_controller' => 'WebBundle\\Controller\\FormsController::cepPosOfferAction',  '_locale' => 'tr',  '_route' => 'cep_pos_offer.tr',);
        }

        // cep_pos_offer.en
        if ($pathinfo === '/en/forms/cep-pos-offer') {
            return array (  '_controller' => 'WebBundle\\Controller\\FormsController::cepPosOfferAction',  '_locale' => 'en',  '_route' => 'cep_pos_offer.en',);
        }

        // form_get_buyer_protected_money_transfer.tr
        if ($pathinfo === '/forms/buyer-protected-money-transfer') {
            return array (  '_controller' => 'WebBundle\\Controller\\FormsController::buyerProtectedMoneyTransferAction',  '_locale' => 'tr',  '_route' => 'form_get_buyer_protected_money_transfer.tr',);
        }

        // form_get_buyer_protected_money_transfer.en
        if ($pathinfo === '/en/forms/buyer-protected-money-transfer') {
            return array (  '_controller' => 'WebBundle\\Controller\\FormsController::buyerProtectedMoneyTransferAction',  '_locale' => 'en',  '_route' => 'form_get_buyer_protected_money_transfer.en',);
        }

        // form_get_mass_pay_out.tr
        if ($pathinfo === '/forms/mass-pay-out') {
            return array (  '_controller' => 'WebBundle\\Controller\\FormsController::massPayOutLeadFormAction',  '_locale' => 'tr',  '_route' => 'form_get_mass_pay_out.tr',);
        }

        // form_get_mass_pay_out.en
        if ($pathinfo === '/en/forms/mass-pay-out') {
            return array (  '_controller' => 'WebBundle\\Controller\\FormsController::massPayOutLeadFormAction',  '_locale' => 'en',  '_route' => 'form_get_mass_pay_out.en',);
        }

        // form_get_business_pwi.tr
        if ($pathinfo === '/forms/business-pwi') {
            return array (  '_controller' => 'WebBundle\\Controller\\FormsController::businessPwiLeadFormAction',  '_locale' => 'tr',  '_route' => 'form_get_business_pwi.tr',);
        }

        // form_get_business_pwi.en
        if ($pathinfo === '/en/forms/business-pwi') {
            return array (  '_controller' => 'WebBundle\\Controller\\FormsController::businessPwiLeadFormAction',  '_locale' => 'en',  '_route' => 'form_get_business_pwi.en',);
        }

        // subscription_form_get_offer.tr
        if ($pathinfo === '/forms/subscription-offer') {
            return array (  '_controller' => 'WebBundle\\Controller\\FormsController::subscriptionOfferAction',  '_locale' => 'tr',  '_route' => 'subscription_form_get_offer.tr',);
        }

        // subscription_form_get_offer.en
        if ($pathinfo === '/en/forms/subscription-offer') {
            return array (  '_controller' => 'WebBundle\\Controller\\FormsController::subscriptionOfferAction',  '_locale' => 'en',  '_route' => 'subscription_form_get_offer.en',);
        }

        // mass_pay_out_form_get_offer.tr
        if ($pathinfo === '/forms/mass-pay-out-offer') {
            return array (  '_controller' => 'WebBundle\\Controller\\FormsController::massPayOutOfferAction',  '_locale' => 'tr',  '_route' => 'mass_pay_out_form_get_offer.tr',);
        }

        // mass_pay_out_form_get_offer.en
        if ($pathinfo === '/en/forms/mass-pay-out-offer') {
            return array (  '_controller' => 'WebBundle\\Controller\\FormsController::massPayOutOfferAction',  '_locale' => 'en',  '_route' => 'mass_pay_out_form_get_offer.en',);
        }

        // business.tr
        if ($pathinfo === '/isim-icin') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::businessMainLandingPageAction',  '_locale' => 'tr',  '_route' => 'business.tr',);
        }

        // business.en
        if ($pathinfo === '/en/business') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::businessMainLandingPageAction',  '_locale' => 'en',  '_route' => 'business.en',);
        }

        // business_virtual_pos.tr
        if ($pathinfo === '/isim-icin/sanal-pos') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::businessVirtualPosLandingPageAction',  '_locale' => 'tr',  '_route' => 'business_virtual_pos.tr',);
        }

        // business_virtual_pos.en
        if ($pathinfo === '/en/business/get-online-payment') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::businessVirtualPosLandingPageAction',  '_locale' => 'en',  '_route' => 'business_virtual_pos.en',);
        }

        // iyzicoCardLP.tr
        if ($pathinfo === '/kendim-icin/iyzico-kart') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::iyzicoCardLandingPageAction',  '_locale' => 'tr',  '_route' => 'iyzicoCardLP.tr',);
        }

        // iyzicoCardLP.en
        if ($pathinfo === '/en/personal/iyzico-card') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::iyzicoCardLandingPageAction',  '_locale' => 'en',  '_route' => 'iyzicoCardLP.en',);
        }

        // business_bank_transfer.tr
        if ($pathinfo === '/isim-icin/korumali-havale-eft') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::businessBuyerProtectedBankTransferLandingPageAction',  '_locale' => 'tr',  '_route' => 'business_bank_transfer.tr',);
        }

        // business_bank_transfer.en
        if ($pathinfo === '/en/business/buyer-protected-bank-transfer') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::businessBuyerProtectedBankTransferLandingPageAction',  '_locale' => 'en',  '_route' => 'business_bank_transfer.en',);
        }

        // business_marketplace.tr
        if ($pathinfo === '/isim-icin/pazaryeri-pos') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::businessMarketplaceLandingPageAction',  '_locale' => 'tr',  '_route' => 'business_marketplace.tr',);
        }

        // business_marketplace.en
        if ($pathinfo === '/en/business/marketplace-payment-methods') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::businessMarketplaceLandingPageAction',  '_locale' => 'en',  '_route' => 'business_marketplace.en',);
        }

        // business_receive_payment.tr
        if ($pathinfo === '/isim-icin/link-ile-odeme-al') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::businessReceivePaymentLandingPageAction',  '_locale' => 'tr',  '_route' => 'business_receive_payment.tr',);
        }

        // business_receive_payment.en
        if ($pathinfo === '/en/business/get-paid-by-link') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::businessReceivePaymentLandingPageAction',  '_locale' => 'en',  '_route' => 'business_receive_payment.en',);
        }

        // female_entrepreneur.tr
        if ($pathinfo === '/isim-icin/kadin-girisimci') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::femaleEntrepreneurLandingPageAction',  '_locale' => 'tr',  '_route' => 'female_entrepreneur.tr',);
        }

        // female_entrepreneur.en
        if ($pathinfo === '/en/business/female-entrepreneur') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::femaleEntrepreneurLandingPageAction',  '_locale' => 'en',  '_route' => 'female_entrepreneur.en',);
        }

        // fail_landingpage.tr
        if ($pathinfo === '/404') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::failLandingPageAction',  '_locale' => 'tr',  '_route' => 'fail_landingpage.tr',);
        }

        // fail_landingpage.en
        if ($pathinfo === '/en/404') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::failLandingPageAction',  '_locale' => 'en',  '_route' => 'fail_landingpage.en',);
        }

        // survey_landingpage.tr
        if ($pathinfo === '/tesekkurler') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::surveyLandingPageAction',  '_locale' => 'tr',  '_route' => 'survey_landingpage.tr',);
        }

        // survey_landingpage.en
        if ($pathinfo === '/en/thankyou') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::surveyLandingPageAction',  '_locale' => 'en',  '_route' => 'survey_landingpage.en',);
        }

        // privacy_policy.tr
        if ($pathinfo === '/gizlilik-politikasi') {
            return array (  '_controller' => 'WebBundle\\Controller\\SupportController::privacyPolicyAction',  '_locale' => 'tr',  '_route' => 'privacy_policy.tr',);
        }

        // privacy_policy.en
        if ($pathinfo === '/en/privacy-policy') {
            return array (  '_controller' => 'WebBundle\\Controller\\SupportController::privacyPolicyAction',  '_locale' => 'en',  '_route' => 'privacy_policy.en',);
        }

        // privacy_personal_data_policy.tr
        if ($pathinfo === '/gizlilik-politikasi/gizlilik-ve-kisisel-veri-politikasi') {
            return array (  '_controller' => 'WebBundle\\Controller\\SupportController::pPPrivacyPersonalDataPolicyAction',  '_locale' => 'tr',  '_route' => 'privacy_personal_data_policy.tr',);
        }

        // privacy_personal_data_policy.en
        if ($pathinfo === '/en/privacy-policy/privacy-personal-data-policy') {
            return array (  '_controller' => 'WebBundle\\Controller\\SupportController::pPPrivacyPersonalDataPolicyAction',  '_locale' => 'en',  '_route' => 'privacy_personal_data_policy.en',);
        }

        // consent_from_regarding_personal_data_processing.tr
        if ($pathinfo === '/gizlilik-politikasi/kisisel-verilerin-islenmesine-iliskin-riza-metni') {
            return array (  '_controller' => 'WebBundle\\Controller\\SupportController::consentFromRegardingPersonalDataProcessingAction',  '_locale' => 'tr',  '_route' => 'consent_from_regarding_personal_data_processing.tr',);
        }

        // consent_from_regarding_personal_data_processing.en
        if ($pathinfo === '/en/privacy-policy/consent-from-regarding-personal-data-processing') {
            return array (  '_controller' => 'WebBundle\\Controller\\SupportController::consentFromRegardingPersonalDataProcessingAction',  '_locale' => 'en',  '_route' => 'consent_from_regarding_personal_data_processing.en',);
        }

        // information_notice_regarding_personal_data_processing.tr
        if ($pathinfo === '/gizlilik-politikasi/kisisel-verilerin-islenmesine-iliskin-aydinlatma-metni') {
            return array (  '_controller' => 'WebBundle\\Controller\\SupportController::informationNoticeRegardingPersonalDataProcessingAction',  '_locale' => 'tr',  '_route' => 'information_notice_regarding_personal_data_processing.tr',);
        }

        // information_notice_regarding_personal_data_processing.en
        if ($pathinfo === '/en/privacy-policy/information-notice-regarding-personal-data-processing') {
            return array (  '_controller' => 'WebBundle\\Controller\\SupportController::informationNoticeRegardingPersonalDataProcessingAction',  '_locale' => 'en',  '_route' => 'information_notice_regarding_personal_data_processing.en',);
        }

        // consent_letter_of_commercial_communication.tr
        if ($pathinfo === '/gizlilik-politikasi/ticari-iletisim-riza-metni') {
            return array (  '_controller' => 'WebBundle\\Controller\\SupportController::consentLetterOfCommercialCommunicationAction',  '_locale' => 'tr',  '_route' => 'consent_letter_of_commercial_communication.tr',);
        }

        // consent_letter_of_commercial_communication.en
        if ($pathinfo === '/en/privacy-policy/consent-letter-of-commercial-communication') {
            return array (  '_controller' => 'WebBundle\\Controller\\SupportController::consentLetterOfCommercialCommunicationAction',  '_locale' => 'en',  '_route' => 'consent_letter_of_commercial_communication.en',);
        }

        // customer_information_security_awareness.tr
        if ($pathinfo === '/gizlilik-politikasi/musteri-bilgi-guvenligi-farkindaligi') {
            return array (  '_controller' => 'WebBundle\\Controller\\SupportController::customerInformationSecurityAwarenessAction',  '_locale' => 'tr',  '_route' => 'customer_information_security_awareness.tr',);
        }

        // customer_information_security_awareness.en
        if ($pathinfo === '/en/privacy-policy/customer-information-security-awareness') {
            return array (  '_controller' => 'WebBundle\\Controller\\SupportController::customerInformationSecurityAwarenessAction',  '_locale' => 'en',  '_route' => 'customer_information_security_awareness.en',);
        }

        // user_agreement.tr
        if ($pathinfo === '/kendim-icin/kullanici-sozlesmesi') {
            return array (  '_controller' => 'WebBundle\\Controller\\SupportController::userAgreementAction',  '_locale' => 'tr',  '_route' => 'user_agreement.tr',);
        }

        // user_agreement.en
        if ($pathinfo === '/en/personal/user-agreement') {
            return array (  '_controller' => 'WebBundle\\Controller\\SupportController::userAgreementAction',  '_locale' => 'en',  '_route' => 'user_agreement.en',);
        }

        // mobile_application_user_agreement.tr
        if ($pathinfo === '/kendim-icin/kullanici-sozlesmesi/iyzico-mobil-kullanici-sozlesmesi') {
            return array (  '_controller' => 'WebBundle\\Controller\\SupportController::iyzicoMobileApplicationUserAgreementAction',  '_locale' => 'tr',  '_route' => 'mobile_application_user_agreement.tr',);
        }

        // mobile_application_user_agreement.en
        if ($pathinfo === '/en/personal/user-agreement/iyzico-mobile-application-user-agreement') {
            return array (  '_controller' => 'WebBundle\\Controller\\SupportController::iyzicoMobileApplicationUserAgreementAction',  '_locale' => 'en',  '_route' => 'mobile_application_user_agreement.en',);
        }

        // framework_emoney_issuance_and_payment_service_user_agreement.tr
        if ($pathinfo === '/kendim-icin/kullanici-sozlesmesi/cerceve-e-para-ihracati-ve-odeme-hizmeti-sozlesmesi') {
            return array (  '_controller' => 'WebBundle\\Controller\\SupportController::frameworkEmoneyIssuanceAndPaymentServiceAgreementAction',  '_locale' => 'tr',  '_route' => 'framework_emoney_issuance_and_payment_service_user_agreement.tr',);
        }

        // framework_emoney_issuance_and_payment_service_user_agreement.en
        if ($pathinfo === '/en/personal/user-agreement/framework-e-money-issuance-and-payment-service-agreement') {
            return array (  '_controller' => 'WebBundle\\Controller\\SupportController::frameworkEmoneyIssuanceAndPaymentServiceAgreementAction',  '_locale' => 'en',  '_route' => 'framework_emoney_issuance_and_payment_service_user_agreement.en',);
        }

        // iyzico_card_storage_end_user_agreementuser_agreement.tr
        if ($pathinfo === '/kendim-icin/kullanici-sozlesmesi/iyzico-yan-hizmetler-sozlesmesi') {
            return array (  '_controller' => 'WebBundle\\Controller\\SupportController::iyzicoCardStorageEndUserAgreementAction',  '_locale' => 'tr',  '_route' => 'iyzico_card_storage_end_user_agreementuser_agreement.tr',);
        }

        // iyzico_card_storage_end_user_agreementuser_agreement.en
        if ($pathinfo === '/en/personal/user-agreement/iyzico-card-storage-end-user-agreement') {
            return array (  '_controller' => 'WebBundle\\Controller\\SupportController::iyzicoCardStorageEndUserAgreementAction',  '_locale' => 'en',  '_route' => 'iyzico_card_storage_end_user_agreementuser_agreement.en',);
        }

        // business_online_proceeds_payment.tr
        if ($pathinfo === '/isim-icin/online-tahsilat') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::businessOnlineProceedsLandingPageAction',  '_locale' => 'tr',  '_route' => 'business_online_proceeds_payment.tr',);
        }

        // business_online_proceeds_payment.en
        if ($pathinfo === '/en/business/collect-online-payments') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::businessOnlineProceedsLandingPageAction',  '_locale' => 'en',  '_route' => 'business_online_proceeds_payment.en',);
        }

        // business_etsy.tr
        if ($pathinfo === '/isim-icin/etsy-satisi') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::businessEtsyLandingPageAction',  '_locale' => 'tr',  '_route' => 'business_etsy.tr',);
        }

        // business_etsy.en
        if ($pathinfo === '/en/business/etsy-sales') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::businessEtsyLandingPageAction',  '_locale' => 'en',  '_route' => 'business_etsy.en',);
        }

        // business_social_media.tr
        if ($pathinfo === '/isim-icin/sosyal-medya-satisi') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::businessSocialMediaLandingPageAction',  '_locale' => 'tr',  '_route' => 'business_social_media.tr',);
        }

        // business_social_media.en
        if ($pathinfo === '/en/business/social-media-sales') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::businessSocialMediaLandingPageAction',  '_locale' => 'en',  '_route' => 'business_social_media.en',);
        }

        // business_stand_sales.tr
        if ($pathinfo === '/isim-icin/stand-satisi') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::businessStandSalesLandingPageAction',  '_locale' => 'tr',  '_route' => 'business_stand_sales.tr',);
        }

        // business_stand_sales.en
        if ($pathinfo === '/en/business/stall-sales') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::businessStandSalesLandingPageAction',  '_locale' => 'en',  '_route' => 'business_stand_sales.en',);
        }

        // business_fraud.tr
        if ($pathinfo === '/isim-icin/fraud') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::businessFraudLandingPageAction',  '_locale' => 'tr',  '_route' => 'business_fraud.tr',);
        }

        // business_fraud.en
        if ($pathinfo === '/en/business/fraud') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::businessFraudLandingPageAction',  '_locale' => 'en',  '_route' => 'business_fraud.en',);
        }

        // business_buyer_protection.tr
        if ($pathinfo === '/isim-icin/korumali-alisveris') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::businessBuyerProtectionLandingPageAction',  '_locale' => 'tr',  '_route' => 'business_buyer_protection.tr',);
        }

        // business_buyer_protection.en
        if ($pathinfo === '/en/business/buyer-protection') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::businessBuyerProtectionLandingPageAction',  '_locale' => 'en',  '_route' => 'business_buyer_protection.en',);
        }

        // business_references.tr
        if ($pathinfo === '/isim-icin/referanslar') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::businessReferencessLandingPageAction',  '_locale' => 'tr',  '_route' => 'business_references.tr',);
        }

        // business_references.en
        if ($pathinfo === '/en/business/references') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::businessReferencessLandingPageAction',  '_locale' => 'en',  '_route' => 'business_references.en',);
        }

        // personal_home.tr
        if ($pathinfo === '/kendim-icin') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalHomeLandingPageAction',  '_locale' => 'tr',  '_route' => 'personal_home.tr',);
        }

        // personal_home.en
        if ($pathinfo === '/en/personal') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalHomeLandingPageAction',  '_locale' => 'en',  '_route' => 'personal_home.en',);
        }

        // personal.tr
        if ($pathinfo === '/kendim-icin/iyzico-ile-ode') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalMainLandingPageAction',  '_locale' => 'tr',  '_route' => 'personal.tr',);
        }

        // personal.en
        if ($pathinfo === '/en/personal/pay-with-iyzico') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalMainLandingPageAction',  '_locale' => 'en',  '_route' => 'personal.en',);
        }

        // brands.tr
        if ($pathinfo === '/kendim-icin/markalar') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalBrandsLandingPageAction',  '_locale' => 'tr',  '_route' => 'brands.tr',);
        }

        // brands.en
        if ($pathinfo === '/en/personal/brands') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalBrandsLandingPageAction',  '_locale' => 'en',  '_route' => 'brands.en',);
        }

        // local_brands.tr
        if ($pathinfo === '/kendim-icin/yerel-magazalar') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalLocaleBrandsLandingPageAction',  '_locale' => 'tr',  '_route' => 'local_brands.tr',);
        }

        // local_brands.en
        if ($pathinfo === '/en/personal/local-brands') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalLocaleBrandsLandingPageAction',  '_locale' => 'en',  '_route' => 'local_brands.en',);
        }

        // blackfriday.tr
        if ($pathinfo === '/kendim-icin/kasim-indirimleri') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalBlackFriday21LandingPageAction',  '_locale' => 'tr',  '_route' => 'blackfriday.tr',);
        }

        // blackfriday.en
        if ($pathinfo === '/en/personal/november-discounts') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalBlackFriday21LandingPageAction',  '_locale' => 'en',  '_route' => 'blackfriday.en',);
        }

        // backtoschool.tr
        if ($pathinfo === '/kendim-icin/okuladonus') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::backtoschoolLandingPageAction',  '_locale' => 'tr',  '_route' => 'backtoschool.tr',);
        }

        // backtoschool.en
        if ($pathinfo === '/en/personal/backtoschool') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::backtoschoolLandingPageAction',  '_locale' => 'en',  '_route' => 'backtoschool.en',);
        }

        // pwi_brands.tr
        if ($pathinfo === '/kendim-icin/gecerli-magazalar') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalPwiBrandsLandingPageAction',  '_locale' => 'tr',  '_route' => 'pwi_brands.tr',);
        }

        // pwi_brands.en
        if ($pathinfo === '/en/personal/applicable-stores') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalPwiBrandsLandingPageAction',  '_locale' => 'en',  '_route' => 'pwi_brands.en',);
        }

        // mothersday.tr
        if ($pathinfo === '/kendim-icin/annelergunu') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalMothersdayLandingPageAction',  '_locale' => 'tr',  '_route' => 'mothersday.tr',);
        }

        // mothersday.en
        if ($pathinfo === '/en/personal/mothersday') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalMothersdayLandingPageAction',  '_locale' => 'en',  '_route' => 'mothersday.en',);
        }

        // personal_buyer_protection.tr
        if ($pathinfo === '/kendim-icin/korumali-alisveris') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalBuyerProtectionLandingPageAction',  '_locale' => 'tr',  '_route' => 'personal_buyer_protection.tr',);
        }

        // personal_buyer_protection.en
        if ($pathinfo === '/en/personal/buyer-protection') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalBuyerProtectionLandingPageAction',  '_locale' => 'en',  '_route' => 'personal_buyer_protection.en',);
        }

        // deercase.tr
        if ($pathinfo === '/kendim-icin/deercase-hediye-tl') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalDeercaseAction',  '_locale' => 'tr',  '_route' => 'deercase.tr',);
        }

        // deercase.en
        if ($pathinfo === '/en/personal/deercase-hediye-tl') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalDeercaseAction',  '_locale' => 'en',  '_route' => 'deercase.en',);
        }

        // finish_campaign.tr
        if ($pathinfo === '/kendim-icin/finish-subat') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalFinishAction',  '_locale' => 'tr',  '_route' => 'finish_campaign.tr',);
        }

        // finish_campaign.en
        if ($pathinfo === '/en/personal/finish-subat') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalFinishAction',  '_locale' => 'en',  '_route' => 'finish_campaign.en',);
        }

        // finish_campaign_January.tr
        if ($pathinfo === '/kendim-icin/finish-ocak') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalFinishJanuaryAction',  '_locale' => 'tr',  '_route' => 'finish_campaign_January.tr',);
        }

        // finish_campaign_January.en
        if ($pathinfo === '/en/personal/finish-ocak') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalFinishJanuaryAction',  '_locale' => 'en',  '_route' => 'finish_campaign_January.en',);
        }

        // finish_campaign_december.tr
        if ($pathinfo === '/kendim-icin/finish-aralik') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalFinishDecemberAction',  '_locale' => 'tr',  '_route' => 'finish_campaign_december.tr',);
        }

        // finish_campaign_december.en
        if ($pathinfo === '/en/personal/finish-aralik') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalFinishDecemberAction',  '_locale' => 'en',  '_route' => 'finish_campaign_december.en',);
        }

        // wwf_campaign.tr
        if ($pathinfo === '/kendim-icin/wwf-market') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalwwfAction',  '_locale' => 'tr',  '_route' => 'wwf_campaign.tr',);
        }

        // wwf_campaign.en
        if ($pathinfo === '/en/personal/wwf-market') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalwwfAction',  '_locale' => 'en',  '_route' => 'wwf_campaign.en',);
        }

        // camper_campaign.tr
        if ($pathinfo === '/kendim-icin/camper') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalCamperAction',  '_locale' => 'tr',  '_route' => 'camper_campaign.tr',);
        }

        // camper_campaign.en
        if ($pathinfo === '/en/personal/camper') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalCamperAction',  '_locale' => 'en',  '_route' => 'camper_campaign.en',);
        }

        // camper_may_campaign.tr
        if ($pathinfo === '/kendim-icin/camper-mayis') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalCamperMayAction',  '_locale' => 'tr',  '_route' => 'camper_may_campaign.tr',);
        }

        // camper_may_campaign.en
        if ($pathinfo === '/en/personal/camper-may') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalCamperMayAction',  '_locale' => 'en',  '_route' => 'camper_may_campaign.en',);
        }

        // camper_september_campaign.tr
        if ($pathinfo === '/kendim-icin/camper-eylul') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalCamperSeptemberAction',  '_locale' => 'tr',  '_route' => 'camper_september_campaign.tr',);
        }

        // camper_september_campaign.en
        if ($pathinfo === '/en/personal/dkdukkan-september') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalCamperSeptemberAction',  '_locale' => 'en',  '_route' => 'camper_september_campaign.en',);
        }

        // camper_october_campaign.tr
        if ($pathinfo === '/kendim-icin/camper-ekim') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalCamperOctoberAction',  '_locale' => 'tr',  '_route' => 'camper_october_campaign.tr',);
        }

        // camper_october_campaign.en
        if ($pathinfo === '/en/personal/dkdukkan-october') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalCamperOctoberAction',  '_locale' => 'en',  '_route' => 'camper_october_campaign.en',);
        }

        // beto_campaign.tr
        if ($pathinfo === '/kendim-icin/beto') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalBetoAction',  '_locale' => 'tr',  '_route' => 'beto_campaign.tr',);
        }

        // beto_campaign.en
        if ($pathinfo === '/en/personal/beto') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalBetoAction',  '_locale' => 'en',  '_route' => 'beto_campaign.en',);
        }

        // elcacosmetics_campaign.tr
        if ($pathinfo === '/kendim-icin/kozmetik') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalelcaCosmeticsAction',  '_locale' => 'tr',  '_route' => 'elcacosmetics_campaign.tr',);
        }

        // elcacosmetics_campaign.en
        if ($pathinfo === '/en/personal/kozmetik') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalelcaCosmeticsAction',  '_locale' => 'en',  '_route' => 'elcacosmetics_campaign.en',);
        }

        // elcacosmetics_october_campaign.tr
        if ($pathinfo === '/kendim-icin/kozmetik-ekim') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalelcaCosmeticsOctoberAction',  '_locale' => 'tr',  '_route' => 'elcacosmetics_october_campaign.tr',);
        }

        // elcacosmetics_october_campaign.en
        if ($pathinfo === '/en/personal/kozmetik-ekim') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalelcaCosmeticsOctoberAction',  '_locale' => 'en',  '_route' => 'elcacosmetics_october_campaign.en',);
        }

        // sportime_campaign.tr
        if ($pathinfo === '/kendim-icin/sportime') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalSportimeAction',  '_locale' => 'tr',  '_route' => 'sportime_campaign.tr',);
        }

        // sportime_campaign.en
        if ($pathinfo === '/en/personal/sportime') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalSportimeAction',  '_locale' => 'en',  '_route' => 'sportime_campaign.en',);
        }

        // flavus_campaign.tr
        if ($pathinfo === '/kendim-icin/flavus') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalFlavusAction',  '_locale' => 'tr',  '_route' => 'flavus_campaign.tr',);
        }

        // flavus_campaign.en
        if ($pathinfo === '/en/personal/flavus') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalFlavusAction',  '_locale' => 'en',  '_route' => 'flavus_campaign.en',);
        }

        // flavus_september_campaign.tr
        if ($pathinfo === '/kendim-icin/flavus-eylul') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalFlavusSeptemberAction',  '_locale' => 'tr',  '_route' => 'flavus_september_campaign.tr',);
        }

        // flavus_september_campaign.en
        if ($pathinfo === '/en/personal/flavus-september') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalFlavusSeptemberAction',  '_locale' => 'en',  '_route' => 'flavus_september_campaign.en',);
        }

        // flavus_november_campaign.tr
        if ($pathinfo === '/kendim-icin/flavus-kasim') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalFlavusNovemberAction',  '_locale' => 'tr',  '_route' => 'flavus_november_campaign.tr',);
        }

        // flavus_november_campaign.en
        if ($pathinfo === '/en/personal/flavus-november') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalFlavusNovemberAction',  '_locale' => 'en',  '_route' => 'flavus_november_campaign.en',);
        }

        // shopigo_campaign.tr
        if ($pathinfo === '/kendim-icin/shopigo') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalShopigoAction',  '_locale' => 'tr',  '_route' => 'shopigo_campaign.tr',);
        }

        // shopigo_campaign.en
        if ($pathinfo === '/en/personal/shopigo') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalShopigoAction',  '_locale' => 'en',  '_route' => 'shopigo_campaign.en',);
        }

        // miniso_august_campaign.tr
        if ($pathinfo === '/kendim-icin/miniso-agustos') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalMinisoAugustAction',  '_locale' => 'tr',  '_route' => 'miniso_august_campaign.tr',);
        }

        // miniso_august_campaign.en
        if ($pathinfo === '/en/personal/miniso-august') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalMinisoAugustAction',  '_locale' => 'en',  '_route' => 'miniso_august_campaign.en',);
        }

        // miniso_campaign.tr
        if ($pathinfo === '/kendim-icin/miniso') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalMinisoAction',  '_locale' => 'tr',  '_route' => 'miniso_campaign.tr',);
        }

        // miniso_campaign.en
        if ($pathinfo === '/en/personal/miniso') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalMinisoAction',  '_locale' => 'en',  '_route' => 'miniso_campaign.en',);
        }

        // guzel_kelimeler_dukkani_campaign.tr
        if ($pathinfo === '/kendim-icin/guzel-kelimeler-dukkani') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalGuzelKelimelerDukkaniAction',  '_locale' => 'tr',  '_route' => 'guzel_kelimeler_dukkani_campaign.tr',);
        }

        // guzel_kelimeler_dukkani_campaign.en
        if ($pathinfo === '/en/personal/guzel-kelimeler-dukkani') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalGuzelKelimelerDukkaniAction',  '_locale' => 'en',  '_route' => 'guzel_kelimeler_dukkani_campaign.en',);
        }

        // dkdukkan_campaign.tr
        if ($pathinfo === '/kendim-icin/dkdukkan') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personaldkDukkanAction',  '_locale' => 'tr',  '_route' => 'dkdukkan_campaign.tr',);
        }

        // dkdukkan_campaign.en
        if ($pathinfo === '/en/personal/dkdukkan') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personaldkDukkanAction',  '_locale' => 'en',  '_route' => 'dkdukkan_campaign.en',);
        }

        // dkdukkan_august_campaign.tr
        if ($pathinfo === '/kendim-icin/dkdukkan-agustos') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personaldkDukkanAugustAction',  '_locale' => 'tr',  '_route' => 'dkdukkan_august_campaign.tr',);
        }

        // dkdukkan_august_campaign.en
        if ($pathinfo === '/en/personal/dkdukkan-august') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personaldkDukkanAugustAction',  '_locale' => 'en',  '_route' => 'dkdukkan_august_campaign.en',);
        }

        // vitruta_campaign.tr
        if ($pathinfo === '/kendim-icin/vitruta') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalVitrutaAction',  '_locale' => 'tr',  '_route' => 'vitruta_campaign.tr',);
        }

        // vitruta_campaign.en
        if ($pathinfo === '/en/personal/vitruta') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalVitrutaAction',  '_locale' => 'en',  '_route' => 'vitruta_campaign.en',);
        }

        // milagron_campaign.tr
        if ($pathinfo === '/kendim-icin/milagron') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalMilagronAction',  '_locale' => 'tr',  '_route' => 'milagron_campaign.tr',);
        }

        // milagron_campaign.en
        if ($pathinfo === '/en/personal/milagron') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalMilagronAction',  '_locale' => 'en',  '_route' => 'milagron_campaign.en',);
        }

        // justinbeauty_campaign.tr
        if ($pathinfo === '/kendim-icin/justin-beauty') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalJustinBeautyAction',  '_locale' => 'tr',  '_route' => 'justinbeauty_campaign.tr',);
        }

        // justinbeauty_campaign.en
        if ($pathinfo === '/en/personal/justin-beauty') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalJustinBeautyAction',  '_locale' => 'en',  '_route' => 'justinbeauty_campaign.en',);
        }

        // slazenger_campaign.tr
        if ($pathinfo === '/kendim-icin/slazenger') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalSlazengerAction',  '_locale' => 'tr',  '_route' => 'slazenger_campaign.tr',);
        }

        // slazenger_campaign.en
        if ($pathinfo === '/en/personal/slazenger') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalSlazengerAction',  '_locale' => 'en',  '_route' => 'slazenger_campaign.en',);
        }

        // new_personal_lp.tr
        if ($pathinfo === '/kendim-icin/hesap-olustur') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::registerNewPersonalMerchantAction',  '_locale' => 'tr',  '_route' => 'new_personal_lp.tr',);
        }

        // new_personal_lp.en
        if ($pathinfo === '/en/personal/signup-account') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::registerNewPersonalMerchantAction',  '_locale' => 'en',  '_route' => 'new_personal_lp.en',);
        }

        // business_register_result.tr
        if ($pathinfo === '/isim-icin/hesap-olustur/basarili') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::businessRegisterResultAction',  '_locale' => 'tr',  '_route' => 'business_register_result.tr',);
        }

        // business_register_result.en
        if ($pathinfo === '/en/business/signup/success') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::businessRegisterResultAction',  '_locale' => 'en',  '_route' => 'business_register_result.en',);
        }

        // business_register_result_fail.tr
        if ($pathinfo === '/isim-icin/hesap-olustur/hatali') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::businessRegisterResultAction',  '_locale' => 'tr',  '_route' => 'business_register_result_fail.tr',);
        }

        // business_register_result_fail.en
        if ($pathinfo === '/en/business/signup/fail') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::businessRegisterResultAction',  '_locale' => 'en',  '_route' => 'business_register_result_fail.en',);
        }

        // open_source.tr
        if ($pathinfo === '/acik-kaynak') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::openSourceLandingPageAction',  '_locale' => 'tr',  '_route' => 'open_source.tr',);
        }

        // open_source.en
        if ($pathinfo === '/en/open-source') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::openSourceLandingPageAction',  '_locale' => 'en',  '_route' => 'open_source.en',);
        }

        // february14.tr
        if ($pathinfo === '/kendim-icin/14-subat') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::february14LandingPageAction',  '_locale' => 'tr',  '_route' => 'february14.tr',);
        }

        // february14.en
        if ($pathinfo === '/en/personal/february-14') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::february14LandingPageAction',  '_locale' => 'en',  '_route' => 'february14.en',);
        }

        // kgySupport.tr
        if ($pathinfo === '/kendim-icin/kadin-girisimciye-destek') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::kgySupportLandingPageAction',  '_locale' => 'tr',  '_route' => 'kgySupport.tr',);
        }

        // kgySupport.en
        if ($pathinfo === '/en/personal/kadin-girisimciye-destek') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::kgySupportLandingPageAction',  '_locale' => 'en',  '_route' => 'kgySupport.en',);
        }

        // personalBrands.tr
        if ($pathinfo === '/kendim-icin/markalar') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalBrandsLandingPageAction',  '_locale' => 'tr',  '_route' => 'personalBrands.tr',);
        }

        // personalBrands.en
        if ($pathinfo === '/en/personal/brands') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalBrandsLandingPageAction',  '_locale' => 'en',  '_route' => 'personalBrands.en',);
        }

        // ready_integration_landing_page.tr
        if ($pathinfo === '/cozum-ortaklarimiz') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::readyIntegrationLandingPageAction',  '_locale' => 'tr',  '_route' => 'ready_integration_landing_page.tr',);
        }

        // ready_integration_landing_page.en
        if ($pathinfo === '/en/partner-solutions') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::readyIntegrationLandingPageAction',  '_locale' => 'en',  '_route' => 'ready_integration_landing_page.en',);
        }

        // campaign_landing_page.tr
        if ($pathinfo === '/isim-icin/kampanyalar') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::campaignLandingPageAction',  '_locale' => 'tr',  '_route' => 'campaign_landing_page.tr',);
        }

        // campaign_landing_page.en
        if ($pathinfo === '/en/business/campaigns') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::campaignLandingPageAction',  '_locale' => 'en',  '_route' => 'campaign_landing_page.en',);
        }

        // personal_campaign_landing_page.tr
        if ($pathinfo === '/kendim-icin/kampanyalar') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalCampaignLandingPageAction',  '_locale' => 'tr',  '_route' => 'personal_campaign_landing_page.tr',);
        }

        // personal_campaign_landing_page.en
        if ($pathinfo === '/en/personal/campaigns') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalCampaignLandingPageAction',  '_locale' => 'en',  '_route' => 'personal_campaign_landing_page.en',);
        }

        // personal_cashback10_landing_page.tr
        if ($pathinfo === '/kendim-icin/sana-ozel-10') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalCashBackTenAction',  '_locale' => 'tr',  '_route' => 'personal_cashback10_landing_page.tr',);
        }

        // personal_cashback10_landing_page.en
        if ($pathinfo === '/en/personal/sana-ozel-10') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalCashBackTenAction',  '_locale' => 'en',  '_route' => 'personal_cashback10_landing_page.en',);
        }

        // personal_cashback20_landing_page.tr
        if ($pathinfo === '/kendim-icin/sana-ozel-20') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalCashBackTwentyAction',  '_locale' => 'tr',  '_route' => 'personal_cashback20_landing_page.tr',);
        }

        // personal_cashback20_landing_page.en
        if ($pathinfo === '/en/personal/sana-ozel-20') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalCashBackTwentyAction',  '_locale' => 'en',  '_route' => 'personal_cashback20_landing_page.en',);
        }

        // dynamic3ds_landing_page.tr
        if ($pathinfo === '/isim-icin/dynamic-3ds-sistemi') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::dynamic3dsLandingPageAction',  '_locale' => 'tr',  '_route' => 'dynamic3ds_landing_page.tr',);
        }

        // dynamic3ds_landing_page.en
        if ($pathinfo === '/en/business/dynamic-3ds') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::dynamic3dsLandingPageAction',  '_locale' => 'en',  '_route' => 'dynamic3ds_landing_page.en',);
        }

        // smart_payment_landing_page.tr
        if ($pathinfo === '/isim-icin/akilli-odeme-yonlendirme-servisi') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::smartPaymentLandingPageAction',  '_locale' => 'tr',  '_route' => 'smart_payment_landing_page.tr',);
        }

        // smart_payment_landing_page.en
        if ($pathinfo === '/en/business/smart-payment-routing-service') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::smartPaymentLandingPageAction',  '_locale' => 'en',  '_route' => 'smart_payment_landing_page.en',);
        }

        // other_integration.tr
        if ($pathinfo === '/diger-entegrasyonlar') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::otherIntegrationLandingPageAction',  '_locale' => 'tr',  '_route' => 'other_integration.tr',);
        }

        // other_integration.en
        if ($pathinfo === '/en/other-integration') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::otherIntegrationLandingPageAction',  '_locale' => 'en',  '_route' => 'other_integration.en',);
        }

        // personal_contracted_sites.tr
        if ($pathinfo === '/kendim-icin/anlasmali-siteler') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalContractedSitesLandingPageAction',  '_locale' => 'tr',  '_route' => 'personal_contracted_sites.tr',);
        }

        // personal_contracted_sites.en
        if ($pathinfo === '/en/personal/iyzico-buyer-protection-sites') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::personalContractedSitesLandingPageAction',  '_locale' => 'en',  '_route' => 'personal_contracted_sites.en',);
        }

        // who_we_are.tr
        if ($pathinfo === '/hakkimizda/biz-kimiz') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::whoAreWeLandingPageAction',  '_locale' => 'tr',  '_route' => 'who_we_are.tr',);
        }

        // who_we_are.en
        if ($pathinfo === '/en/about-us/who-we-are') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::whoAreWeLandingPageAction',  '_locale' => 'en',  '_route' => 'who_we_are.en',);
        }

        // whyiyzico.tr
        if ($pathinfo === '/hakkimizda/neden-iyzico') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::whyiyzicoLandingPageAction',  '_locale' => 'tr',  '_route' => 'whyiyzico.tr',);
        }

        // whyiyzico.en
        if ($pathinfo === '/en/about-us/why-iyzico') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::whyiyzicoLandingPageAction',  '_locale' => 'en',  '_route' => 'whyiyzico.en',);
        }

        // team.tr
        if ($pathinfo === '/hakkimizda/ekip') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::teamLandingPageAction',  '_locale' => 'tr',  '_route' => 'team.tr',);
        }

        // team.en
        if ($pathinfo === '/en/about-us/team') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::teamLandingPageAction',  '_locale' => 'en',  '_route' => 'team.en',);
        }

        // career.tr
        if ($pathinfo === '/hakkimizda/kariyer') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::careerLandingPageAction',  '_locale' => 'tr',  '_route' => 'career.tr',);
        }

        // career.en
        if ($pathinfo === '/en/about-us/career') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::careerLandingPageAction',  '_locale' => 'en',  '_route' => 'career.en',);
        }

        // career_detail.tr
        if (0 === strpos($pathinfo, '/hakkimizda/kariyer') && preg_match('#^/hakkimizda/kariyer/(?P<detailId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'career_detail.tr')), array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::careerDetailLandingPageAction',  '_locale' => 'tr',));
        }

        // career_detail.en
        if (0 === strpos($pathinfo, '/en/about-us/career') && preg_match('#^/en/about\\-us/career/(?P<detailId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'career_detail.en')), array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::careerDetailLandingPageAction',  '_locale' => 'en',));
        }

        // culture.tr
        if ($pathinfo === '/hakkimizda/kultur') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::cultureLandingPageAction',  '_locale' => 'tr',  '_route' => 'culture.tr',);
        }

        // culture.en
        if ($pathinfo === '/en/about-us/culture') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::cultureLandingPageAction',  '_locale' => 'en',  '_route' => 'culture.en',);
        }

        // press.tr
        if ($pathinfo === '/hakkimizda/basin') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::pressAction',  '_locale' => 'tr',  '_route' => 'press.tr',);
        }

        // press.en
        if ($pathinfo === '/en/about-us/press') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::pressAction',  '_locale' => 'en',  '_route' => 'press.en',);
        }

        // brand.tr
        if ($pathinfo === '/hakkimizda/iyzico-marka-kilavuzu') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::brandsLandingPageAction',  '_locale' => 'tr',  '_route' => 'brand.tr',);
        }

        // brand.en
        if ($pathinfo === '/en/about-us/iyzico-brand-guide') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::brandsLandingPageAction',  '_locale' => 'en',  '_route' => 'brand.en',);
        }

        // newGraduate.tr
        if ($pathinfo === '/career/new-graduate') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::newGraduateLandingPageAction',  '_locale' => 'tr',  '_route' => 'newGraduate.tr',);
        }

        // newGraduate.en
        if ($pathinfo === '/en/career/new-graduate') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::newGraduateLandingPageAction',  '_locale' => 'en',  '_route' => 'newGraduate.en',);
        }

        if (0 === strpos($pathinfo, '/https://merchant.iyzipay.com/auth/login')) {
            // merhantPanelLogin.tr
            if ($pathinfo === '/https://merchant.iyzipay.com/auth/login') {
                return array (  '_locale' => 'tr',  '_route' => 'merhantPanelLogin.tr',);
            }

            // merhantPanelLogin.en
            if ($pathinfo === '/https://merchant.iyzipay.com/auth/login') {
                return array (  '_locale' => 'en',  '_route' => 'merhantPanelLogin.en',);
            }

        }

        // help_center.tr
        if ($pathinfo === '/destek/yardim-merkezi') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::helpCenterLandingPageAction',  '_locale' => 'tr',  '_route' => 'help_center.tr',);
        }

        // help_center.en
        if ($pathinfo === '/en/support/help-center') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::helpCenterLandingPageAction',  '_locale' => 'en',  '_route' => 'help_center.en',);
        }

        // help_center_category.tr
        if (0 === strpos($pathinfo, '/destek/yardim-merkezi') && preg_match('#^/destek/yardim\\-merkezi/(?P<categorySlug>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'help_center_category.tr')), array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::helpCenterCategoryAction',  '_locale' => 'tr',));
        }

        // help_center_category.en
        if (0 === strpos($pathinfo, '/en/support/help-center') && preg_match('#^/en/support/help\\-center/(?P<categorySlug>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'help_center_category.en')), array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::helpCenterCategoryAction',  '_locale' => 'en',));
        }

        // help_center_sub_category.tr
        if (0 === strpos($pathinfo, '/destek/yardim-merkezi') && preg_match('#^/destek/yardim\\-merkezi/(?P<categorySlug>[^/]++)/(?P<subCategorySlug>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'help_center_sub_category.tr')), array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::helpCenterSubCategoryAction',  '_locale' => 'tr',));
        }

        // help_center_sub_category.en
        if (0 === strpos($pathinfo, '/en/support/help-center') && preg_match('#^/en/support/help\\-center/(?P<categorySlug>[^/]++)/(?P<subCategorySlug>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'help_center_sub_category.en')), array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::helpCenterSubCategoryAction',  '_locale' => 'en',));
        }

        // contact_us.tr
        if ($pathinfo === '/destek/iletisim') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::contactUsLandingPageAction',  '_locale' => 'tr',  '_route' => 'contact_us.tr',);
        }

        // contact_us.en
        if ($pathinfo === '/en/support/contact-us') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::contactUsLandingPageAction',  '_locale' => 'en',  '_route' => 'contact_us.en',);
        }

        // contact_us_success.tr
        if ($pathinfo === '/destek/iletisim/basarili') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::contactUsSuccessLandingPageAction',  '_locale' => 'tr',  '_route' => 'contact_us_success.tr',);
        }

        // contact_us_success.en
        if ($pathinfo === '/en/contact-us-success') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::contactUsSuccessLandingPageAction',  '_locale' => 'en',  '_route' => 'contact_us_success.en',);
        }

        // contact_us_fail.tr
        if ($pathinfo === '/iletisim-basarisiz') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::contactUsFailLandingPageAction',  '_locale' => 'tr',  '_route' => 'contact_us_fail.tr',);
        }

        // contact_us_fail.en
        if ($pathinfo === '/en/contact-us-fail') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::contactUsFailLandingPageAction',  '_locale' => 'en',  '_route' => 'contact_us_fail.en',);
        }

        // general_conditions.tr
        if ($pathinfo === '/genel-sartlar') {
            return array (  '_controller' => 'WebBundle\\Controller\\SupportController::generalTermsAction',  '_locale' => 'tr',  '_route' => 'general_conditions.tr',);
        }

        // general_conditions.en
        if ($pathinfo === '/en/general-conditions') {
            return array (  '_controller' => 'WebBundle\\Controller\\SupportController::generalTermsAction',  '_locale' => 'en',  '_route' => 'general_conditions.en',);
        }

        // service_status.tr
        if ($pathinfo === '/destek/servis-durumu') {
            return array (  '_controller' => 'WebBundle\\Controller\\ServerStatusController::indexAction',  '_locale' => 'tr',  '_route' => 'service_status.tr',);
        }

        // service_status.en
        if ($pathinfo === '/en/support/service-status') {
            return array (  '_controller' => 'WebBundle\\Controller\\ServerStatusController::indexAction',  '_locale' => 'en',  '_route' => 'service_status.en',);
        }

        // service_status_logs.tr
        if (0 === strpos($pathinfo, '/destek/servis-ay') && preg_match('#^/destek/servis\\-ay/(?P<ruleName>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'service_status_logs.tr')), array (  '_controller' => 'WebBundle\\Controller\\ServerStatusController::getLogAction',  '_locale' => 'tr',));
        }

        // service_status_logs.en
        if (0 === strpos($pathinfo, '/en/support/service-month') && preg_match('#^/en/support/service\\-month/(?P<ruleName>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'service_status_logs.en')), array (  '_controller' => 'WebBundle\\Controller\\ServerStatusController::getLogAction',  '_locale' => 'en',));
        }

        // service_status_days.tr
        if (0 === strpos($pathinfo, '/destek/servis-gun') && preg_match('#^/destek/servis\\-gun/(?P<ruleName>[^/]++)/(?P<datetime>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'service_status_days.tr')), array (  '_controller' => 'WebBundle\\Controller\\ServerStatusController::getDayAction',  '_locale' => 'tr',));
        }

        // service_status_days.en
        if (0 === strpos($pathinfo, '/en/support/service-day') && preg_match('#^/en/support/service\\-day/(?P<ruleName>[^/]++)/(?P<datetime>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'service_status_days.en')), array (  '_controller' => 'WebBundle\\Controller\\ServerStatusController::getDayAction',  '_locale' => 'en',));
        }

        // form_contact_us.tr
        if ($pathinfo === '/forms/contact-us') {
            return array (  '_controller' => 'WebBundle\\Controller\\FormsController::contactUsAction',  '_locale' => 'tr',  '_route' => 'form_contact_us.tr',);
        }

        // form_contact_us.en
        if ($pathinfo === '/en/forms/contact-us') {
            return array (  '_controller' => 'WebBundle\\Controller\\FormsController::contactUsAction',  '_locale' => 'en',  '_route' => 'form_contact_us.en',);
        }

        // form_join_us.tr
        if ($pathinfo === '/forms/join-us') {
            return array (  '_controller' => 'WebBundle\\Controller\\FormsController::joinUsAction',  '_locale' => 'tr',  '_route' => 'form_join_us.tr',);
        }

        // form_join_us.en
        if ($pathinfo === '/en/forms/join-us') {
            return array (  '_controller' => 'WebBundle\\Controller\\FormsController::joinUsAction',  '_locale' => 'en',  '_route' => 'form_join_us.en',);
        }

        // form_sign_up.tr
        if ($pathinfo === '/forms/sign-up') {
            return array (  '_controller' => 'WebBundle\\Controller\\FormsController::signupAction',  '_locale' => 'tr',  '_route' => 'form_sign_up.tr',);
        }

        // form_sign_up.en
        if ($pathinfo === '/en/forms/sign-up') {
            return array (  '_controller' => 'WebBundle\\Controller\\FormsController::signupAction',  '_locale' => 'en',  '_route' => 'form_sign_up.en',);
        }

        // aras_kargo_campaign.tr
        if ($pathinfo === '/isim-icin/iyzico-aras-kargo-kampanyasi') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::arasCargoCampaignLandingPageAction',  '_locale' => 'tr',  '_route' => 'aras_kargo_campaign.tr',);
        }

        // aras_kargo_campaign.en
        if (rtrim($pathinfo, '/') === '/en/business') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'aras_kargo_campaign.en');
            }

            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::arasCargoCampaignLandingPageAction',  '_locale' => 'en',  '_route' => 'aras_kargo_campaign.en',);
        }

        // subscription_landing_page.tr
        if ($pathinfo === '/isim-icin/abonelik-yontemi') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::subscriptionLandingPageAction',  '_locale' => 'tr',  '_route' => 'subscription_landing_page.tr',);
        }

        // subscription_landing_page.en
        if ($pathinfo === '/en/business/subscription-system') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::subscriptionLandingPageAction',  '_locale' => 'en',  '_route' => 'subscription_landing_page.en',);
        }

        // brandWeek_landing_page.tr
        if ($pathinfo === '/brandweek') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::brandweekLandingPageAction',  '_locale' => 'tr',  '_route' => 'brandWeek_landing_page.tr',);
        }

        // brandWeek_landing_page.en
        if ($pathinfo === '/en/brandweek') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::brandweekLandingPageAction',  '_locale' => 'en',  '_route' => 'brandWeek_landing_page.en',);
        }

        // registerResultSuccess.tr
        if ($pathinfo === '/kendim-icin/basarili') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::registerResultSuccessAction',  '_locale' => 'tr',  '_route' => 'registerResultSuccess.tr',);
        }

        // registerResultSuccess.en
        if ($pathinfo === '/en/personal/success') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::registerResultSuccessAction',  '_locale' => 'en',  '_route' => 'registerResultSuccess.en',);
        }

        // registerResultFail.tr
        if ($pathinfo === '/kendim-icin/hatali') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::registerResultFailAction',  '_locale' => 'tr',  '_route' => 'registerResultFail.tr',);
        }

        // registerResultFail.en
        if ($pathinfo === '/en/personal/fail') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::registerResultFailAction',  '_locale' => 'en',  '_route' => 'registerResultFail.en',);
        }

        // consumer_new_member_signup.tr
        if ($pathinfo === '/forms/consumer-new-member-signup') {
            return array (  '_controller' => 'WebBundle\\Controller\\FormsController::consumerNewMemberSignupAction',  '_locale' => 'tr',  '_route' => 'consumer_new_member_signup.tr',);
        }

        // consumer_new_member_signup.en
        if ($pathinfo === '/en/forms/consumer-new-member-signup') {
            return array (  '_controller' => 'WebBundle\\Controller\\FormsController::consumerNewMemberSignupAction',  '_locale' => 'en',  '_route' => 'consumer_new_member_signup.en',);
        }

        // register_new_member_signup.tr
        if ($pathinfo === '/forms/register-new-member-signup') {
            return array (  '_controller' => 'WebBundle\\Controller\\FormsController::registerNewMemberSignupAction',  '_locale' => 'tr',  '_route' => 'register_new_member_signup.tr',);
        }

        // register_new_member_signup.en
        if ($pathinfo === '/en/forms/register-new-member-signup') {
            return array (  '_controller' => 'WebBundle\\Controller\\FormsController::registerNewMemberSignupAction',  '_locale' => 'en',  '_route' => 'register_new_member_signup.en',);
        }

        // consumer_otp_check.tr
        if ($pathinfo === '/forms/consumer-otp-check') {
            return array (  '_controller' => 'WebBundle\\Controller\\FormsController::otpCheckAction',  '_locale' => 'tr',  '_route' => 'consumer_otp_check.tr',);
        }

        // consumer_otp_check.en
        if ($pathinfo === '/en/forms/consumer-otp-check') {
            return array (  '_controller' => 'WebBundle\\Controller\\FormsController::otpCheckAction',  '_locale' => 'en',  '_route' => 'consumer_otp_check.en',);
        }

        // consumer_otp_re_send_check.tr
        if ($pathinfo === '/forms/consumer-otp-re-send-check') {
            return array (  '_controller' => 'WebBundle\\Controller\\FormsController::otpReSendCheckAction',  '_locale' => 'tr',  '_route' => 'consumer_otp_re_send_check.tr',);
        }

        // consumer_otp_re_send_check.en
        if ($pathinfo === '/en/forms/consumer-otp-re-send-check') {
            return array (  '_controller' => 'WebBundle\\Controller\\FormsController::otpReSendCheckAction',  '_locale' => 'en',  '_route' => 'consumer_otp_re_send_check.en',);
        }

        // new_member_register_signup.tr
        if ($pathinfo === '/forms/new-member-register-signup') {
            return array (  '_controller' => 'WebBundle\\Controller\\FormsController::newMemberRegisterAction',  '_locale' => 'tr',  '_route' => 'new_member_register_signup.tr',);
        }

        // new_member_register_signup.en
        if ($pathinfo === '/en/forms/new-member-register-signup') {
            return array (  '_controller' => 'WebBundle\\Controller\\FormsController::newMemberRegisterAction',  '_locale' => 'en',  '_route' => 'new_member_register_signup.en',);
        }

        // mass_pay_out_landingpage.tr
        if ($pathinfo === '/isim-icin/coklu-para-gonderimi') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::businessMassPayOutLandingPageAction',  '_locale' => 'tr',  '_route' => 'mass_pay_out_landingpage.tr',);
        }

        // mass_pay_out_landingpage.en
        if ($pathinfo === '/en/business/mass-pay-out') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::businessMassPayOutLandingPageAction',  '_locale' => 'en',  '_route' => 'mass_pay_out_landingpage.en',);
        }

        // pay_with_iyzico_landingpage.tr
        if ($pathinfo === '/isim-icin/iyzico-ile-ode') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::businessPayWithiyzicoLandingPageAction',  '_locale' => 'tr',  '_route' => 'pay_with_iyzico_landingpage.tr',);
        }

        // pay_with_iyzico_landingpage.en
        if ($pathinfo === '/en/business/pay-with-iyzico') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::businessPayWithiyzicoLandingPageAction',  '_locale' => 'en',  '_route' => 'pay_with_iyzico_landingpage.en',);
        }

        // iyzico_cep_pos_landingpage.tr
        if ($pathinfo === '/isim-icin/iyzico-cep-pos') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::businessiyzicoCepPosLandingPageAction',  '_locale' => 'tr',  '_route' => 'iyzico_cep_pos_landingpage.tr',);
        }

        // iyzico_cep_pos_landingpage.en
        if ($pathinfo === '/en/business/iyzico-cep-pos') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::businessiyzicoCepPosLandingPageAction',  '_locale' => 'en',  '_route' => 'iyzico_cep_pos_landingpage.en',);
        }

        // ihtiyacharitasi_landing_page.tr
        if ($pathinfo === '/hakkimizda/sosyal-sorumluluk/ihtiyac-haritasi') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::ihtiyacHaritasiLandingPageAction',  '_locale' => 'tr',  '_route' => 'ihtiyacharitasi_landing_page.tr',);
        }

        // ihtiyacharitasi_landing_page.en
        if ($pathinfo === '/en/about-us/social-responsibilty/ihtiyac-haritasi') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::ihtiyacHaritasiLandingPageAction',  '_locale' => 'en',  '_route' => 'ihtiyacharitasi_landing_page.en',);
        }

        // massPayOutRegister_landing_page.tr
        if ($pathinfo === '/coklu-para-gonderimi/hesap-olustur') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::massPayOutRegisterLandingPageAction',  '_locale' => 'tr',  '_route' => 'massPayOutRegister_landing_page.tr',);
        }

        // massPayOutRegister_landing_page.en
        if ($pathinfo === '/en/coklu-para-gonderimi/hesap-olustur') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::massPayOutRegisterLandingPageAction',  '_locale' => 'en',  '_route' => 'massPayOutRegister_landing_page.en',);
        }

        // privileges_landing_page.tr
        if ($pathinfo === '/isim-icin/ayricaliklar') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::privilegesLandingPageAction',  '_locale' => 'tr',  '_route' => 'privileges_landing_page.tr',);
        }

        // privileges_landing_page.en
        if ($pathinfo === '/en/business/privileges') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::privilegesLandingPageAction',  '_locale' => 'en',  '_route' => 'privileges_landing_page.en',);
        }

        // sme_landing_page.tr
        if ($pathinfo === '/kobi') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::smeLandingPageAction',  '_locale' => 'tr',  '_route' => 'sme_landing_page.tr',);
        }

        // sme_landing_page.en
        if ($pathinfo === '/en') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::smeLandingPageAction',  '_locale' => 'en',  '_route' => 'sme_landing_page.en',);
        }

        // goodToGood_landing_page.tr
        if ($pathinfo === '/hakkimizda/sosyal-sorumluluk') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::goodToGoodLandingPageAction',  '_locale' => 'tr',  '_route' => 'goodToGood_landing_page.tr',);
        }

        // goodToGood_landing_page.en
        if ($pathinfo === '/en/about-us/social-responsibilty') {
            return array (  '_controller' => 'WebBundle\\Controller\\LandingPageController::goodToGoodLandingPageAction',  '_locale' => 'en',  '_route' => 'goodToGood_landing_page.en',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
