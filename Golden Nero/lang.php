<?php

session_start();
include 'config.php';
include 'functions.php';

if (isset($_GET['l'])) {
    $lang = $_GET['l'];

    if (in_array($lang, $config['available_languages'])) {
        $_SESSION['lang'] = $lang;
    }
}

if (isset($_SERVER['HTTP_REFERER'])) {
    $urlBack = $_SERVER['HTTP_REFERER'];
} else {
    $urlBack = '/';
}

redirect($urlBack);
