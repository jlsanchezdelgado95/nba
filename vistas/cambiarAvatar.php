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
    ?>
    </br>
</br>
</br></br>
</br>
    <?php
        //sacamos el nombre del usuario y la extension del cookie
    $cookie_data = explode(';', $_COOKIE['sesion']);
    $idUser = $cookie_data[0];
    $avatarUser = $cookie_data[1];
    $directorio = "avatares/";
    //le quito la última letra porque inserta un carácter extraño al final
    //$imagen = substr($directorio . $avatarUser, 0, -1);
    $extension = end(explode(".", $_FILES['imagen_usuario']['name']));
    try {
        $sql = 'UPDATE usuarios SET avatar = :extension WHERE id=:idUsuario';
        $ps = $mysql->prepare($sql);
        $ps->bindParam(':extension', $extension, PDO::PARAM_STR);
        $ps->bindParam(':idUsuario', $idUser, PDO::PARAM_INT);
        $ps->execute();
        //borrar los demas avatares
        array_map('unlink', glob(AVATARES . DS . NOMBREAVATAR . $idUser . ".*"));
        //subir el avatar del usuario
        $avatar = 'avatar' . $idUser . '.' . $extension;
        echo $avatar;
        if (is_uploaded_file($_FILES["imagen_usuario"]["tmp_name"])) {
            if (move_uploaded_file($_FILES["imagen_usuario"]["tmp_name"], AVATARES2 . "/" . $avatar)) {
                echo "SE HA SUBIDO";
            } else {
                echo "NO SE SUBE";
            }
        }
        
        //print_r($_FILES);
        //actualizar la cookie
        setcookie("sesion", $idUser . ";" . $extension, time() + (86400 * 7));
    } catch (\PDOException $e) {
        echo $e->getCode();
    }

    //header("location:" . ROOT);
    /*
    if ($_FILES["imagen_usuario"]["type"] == "image/png") {
        if (move_uploaded_file($_FILES["imagen_usuario"]["tmp_name"], $directorio)) {
            echo "El fichero se ha subido con éxito";
        } else {
            echo "Error en la subida de fichero";
        }
        echo "<br/> Información del fichero subido: <br />:";
        print_r($_FILES);
    } else {
        echo "Formato de fichero incorrecto";
    }*/
    ?>
    
</body>
</html>