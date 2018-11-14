<html>
    <head>
		<link rel="stylesheet" type="text/css" href="<?= ROOT . DT . CSS . "estiloMenu.css" ?>">
		<style>
			#avatar{
    width: 50px;
    height: 50pxS;
}
		</style>
		</head>
		<div id= 'header'>
		<ul class='nav'>
		<li><a href='/' ?>Inicio</a></li>
		<li><a href=''>Plantilla</a>
		<ul>
		<li><a href='/jugadores/1'>Marc Gasol</a></li>
		<li><a href='/jugadores/2'>Yuta Watanabe</a></li>
		<li><a href='/jugadores/3'>Mario Charlmers</a></li>
		<li><a href='/jugadores/4'>Dillon Brooks</a></li>
		</ul>
		</li>
		<li><a href='/historia'>Historia</a></li>
		<li><a href=''>Noticias</a>
		<ul>
		<li><a href='/noticias/1'>Noticia 1</a></li>
		<li><a href='/noticias/2'>Noticia 2</a></li>
		<li><a href='/noticias/3'>Noticia 3</a></li>
		<li><a href='/noticias/4'>Noticia 4</a></li>
		</ul></li>
		<?php
	if ($_SESSION['logeado']) {
		?>
		<li><img class='avatar' id='avatar' src="<?= AVATARES . "/" . NOMBREAVATAR  .
		$_SESSION['id'] . "." . $_SESSION['extensionAvatar'] . "?v=XQ" ?>"><!--Concateno el punto, ya que si se lo paso a pelo, no me funciona-->
		<?php
		//echo AVATARES . "/" . NOMBREAVATAR . $_SESSION['id'] . "." . $_SESSION['extensionAvatar'];
		/*$cookie_data = explode(';', $_COOKIE['sesion']);
		var_dump($_COOKIE["sesion"]);
    	$nameUser = $cookie_data[0];
		$avatarUser = $cookie_data[1];
		echo "Extension: " . $avatarUser;
		echo "Id: " . $_SESSION['id'];
		echo "avatar: " . $_SESSION['extensionAvatar'];
		echo var_dump($_SESSION);*/
		?>
		<li><a href='/partidos'>Partidos</a></li>
		<li><a href='/formularioAvatar'>Configuracion</a></li>
		<li><a href='/logout'>Logout</a></li>
		</ul>
		</div>
		<?php
} else {
	?>
		<li><a href="/login"><div class="option" id="login">Login</div></a></li>
    	<li><a href="/registro"><div class="option" id="login">Registrarse</div></a></li>
	<?php

}
?>