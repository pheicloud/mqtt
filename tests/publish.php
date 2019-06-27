<?php

use Pheicloud\Pheimqtt;

require_once __DIR__ . '/../vendor/autoload.php';

$options = [
    'clean_session' => false,
    'client_id' => 'demo-publish-123456',
    'username' => '',
    'password' => '',
];

$mqtt = new Pheimqtt('127.0.0.1', 1883, $options);

$mqtt->onConnect = function ($mqtt) {
    $mqtt->publish('/World', 'publish data from local');
};

$mqtt->onError = function ($exception) {
    echo "error\n";
};

$mqtt->onClose = function () {
    echo "close\n";
};

$mqtt->connect();
