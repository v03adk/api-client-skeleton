<?php

include_once __dir__ . '/../vendor/autoload.php';
use Api\Client\Client;
use Api\Client\Model\SomeModel;

$client = new Client("someApiKey", "someUrl");

$data = $client->get("00e70a6d-f8c9-45ad-b04e-a41e1f810bf7");
if ($data) {
    $someModel = new SomeModel();
    $someModel->setSomeAttr($data['attr']);
    $someModel->setAnotherAttr($data['attr2']);

    // continue
} else {
    echo 'no such model';
}
