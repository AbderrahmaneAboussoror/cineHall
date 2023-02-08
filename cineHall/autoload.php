<?php

session_start();
require_once("api/instances.php");


spl_autoload_register('autoload');

function autoload($class_name){
    
    $array_paths = array(
        'database/',
        'models/',
        'api/'
    );
    $parts = explode('\\', $class_name);
    $name = array_pop($parts);

    foreach($array_paths as $path){
        $file = sprintf($path . '%s.php', $name);
        if (is_file($file))
            include_once($file);
    }
}