<?php
namespace App\RequestHandler\Middleware;

use Symfony\Component\DependencyInjection\ContainerInterface;
use App\RequestHandler\Request;
use App\RequestHandler\RequestHandler;
use App\RequestHandler\Response;
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

        $options = [
            'headers' => $request->getHeaders(),
        ];
        if (is_array($request->getBody())) {
            $options['form_params'] = $request->getBody();
        } else {
            $options['body'] = $request->getBody();
        }
        $guzzleResponse = $this->client->request($request->getVerb(), $request->getUri(), $options);
        $response = new Response($guzzleResponse->getStatusCode());
        $response->setHeaders($guzzleResponse->getHeaders());
        $response->setBody($guzzleResponse->getBody()->__toString());

        return $response;
    }
}