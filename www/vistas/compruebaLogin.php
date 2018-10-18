<?php

$user = trim($_POST["user"]);
$password = $_POST["password"];
$md5 = md5($password);
$archivo = fopen("ficheros/usuarios.txt", "r+");//Aqui meto el array de usuarios del txt
$array = file("./ficheros/usuarios.txt");
$tamanyo = sizeof($array);
$i;
$finalizado = false;
for ($i = 0; $i < $tamanyo; $i++) {
    $troceado = explode(";", $array[$i]);
    for ($j = 0; $j < sizeof($troceado); $j++) {
        if ($troceado[$j] == $user && $troceado[$j + 1] == $md5) {
            $i = $tamanyo;
            $img = $troceado[$j + 2];
            $_SESSION["avatar"] = $img;
            setcookie("sesion", $img, time() + (86400 * 7), "/");
            //sleep(5);
            /*echo " <script language='javascript'>alert('Bienvenid@' . $troceado[$j]);</script>";*/
            header("location: /");

        } /*else {
            //sleep(5);
            echo "<script language='javascript'>alert('Error con el usuario o con la contraseña');</script>";
            header("location: /error.php");
        }*/
    }
    if (($i + 1) == $tamanyo) {
        $finalizado = true;
    }
}
if ($finalizado == true) {
    echo "<script language='javascript'>alert('Error con el usuario o con la contraseña');</script>";
    header("location: /error.php");
}
?>