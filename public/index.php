<?php
require "../vendor/autoload.php";

use Symfony\Component\Yaml\Yaml;

session_start();

$routes = Yaml::parseFile('../config/routes.yaml');
$config = Yaml::parseFile('../config/config.yaml');

if(isset($_SERVER['PATH_INFO'])){
    $path = $_SERVER['PATH_INFO'];
}else{
    $path = $config["path_default"];
}

if (
        !isset($_SESSION['usuario'])
        &&
        !array_filter(
            $config["paths_unprotected"],
            function ($path_unprotected)use($path){return preg_match($path_unprotected, $path);}
            )
) {
   header("Location: {$config['path_unprotected_default']}",true,302);
   exit();
}

if (!array_key_exists($path, $routes)) {
    header("Location: {$config['path_not_found']}",true,404);
    exit();
}

$classController = $config['path_controller'].$routes[$path];
$controller = new $classController();
$controller->request();
