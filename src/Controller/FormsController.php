<?php
/*
 * This controller handles posted forms.
 */
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Controller\BaseController as Controller;
use Symfony\Component\HttpFoundation\Session\Session;

class FormsController extends BaseController
{

    public function joinUsAction(Request $request){
        $router = $this->get('router');
        $locale = $this->get("session")->get('_locale');
        $localeAddition = "";
        if ($locale == "en") $localeAddition = "-en";
        $referer =  $router->generate('career',array('ga'=>'form-kariyer-submit'.$localeAddition));

        if ($request->isMethod('POST') && $this->isCsrfTokenValid('join-us', $request->request->get('_csrf_token'))) {

            $utils = $this->get('web.utils_service');
            $session = new Session();
            $translations = $this->getTranslations();

            try {
                $allowedTypes = array('image/jpeg','application/pdf','image/png','image/tiff','application/msword','application/vnd.openxmlformats-officedocument.wordprocessingml.document');
                $tempPath = $request->files->get('upload')->getPath();
                $uploadedFile = $request->files->get('upload');
                $fileMime =$uploadedFile->getMimeType();
                if(!in_array($fileMime, $allowedTypes)) {
                    $fileToAttach = false;
                } else {
                    $fileToAttach = $uploadedFile->move($tempPath, $uploadedFile->getClientOriginalName());
                }

                $isPositionSelected = false;
                //$position = $request->request->get('position');
                //if ($position == "other" || $position == "not-specified") $isPositionSelected = false;

                $subject = "Yeni İş Başvurusu";
                if ($isPositionSelected) {
                    $subject .= " (" . $position . ")";
                }

                $message = \Swift_Message::newInstance()
                    ->setSubject($subject)
                    ->setFrom('careers@iyzico.com')
                    ->setTo($this->decideToAddress(-3))
                    ->setBody(
                        $this->renderView(
                            'Emails/join-us-template.html.twig',
                            array(
                                'isPositionSelected' => $isPositionSelected,
                                'name' => $request->request->get('name'),
                                'position' => $request->request->get('position'),
                                'phone' => $request->request->get('phone'),
                                'mail' => $request->request->get('mail')
                            )
                        ),
                        'text/html'
                    )
                    ->attach(\Swift_Attachment::fromPath($fileToAttach));
                $this->get('mailer')->send($message);
                $session->getFlashBag()->add('success',$translations->iyzicoJoinForm->IslemBasariliMesaji);
            } catch(\Exception $e) {
                $session->getFlashBag()->add('error',$translations->iyzicoJoinForm->IslemHataliMesaji);
            }

            return $this->redirect($referer);
        } else {
            throw $this->createNotFoundException('The page you are looking for cannot be found.');
        }

    }

    private function decideToAddress($subject = false){
        $allAddresses = $this->getParameter('email_addresses');
        if ($subject === false){
            return $allAddresses['destek'];
        } else {

            $contactAdresses = array(
                '-5'=>'internationalSales',
                '-4'=>'partners',
                '-3'=>'hr',
                '1'=>'basvuru',
                '2'=>'destek',
                '3'=>'sikayet',
                '4'=>'entegrasyon',
                '5'=>'odeme',
            );

            if (isset($contactAdresses[$subject])){
                $address = $allAddresses[$contactAdresses[$subject]];
            } else {
                $address = $allAddresses['destek'];
            }
            return $address;
        }

    }

    public function contactUsAction(Request $request){
        if ($request->isMethod('POST') && $this->isCsrfTokenValid('contact-us', $request->request->get('_csrf_token'))) {

            $utils = $this->get('web.utils_service');

            if ( null !== $request->request->get('reason') ) {
                $data = array(
                    'name' => $request->request->get('name'),
                    'email' => $request->request->get('email'),
                    'description' => $request->request->get('message'),
                    'reason' => $request->request->get('reason'),
                );
            } else {
                $data = array(
                    'reason' => "Yardim Merkezi",
                    'name' => $request->request->get('name'),
                    'email' => $request->request->get('mail'),
                    'description' => $request->request->get('message')
                );

            }
            $utils->postToSalesforce($data,'webToCase');

            return $this->redirectToRoute('contact_us_success');
        } else {
            throw $this->createNotFoundException('The page you are looking cannot be found.');
        }
    }

