<?php

use Pheicloud\Pheimqtt;

require_once __DIR__ . '/../vendor/autoload.php';

$options = [
    'clean_session' => false,
    'client_id' => 'demo-subscribe-123456',
    'username' => '',
    'password' => '',
];

$mqtt = new Pheimqtt('127.0.0.1', 1883, $options);

$mqtt->onConnect = function ($mqtt) {
    $mqtt->subscribe('/World');
};

$mqtt->onMessage = function ($topic, $content) {
    var_dump($topic, $content);
};

$mqtt->onError = function ($exception) use ($mqtt) {
    echo "error\n";
    // $mqtt->reconnect(1000);
};

$mqtt->onClose = function () {
    echo "close\n";
};

$mqtt->connect();
