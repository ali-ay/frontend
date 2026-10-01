<?php
/**
 * Created by PhpStorm.
 * User: harun.akgun
 * Date: 02/02/2017
 * Time: 16:52
 */

namespace App\Service;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use App\Service\AES128Encryptor;
use \ReCaptcha\ReCaptcha;

class UtilsService
{
    protected $container,$request;
    const ONE_HOUR = 3600;
    const TEN_MINUTES = 600;
    const MERCHANT_API_URL = "https://old-merchant.iyzipay.com/api/merchant/";


    public function __construct(ContainerInterface $container, RequestStack $requestStack)
    {
        $this->container = $container;
        $this->cache = $this->container->get('snc_redis_cache_public');
        $this->request = $requestStack->getCurrentRequest();
    }
    public function isMobile(){
        $userAgent = $this->request->headers->get('User-Agent');
        if (!$userAgent) {
            return false;
        }

        return (
            preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i', $userAgent) ||
            preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i', substr($userAgent,0,4))
        );
    }

    private function registerHeaders($extraHeaders=false){
        $result = array(
            'Content-Type: application/json',
            'Accept: application/json'
        );
        if ($extraHeaders) $result = array_merge($result,$extraHeaders);
        return $result;
    }

    private function restHeaders($extraHeaders=false){
        $apiConfiguration = $this->container->getParameter('merchant_api');
        $encryptor = new AES128Encryptor($apiConfiguration['salt']);
        $encryptedDeveloperKey = $encryptor->encrypt($apiConfiguration['developerKey']);
        $result = array(
            'x-iyzi-developer-key: '.$encryptedDeveloperKey,
            'x-iyzi-app-name: iyzico-website',
            'Content-Type: application/json'
        );
        if ($extraHeaders) $result = array_merge($result,$extraHeaders);
        return $result;
    }

