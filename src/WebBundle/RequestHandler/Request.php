<?php

namespace WebBundle\RequestHandler;


class Request
{
    private $verb;
    private $uri;
    private $headers = array();
    private $body;

    /**
     * Request constructor.
     * @param $verb
     * @param $uri
     */
    public function __construct($verb, $uri)
    {
        $this->verb = $verb;
        $this->uri = $uri;
    }
    /**
     * @return mixed
     */
    public function getVerb()
    {
        return $this->verb;
    }

    /**
     * @return mixed
     */
    public function getUri()
    {
        return $this->uri;
    }

    public function setHeader($name, $value)
    {
        $this->headers[$name] = $value;
    }

    public function getHeaders()
    {
        return $this->headers;
    }

    public function setBody($body)
    {
        $this->body = $body;
    }

    public function getBody()
    {
        return $this->body;
    }


}
