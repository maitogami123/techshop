<?php

function view($name, $model='') {
    require_once APP_ROOT . '/views/layout.view.php';
}

function redirect($url) {
    header("Location: $url");
    die();
}

function connect($source = DB)
{
    try {
        return new PDO($source, DB_USER, DB_PASS);
    } catch (PDOException $e) {
        return null;
    }
}