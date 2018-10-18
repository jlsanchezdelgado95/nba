<?php
$routes = include "routes.php";
session_start();
$page = null;
$matchesParams = array();

function compruebaLogin(){
    include_once("compruebaLogin.php");
    $sesion = $_COOKIE['sesion'];
}
compruebaLogin();

include "config.php";
include "menu.php";
$uri = trim($_SERVER["REQUEST_URI"], "/");
foreach ($routes["routes"] as $currentRoute) {
    //echo "ADIOS";
    $route = trim($currentRoute["route"], "/");
    //echo "route: $route <br/>";
    $routerPattern = "#^" . preg_replace('/\\\:[a-zA-Z0-9\_\-]+/','([a-zA-Z0-9\-\_]+)', preg_quote($route)) . "$#D";
    //echo $routerPattern;
    //$matchesParams = array();
    if (preg_match_all($routerPattern, $uri, $matchesParams)) {
        //var_dump($matchesParams);
        $keys = array();
        //echo "HOla";
        $params = array();
        //var_dump($params);
        array_shift($matchesParams);
        preg_match_all('/\\:([a-zA-Z0-9\_\-]+)/',$route,$keys);//mirar las expresiones regulares

        array_shift($keys);
        for ($i = 0; $i < count($keys[0]); $i++) {
            $params[$keys[0][$i]] = $matchesParams[$i][0];
        }
        $page = $currentRoute["page"];
        break;
    }
}
//echo "página: $page <br />";
if ($page == null) {
    include_once(VISTAS . $routes["error"]);
} else
    include_once(VISTAS . $page);
?>