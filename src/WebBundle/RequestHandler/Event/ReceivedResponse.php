<?php
namespace WebBundle\RequestHandler\Event;

use WebBundle\RequestHandler\Response;
use Symfony\Component\EventDispatcher\Event;

class ReceivedResponse extends Event
{
    private $response;

    public function __construct(Response $response)
    {
        $this->response = $response;
    }

    public function getResponse()
    {
        return $this->response;
    }
}
