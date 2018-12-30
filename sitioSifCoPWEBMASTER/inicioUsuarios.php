
<?php 
                //Conexion PHP
                include 'conexion.php';

                //Consulta MySQL  - SELECT
                $queryUsuarios = "SELECT idUsuario, apellidoNombre, numDni, usuario, contrasenia, zona, cuatrigramaDestino FROM usuariossifcop WHERE estado LIKE '%ALTA%' AND NOT(zona LIKE '%DICR%') ORDER BY zona, cuatrigramaDestino";
                $consulta = mysqli_query($conexion,$queryUsuarios);
 ?>

<!DOCTYPE doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta content="ie=edge" http-equiv="x-ua-compatible">
        <title>
          SiFCop
        </title>
        <meta content="" name="description">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <link href="img/logoSifcopFavicon.png" rel="shortcut icon">
        <link href="css/normalize.css" rel="stylesheet">
        <link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <script src="js/vendor/modernizr-2.8.3.min.js">
        </script>
    </head>
    <body>
           <?php 
      // si estan seteadas las sesuines mostramos el codigo exclusivo 
      session_start();
      if (isset($_SESSION['usuario']) AND isset($_SESSION['idUsuarioAcceso'])) {
?>
        <header class="container-fluid header1">
            <div>
                <img alt="headerPrefectura" src="img/headerPrefectura.jpg">
                </img>
            </div>
        </header>
        <!-- /header -->
        <div class="text-center">
            <div class="container header2">
                <img alt="headerPrefectura" src="img/logoSifcop.png">
                </img>
            </div>
            <div class="container">
                <h1>
                    Dirección de Operaciones
                </h1>
            </div>
            <div class="container">
                <h2>
                    Gestión SiFCop
                </h2>
            </div>
        </div>

         <?php 
            include ('panelNavegacionUsuarios.php');
         ?>
        <!-- Contenido -->
        <div class="container text-center">
            <h3>
               Usuarios
            </h3>
        </div>
        <div class="container">
        <table class="table table-bordered text-center">
          <thead>
            <tr class="table-active">
              <th scope="col">NUMERACION</th>
              <th scope="col">APELLIDO y NOMBRE</th>
              <th scope="col">Nº de DNI</th>
              <th scope="col">ZONA</th>
              <th scope="col">DESTINO</th>
              <th scope="col">USUARIO</th>
              <th scope="col">CONTRASEÑA</th>

            </tr>
          </thead>
          <tbody>
          <?php 
            $contadorUsuario = 0;
            /* procesar resultados*/
            while ($resultados=mysqli_fetch_array($consulta)) {
              $contadorUsuario += 1;
              echo "<tr>";
              echo "<th scope='row'>".$contadorUsuario."</th>";
              echo "<td>".utf8_encode($resultados['apellidoNombre'])."</td>";
              echo "<td>".$resultados['numDni']."</td>";
              echo "<td>".$resultados['zona']."</td>";
              echo "<td>".$resultados['cuatrigramaDestino']."</td>";
              echo "<td>".utf8_encode($resultados['usuario'])."</td>";
              echo "<td>".utf8_encode($resultados['contrasenia'])."</td>";
              echo  "</tr>";
          }
          include('finConexion.php');
          ?>
          </tbody>
        </table>
        <br>
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
