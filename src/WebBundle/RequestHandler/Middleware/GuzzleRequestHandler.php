<?php
namespace WebBundle\RequestHandler\Middleware;

use Symfony\Component\DependencyInjection\ContainerInterface;
use WebBundle\RequestHandler\Request;
use WebBundle\RequestHandler\RequestHandler;
use WebBundle\RequestHandler\Response;
use GuzzleHttp\ClientInterface;

class GuzzleRequestHandler implements RequestHandler
{
    private $client,$container;

    public function __construct(ClientInterface $client,ContainerInterface $container)
    {
        $this->client = $client;
        $this->container = $container;
    }

    public function handle(Request $request)
    {

        $guzzleRequest = $this->client->createRequest($request->getVerb(), $request->getUri(), array(
            'headers' => $request->getHeaders(),
            'body' => $request->getBody(),
        ));
        $guzzleResponse = $this->client->send($guzzleRequest);
        $response = new Response($guzzleResponse->getStatusCode());
        $response->setHeaders($guzzleResponse->getHeaders());
        $response->setBody($guzzleResponse->getBody()->__toString());

        return $response;
    }
}