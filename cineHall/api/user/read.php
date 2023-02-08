<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../../models/user.php';

$getUsers = user::getUsers();

if($getUsers != 'error'){

    if($getUsers->rowCount() > 0){
        $users_arr = array();
        $users_arr['data'] = array();
    
        while($row = $getUsers->fetch(PDO::FETCH_ASSOC)){
            extract($row);
    
            $user = array(
                'id' => $id,
                'nom' => $nom,
                'prenom' => $prenom,
                'email' => $email,
                'numero de telephone' => $num
            );
    
            array_push($users_arr['data'], $user);
        }
    
        echo json_encode($users_arr);
    }else{
        echo json_encode(
            array('message' => 'No Posts Found')
          );
    }
}