    public function newMemberSignupAction(Request $request){
        if ($request->isMethod('POST') && $this->isCsrfTokenValid('new-member-sign-up', $request->request->get('_csrf_token'))) {

            $utils = $this->get('web.utils_service');

            $registerChannel = 'IYZICO_WEB';

            if($utils->isMobile()) {
                $registerChannel = 'IYZICO_MOBILE_WEB';
            }

            if($request->request->has('recaptcha-response')) {
                $captchaResponse = $utils->validateRecapthca();
            }

            $session = new Session();
            $translations = $this->getTranslations();
            $router = $this->get('router');
            $locale = $this->get("session")->get('_locale');

            $payload = array(
                "name"                  => $request->request->get('name'),
                "surName"               => $request->request->get('surname'),
                "email"                 => $request->request->get('email'),
                "phoneNumber"           => $request->request->get('phone'),
                "secretWord"            => $request->request->get('password'),
                "confirmSecretWord"     => $request->request->get('password'),
                "registerLeadSource"    => $request->getSession()->get('register_lead_source'),
                "registerChannel"       => $registerChannel,
                "locale"                => $locale,
                "reCaptchaResponse"     => $request->request->get('g-recaptcha-response'),
                "memberType"            => $request->request->get('memberType'),

            );

            $region = $this->get("session")->get('_region');

            if ($request->request->get('source') == 'iyzilink') {
                $payload['onboardingSource'] = "IYZILINK";
            }

            if ($request->request->get('memberType') == "FEMALEENT") {
                $payload['memberType'] = "BUSINESS";
                $payload['registerLeadSource'] = "KADINGIRISIMCININYANINDAYIZ";
            }

            if ($request->request->get('memberType') == "SANDBOX") {

                $restResponse = $utils->sandBoxRegisterPost($payload);

            }else {
                $restResponse = $utils->newMemberRegisterPost($payload);
            }

            if ($restResponse->status == "success") {

                if ($locale == "en") {
                    $successMessage = $translations->iyzicoSignupModal->IslemBasariliMesaji.' '.$request->request->get('email');
                } else {
                    $successMessage = $request->request->get('email').' '.$translations->iyzicoSignupModal->IslemBasariliMesaji;
                }

                $session->getFlashBag()->add('registerSuccess', $successMessage);

                $localeAddition = "";

                $ga = "kurumsal-uyelik-submit";
                if ($request->request->get('memberType') == "PERSONAL") {
                    $ga = "bireysel-uyelik-submit";
                }

                if ($locale == "en") $localeAddition = "-en";

                $referer =  $router->generate('business_register_result',array('ga'=>$ga.$localeAddition));

            } else {

                $referer =  $router->generate('business_register_result_fail');

                $session->getFlashBag()->add( 'error', $restResponse->errorMessage );
            }
            return $this->redirect($referer);
        } else {
            throw $this->createNotFoundException('The page you are looking cannot be found.');
        }
    }


