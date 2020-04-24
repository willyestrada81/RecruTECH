<?php
 
//  ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

// Start Session
session_start();
// Config File
require_once 'config.php';

// Include Helper
require_once 'helpers/system_helper.php';

// Autoloader
function __autoload($class_name){
    require_once 'lib/'.$class_name.'.php';
}