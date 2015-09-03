<?php

include_once __dir__ . '/../vendor/autoload.php';
use Api\Client\Client;

$client = new Client("someApiKey", "someUrl");

if ($client->post(array('id' => 1, 'name' => "test"))) {
    echo 'succes';
} else {
    echo 'failure';
}