    public function consumerNewMemberSignupAction(Request $request){
        if ($request->isMethod('POST') && $this->isCsrfTokenValid('consumer-new-member-signup', $request->request->get('_csrf_token'))) {

            $utils = $this->get('web.utils_service');
            $formType = 'getoffer';
            $utils->incrementSubmitCount($formType);

            if($request->request->has('recaptcha-response')) {
                $captchaResponse = $utils->validateRecapthca();
            }

            if($request->request->get('kvkk') === "on" ) {
                $pdppPermissionResponse = "PERMITTED_ON_REGISTER";
            } else {
                $pdppPermissionResponse = "UNCHECKED_ON_REGISTER";
            }

            if($request->request->get('ticari') === "on" ) {
                $communicationPermissionResponse = "PERMITTED";
            } else {
                $communicationPermissionResponse = "UNCHECKED_ON_REGISTER";
            }

            $registerChannel = 'IYZICO_WEB';

            if($utils->isMobile()) {
                $registerChannel = 'IYZICO_MOBILE_WEB';
            }

            $session = new Session();
            $translations = $this->getTranslations();
            $router = $this->get('router');
            $locale = $this->get("session")->get('_locale');
            $token = $this->get("session")->get('token');

            $payload = array(
                "name"                      => $request->request->get('name'),
                "surName"                   => $request->request->get('surname'),
                "email"                     => $request->request->get('email'),
                "phoneNumber"               => $request->request->get('phone'),
                "registerLeadSource"        => "CAMPAIGN_REGISTER",
                "registerChannel"           => "PAY_WITH_IYZICO",
                "locale"                    => $locale,
                "reCaptchaResponse"         => $request->request->get('g-recaptcha-response'),
                "memberType"                => "PERSONAL",
                "pdppPermission"            => $pdppPermissionResponse,
                "communicationsPermission"   => $communicationPermissionResponse,
                "outlineAgreementStatus"    => "ACCEPTED",
                "token"                     => $token,
            );

            $region = $this->get("session")->get('_region');

            $restResponse = $utils->consumerNewMemberRegisterPost($payload);

            if ($restResponse->status == "success") {

                $session = new Session();
                $session->set('referenceCode', $restResponse->data->referenceCode);
                $session->set('gsmNumber', $restResponse->data->gsmNumber);
                $session->set('memberUserId', $restResponse->data->memberUserId);

                if ($locale == "en") {
                    $successMessage = $translations->iyzicoSignupModal->IslemBasariliMesaji.' '.$request->request->get('email');
                } else {
                    $successMessage = $request->request->get('email').' '.$translations->iyzicoSignupModal->IslemBasariliMesaji;
                }

                $session->getFlashBag()->add('consumerRegisterOtp', $successMessage);

                $localeAddition = "";

                $ga = "brandweek-yeni-uyelik";


                if ($locale == "en") $localeAddition = "-en";
                $referer =  $router->generate('brandWeek_landing_page',array('ga'=>$ga.$localeAddition));


            } else {
                $referer =  $router->generate('brandWeek_landing_page');

                $session->getFlashBag()->add('consumerRegisterFail',$restResponse->errorMessage
                );
            }
            return $this->redirect($referer);
        } else {
            throw $this->createNotFoundException('The page you are looking cannot be found.');
        }
    }

    public function registerNewMemberSignupAction(Request $request){
        if ($request->isMethod('POST') && $this->isCsrfTokenValid('register-new-member-signup', $request->request->get('_csrf_token'))) {


            $utils = $this->get('web.utils_service');
            $formType = 'getoffer';
            $utils->incrementSubmitCount($formType);

            if($request->request->has('recaptcha-response')) {
                $captchaResponse = $utils->validateRecapthca();
            }

            if($request->request->get('kvkk') === "on" ) {
                $pdppPermissionResponse = "PERMITTED_ON_REGISTER";
            } else {
                $pdppPermissionResponse = "UNCHECKED_ON_REGISTER";
            }

            if($request->request->get('corporate') === "on" ) {
                $communicationPermissionResponse = "PERMITTED";
            } else {
                $communicationPermissionResponse = "UNCHECKED_ON_REGISTER";
            }

            $registerChannel = 'IYZICO_WEB';

            if($utils->isMobile()) {
                $registerChannel = 'IYZICO_MOBILE_WEB';
            }

            $session = new Session();
            $translations = $this->getTranslations();
            $router = $this->get('router');
            $locale = $this->get("session")->get('_locale');
            $token = $this->get("session")->get('token');

            $payload = array(
                "name"                      => $request->request->get('name'),
                "surName"                   => $request->request->get('surname'),
                "email"                     => $request->request->get('email'),
                "phoneNumber"               => $request->request->get('phone'),
                "secretWord"                => $request->request->get('password'),
                "confirmSecretWord"         => $request->request->get('password'),
                "registerLeadSource"        => $request->getSession()->get('register_lead_source'),
                "registerChannel"           => $registerChannel,
                "locale"                    => $locale,
                "reCaptchaResponse"         => $request->request->get('g-recaptcha-response'),
                "memberType"                => "PERSONAL",
                "pdppPermission"            => $pdppPermissionResponse,
                "communicationsPermission"   => $communicationPermissionResponse,
                "outlineAgreementStatus"    => "ACCEPTED",
            );

            $region = $this->get("session")->get('_region');

            $restResponse = $utils->consumerNewMemberRegisterPost($payload);


            if ($restResponse->status == "success") {
                $session = $this->get("session");
                $session->set('referenceCode', $restResponse->data->referenceCode);
                $session->set('gsmNumber', $restResponse->data->gsmNumber);
                $session->set('memberUserId', $restResponse->data->memberUserId);

                if ($locale == "en") {
                    $successMessage = $translations->iyzicoSignupModal->IslemBasariliMesaji.' '.$request->request->get('email');
                } else {
                    $successMessage = $request->request->get('email').' '.$translations->iyzicoSignupModal->IslemBasariliMesaji;
                }

                $session->getFlashBag()->add('consumerRegisterOtp', $successMessage);

                $localeAddition = "";

                $ga = "brandweek-yeni-uyelik";


                if ($locale == "en") $localeAddition = "-en";
                $referer =  $router->generate('brandWeek_landing_page',array('ga'=>$ga.$localeAddition));


            } else {
                $referer =  $router->generate('brandWeek_landing_page');

                $session->getFlashBag()->add('consumerRegisterFail',$restResponse->errorMessage
                );
            }
            $response = new JsonResponse($restResponse);
            return $response;
        } else {
            throw $this->createNotFoundException('The page you are looking cannot be found.');
        }
    }

