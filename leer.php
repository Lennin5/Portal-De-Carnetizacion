<?php

error_reporting(E_ALL);
ini_set('display_errors' , 'On');

$conexion = mysqli_connect("localhost","root","","segundoa") or
die("problemas con la conexion");
$crear_carnet = mysqli_query($conexion, "select nie, nombre, apellido, anio, especialidad, seccion, Imagen from
crear_carnet") or die("Problemas con las slq" .mysqli_error($conexion));

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="utf-8">
    <title>Carnets</title>
  </head>
  <link rel="stylesheet" href="css/materialize.css">
  <link rel="stylesheet" href="css/Jen.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  <script type="text/javascript">
      $(document).ready(function(){
    $('.materialboxed').materialbox();
  });
  </script>
  <body background="img/cafe3.png">

    <nav id="Nav">
    <div class="nav-wrapper">
      <a class="brand-logo">Vista de Carnets</a>

      <ul class="right hide-on-med-and-down">
        <a class="waves-effect waves-light btn" href="http://localhost/segundoinso/Carnet/carnet.php">Inicio</a>
                          <ul class="right hide-on-med-and-down">
        <a class="waves-effect waves-light btn" href="http://localhost/segundoinso/Carnet/leer.php">Reiniciar</a></ul>  
      </ul>
    </div>
    </nav>
<br><br>

    <form autocomplete="off" action="leer.php" autocomplete="off" method="post">
    <div class="form-group">
    </div>
      <center>
            <input id="Sonia" type="search" placeholder="Buscar..." name="palabra"
              style="color: white"></center>
<center>
                    <input type="submit" value="Buscar" class="waves-effect waves-light btn" name="btn2"/>
        </center>
        
            </form>
<br>
                

<?php
error_reporting(0);

  if (isset($_POST['palabra'])) {

    include 'conexion.php';
    include 'buscador.php';

  }



?>
    <br>
    <div class="container">
      <div class="row">



 <?php   
    while($reg = mysqli_fetch_array($crear_carnet))
      {               ?>





      <div class="col s10" id="Card" >
          <img class="materialboxed responsive-img" id="image" 
           src="data:image/jpg;base64,<?php echo base64_encode($reg['Imagen']); ?>"/>
      </div>

            <div class="col s3.5">

            <?php

            echo "<br>";

            $nie = "Nie: ".$reg['nie'];
            $color = "white";
            echo "<font color='".$color."'>".$nie."</font><br>";

            $nombre = "Nombre: ".$reg['nombre'];
            $color = "white";
            echo "<font color='".$color."'>".$nombre."</font><br>";

            $apellido = "Apellido: ".$reg['apellido'];
            $color = "white";
            echo "<font color='".$color."'>".$apellido."</font><br>";

            $anio = "Año: ".$reg['anio'];
            $color = "white";
            echo "<font color='".$color."'>".$anio."</font><br>";

            $especialidad = "Especialidad: ".$reg['especialidad'];
            $color = "white";
            echo "<font color='".$color."'>".$especialidad."</font><br>";

            $seccion = "Seccion: ".$reg['seccion'];
            $color = "white";
            echo "<font color='".$color."'>".$seccion."</font><br>";

            ?>

    </div>

      <?php
      }
      
      mysqli_close($conexion);
       ?>
    </div>
  </div>

  </body>
</html>






