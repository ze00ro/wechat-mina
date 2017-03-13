<?php
namespace Test;

trait HTTPRequest
{
    public $timeout = 5;
    public $httpClient;

    public function get($url, array $options = [])
    {
        $client = new \GuzzleHttp\Client();
        return $client->get($url, ['query' => $options]);
    }
}