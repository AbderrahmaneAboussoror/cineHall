<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../../models/film.php';


if (isset($_GET['date'])) {
    $dateGet = $_GET['date'];

    $getFilms = film::getFilmsByDate($dateGet);


    if ($getFilms != 'error') {
        if ($getFilms->rowCount() > 0) {
            $films_arr = array();
            $films_arr['data'] = array();

            while ($row = $getFilms->fetch(PDO::FETCH_ASSOC)) {
                extract($row);

                $user = array(
                    'id' => $idFilm,
                    'nom' => $nomFilm,
                    'Date de diffusion' => $date_D,
                    'Salle' => $nomSalle
                );

                array_push($films_arr['data'], $user);
            }

            echo json_encode($films_arr);
        } else {
            echo json_encode(
                array('message' => 'No Films Found')
            );
        }
    }

} else {
    $getFilms = film::getFilms();


    if ($getFilms != 'error') {
        if ($getFilms->rowCount() > 0) {
            $films_arr = array();
            $films_arr['data'] = array();

            while ($row = $getFilms->fetch(PDO::FETCH_ASSOC)) {
                extract($row);

                $user = array(
                    'id' => $idFilm,
                    'nom' => $nomFilm,
                    'Date de diffusion' => $date_D,
                    'Salle' => $nomSalle
                );

                array_push($films_arr['data'], $user);
            }

            echo json_encode($films_arr);
        } else {
            echo json_encode(
                array('message' => 'No Films Found')
            );
        }
    }
}