<?php

    define('DS', DIRECTORY_SEPARATOR);
    define('ROOT',realpath(dirname(__FILE__)) .DS);
    define('URL', "http://localhost/proyecto/");
    
    require_once "Config/autoload.php";
    Config\Autoload:: run();
    require_once "Views/template.php";
    Config\Enrutador::run(new Config\Request());
    
?>