<?php
include_once "menu.php";
echo "</br>";
echo "</br>";
$user = trim($_POST["user"]);
$password = $_POST["password"];
$imagen_usuario = $_FILES["imagen_usuario"]["name"];
$extensionAvatar = explode(".", $imagen_usuario);
$sql = "SELECT id, password, avatar, COUNT(1) FROM usuarios  
    WHERE nombreUsuario = '$user' LIMIT 1";
$prepared_statement = $mysql->prepare($sql);
if (!$prepared_statement->execute()) {
    $this->setError("Error al comprobar usuario registrado");
}
$respuesta = $prepared_statement->fetch(PDO::FETCH_NUM);
if($respuesta[3] == 0){
    $md5 = md5($password);
    $sqlInsert = "INSERT INTO usuarios(id, nombreUsuario, password, avatar)
    VALUES (null,'$user','$md5','$extensionAvatar[1]')";
    $insert = $mysql->prepare($sqlInsert);
    $insert->execute();

    $sqlIdUsuarioNuevo = "SELECT id FROM `usuarios` WHERE nombreUsuario = '$user'";
    $prepared_statementId = $mysql->prepare($sqlIdUsuarioNuevo);
    $prepared_statementId->execute();
    $idUsuarioNuevo = $prepared_statementId->fetch(PDO::FETCH_NUM);
    echo "EL id del usuario nuevo es: " . $idUsuarioNuevo[0];
    $avatar = 'avatar' . $idUsuarioNuevo[0] . '.' . $extensionAvatar[1];
    $directorio = "avatares/";
    if ($_FILES["imagen_usuario"]["type"] === "image/png") {
        if (move_uploaded_file($_FILES["imagen_usuario"]["tmp_name"], AVATARES2 . "/" . $avatar)) {
            //if (move_uploaded_file($nombreAvatar, $imagen)) {
            echo "El fichero se ha subido con éxito";
        } else {
            echo "<br/>Error en la subida de fichero";
        }
        //echo "<br/> Información del fichero subido: <br />:";
        //print_r($_FILES);
    } else {
        echo "Formato de fichero incorrecto";
    }
    echo "Se ha insertado";
    //header("location:" . "/");
} else {
    echo "Nombre de usuario en uso";
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