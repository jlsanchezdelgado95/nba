<?php
include "menu.php";
$key = $keys[0][0];
$idjugador = $params[$key];
switch ($idjugador) {
    case 1:
        include_once "MarcGasol.php";
        break;
    case 2:
        include_once "YutaWatanabe.php";
        break;
    case 3:
        include_once "MarioCharlmers.php";
        break;
    case 4:
        include_once "DillonBrooks.php";
        break;
}
?>