    public function otpCheckAction(Request $request){

        if ($request->isMethod('POST')) {

            $utils = $this->get('web.utils_service');
            $formType = 'getoffer';
            $utils->incrementSubmitCount($formType);

            if($request->request->has('recaptcha-response')) {
                $captchaResponse = $utils->validateRecapthca();
            }

            $registerChannel = 'IYZICO_WEB';

            if($utils->isMobile()) {
                $registerChannel = 'IYZICO_MOBILE_WEB';
            }

            $translations = $this->getTranslations();
            $router = $this->get('router');
            $locale = $this->get("session")->get('_locale');

            $payload = $_POST;

            $loginSmsVerification = array(
                'memberUserId' => $this->get("session")->get('memberUserId'),
                'referenceCode' => $this->get("session")->get('referenceCode'),
                'verificationCode' => $payload['verificationCode'],

            );
            $payload = array(
                "loginSmsVerification"       => $loginSmsVerification,
                "clientIp"                   => $this->get("session")->get('clientIp'),
                "loginChannel"               => $this->get("session")->get('loginChannel'),
            );

            $region = $this->get("session")->get('_region');

            $restResponse = $utils->consumerMemberRegisterOTPPost($payload);

            $response = new JsonResponse($restResponse);

            return $response;

        } else {
            throw $this->createNotFoundException('The page you are looking cannot be found.');
        }
    }

    public function otpReSendCheckAction(Request $request){

        if ($request->isMethod('POST')) {

            $utils = $this->get('web.utils_service');
            $formType = 'getoffer';
            $utils->incrementSubmitCount($formType);

            $translations = $this->getTranslations();
            $router = $this->get('router');
            $locale = $this->get("session")->get('_locale');

            $payload = array(
                'memberUserId' => $request->get('memberUserId'),
                'referenceCode' => $request->get('referenceCode'),
            );


            $region = $this->get("session")->get('_region');

            $restResponse = $utils->consumerMemberRegisterReSendOTPPost($payload);

            $response = new JsonResponse($restResponse->status);

            return $response;

        } else {
            throw $this->createNotFoundException('The page you are looking cannot be found.');
        }
    }

    public function newMemberRegisterAction(Request $request){

        if ($request->isMethod('POST')) {

            $session = new Session();
            $session->remove('referenceCode');
            $session->remove('memberUserId');
            $session->remove('clientIp');
            $session->remove('loginChannel');

            $utils = $this->get('web.utils_service');
            $formType = 'getoffer';
            $utils->incrementSubmitCount($formType);

            $translations = $this->getTranslations();
            $router = $this->get('router');
            $locale = $this->get("session")->get('_locale');

            $registerChannel = 'IYZICO_WEB';

            if($utils->isMobile()) {
                $registerChannel = 'IYZICO_MOBILE_WEB';
            }

            $clientIp = $request->getClientIp();

            $payload = $_POST;

            $region = $this->get("session")->get('_region');

            $restResponse = $utils->newMemberRegisterPost($payload);


            if ($restResponse->status == "success") {

                $session->set('referenceCode', $restResponse->data->referenceCode);
                $session->set('memberUserId', $restResponse->data->memberUserId);
                $session->set('clientIp', $clientIp);
                $session->set('loginChannel', $registerChannel);

            }else {
                $referer =  $router->generate('brandWeek_landing_page');
                $session = new Session();
                $session->set('memberUserId', "incorrectUserCode");
                $session->getFlashBag()->add('consumerRegisterFail',$restResponse->errorMessage
                );
            }

            $response = new JsonResponse($restResponse);

            return $response;

        } else {
            throw $this->createNotFoundException('The page you are looking cannot be found.');
        }
    }

