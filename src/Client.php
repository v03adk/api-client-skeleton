<?php

namespace Api\Client;

use Api\Client\Model\SomeModel;
use GuzzleHttp\Client as GuzzleClient;

class Client
{
    private $apiKey;
    private $url;

    public function __construct($apiKey, $url)
    {
        $this->apiKey = $apiKey;
        $this->url = $url;
    }


    public function post($data)
    {
        $guzzleclient = new GuzzleClient();

        $res = $guzzleclient->post($this->url, ['auth' => [$this->apiKey], 'headers' => ['content-type' =>
            'application/json'], 'body' => json_encode($data, JSON_PRETTY_PRINT), ]);
        return ($res->getStatusCode() == 201);
    }

    public function get($id)
    {
        $guzzleclient = new GuzzleClient();
        $url = $this->url . '/' . $id;

        $res = $guzzleclient->get($url, ['auth' => [$this->apiKey], 'headers' => ['content-type' =>
            'application/json']]);

        if ($res->getStatusCode() == 200)
            return json_decode($res->getBody(), true);

        return array();
    }
}
