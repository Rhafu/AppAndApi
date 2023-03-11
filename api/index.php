<?php

//import output
require_once('./output.php');

//prepare response
$data['status'] = 'ERROR';
$data['data'] = [];

//analisando a request
if(isset($_GET['option'])){

    switch($_GET['option']){
        case 'status':
            api_status($data);
            break;

        case 'random':
            api_random($data);
            break;
    }
}

response($data);
