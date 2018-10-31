<?php
include_once "menu.php";
echo "</br>";
echo "</br>";
$user = trim($_POST["user"]);
$password = $_POST["password"];
$imagen_usuario = $_FILES["imagen_usuario"]["name"];
$extensionAvatar = explode(".", $imagen_usuario);
//$md5 = md5($password);
    //Comprobamos el usuario
$sql = "SELECT COUNT(*) FROM usuarios  
    WHERE nombreUsuario = '$user'";
$prepared_statement = $mysql->prepare($sql);
$respuesta = $prepared_statement->fetch(PDO::FETCH_NUM);
//var_dump($respuesta);
if ($respuesta[0] == "1") {
    //echo "nombre de usuario no válido";
} else {
    //subimos el nuevo avatar del usuario
    $directorio = AVATARES . "/avatar24.png";//Pensar en concatenarle la id del usuario correspondiente
    //var_dump ($directorio);
    //var_dump ($_FILES["imagen_usuario"]["tmp_name"]);
    //le quito la última letra porque inserta un carácter extraño al final
    //$imagen = substr($directorio . $imagen_usuario, 0, -1);
    if ($_FILES["imagen_usuario"]["type"] === "image/png") {
        //echo "Archivo: ".$_FILES["imagen_usuario"]["tmp_name"]. "<br/> directorio: ".  $directorio;
        if (move_uploaded_file($_FILES["imagen_usuario"]["tmp_name"], $directorio)) {
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
    $md5 = md5($password);
    echo "usuario: " . $user . " pass encriptada: " . $md5 . " extension: " . $extensionAvatar[1];
    $sqlInsert = "INSERT INTO 'usuarios'('id', 'nombreUsuario', 'password', 'avatar')
    VALUES (null,'$user','$md5','$extensionAvatar[1]')";
    $insert = $mysql->prepare($sqlInsert);
    $insert->execute();
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