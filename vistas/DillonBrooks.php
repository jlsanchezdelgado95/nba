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
h2{
    color: white;
    text-align: left;
}
#Biografia{
    width: 50%;
    align: center;
    color: white;
}
</style>
<?php
$sql = "SELECT * FROM `jugadores` WHERE Nombre = 'Dillon Brooks'";
$datos = $mysql->prepare($sql);
$datos->execute();
$datosImprimir = $datos->fetch();
?>
<img src="<?= ROOT . DT . IMAGES . $datosImprimir[7] ?>">
</br>
<img src="<?= ROOT . DT . IMAGES . "statsDillonBrooks.png" ?>">
</br>
<h1 id="infoJugador">Informaci&oacuten</h1>
Procedencia: <?php echo $datosImprimir[2] . "</br>"; ?>
    Altura: <?php echo $datosImprimir[3] . "</br>" ?>
    Peso: <?php echo $datosImprimir[4] . "</br>" ?>
    Posicion: <?php echo $datosImprimir[5] . "</br>" ?>
<!--<div id="contenedor">
<div id="izquierda">
    Altura: 6ft 6 in / 1.98m </br>Nacimiento</br>Edad</br>Procedencia</br>Debut en la NBA</br>Años en la NBA</br>Equipos anteriores
</div>
<div id="derecha" style>
    Peso: 220lbs / 99.8kg</br>22/01/1996</br>22 Años</br>Oregon</br>2017</br>1</br>MEM 2017-2018
</div>
</div>-->
<h2>Biografia del jugador</h2>
<p id="Biografia">
Dillon Brooks (Mississauga, Ontario, 22 de enero de 1996) es un baloncestista canadiense que pertenece a la plantilla de los Memphis Grizzlies de la NBA. Con 1.98 metros de estatura, juega en la posición de alero.
</p>
</body>
</html>