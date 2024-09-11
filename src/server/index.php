<?php

require_once(__DIR__ . '/../../vendor/autoload.php');

final class Webservice {
    public function foo($input) {
        $unser = unserialize($input);
        return print_r($unser, true);
    }
}

$server = new SoapServer(null, array('uri' => 'http://demo.sjoerdlangkemper.nl/soap-unserialize-rce'));
$server->setClass("Webservice");
$server->handle();
