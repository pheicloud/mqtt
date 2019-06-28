<?php

use Pheicloud\Pheimqtt;

require_once __DIR__ . '/vendor/autoload.php';

$options = [
    'clean_session' => false,
    'client_id' => 'demo-publish-123456',
    'username' => '',
    'password' => '',
];

//Free mqtt server test
$mqtt = new Pheimqtt('broker.hivemq.com', 1883, $options);

$mqtt->onConnect = function ($mqtt) {
    $mqtt->publish('/World', 'Data from pheimqtt publish !!!');
};

$mqtt->onError = function ($exception) {
    echo "error\n";
};

$mqtt->onClose = function () {
    echo "close\n";
};

$mqtt->connect();
