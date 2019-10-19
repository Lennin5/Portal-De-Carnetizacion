<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/materialize.css">
    <link rel="stylesheet" href="css/Yen.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
  <body background="img/cafe3.png">

    <nav id="Nav">
    <div class="nav-wrapper">
      <a class="brand-logo">Crear Carnet</a>
      <ul class="right hide-on-med-and-down">
        <a class="waves-effect waves-light btn"
        href="http://localhost/segundoinso/Carnet/carnet.php">Inicio</a>
      </ul>
    </div>
  </nav>


    <div class="container" id="prim">
      <div class="row">
        <div class="col s10">
          <div class="container" id="sec">
            <form class="" action="guardar.php" method="post" autocomplete="off" enctype="multipart/form-data">
<br>
              <label form="nie" style="color: white"> Nie:
                  <input type="number" name="nie" placeholder="" id="cont1">
              </label>
              <label form="nombre" style="color: white"> Nombre:
                  <input type="text" name="nombre" placeholder="" id="cont1">
              </label>
              <label form="apellido" style="color: white"> Apellido:
                  <input type="text" name="apellido" placeholder="" id="cont1">
              </label>
<br>
                <label for="anio" style="color: white">Año</label>
                  <select class="browser-default" id="cont2" style="color: white" name="anio">
                    <option value=""></option>
                    <option value="1°" style="color: black">1°</option>
                    <option value="2°" style="color: black">2°</option>
                    <option value="3°" style="color: black">3°</option>
                  </select>
                </label>
<br>
                <label for="especialidad" style="color: white">Especialidad</label>
                  <select class="browser-default" id="cont2" style="color: white" name="especialidad">
                    <option value=""></option>
                    <option value="Bachillerato General" style="color: black">Bachillerato General</option>
                    <option value="Admininistrativo Contable" style="color: black">Admininistrativo Contable</option>
                    <option value="Mecanica Automotriz" style="color: black">Mecanica Automotriz</option>
                    <option value="Desarrollo de Software" style="color: black">Desarrollo de Software</option>
                    <option value="Atencion Primaria En Salud" style="color: black">Atencion Primaria En Salud</option>
                </select>
               </label>
<br>
               <label for="seccion" style="color: white">Seccion</label>
                <select class="browser-default" id="cont2" style="color: white" name="seccion">
                  <option value=""></option>
                  <option value="A" style="color: black">"A"</option>
                  <option value="B" style="color: black">"B"</option>
                </select>
              </label>
<br>
        <center>
              <label form="Imagen" style="color: white"> Imagen:
                  <input type="file" REQUIRED name="Imagen" placeholder="" id="cont1">
                </label>
        </center>
<br>

  <input type="submit" value="Crear" class="btn btn-primary">
  <input type="reset" value="Limpiar" class="btn btn-primary" >

</form>
</div>
</div>
</div>
</div>
  </body>
</html>
