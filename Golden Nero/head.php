<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 1);

session_start();
mb_internal_encoding('UTF-8');

date_default_timezone_set('Europe/Sofia');

require_once 'config.php';
require_once 'functions.php';

if(isset($_SESSION['lang'])) {
    $lang = $_SESSION['lang'];
} else {
    $_SESSION['lang'] = $lang = $config['lang'];
}
