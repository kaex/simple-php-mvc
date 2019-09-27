<?php
spl_autoload_register(function($className){
    require_once __DIR__ . '/../core/' . $className . '.php';
});

define('APPROOT', __DIR__. '/../app');
define('URLROOT', 'localhost');
define('SITENAME', 'xosad');

$init = new Core;
?>