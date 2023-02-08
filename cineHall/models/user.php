<?php
include_once '../../database/db.php';
class user{
    public static function getUsers(){
        $stmt = DB::connecter()->prepare('SELECT * from utilisateur');
        if ($stmt->execute())
            return $stmt;
        else
            return 'error';
    }

    public static function getUser($id){
        $stmt = DB::connecter()->prepare('SELECT * from utilisateur where id = ? LIMIT 0,1');
        $stmt->bindParam(1, $id);
        if ($stmt->execute())
            return $stmt->fetch(PDO::FETCH_ASSOC);
        else
            return 'error';
    }

    public static function addUser($data){
        $stmt = DB::connecter()->prepare('INSERT INTO utilisateur(id, nom, prenom, email, num) values(:id, :nom, :prenom, :email, :num)');
        $stmt->bindParam(':id', $data->id);
        $stmt->bindParam(':nom', $data->nom);
        $stmt->bindParam(':prenom', $data->prenom);
        $stmt->bindParam(':email', $data->email);
        $stmt->bindParam(':num', $data->num);
        if ($stmt->execute())
            return true;
        else
            return false;
    }

    public static function updateUser($data){
        $stmt = DB::connecter()->prepare('UPDATE utilisateur SET nom = :nom, prenom = :prenom, email = :email, num = :num where id = :id');
        $stmt->bindParam(':id', $data->id);
        $stmt->bindParam(':nom', $data->nom);
        $stmt->bindParam(':prenom', $data->prenom);
        $stmt->bindParam(':email', $data->email);
        $stmt->bindParam(':num', $data->num);
        if ($stmt->execute())
            return true;
        else
            return false;
    }

    public static function deleteUser($data){
        $stmt = DB::connecter()->prepare('DELETE FROM utilisateur where id = :id');
        $stmt->bindParam(':id', $data->id);
        if ($stmt->execute())
            return true;
        else
            return false;
    }
}