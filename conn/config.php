<?php 


define('WEB_ROOT', 'http://canvajer.test');
define('WEB_ROOT_FILE', 'C:\laragon\www\canvajer');


$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'canvajer';

function dd($data){
    echo '<pre>';
    print_r($data);
    exit;
}

session_start();
