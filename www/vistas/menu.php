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
		<?php
	if ($_SESSION['logeado']) {
		?>
		<li><img class='avatar' id='avatar' src="<?= AVATARES . DS . NOMBREAVATAR .
		$_SESSION['id'] . "." . $_SESSION['extensionAvatar'] ?>"><!--Concateno el punto, ya que si se lo paso a pelo, no me funciona-->
		<li><a href='/formularioAvatar'>Configuracion</a></li>
		<li><a href='/logout'>Logout</a></li>
		</ul>
		</div>
		<?php

} else {
	?>
		<a href="/login"><div class="option" id="login">Login</div></a>
    	<a href="/registrarse"><div class="option" id="login">Registrarse</div></a>
	<?php

}
?>