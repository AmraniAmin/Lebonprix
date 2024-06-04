<?php

    define('ROOT_DIR_NAME', 'resto_hotel');

    $baseurl = 'http://' . $_SERVER['HTTP_HOST'] . '/';
    if($_SERVER['HTTP_HOST'] == 'localhost') {
        $baseurl .= ROOT_DIR_NAME;
    }
    define('BASE_URL', $baseurl);

    $basepath = $_SERVER['DOCUMENT_ROOT'];
    if($_SERVER['HTTP_HOST'] == 'localhost') {
        $basepath .= ROOT_DIR_NAME;
    }
    define('BASE_PATH', $basepath);