<?php

define('API_BASE', 'http://localhost/estudos/apis/api/index.php?option=');


$resultado = api_request('status');

echo "<pre>";
print_r($resultado);

function api_request($option)
{
    $client = curl_init(API_BASE . $option);
    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($client);
    return json_decode($response, true);
}