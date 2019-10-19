<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <link rel="stylesheet" href="css/materialize.css">
  <link rel="stylesheet" href="css/Yen.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <body background="img/cafe2.png">
    <nav id="Nav">

      <div class="nav-wrapper">
        <a class="brand-logo">Portal De Carnetizacion</a>
        <ul class="right hide-on-med-and-down">
          <a class="waves-effect waves-light btn"
          href="http://localhost/segundoinso/Carnet/leer.php">Ver Carnets</a>
              <ul class="right hide-on-med-and-down">
                <a class="waves-effect waves-light btn"
                href="http://localhost/segundoinso/Carnet/carnet.php">Inicio</a>
        </ul>
      </div>

    </nav>
    <br>
  </body>
</html>

<?php
  error_reporting(E_ALL);
  ini_set('display_errors' , 'On');
  $nie = $_REQUEST['nie'];
  $nombre = $_REQUEST['nombre'];
  $apellido = $_REQUEST['apellido'];
  $anio = $_REQUEST['anio'];
  $especialidad = $_REQUEST['especialidad'];
  $seccion = $_REQUEST['seccion'];
  $Imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));

  $conexion = mysqli_connect ("localhost","root","","segundoa")
  or die ("Problemas con la conexion");
  mysqli_query($conexion, "insert into crear_carnet(nie,nombre,apellido,anio,especialidad,seccion,Imagen)
  value('$nie','$nombre','$apellido','$anio','$especialidad','$seccion','$Imagen')")
  or die ("Problemas con la Query". mysqli_error($conexion));
  echo "";

  $Carnet_Creado = "Carnet Creado";
  $color = "white";
  echo "<p><font color='".$color."'>".$Carnet_Creado."</font></p>";

?>
