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

    <?php
    $dir_subida = AVATARES . DT;
    var_dump("Direccion subida " . $dir_subida);
    $imagen_subida = $dir_subida . basename($_FILES['imagen_usuario']['name']);
    echo "</br>";
    $avatar = $_COOKIE["sesion"];
    var_dump($_COOKIE["sesion"]);
    $cortado = substr($avatar,0,-1);
    $nombreAnterior = $dir_subida . $cortado;
    echo "OK: " . $nombreAnterior;
    if (move_uploaded_file($_FILES['imagen_usuario']['tmp_name'], $nombreAnterior)) {
        echo "Se ha subido correctamente";
        //header("location: /");
        //setcookie("sesion", $img, time() + (86400 * 7), "/");
    } else {
        echo "No se ha podido subir";
    }

    ?>
    
</body>
</html>