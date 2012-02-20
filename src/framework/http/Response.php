<?php
namespace bankaccount\framework\http;

use bankaccount\framework\HashMap;

class Response
{
    use HashMap;

    protected $headers = array();

    public function addHeader($header)
    {
        $this->headers[] = $header;
    }

    public function getHeaders()
    {
        return $this->headers;
    }
}
