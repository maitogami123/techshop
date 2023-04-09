<?php

function view($name, $model='') {
    require_once APP_ROOT . '/views/layout.view.php';
}

function redirect($url) {
    header("Location: $url");
    die();
}
