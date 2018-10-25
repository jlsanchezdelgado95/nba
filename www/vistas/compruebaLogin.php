<?php

$user = trim($_POST["user"]);
$password = $_POST["password"];

$md5 = md5($password);
    //Comprobamos el usuario
$sql = "SELECT id, password, avatar, COUNT(1) FROM usuarios  
    WHERE nombreUsuario = :user LIMIT 1";
$prepared_statement = $mysql->prepare($sql);
$prepared_statement->bindParam(':user', $user, PDO::PARAM_STR);
if (!$prepared_statement->execute()) {
    $this->setError("Error al comprobar usuario registrado");
}

$respuesta = $prepared_statement->fetch(PDO::FETCH_NUM);
if ($respuesta[3] === "0") {
    echo "nombre de usuario no válido";
}

$passwordBBDD = $respuesta[1];

if (md5($password, $passwordBBDD)) {//Y si no probar el md5
    setcookie("sesion", $respuesta[0] . ";" . $respuesta[2], time() + (86400 * 7));
    header("location:" . ROOT2);
} else {
    echo "Contraseña no válida";
}
?>