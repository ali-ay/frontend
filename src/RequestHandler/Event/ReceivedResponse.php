<?php
namespace App\RequestHandler\Event;

use App\RequestHandler\Response;
use Symfony\Contracts\EventDispatcher\Event;

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
