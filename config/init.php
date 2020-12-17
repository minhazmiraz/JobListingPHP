<?php
require_once 'config.php';

//Autoload
spl_autoload_register('autoload');

function autoload($class_name){
    require_once 'lib/' . $class_name . '.php';
}