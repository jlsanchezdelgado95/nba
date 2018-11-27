<?php 
// Validar el comentario
$comentario = trim($_POST["comentario"]);
if(empty($comentario)){
    exit("Debes proporcionar un comentario");
}
// Sanitizar el comentario
$comentario = strip_tags($comentario);
// Una vez comprobado, se puede insertar de forma segura.
$sql = "INSERT INTO `comentarios` (`id`, `idNoticia`, `idUsuario`, `comentario`) VALUES ('null', '$noticia', '$idUser', '$comentario')";
$insert = $mysql->prepare($sqlInsert);
$insert->execute();
// Escapar el comentario antes de mostrarlos
echo htmlspecialchars($comentarios);
?>