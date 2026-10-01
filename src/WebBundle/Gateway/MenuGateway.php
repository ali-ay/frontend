<?php

namespace WebBundle\Gateway;

use WebBundle\RequestHandler\Request;
use WebBundle\RequestHandler\RequestHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class MenuGateway
{
    private $requestHandler;
    private $url;

    public function __construct(RequestHandler $requestHandler, $url)
    {
        $this->requestHandler = $requestHandler;
        $this->url = $url;
    }

    public function getMenu($id,$locale)
    {
        $request = new Request('GET', $this->url.'wp-api-menus/v2/menus/'.$id.'?lang='.$locale);
        $request->setHeader('Content-Type', 'application/json');

         try {
            $response = $this->requestHandler->handle($request);
        } catch(\Exception $e){
            throw new NotFoundHttpException('Menu Does Not Exist');
        }

        return $response->getBody();
    }
}
