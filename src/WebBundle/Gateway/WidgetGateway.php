<?php

namespace WebBundle\Gateway;

use WebBundle\RequestHandler\Request;
use WebBundle\RequestHandler\RequestHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class WidgetGateway
{
    private $requestHandler;
    private $url;

    public function __construct(RequestHandler $requestHandler, $url)
    {
        $this->requestHandler = $requestHandler;
        $this->url = $url;
    }

    public function getWidgetArea($location,$locale)
    {

        $request = new Request('GET', $this->url.'wp-rest-api-sidebars/v1/sidebars/'.$location.'?lang='.$locale);
        $request->setHeader('Content-Type', 'application/json');

        try {
            $response = $this->requestHandler->handle($request);
        } catch(\Exception $e){
            throw new NotFoundHttpException('Widget Area Does Not Exist');
        }

        return $response->getBody();
    }
}
