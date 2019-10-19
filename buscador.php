<?php

  $palabra=$_POST['palabra'];
  $query="SELECT * FROM crear_carnet WHERE nombre LIKE '%$palabra%'";
  $consulta=$mysqli->query($query);

  if($consulta->num_rows>=1){ 

  echo "<center><h4 style=\"color: white\">Resultados para: " .$palabra; echo "</h4></center>"; ?>

<br>
<br>

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
<body>


    <div class="container">
      <div class="row" >


 <?php   while($reg=$consulta->fetch_array(MYSQLI_ASSOC)){ ?>





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
            echo "<font color='".$color."'>".$seccion."</font>";

            ?>

    </div>



<?php

}
  }else{
    echo "<center><h4 style=\"color: white\">No hay resultados para: " .$palabra; echo "</h4></center>";

  }

?>

    </div>

    <hr><hr><br>
  </body>
</html>