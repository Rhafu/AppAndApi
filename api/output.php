<?php

// ========================================================================
// FUNÇÕES PARA ENDPOINTS.
// ========================================================================
function api_status(&$data){
    define_response($data, 'API OK');
}

function api_random(&$data){
    $min = 0;
    $max = 1000;

    if(isset($_GET['min'])){
        $min = intval($_GET['min']);
    }

    if(isset($_GET['max'])){
        $max = intval($_GET['max']);
    }

    if($min >= $max){
        response($data);
        return;
    }

    define_response($data, rand($min, $max));
}

// ========================================================================
//função de sucesso
function define_response(&$data, $value){
    $data['status'] = 'SUCCESS';
    $data['data'] = $value;
}

// ========================================================================
//construindo a resposta
function response($data){
    //resposta em formato JSON
    header('Content-Type:application/json');
    echo json_encode($data);
}