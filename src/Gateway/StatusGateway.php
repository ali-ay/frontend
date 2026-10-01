<?php

namespace App\Gateway;

use App\RequestHandler\Request;
use App\RequestHandler\RequestHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class StatusGateway
{
    private $requestHandler, $url, $developerKey;

    public function __construct(RequestHandler $requestHandler)
    {
        $this->requestHandler = $requestHandler;
        $this->url = "http://185.48.180.212/";
        $this->developerKey = "7K1prU3EkworCTMdioau8poopGI4bU9F";
    }

    public function getLogByRulename($ruleName)
    {
        $request = new Request('GET', $this->url.'logs?developerKey='.$this->developerKey.'&ruleName='.$ruleName);
        $request->setHeader('Content-Type', 'application/json');

         try {
            $response = $this->requestHandler->handle($request);
        } catch(\Exception $e){
            throw new NotFoundHttpException('Log Does Not Exist');
        }
        $fiddledResponse = $response->getBody();
        date_default_timezone_set('Europe/Istanbul');
        $fiddledResponse['lastUpdatedDate'] = date('d-m-Y H:i');
        
        return $fiddledResponse;
    }

    public function getDayByRulename($ruleName,$datetime)
    {
        $request = new Request('GET', $this->url.'day?developerKey='.$this->developerKey.'&ruleName='.$ruleName.'&datetime='.$datetime);
        $request->setHeader('Content-Type', 'application/json');

         try {
            $response = $this->requestHandler->handle($request);
        } catch(\Exception $e){
            throw new NotFoundHttpException('Log Does Not Exist');
        }

        return json_decode($response->getBody());
    }
}
