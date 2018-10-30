<?php
$user = trim($_POST["user"]);
$password = $_POST["password"];
$imagen_usuario = $_POST["imagen_usuario"];
$extensionAvatar = explode(".", $imagen_usuario);
//$md5 = md5($password);
    //Comprobamos el usuario
$sql = "SELECT COUNT(*) FROM usuarios  
    WHERE nombreUsuario = '$user'";
$prepared_statement = $mysql->prepare($sql);
if (!$prepared_statement->execute()) {
    $this->setError("Error al comprobar usuario registrado");
}

$respuesta = $prepared_statement->fetch(PDO::FETCH_NUM);
//var_dump($respuesta);
if ($respuesta[0] == "1") {
    echo "nombre de usuario no válido";
} else {
    $md5 = md5($password);
    for ($i=0; $i < $extensionAvatar.lenght; $i++) { 
        echo $extensionAvatar[i] . "</br>";
    }
    echo "usuario: " . $user . " pass encriptada: " . $md5 . " extension: " . $extensionAvatar[0];
    $insert = $mysql->exec("INSERT INTO 'usuarios'('id', 'nombreUsuario', 'password', 'avatar')
    VALUES (null,$user,$md5,$extensionAvatar[1])");
    echo "Se ha insertado";
    //header("location:" . "/");
}

/*$passwordBBDD = $respuesta[1];

if ($md5 == $passwordBBDD) {//Y si no probar el md5; Guardo la id y el avatar
    setcookie("sesion", $respuesta[0] . ";" . $respuesta[2], time() + (86400 * 7));
    header("location:" . "/");
} else {
    echo "Contraseña no válida";
}*/
?>