<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link rel="stylesheet" type="text/css" media="screen" href="main.css" />-->
</head>
<body background="<?= ROOT . DT . IMAGES . "logo.jpg" ?>">
<style>
    body{
        color:white;
    }
</style>
<?php
include "menu.php";
$key = $keys[0][0];
$idnoticia = $params[$key];
switch ($idnoticia) {
    case 1:
        $sql = "SELECT * FROM `noticias` WHERE id = $idnoticia";
        foreach ($mysql->query($sql) as $row) {
            echo "<h1>" . $row[1] . "</h1>";
            echo "<p>" . $row[2] . "</p>";
        }
        $sqlComentario = "SELECT `idUsuario`, `comentario` FROM `comentarios` WHERE id = '1'";
        foreach ($mysql->query($sqlComentario) as $row) {
            echo "<h1>" . $row[0] . "</h1>";
            echo "<p>" . $row[1] . "</p>";
        }
        $_SESSION["noticia"] = 1;
        break;
    case 2:
        $sql = "SELECT * FROM `noticias` WHERE id = $idnoticia";
        foreach ($mysql->query($sql) as $row) {
            echo "<h1>" . $row[1] . "</h1>";
            echo "<p>" . $row[2] . "</p>";
        }
        foreach ($mysql->query($sqlComentario) as $row) {
            echo "<h1>" . $row[0] . "</h1>";
            echo "<p>" . $row[1] . "</p>";
        }
        $_SESSION["noticia"] = 2;
        break;
    case 3:
        $sql = "SELECT * FROM `noticias` WHERE id = $idnoticia";
        foreach ($mysql->query($sql) as $row) {
            echo "<h1>" . $row[1] . "</h1>";
            echo "<p>" . $row[2] . "</p>";
        }
        foreach ($mysql->query($sqlComentario) as $row) {
            echo "<h1>" . $row[0] . "</h1>";
            echo "<p>" . $row[1] . "</p>";
        }
        $_SESSION["noticia"] = 3;
        break;
    case 4:
        $sql = "SELECT * FROM `noticias` WHERE id = $idnoticia";
        foreach ($mysql->query($sql) as $row) {
            echo "<h1>" . $row[1] . "</h1>";
            echo "<p>" . $row[2] . "</p>";
        }
        foreach ($mysql->query(sqlComentario) as $row) {
            echo "<h1>" . $row[0] . "</h1>";
            echo "<p>" . $row[1] . "</p>";
        }
        $_SESSION["noticia"] = 4;
        break;
}
?>
        <form action="/enviarComentario" method="POST">
  <textarea name="comentario" form="usrform">200 caracteres</textarea>
  <input type="submit">
</form>
</body>
</html>
