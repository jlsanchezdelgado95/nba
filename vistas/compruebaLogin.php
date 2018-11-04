<?php

$user = trim($_POST["user"]);
$password = $_POST["password"];

$md5 = md5($password);
    //Comprobamos el usuario
$sql = "SELECT id, password, avatar, COUNT(1) FROM usuarios  
    WHERE nombreUsuario = '$user' LIMIT 1";
    foreach ($mysql->query($sql) as $row) {
        $respuesta = $row;
    }
/*$prepared_statement = $mysql->prepare($sql);
if (!$prepared_statement->execute()) {
    $this->setError("Error al comprobar usuario registrado");
}

$respuesta = $prepared_statement->fetch(PDO::FETCH_NUM);*/
if ($respuesta[3] === "0") {
    echo "nombre de usuario no válido";
}

$passwordBBDD = $respuesta[1];

if ($md5 == $passwordBBDD) {//Y si no probar el md5; Guardo la id y el avatar
    setcookie("sesion", $respuesta[0] . ";" . $respuesta[2], time() + (86400 * 7));
    //echo "Avatar: " . $respuesta[2];
    header("location:" . "/");
} else {
    echo "Contraseña no válida";
}
?>