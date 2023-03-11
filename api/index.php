<?php

//prepare response
$data['status'] = 'ERROR';

$data['data'] = null;
//analisando a request
if(isset($_GET['option'])){

    switch($_GET['option']){
        case 'status':
            $data['status'] = 'SUCESS';
            //OK você me pediu agora receba os dados da OPTION status.
            $data['data'] = 'API is running OK!';
            break;
        default:
            //O pedido deve conter option=status
            $data['status'] = 'ERROR';
            break;
    }

}else{
    $data['status'] = 'ERROR';
}

//verificandos se estou na branch otimizandoApi
//emitindo resposta
response($data);

// ========================================================================
//construindo a resposta
function response($data){
    //resposta em formato JSON
    header('Content-Type:application/json');
    echo json_encode($data);
}