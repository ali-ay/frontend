<?php

namespace App\RequestHandler\Middleware;

use App\RequestHandler\Event\ReceivedResponse;
use App\RequestHandler\Request;
use App\RequestHandler\RequestHandler;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

class EventRequestHandler implements RequestHandler
{
    private $eventDispatcher;
    private $requestHandler;

    public function __construct(EventDispatcherInterface $eventDispatcher, RequestHandler $requestHandler)
    {
        $this->eventDispatcher = $eventDispatcher;
        $this->requestHandler = $requestHandler;
    }

    public function handle(Request $request)
    {
        $response = $this->requestHandler->handle($request);
        $this->eventDispatcher->dispatch(new ReceivedResponse($response), 'request_handler.received_response');

        return $response;
    }
}
