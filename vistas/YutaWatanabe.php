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
body{
    color:white;
}
</style>
<?php
$sql = "SELECT * FROM `jugadores` WHERE Nombre = 'Yuta Watanabe'";
$datos = $mysql->prepare($sql);
$datos->execute();
$datosImprimir = $datos->fetch();
?>
<img src="<?= ROOT . DT . IMAGES . $datosImprimir[7] ?>">
</br>
<img src="<?= ROOT . DT . IMAGES . "statsYutaWatanabe.png" ?>">
</br>
<h1 id="infoJugador">Informaci&oacuten</h1>
Procedencia: <?php echo $datosImprimir[2] . "</br>"; ?>
    Altura: <?php echo $datosImprimir[3] . "</br>" ?>
    Peso: <?php echo $datosImprimir[4] . "</br>" ?>
    Posicion: <?php echo $datosImprimir[5] . "</br>" ?>
<!--<div id="contenedor">
<div id="izquierda">
    Altura: 6ft 9 in / 2.06m </br>Nacimiento</br>Edad</br>Procedencia</br>Debut en la NBA</br>Años en la NBA</br>Equipos anteriores
</div>
<div id="derecha" style>
    Peso: 205lbs / 93.0kg</br>13/10/1994</br>23 Años</br>George Washington</br>2018</br>0</br>Ninguno
</div>
</div>-->
<h2>Biografia del jugador</h2>
<p id="Biografia">
Yuta Watanabe (en japonés 渡邊 雄太 Miki, Kagawa, 13 de octubre de 1994) es un baloncestista japonés que pertenece a la plantilla de los Memphis Grizzlies de la NBA, con un contrato dual para jugar en su filial, los Memphis Hustle de la G League. Con 2,06 metros de estatura, juega en la posición de ala-pívot.
</p>
</body>
</html>