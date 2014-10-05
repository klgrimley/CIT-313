<?php

//require_once 'application/load.class.php';
//require_once 'models/model.class.php';
//require_once 'controllers/controller.class.php';

spl_autoload_register(function ($class) {
            if (file_exists('application/' . strtolower($class) . '.class.php')) {
                include 'application/' . strtolower($class) . '.class.php';
            }
            if (file_exists('models/' . strtolower($class) . '.class.php')) {
                include 'models/' . strtolower($class) . '.class.php';
            }
            if (file_exists('controllers/' . strtolower($class) . '.class.php')) {
                include 'controllers/' . strtolower($class) . '.class.php';
            }
        });

new controller();
?>
