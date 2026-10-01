<?php

namespace App\Gateway;

use App\RequestHandler\Request;
use App\RequestHandler\RequestHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class QuestionGateway
{
    private $requestHandler;
    private $url;

    public function __construct(RequestHandler $requestHandler, $url)
    {
        $this->requestHandler = $requestHandler;
        $this->url = $url;
    }

    public function getCategories($locale)
    {
        $request = new Request('GET', $this->url.'iyzico/v1/question-categories'.'?lang='.$locale);
        $request->setHeader('Content-Type', 'application/json');

         try {
            $response = $this->requestHandler->handle($request);
        } catch(\Exception $e){
            throw new NotFoundHttpException('Category Does Not Exist');
        }

        return json_decode($response->getBody());
    }
    public function getQuestionsByCategorySlug($categorySlug,$locale)
    {
        $request = new Request('GET', $this->url.'iyzico/v1/question-category/'.$categorySlug.'?lang='.$locale);
        $request->setHeader('Content-Type', 'application/json');
        try {
            $response = $this->requestHandler->handle($request);
        } catch(\Exception $e){
            throw new NotFoundHttpException('Category Does Not Exist');
        }
        return json_decode($response->getBody());
    }
    public function getQuestionsByQuery($jsonBody,$locale)
    {
        $request = new Request('POST', $this->url.'iyzico/v1/question-search?lang='.$locale);
        $request->setBody($jsonBody);
        
         try {
            $response = $this->requestHandler->handle($request);
        } catch(\Exception $e){
            throw new NotFoundHttpException('Question Does Not Exist');
        }

        return json_decode($response->getBody());
    }
}
