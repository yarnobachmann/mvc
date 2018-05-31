<?php

require 'config.php';
require 'util/Auth.php';

spl_autoload_register(function($class) {
    require LIBS . $class .".php";
});

$bootstrap = new Bootstrap();

$bootstrap->init();
