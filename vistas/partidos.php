<!DOCTYPE html>
<html>
    <style>
    body{
        color:white;
    }
    </style>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body background="<?= ROOT . DT . IMAGES . "logo.jpg" ?>">
<?php
include_once "menu.php";
?>
</br>
</br>
</br>
</br>
</br>
<h2>Temporadas</h2>
</br>
<form action = "/partidos" method="POST">
<select name="temporadaSeleccionada">
<?php
$sql = "SELECT DISTINCT temporada FROM partidos
    WHERE equipo_local = 'Grizzlies' or equipo_visitante = 'Grizzlies'";
foreach ($mysql->query($sql) as $row) {
    ?>
    <option value=<?= $row[0] ?>><?= $row[0] ?></option>
    <?php
}
echo '<input type="submit" name="temporada" value = "Mostrar">';
?>
</select>
</form>
<table>
<tr>
    <td>Codigo Partido</td>
    <td>Equipo Local</td>
    <td>Equipo Visitante</td>
    <td>Puntos Local</td>
    <td>Puntos Visitante</td>
    <td>Temporada</td>
</tr>
<?php
$temporada = $_POST['temporadaSeleccionada'];
$sql = "SELECT codigo,equipo_local,equipo_visitante,puntos_local,puntos_visitante,temporada FROM partidos
WHERE (equipo_local = 'Grizzlies' or equipo_visitante = 'Grizzlies') and temporada = $temporada";
$datosPartidos = $mysql->prepare($sql);
$datosPartidos->bindParam(":temporada",$temporada,PDO::PARAM_STR);
$datosPartidos->execute();
$partidos = $datosPartidos->fetchAll();
foreach ($partidos as $columna) {
    echo '<tr>';
    echo '<td>' . $columna[0] . '</td>';
       echo '<td>' . $columna[1] . '</td>';
       echo '<td>' . $columna[2] . '</td>';
       echo '<td>' . $columna[3] . '</td>';
       echo '<td>' . $columna[4] . '</td>';
       echo '<td>' . $columna[5] . '</td>';
       echo '</tr>';
       ?>
    <!--
<tr>

    <td><?php echo $columna[0]?></td>
    <td><?php echo $columna[1]?></td>
    <td><?php echo $columna[2]?></td>
    <td><?php echo $columna[3]?></td>
    <td><?php echo $columna[4]?></td>
    <td><?php echo $columna[5]?></td>
</tr>-->
<?php
}
?>
</table>
    
</body>
</html>