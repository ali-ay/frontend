<?php

namespace App\Gateway;

use App\RequestHandler\Request;
use App\RequestHandler\RequestHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class TranslationsGateway
{
    private $requestHandler;
    private $url;

    public function __construct(RequestHandler $requestHandler, $url)
    {
        $this->requestHandler = $requestHandler;
        $this->url = $url;
    }

    public function getTranslations($jsonBody,$locale)
    {
        $request = new Request('POST', $this->url.'iyzico/v1/get-translation?lang='.$locale);
        $request->setBody($jsonBody);
        
        try {
            $response = $this->requestHandler->handle($request);
        } catch(\Exception $e){
            throw $e;
        }

        return json_decode($response->getBody());
    }
}