    public function offerAction(Request $request){
        if ($request->isMethod('POST') && $this->isCsrfTokenValid('get-offer', $request->request->get('_csrf_token'))) {

            $utils = $this->get('web.utils_service');
            $formType = 'getoffer';
            $utils->incrementSubmitCount($formType);

            $session = new Session();
            $translations = $this->getTranslations();
            $locale = $this->get("session")->get('_locale');
            $localeAddition = "";
            if ($locale == "en") $localeAddition = "-en";
            $router = $this->get('router');

            if ( $request->request->has('recaptcha-response') ){
                $captchaResponse = $utils->validateRecapthca();
            }else {
                $captchaResponse = true;
            }

            if ($captchaResponse) {
                $postFields = [
                    'last_name' => $request->request->get('last_name'),
                    'email' => $request->request->get('emailLead'),
                    'mobile' => $request->request->get('mobile'),
                    'url' => $request->request->get('url'),
                    'company' => $request->request->get('url'),
                    'lead_source' => "Website"
                ];
                $utils->postToSalesforce($postFields,'webToLead');
                $session->getFlashBag()->add('success',$translations->iyzicoOfferModal->IslemBasariliMesaji);
                $referer =  $router->generate('business',array('ga'=>'form-lead-submit'.$localeAddition));

            } else {
                $referer =  $router->generate('business');
                $session->getFlashBag()->add(
                    'error',
                    'Robot olmadığınızı doğrulamanız gerekiyor.'
                );
            }
            return $this->redirect($referer);
        } else {
            throw $this->createNotFoundException('The page you are looking cannot be found.');
        }
    }
    public function cepPosOfferAction(Request $request){
        if ($request->isMethod('POST') && $this->isCsrfTokenValid('cep-pos-offer', $request->request->get('_csrf_token'))) {

            $utils = $this->get('web.utils_service');
            $formType = 'getoffer';
            $utils->incrementSubmitCount($formType);

            $session = new Session();
            $translations = $this->getTranslations();
            $locale = $this->get("session")->get('_locale');
            $localeAddition = "";
            if ($locale == "en") $localeAddition = "-en";
            $router = $this->get('router');

            if ( $request->request->has('recaptcha-response') ){
                $captchaResponse = $utils->validateRecapthca();
            }else {
                $captchaResponse = true;
            }

            if ($captchaResponse) {
                $postFields = [
                    'last_name' => $request->request->get('last_name'),
                    'email' => $request->request->get('emailLead'),
                    'mobile' => $request->request->get('mobile'),
                    'url' => $request->request->get('url'),
                    'company' => $request->request->get('url'),
                    'lead_source' => "CepPOS"
                ];
                $utils->postToSalesforce($postFields,'webToLead');
                $session->getFlashBag()->add('success',$translations->iyzicoOfferModal->IslemBasariliMesaji);
                $referer =  $router->generate('iyzico_cep_pos_landingpage',array('ga'=>'form-lead-submit'.$localeAddition));

            } else {
                $referer =  $router->generate('iyzico_cep_pos_landingpage');
                $session->getFlashBag()->add(
                    'error',
                    'Robot olmadığınızı doğrulamanız gerekiyor.'
                );
            }
            return $this->redirect($referer);
        } else {
            throw $this->createNotFoundException('The page you are looking cannot be found.');
        }
    }

    public function cashPackageOfferAction(Request $request){
        if ($request->isMethod('POST') && $this->isCsrfTokenValid('cash-package-offer', $request->request->get('_csrf_token'))) {

            $utils = $this->get('web.utils_service');
            $formType = 'getoffer';
            $utils->incrementSubmitCount($formType);

            $session = new Session();
            $translations = $this->getTranslations();
            $locale = $this->get("session")->get('_locale');
            $localeAddition = "";
            if ($locale == "en") $localeAddition = "-en";
            $router = $this->get('router');

            if ( $request->request->has('recaptcha-response') ){
                $captchaResponse = $utils->validateRecapthca();
            }else {
                $captchaResponse = true;
            }

            if ($captchaResponse) {
                $postFields = [
                    'last_name' => $request->request->get('last_name'),
                    'email' => $request->request->get('email'),
                    'mobile' => $request->request->get('mobile'),
                    'url' => $request->request->get('url'),
                    'lead_source' => "bizeBirak"
                ];

                $utils->postToSalesforce($postFields,'webToLead');
                $session->getFlashBag()->add('success',$translations->iyzicoOfferModal->IslemBasariliMesaji);
                $referer =  $router->generate('business',array('ga'=>'cash-package-lead-submit'.$localeAddition));

            } else {
                $referer =  $router->generate('business');
                $session->getFlashBag()->add(
                    'error',
                    'Robot olmadığınızı doğrulamanız gerekiyor.'
                );
            }
            return $this->redirect($referer);
        } else {
            throw $this->createNotFoundException('The page you are looking cannot be found.');
        }
    }

