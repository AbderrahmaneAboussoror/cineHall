<?php

require_once("autoload.php");

require_once("./api/homeController.php");

require_once("./views/includes/header.php");


$home = new homeController();

$pages = array('home', 'myReserv', 'reservation');

// $adminPages = array('dashboard', 'delete', 'update');

if(empty($_SESSION['loginUser'])){
    require_once("sessions.php");
}


if(isset($_GET['page'])){
    if(in_array($_GET['page'], $pages)){
        $home->index($_GET['page']);
    }
    else{
        include('views/includes/error.php');
    }
} else
    $home->index('home');

require_once("./views/includes/footer.php");