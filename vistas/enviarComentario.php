<?php
include_once "menu.php";
$comentario = $_POST['comentario'];
$noticia = $_SESSION['noticia'];
$cookie_data = explode(';', $_COOKIE['sesion']);
$idUser = $cookie_data[0];

$sql = "INSERT INTO `comentarios` (`id`, `idNoticia`, `idUsuario`, `comentario`) VALUES ('null', '$noticia', '$idUser', '$comentario')";
$insert = $mysql->prepare($sqlInsert);
    $insert->execute();
    $sqlSelect = "SELECT * FROM `comentarios`";
       foreach ($mysql->query($sqlSelect) as $row) {
        echo "<h1>Id Usuario: " . $row[0] . "</h1>";
        echo "<p>Comentario: " . $row[3] . "</p>";
        header("location" . "/noticias");
    }
?>