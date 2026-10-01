<?php

namespace WebBundle\Gateway;

use WebBundle\RequestHandler\Request;
use WebBundle\RequestHandler\RequestHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class RssGateway
{
    private $requestHandler;
    private $url;

    public function __construct(RequestHandler $requestHandler, $url)
    {
        $this->requestHandler = $requestHandler;
        $this->url = $url;
    }

    public function getRssByCategory($category)
    {
        $request = new Request('GET', $this->url.'/category/'.$category.'/feed');
        $request->setHeader('Content-Type', 'text/html');

        try {
            $response = $this->requestHandler->handle($request);
        } catch(\Exception $e){
            throw new NotFoundHttpException('Rss Category Does Not Exist');
        }

        return $response->getBody();
    }
}
