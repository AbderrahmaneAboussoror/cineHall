<?php
include_once '../../database/db.php';
class film{
    public static function getFilms(){
        $stmt = DB::connecter()->prepare('SELECT f.id as idFilm, f.nom as nomFilm, date_D, s.id as idSalle, s.nom as nomSalle  from film f JOIN salle s ON f.id_s = s.id where month(f.date_D) = month(now())');
        if ($stmt->execute())
            return $stmt;
        else
            return 'error';
    }

    public static function getFilmsByDate($date){
        $stmt = DB::connecter()->prepare('SELECT f.id as idFilm, f.nom as nomFilm, date_D, s.id as idSalle, s.nom as nomSalle from film f JOIN salle s ON f.id_s = s.id where f.date_D = ?');
        $stmt->bindParam(1, $date);
        if ($stmt->execute())
            return $stmt;
        else
            return 'error';
    }
}