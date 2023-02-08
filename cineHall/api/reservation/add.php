<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

include_once '../../models/reservation.php';

$data = json_decode(file_get_contents('php://input'));

if(reservation::addReservation($data)){
    echo json_encode(
        array('message' => 'Reservation Created')
    );
} else{
    echo json_encode(
        array('message' => 'Reservation Not Created')
    );
}