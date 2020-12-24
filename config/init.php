<?php

session_start();

require_once 'config.php';

require_once 'helper/system-helper.php';

//Autoload
spl_autoload_register('autoload');

function autoload($class_name){
    require_once 'lib/' . $class_name . '.php';
}