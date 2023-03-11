<?php

//prepare response
$data['status'] = 'ERROR';
$data['data'] = null;

//analisando a request
if(isset($_GET['option'])){

    switch($_GET['option']){
        case 'status':
            define_response($data, 'API is running OK!!!');
            break;

        case 'random':
            define_response($data, rand(0, 1000));
            break;

    }

}

//verificandos se estou na branch otimizandoApi
//emitindo resposta
response($data);

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