<?php

    if(!defined('ROOT')) define('ROOT',dirname(__DIR__));
    if(!defined('WWW')) define('WWW',ROOT.'/public');
    if(!defined('APP')) define('APP',ROOT.'/app');
    if(!defined('CORE')) define('CORE',ROOT.'/resources');
    if(!defined('LIBS')) define('LIBS',ROOT.'/resources/libs');
    if(!defined('CACHE')) define('CACHE',ROOT.'/tmp/cache');
    if(!defined('CONF')) define('CONF',ROOT.'/config');
    if(!defined('LAYOUT')) define('LAYOUT',ROOT.'app.blade.php');
    if(!defined('GALLERY')) define('GALLERY',ROOT.'/public/upload/gallery');
    if(!defined('IMG')) define('IMG',ROOT.'/public/upload/single');

    $host = FALSE;

    if (isset($_SERVER['HTTP_HOST'])) {
        $host = $_SERVER['HTTP_HOST'];
    }

    $allowed_hosts = 'http://laravel.admin.panel/index.php';
