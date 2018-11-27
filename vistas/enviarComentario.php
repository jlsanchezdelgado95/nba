<?php
include_once "menu.php";
$comentario = $_POST['comentario'];
$noticia = $_SESSION['noticia'];
$cookie_data = explode(';', $_COOKIE['sesion']);
$idUser = $cookie_data[0];
$sqlInsert = "INSERT INTO `comentarios` (`id`, `idNoticia`, `idUsuario`, `comentario`) VALUES ('null', '$noticia', '$idUser', '$comentario')";
$insert = $mysql->prepare($sqlInsert);
$insert->execute();
header("location:" . "/noticias/" . $noticia);
?>