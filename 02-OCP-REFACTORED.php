<?php

interface Adapter
{
    public function request(String $url);
}

class AjaxAdapter implements Adapter
{
    public function request(String $url)
    {

    }
}

class NodeAdapter implements Adapter
{
    public function request(String $url)
    {

    }
}

class HttpRequester
{
    private $adapter;

    public function __construct(Adapter $adapter)
    {
        $this->adapter = $adapter;
    }

    public function fetch($url)
    {
        return $this->adapter->request($url);
    }
}