<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

include_once '../../models/user.php';

$data = json_decode(file_get_contents('php://input'));

if(user::updateUser($data)){
    echo json_encode(
        array('message' => 'User Updated')
    );
} else{
    echo json_encode(
        array('message' => 'User Not Updated')
    );
}