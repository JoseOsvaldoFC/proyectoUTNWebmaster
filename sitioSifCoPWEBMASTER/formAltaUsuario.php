<?php 
                //Conexion PHP
                include 'conexion.php';
                //Consulta MySQL  - SELECT
                include 'queryDestinosYZonas.php'
 ?>


<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>SiFCop</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="img/logoSifcopFavicon.png">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
      <?php 
      // si estan seteadas las sesuines mostramos el codigo exclusivo 
      session_start();
      if (isset($_SESSION['usuario']) AND isset($_SESSION['idUsuarioAcceso'])) {
?>

<!-- Inicio Encabezado -->
        <header class="container-fluid header1">
            <div>
                <img src="img/headerPrefectura.jpg" alt="headerPrefectura">
             </div>
        </header><!-- /header -->
        <div class="text-center">
            <div class="container header2">
                <img src="img/logoSifcop.png" alt="headerPrefectura">
            </div>
            <div class="container">
                <h1>Dirección de Operaciones</h1>
            </div>
            <div class="container">
                <h2>Gestion Usuario SiFCop</h2>
            </div> 
        </div>
<!-- Fin Encabezado -->
        <?php 
            include ('panelNavegacionUsuarios.php');
         ?>
        <br>
        <div class="container text-center">
          <h3>Alta Usuario</h3>
        </div>
        <div class="container text-center">
            <form action="altaUsuario.php" method="POST">
              <div class="form-group row conteiner">
                <label for="inputApellidoYNombre" class="col-sm-2 col-form-label">Apellido y Nombre:</label>
                <div class="col-sm-7">
                  <input class="form-control" id="inputApellidoYNombre" placeholder="Apellido y Nombre" required="true" name="apellidoYNombre">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputNumDeDNI" class="col-sm-2 col-form-label">Nº de DNI:</label>
                <div class="col-sm-7">
                  <input class="form-control" id="inputNumDeDNI" placeholder="Nº de DNI"  required="true" name="numDni">
                </div>
              </div>
                <div class="form-group row">
                <label for="inputUsuario" class="col-sm-2 col-form-label">Usuario:</label>
                <div class="col-sm-7">
                  <input class="form-control" id="inputUsuario" placeholder="Usuario"  required="true" name="usuario">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputContrasenia" class="col-sm-2 col-form-label">Contraseña:</label>
                <div class="col-sm-7">
                  <input class="form-control" id="inputContrasenia" placeholder="Contraseña" required="true" name="contrasenia">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputDestino" class="col-sm-2 col-form-label">Destino:</label>
                <div class="col-sm-7">
                    <select class="custom-select my-1 mr-sm-2" id="inputDestino" required="true" name="cuatrigramaDestino">
                    <?php 
                      while ($resultadosDestino=mysqli_fetch_array($consultaDestinos)) {
                        $datoDestino = $resultadosDestino['cuatrigramaDestino'];
                        echo "<option value='$datoDestino'>".$datoDestino." - ".$resultadosDestino['descripcionDestino']."</option>";
                    }
                    ?>
                  </select>
                </div>
              </div>
                <div class="form-group row">
                <label for="inlineZona" class="col-sm-2 col-form-label">Zona/Dirección:</label>
                <div class="col-sm-7">
                    <select class="custom-select my-1 mr-sm-2" id="inlineZona" required="true" name="cuatrigramaZona">
                    <?php 
                      while ($resultadosZona=mysqli_fetch_array($consultaZonas)) {
                        $datoZona = $resultadosZona['cuatrigramaZona'];
                        echo "<option value='$datoZona'>".$datoZona."</option>";
                    }
                    include('finConexion.php');
                    ?>
                  </select>
                </div>
              </div>
              </fieldset>
              <div class="form-group row">
                <div class="col-sm-12">
                 <a href="inicioUsuarios.php">volver</a>
                  <button type="submit" class="btn btn-primary">Cargar</button>
                </div>
              </div>
            </form>
        </div>
        <?php 
            include('footer.php');
            include('scriptJSBootstrap.php');
                  } else {
        ?>
        <script>
          alert("Debe ser usuario registrado");
        </script>
        <?php
          include('formLogin.php');
        }
      ?>
    </body>
</html>
