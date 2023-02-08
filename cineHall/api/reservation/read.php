<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../../models/reservation.php';

if (isset($_GET['id'])) {
    $idGet = $_GET['id'];
} else {
    die();
}

$getReservations = reservation::getReservations($idGet);

if($getReservations != 'error'){

    if($getReservations->rowCount() > 0){
        $reservation_arr = array();
        $reservation_arr['data'] = array();
    
        while($row = $getReservations->fetch(PDO::FETCH_ASSOC)){
            extract($row);
    
            $reservation = array(
                'id' => $id,
                'Date de reservation' => $date_res,
                'Numero de place' => $num_place
            );
    
            array_push($reservation_arr['data'], $reservation);
        }
    
        echo json_encode($reservation_arr);
    }else{
        echo json_encode(
            array('message' => 'No Reservations Found')
          );
    }
}
