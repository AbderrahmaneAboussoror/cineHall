<?php

include_once '../../database/db.php';
class reservation{
    public static function getReservations($id){
        $stmt = DB::connecter()->prepare('SELECT * from reservation where id_u = ?');
        $stmt->bindParam(1, $id);
        if ($stmt->execute())
            return $stmt;
        else
            return 'error';
    }
    
    public static function addReservation($data){
        $stmt = DB::connecter()->prepare('INSERT INTO reservation(id_u, id_s, date_res, num_place) values(:id_u, :id_s, :date_res, :num)');
        $stmt->bindParam(':id_u', $data->id_u);
        $stmt->bindParam(':id_s', $data->id_s);
        $stmt->bindParam(':date_res', $data->date_res);
        $stmt->bindParam(':num', $data->num);
        if ($stmt->execute())
            return true;
        else
            return false;
    }

    public static function deleteReservation($data){
        $stmt = DB::connecter()->prepare('DELETE FROM reservation where id = :id');
        $stmt->bindParam(':id', $data->id);
        if ($stmt->execute())
            return true;
        else
            return false;
    }
}