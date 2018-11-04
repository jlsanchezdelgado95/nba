<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
    <?php
    include "menu.php";
        //sacamos el nombre del usuario y el avatar de la cookie
    $cookie_data = explode(';', $_COOKIE['sesion']);
    $nameUser = $cookie_data[0];
    $avatarUser = $cookie_data[2];
    echo $avatarUser;
    //subimos el nuevo avatar del usuario
    $directorio = AVATARES . "/";
    //le quito la última letra porque inserta un carácter extraño al final
    $imagen = substr($directorio . $avatarUser, 0, -1);
    //echo $imagen;
    if ($_FILES["avatar"]["type"] == "image/png") {
        if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $imagen)) {
            //if (move_uploaded_file($nombreAvatar, $imagen)) {
            echo "El fichero se ha subido con éxito";
        } else {
            echo "Error en la subida de fichero";
        }
        echo "<br/> Información del fichero subido: <br />:";
        print_r($_FILES);
    } else {
        echo "Formato de fichero incorrecto";
    }

    header("location:" . "/");
        /*Hecho anteriormente*/
    /*$dir_subida = AVATARES . DT;
    var_dump("Direccion subida " . $dir_subida);
    $imagen_subida = $dir_subida . basename($_FILES['imagen_usuario']['name']);
    echo "</br>";
    $avatar = $_COOKIE["sesion"];
    var_dump($_COOKIE["sesion"]);
    $cortado = substr($avatar, 0, -1);
    $nombreAnterior = $dir_subida . $cortado;
    echo "OK: " . $nombreAnterior;
    if (move_uploaded_file($_FILES['imagen_usuario']['tmp_name'], $nombreAnterior)) {
        echo "Se ha subido correctamente";
        //header("location: /");
        //setcookie("sesion", $img, time() + (86400 * 7), "/");
    } else {
        echo "No se ha podido subir";
    }*/

    ?>
    
</body>
</html>