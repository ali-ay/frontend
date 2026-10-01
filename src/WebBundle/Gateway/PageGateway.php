<?php

namespace WebBundle\Gateway;

use WebBundle\RequestHandler\Request;
use WebBundle\RequestHandler\RequestHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PageGateway
{
    private $requestHandler;
    private $url;

    public function __construct(RequestHandler $requestHandler, $url)
    {
        $this->requestHandler = $requestHandler;
        $this->url = $url;
    }

    public function getPage($id,$locale)
    {
        $request = new Request('GET', $this->url.'wp/v2/pages/'.$id.'?lang='.$locale);
        $request->setHeader('Content-Type', 'application/json');

        try {
            $response = $this->requestHandler->handle($request);
        } catch(\Exception $e){
            throw new NotFoundHttpException('Page Does Not Exist');
        }

        return $response->getBody();
    }

    public function getPageBySlug($slug,$locale)
    {
        $request = new Request('GET', $this->url.'iyzico/v1/get-page-by-slug/'.$slug.'?lang='.$locale);
        $request->setHeader('Content-Type', 'application/json');

        try {
            $response = $this->requestHandler->handle($request);
        } catch(\Exception $e){
            throw new NotFoundHttpException('Page Does Not Exist');
        }

        return $response->getBody();
    }

    public function getPost($id,$locale)
    {
        $request = new Request('GET', $this->url.'wp/v2/posts/'.$id.'?lang='.$locale);
        $request->setHeader('Content-Type', 'application/json');

        try {
            $response = $this->requestHandler->handle($request);
        } catch(\Exception $e){
            throw new NotFoundHttpException('Listing Does Not Exist');
        }

        return $response->getBody();
    }

    public function getPostByCategory($category,$locale)
    {
        $request = new Request('GET', $this->url.'wp/v2/posts?categories='.$category.'&lang='.$locale);
        $request->setHeader('Content-Type', 'application/json');

         try {
            $response = $this->requestHandler->handle($request);
        } catch(\Exception $e){
            throw new NotFoundHttpException('Post Does Not Exist');
        }

        return $response->getBody();
    }
}