    public function restPost($endpoint,$payload){
        $apiConfiguration = $this->container->getParameter('merchant_api');

        $encryptor = new AES128Encryptor($apiConfiguration['salt']);

        $rawBody = json_encode($payload);
        $requestBody = json_encode(array(
            'hash'=>$encryptor->encrypt($rawBody)
        ),true);

        $requestHeaders = $this->restHeaders(array(
            'Content-Length:'.strlen($requestBody)
        ));

        $rest = curl_init();
        curl_setopt($rest, CURLOPT_URL, self::MERCHANT_API_URL.$endpoint);
        curl_setopt($rest, CURLINFO_HEADER_OUT, true);
        curl_setopt($rest, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($rest, CURLOPT_POST, 1);
        curl_setopt($rest, CURLOPT_POSTFIELDS, $requestBody);
        curl_setopt($rest, CURLOPT_HTTPHEADER, $requestHeaders);
        $restResponse = curl_exec($rest);

        curl_close($rest);
        return json_decode($restResponse);
    }

    public function registerPost($payload){
        $registerEndpoint = "https://merchant-gateway.iyzipay.com/api/v1/merchants/register?locale=".$this->request->getSession()->get('_locale');
        $rawBody = json_encode($payload);

        $requestHeaders = $this->registerHeaders();

        $rest = curl_init();
        curl_setopt($rest, CURLOPT_URL, $registerEndpoint);
        curl_setopt($rest, CURLINFO_HEADER_OUT, true);
        curl_setopt($rest, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($rest, CURLOPT_POST, 1);
        curl_setopt($rest, CURLOPT_POSTFIELDS, $rawBody);
        curl_setopt($rest, CURLOPT_HTTPHEADER, $requestHeaders);
        $restResponse = curl_exec($rest);

        curl_close($rest);
        return json_decode($restResponse);
    }

    public function isSearchEngineBot($userAgentString){
        return preg_match('/baidu|bingbot|facebookexternalhit|googlebot|ia_archiver|msnbot|naverbot|pingdom|seznambot|slurp|teoma|twitter|yeti/i',$userAgentString);
    }

    public static function  generateRandomString($length = 10,$onlyLetters = false) {
        if ($onlyLetters) {
            $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        } else {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        }
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    private function getUserIP(){
        $cfIP = $this->request->server->get('HTTP_CF_CONNECTING_IP');
        $remoteAddr = $this->request->server->get('REMOTE_ADDR');
        if ( isset($cfIP) ) $remoteAddr = $cfIP;
        return $remoteAddr;
    }
    private function getRecaptcha(){
        $secret = "6LcdQz4UAAAAAC2WQlZInj-6cmv3GwZR1bGg4S8J";
        return new ReCaptcha($secret);
    }
    public function validateRecapthca(){
        $remoteAddr = $this->getUserIP();
        $reCaptcha = $this->getRecaptcha();
        $reCaptchaResponse = $this->request->get('recaptcha-response');
        $resp = $reCaptcha->verify($reCaptchaResponse, $remoteAddr);
        return $resp->isSuccess();
    }
    public function incrementSubmitCount($formType) {

        $remoteAddr = $this->getUserIP();
        $lockKey = $formType.'-'.$remoteAddr;

        $this->cache->incr($lockKey);
        $this->cache->expire($lockKey, self::TEN_MINUTES);
    }
    public function shouldShowCaptcha($formType,$limit = 3) {
        $remoteAddr = $this->getUserIP();
        $lockKey = $formType.'-'.$remoteAddr;

         if (!$this->cache->exists($lockKey)) {
             return false;
         } else {
            if ($limit <= $this->cache->get($lockKey)) {
                return true;
            } else {
                return false;
            }
         }
    }

    public function newMemberRegisterPost($payload){
        $registerEndpoint = "https://merchant-gateway.iyzipay.com/api/v1/members/register?locale=".$this->request->getSession()->get('_locale');
        $rawBody = json_encode($payload);

        $requestHeaders = $this->registerHeaders();

        $rest = curl_init();
        curl_setopt($rest, CURLOPT_URL, $registerEndpoint);
        curl_setopt($rest, CURLINFO_HEADER_OUT, true);
        curl_setopt($rest, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($rest, CURLOPT_POST, 1);
        curl_setopt($rest, CURLOPT_POSTFIELDS, $rawBody);
        curl_setopt($rest, CURLOPT_HTTPHEADER, $requestHeaders);
        $restResponse = curl_exec($rest);

        curl_close($rest);
        return json_decode($restResponse);
    }

    public function consumerNewMemberRegisterPost($payload){
        $registerEndpoint = "https://merchant-gateway.iyzipay.com/api/v1/members/quick-register?locale=".$this->request->getSession()->get('_locale');
        $rawBody = json_encode($payload);

        $requestHeaders = $this->registerHeaders();

        $rest = curl_init();
        curl_setopt($rest, CURLOPT_URL, $registerEndpoint);
        curl_setopt($rest, CURLINFO_HEADER_OUT, true);
        curl_setopt($rest, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($rest, CURLOPT_POST, 1);
        curl_setopt($rest, CURLOPT_POSTFIELDS, $rawBody);
        curl_setopt($rest, CURLOPT_HTTPHEADER, $requestHeaders);
        $restResponse = curl_exec($rest);

        curl_close($rest);
        return json_decode($restResponse);
    }

    public function consumerMemberRegisterOTPPost($payload){
        $registerOtpEndpoint = "https://merchant-gateway.iyzipay.com/api/v1/members/login-complete?locale=".$this->request->getSession()->get('_locale');
        $rawBody = json_encode($payload);
        $requestHeaders = $this->registerHeaders();

        $rest = curl_init();
        curl_setopt($rest, CURLOPT_URL, $registerOtpEndpoint);
        curl_setopt($rest, CURLINFO_HEADER_OUT, true);
        curl_setopt($rest, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($rest, CURLOPT_POST, 1);
        curl_setopt($rest, CURLOPT_POSTFIELDS, $rawBody);
        curl_setopt($rest, CURLOPT_HTTPHEADER, $requestHeaders);
        $restResponse = curl_exec($rest);

        curl_close($rest);
        return json_decode($restResponse);
    }

    public function consumerMemberRegisterReSendOTPPost($payload){
        $registerOtpEndpoint = "https://merchant-gateway.iyzipay.com/api/v1/members/login/sms-resend?locale=".$this->request->getSession()->get('_locale');
        $rawBody = json_encode($payload);

        $requestHeaders = $this->registerHeaders();

        $rest = curl_init();
        curl_setopt($rest, CURLOPT_URL, $registerOtpEndpoint);
        curl_setopt($rest, CURLINFO_HEADER_OUT, true);
        curl_setopt($rest, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($rest, CURLOPT_POST, 1);
        curl_setopt($rest, CURLOPT_POSTFIELDS, $rawBody);
        curl_setopt($rest, CURLOPT_HTTPHEADER, $requestHeaders);
        $restResponse = curl_exec($rest);

        curl_close($rest);
        return json_decode($restResponse);
    }

    public function sandBoxRegisterPost($payload){

        $registerEndpoint = "https://stg-merchantgw.iyzipay.com/api/v1/members/register?locale=".$this->request->getSession()->get('_locale');
        $rawBody = json_encode($payload);

        $requestHeaders = $this->registerHeaders();

        $rest = curl_init();
        curl_setopt($rest, CURLOPT_URL, $registerEndpoint);
        curl_setopt($rest, CURLINFO_HEADER_OUT, true);
        curl_setopt($rest, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($rest, CURLOPT_POST, 1);
        curl_setopt($rest, CURLOPT_POSTFIELDS, $rawBody);
        curl_setopt($rest, CURLOPT_HTTPHEADER, $requestHeaders);
        $restResponse = curl_exec($rest);

        curl_close($rest);
        return json_decode($restResponse);
    }

    public function postToSalesforce($postFields,$type){

        $oidTest = "00D0D0000008bFp";
        $oidProd = "00D0Y000001eyka";
        $webToLeadTestUrl = 'https://test.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8';
        $webToLeadProdUrl = 'https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8';
        $webToCaseTestUrl = 'https://test.salesforce.com/servlet/servlet.WebToCase?encoding=UTF-8';
        $webToCaseProdUrl = 'https://webto.salesforce.com/servlet/servlet.WebToCase?encoding=UTF-8';


        $postFields['retURL'] = "https://www.iyzico.com";

        $url = false;
        if ($type == "webToLead") {
            $url = $webToLeadProdUrl;
            $postFields['oid'] = $oidProd;
        } else {
            $url = $webToCaseProdUrl;
            $postFields['orgid'] = $oidProd;
            $postFields['Number_Of_Incoming_Email__c'] = 0;
            $postFields['Number_Of_Outgoing_Email__c'] = 0;
        }

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postFields));
        $response = curl_exec($ch);
        return true;
    }
}