    public function buyerProtectedMoneyTransferAction(Request $request){
        if ($request->isMethod('POST') && $this->isCsrfTokenValid('buyer-protected-money-transfer', $request->request->get('_csrf_token'))) {

            $utils = $this->get('web.utils_service');
            $formType = 'getoffer';
            $utils->incrementSubmitCount($formType);

            $session = new Session();
            $translations = $this->getTranslations();
            $locale = $this->get("session")->get('_locale');
            $localeAddition = "";
            if ($locale == "en") $localeAddition = "-en";
            $router = $this->get('router');

            if ( $request->request->has('recaptcha-response') ){
                $captchaResponse = $utils->validateRecapthca();
            }else {
                $captchaResponse = true;
            }

            if ($captchaResponse) {
                $postFields = [
                    'last_name' => $request->request->get('last_name'),
                    'email' => $request->request->get('email'),
                    'mobile' => $request->request->get('mobile'),
                    'url' => $request->request->get('url'),
                    'lead_source' => "korumaliHavaleEft"
                ];

                $utils->postToSalesforce($postFields,'webToLead');
                $session->getFlashBag()->add('success',$translations->iyzicoOfferModal->IslemBasariliMesaji);
                $referer =  $router->generate('business',array('ga'=>'bp-bank-transfer-lead-submit'.$localeAddition));

            } else {
                $referer =  $router->generate('business');
                $session->getFlashBag()->add(
                    'error',
                    'Robot olmadığınızı doğrulamanız gerekiyor.'
                );
            }
            return $this->redirect($referer);
        } else {
            throw $this->createNotFoundException('The page you are looking cannot be found.');
        }
    }

    public function massPayOutLeadFormAction(Request $request){
        if ($request->isMethod('POST') && $this->isCsrfTokenValid('mass-pay-out', $request->request->get('_csrf_token'))) {

            $utils = $this->get('web.utils_service');
            $formType = 'getoffer';
            $utils->incrementSubmitCount($formType);

            $session = new Session();
            $translations = $this->getTranslations();
            $locale = $this->get("session")->get('_locale');
            $localeAddition = "";
            if ($locale == "en") $localeAddition = "-en";
            $router = $this->get('router');

            if ( $request->request->has('recaptcha-response') ){
                $captchaResponse = $utils->validateRecapthca();
            }else {
                $captchaResponse = true;
            }

            if ($captchaResponse) {
                $postFields = [
                    'last_name' => $request->request->get('last_name'),
                    'email' => $request->request->get('emailCash'),
                    'mobile' => $request->request->get('mobile'),
                    'url' => $request->request->get('url'),
                    'company' => $request->request->get('emailCash'),
                    'lead_source' => "masspayout"
                ];

                $utils->postToSalesforce($postFields,'webToLead');
                $session->getFlashBag()->add('success',$translations->iyzicoOfferModal->IslemBasariliMesaji);
                $referer =  $router->generate('mass_pay_out_landingpage',array('ga'=>'mass-pay-out'.$localeAddition));

            } else {
                $referer =  $router->generate('mass_pay_out_landingpage');
                $session->getFlashBag()->add(
                    'error',
                    'Robot olmadığınızı doğrulamanız gerekiyor.'
                );
            }
            return $this->redirect($referer);
        } else {
            throw $this->createNotFoundException('The page you are looking cannot be found.');
        }
    }

