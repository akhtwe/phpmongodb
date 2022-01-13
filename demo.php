<?php
    // phpinfo();die();
    require_once __DIR__ . '/vendor/autoload.php';

    $client=new MongoDB\Client;
    
    $companydb=$client->companydb;

    $result=$companydb->createCollection('empcollection');
    var_dump($result);die();

?>