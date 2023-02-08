<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../../models/user.php';

// $idGet = isset($_GET['id']) ? $_GET['id'] : die();


if(isset($_GET['id'])){
    $idGet = $_GET['id'];
} else
    die();

$getUser = user::getUser($idGet);

if(isset($getUser)){
    extract($getUser);
    
    
    $user_arr = array();
    $user_arr['data'] = array(
        'id' => $id,
        'nom' => $nom,
        'prenom' => $prenom,
        'email' => $email,
        'numero de telephone' => $num
    );
    
    echo json_encode($user_arr);
}
