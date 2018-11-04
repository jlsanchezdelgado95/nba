<html>
<link rel="stylesheet" type="text/css" href="<?= ROOT . DT . CSS . "estiloJugadores.css" ?>">
<body background="<?= ROOT . DT . IMAGES . "logo.jpg" ?>">
<?php
?>
<style type="text/css">
#contenedor{
    width: 33%;
    align: center;
    color:white;
}
body{
    color:white;
}
#izquierda{
    color:white;
   float: left;
   width: 300px;
   margin: 0 auto;
   display: inline-block;
}
#derecha{
    color:white;
   float: right;
   width: 300px;
   margin: 0 auto;
   display: inline-block;
}
#infoJugador{
    text-align: left;
}
#Biografia{
    width: 50%;
    align: center;
    color: white;
}
h2{
    color: white;
    text-align: center;
}
</style>
<?php
$sql = "SELECT * FROM `jugadores` WHERE Nombre = 'Mario Chalmers'";
$datos = $mysql->prepare($sql);
$datos->execute();
$datosImprimir = $datos->fetch();
?>
<img src="<?= ROOT . DT . IMAGES . $datosImprimir[7] ?>">
</br>
<img src="<?= ROOT . DT . IMAGES . "statsMario.png" ?>">
</br>
<h1 id="infoJugador">Informaci&oacuten</h1>
Procedencia: <?php echo $datosImprimir[2] . "</br>"; ?>
    Altura: <?php echo $datosImprimir[3]. "</br>"?>
    Peso: <?php echo $datosImprimir[4]. "</br>"?>
    Posicion: <?php echo $datosImprimir[5]. "</br>"?>
<!--<div id="contenedor">
<div id="izquierda">
    Altura: 6ft 2 in / 1.88m </br>Nacimiento</br>Edad</br>Procedencia</br>Debut en la NBA</br>Años en la NBA</br>Equipos anteriores
</div>
<div id="derecha" style>
    Peso: 190lbs / 86.2kg</br>19/05/1986</br>32 Años</br>Kansas</br>2008</br>9</br>MEM 2015-2018</br>MIA 2008-16
</div>
</div>-->
<h2>Biografia del jugador</h2>
<div id="Biografia"<p>
</br>
Almario Vernard "Mario" Chalmers (nacido el 19 de mayo de 1986 en Anchorage, Alaska) es un jugador de baloncesto estadounidense que pertenece a la plantilla de los Memphis Grizzlies. Mide 1,85 metros de altura, y juega en la posición de base. Fue campeón de la NCAA y elegido Mejor jugador de la Final Four en 2008, antes de dar el salto a la liga profesional. El 11 de diciembre de 2013 fue incluido en el Salón de la Fama de Alaska.
</div></p>
</body>
</html>