    public function businessPwiLeadFormAction(Request $request){
        if ($request->isMethod('POST') && $this->isCsrfTokenValid('business-pwi', $request->request->get('_csrf_token'))) {

            $utils = $this->get('web.utils_service');
            $formType = 'getoffer';
            $utils->incrementSubmitCount($formType);

            $session = new Session();
            $translations = $this->getTranslations();
            $locale = $this->get("session")->get('_locale');
            $localeAddition = "";
            if ($locale == "en") $localeAddition = "-en";
            $router = $this->get('router');

            if ( $request->request->has('recaptcha-response') ){
                $captchaResponse = $utils->validateRecapthca();
            }else {
                $captchaResponse = true;
            }

            if ($captchaResponse) {
                $postFields = [
                    'last_name' => $request->request->get('last_name'),
                    'email' => $request->request->get('emailCash'),
                    'mobile' => $request->request->get('mobile'),
                    'url' => $request->request->get('url'),
                    'company' => $request->request->get('emailCash'),
                    'lead_source' => "Business_pwi"
                ];

                $utils->postToSalesforce($postFields,'webToLead');
                $session->getFlashBag()->add('success',$translations->iyzicoOfferModal->IslemBasariliMesaji);
                $referer =  $router->generate('pay_with_iyzico_landingpage',array('ga'=>'business-pwi'.$localeAddition));

            } else {
                $referer =  $router->generate('pay_with_iyzico_landingpage');
                $session->getFlashBag()->add(
                    'error',
                    'Robot olmadığınızı doğrulamanız gerekiyor.'
                );
            }
            return $this->redirect($referer);
        } else {
            throw $this->createNotFoundException('The page you are looking cannot be found.');
        }
    }


    public function subscriptionOfferAction(Request $request){
        if ($request->isMethod('POST') && $this->isCsrfTokenValid('subscription-offer', $request->request->get('_csrf_token'))) {

            $utils = $this->get('web.utils_service');
            $formType = "getofferss";
            $shouldShowCaptcha = $utils->shouldShowCaptcha($formType,3);

            $session = new Session();
            $translations = $this->getTranslations();
            $locale = $this->get("session")->get('_locale');
            $localeAddition = "";
            if ($locale == "en") $localeAddition = "-en";
            $router = $this->get('router');

            if ( $request->request->has('recaptcha-response') ){
                $captchaResponse = $utils->validateRecapthca();
            }else {
                $captchaResponse = true;
            }

            if ($captchaResponse) {
                $postFields = [
                    'last_name' => "Subscription",
                    'mobile' => $request->request->get('phone'),
                    'lead_source' => "Subscription"
                ];
                $utils->postToSalesforce($postFields,'webToLead');
                $session->getFlashBag()->add('success',$translations->subscriptionOfferModal->IslemBasariliMesaji);
                $referer =  $router->generate('subscription_landing_page',array('ga'=>'form-subscription-lead-submit'.$localeAddition));

            } else {
                $referer =  $router->generate('subscription_landing_page');
                $session->getFlashBag()->add(
                    'error',
                    'Robot olmadığınızı doğrulamanız gerekiyor.'
                );
            }
            return $this->redirect($referer);
        } else {
            throw $this->createNotFoundException('The page you are looking cannot be found.');
        }
    }
    public function massPAyOutOfferAction(Request $request){
        if ($request->isMethod('POST') && $this->isCsrfTokenValid('mass-pay-out-offer', $request->request->get('_csrf_token'))) {

            $utils = $this->get('web.utils_service');
            $formType = "getofferss";
            $shouldShowCaptcha = $utils->shouldShowCaptcha($formType,3);

            $session = new Session();
            $translations = $this->getTranslations();
            $locale = $this->get("session")->get('_locale');
            $localeAddition = "";
            if ($locale == "en") $localeAddition = "-en";
            $router = $this->get('router');

            if ( $request->request->has('recaptcha-response') ){
                $captchaResponse = $utils->validateRecapthca();
            }else {
                $captchaResponse = true;
            }

            if ($captchaResponse) {
                $postFields = [
                    'last_name' => "MassPayOut",
                    'mobile' => $request->request->get('phone'),
                    'lead_source' => "masspayout"
                ];
                $utils->postToSalesforce($postFields,'webToLead');
                $session->getFlashBag()->add('success',$translations->subscriptionOfferModal->IslemBasariliMesaji);
                $referer =  $router->generate('mass_pay_out_landingpage',array('ga'=>'mass-pay-out-lead-submit'.$localeAddition));

            } else {
                $referer =  $router->generate('mass_pay_out_landingpage');
                $session->getFlashBag()->add(
                    'error',
                    'Robot olmadığınızı doğrulamanız gerekiyor.'
                );
            }
            return $this->redirect($referer);
        } else {
            throw $this->createNotFoundException('The page you are looking cannot be found.');
        }
    }

}
