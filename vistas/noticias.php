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
echo "</br></br></br></br></br>";
$sql = "SELECT * FROM `noticias` WHERE id = $idnoticia";
foreach ($mysql->query($sql) as $row) {
    echo "<h1>" . $row[1] . "</h1>";
    echo "<p>" . $row[2] . "</p>";
}
$sqlComentario = "SELECT `idUsuario`, `comentario` FROM `comentarios` WHERE idNoticia = $idnoticia";
foreach ($mysql->query($sqlComentario) as $row) {
    echo "<h1>Id Usuario: " . $row[0] . "</h1>";
    echo "<p>Comentario: " . $row[1] . "</p>";
}
$_SESSION["noticia"] = $idnoticia;
?>
        <form action="/enviarComentario" method="post">
  <textarea name="comentario">200 caracteres</textarea>
  <input type="submit">
</form>
</body>
</html>
