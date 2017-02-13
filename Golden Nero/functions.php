<?php

function redirect($location, $extension = false) {
    if ($extension)
        header('Location: ' . $location . '.php');
    else
        header('Location: ' . $location);
    exit;
}

function lang($key) {

    if (isset($_SESSION['lang'])) {
        $lang = $_SESSION['lang'];
    } else {
        $lang = $GLOBALS['config']['lang'];
    }

    $translateArray = include 'lang/' . $lang . '.php';

    if (isset($translateArray[$key])) {
        return $translateArray[$key];
    }

    return $key;
}

function lang_date($dateStr) {
    
    $timestamp = strtotime($dateStr);
    
    $day = date('d', $timestamp);
    $month = date('F', $timestamp);
    $year = date('Y', $timestamp);
    
    return $day.' '.lang(strtolower($month)).' '.$year;
}