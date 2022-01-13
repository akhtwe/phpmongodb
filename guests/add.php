<?php
    require_once __DIR__ . '/../vendor/autoload.php';

    $client=new MongoDB\Client;
    $companydb=$client->companydb;
    $col_guest=$companydb->guest;
    
    $name = chr(rand(65,90)) .chr(rand(97,122)). chr(rand(97,122)) .chr(rand(97,122)).chr(rand(97,122))." " .chr(rand(65,90)).chr(rand(97,122)).chr(rand(97,122)) ;
    $insert=$col_guest->insertOne([
        'name'=>$name
    ]);
    Redirect('/', false);
    function Redirect($url, $permanent = false)
    {
        header('Location: ' . $url, true, $permanent ? 301 : 302);
        exit();
    }
?>