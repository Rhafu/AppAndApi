<?php

define('API_BASE', 'http://localhost/estudos/apis/api/index.php?option=');

for($i = 0; $i < 10; $i++){
    $resultado = api_request('random');
    //verify if response is success
    if($resultado['status'] == 'ERROR'){
    die('Aconteceu um erro na minha Request');
    }

    echo 'O valor aleatório é: '.$resultado['data'] . "</br>";
}






// echo "<pre>";
// print_r($resultado);

function api_request($option)
{
    $client = curl_init(API_BASE . $option);
    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($client);
    return json_decode($response, true);
}