<html>
<link rel="stylesheet" type="text/css" href="<?= ROOT . DT . CSS . "estiloMain.css" ?>">
<body background="<?= ROOT . DT . IMAGES . "logo.jpg" ?>">
<?php
include "menu.php";
?>
<style>
#contenedor{
    width: 70%;
    display: block;
    align: center;
    color:white;
}
#izquierda{
    position: relative;
    color:white;
   float: left;
   width: 300px;
   margin: 0 auto;
   display: inline-block;
}
#derecha{
    position:
    color:white;
   float: right;
   width: 300px;
   margin: 0 auto;
   display: inline-block;
}
#infoJugador{
    text-align: left;
}
#segundaImg{
    margin-left: 200px;
    width: 700px;
    height: 500px;
}
</style>
<img src="<?= ROOT . DT . IMAGES . "img1Inicio.png" ?>">
</br>
<div id="contenedor">
    <div id="izquierda">
<img id="segundaImg" src="<?= ROOT . DT . IMAGES . "SegundaImgMain.png" ?>">
</div><!--"420" height="315"-->
<!--<div id="derecha"><iframe width="700" height="500" src="https://www.youtube.com/embed/96qvM6Tmrbs"></iframe>-->

</div>
</div>
</body>
</html>