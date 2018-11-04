<?php
if (isset($_COOKIE['sesion'])) {
    setcookie("sesion",null,-1);
    header("location: /");
}
?>