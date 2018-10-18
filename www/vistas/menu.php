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
		<?php
		//$avatar = $_SESSION["avatar"];
	$avatar = $_COOKIE["sesion"];
	if (isset($_COOKIE['sesion'])) {
		echo "<div id= 'header'>";
		echo "<ul class='nav'>";
		echo "<li><a href='/' ?>Inicio</a></li>";
		echo "<li><a href=''>Plantilla</a>";
		echo "<ul>";
		echo "<li><a href='/jugadores/1'>Marc Gasol</a></li>";
		echo "<li><a href='/jugadores/2'>Yuta Watanabe</a></li>";
		echo "<li><a href='/jugadores/3'>Mario Charlmers</a></li>";
		echo "<li><a href='/jugadores/4'>Dillon Brooks</a></li>";
		echo "</ul>";
		echo "</li>";
		echo "<li><a href='/historia'>Historia</a></li>";
		echo "<li><a href=''><img class='avatar' id='avatar' src=" . ROOT . DT . AVATARES . trim($avatar) . " /></a>";
		echo "<li><a href='/formularioAvatar'>Configuracion</a></li>";
		echo "<li><a href='/logout'>Logout</a></li>";
		echo "</ul>";
		echo "</div>";
	} else {
		print <<<HERE
		<div id="header">
		<ul class="nav">
			<li><a href="/" ?>Inicio</a></li>
			<li><a href="">Plantilla</a>
				<ul>
					<li><a href="/jugadores/1">Marc Gasol</a></li>
					<li><a href="/jugadores/2">Yuta Watanabe</a></li>
					<li><a href="/jugadores/3">Mario Charlmers</a></li>
					<li><a href="/jugadores/4">Dillon Brooks</a></li>
				</ul>
			</li>
			<li><a href="/historia">Historia</a></li>
			<li id = "login"><a href="/login">Login</a></li>
		</ul>
	</div>
HERE;
	}
	?>