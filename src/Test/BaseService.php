<?php
namespace Test;

class BaseService
{
    use HTTPRequest;

    protected $config;

    public function __construct($config)
    {
        $this->config = $config;
    }

}