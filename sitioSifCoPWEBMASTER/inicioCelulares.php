<?php 
                //Conexion PHP
                include 'conexion.php';

                //Consulta MySQL  - SELECT
                $queryTelefonos = "SELECT idCel, cuatrigramaZona, cuatrigramaDestino, imei, linea, modelo FROM telefonos WHERE estado = 'ALTA' AND cuatrigramaDestino <> 'RESERVA G20' AND cuatrigramaZona <> 'DICR' ORDER BY cuatrigramaZona, cuatrigramaDestino";
                $consulta = mysqli_query($conexion,$queryTelefonos);
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
                <h2>Gestión SiFCop</h2>
            </div> 
        </div>
        <?php 
            include 'panelNavegacionCelulares.php';
        ?>
        <div class="container text-center">
            <h3>
               Celulares
            </h3>
        </div>
        <div class="container">
        <table class="table table-bordered text-center">
          <thead>
            <tr class="table-active">
              <th scope="col">NUMERACIÓN</th>
              <th scope="col">ID CEL</th>
              <th scope="col">Nº DE IMEI</th>
              <th scope="col">Nº DE ABONADO</th>
              <th scope="col">MODELO</th>
              <th scope="col">ZONA</th>
              <th scope="col">DESTINO</th>
            </tr>
          </thead>
          <tbody>
          <?php 
            $contadorCel = 0;
            /* procesar resultados*/
            while ($resultados=mysqli_fetch_array($consulta)) {
              $contadorCel += 1;
              echo "<tr>";
              echo "<th scope='row'>".$contadorCel."</th>";
              echo "<td>". $resultados['idCel']."</td>";
              echo "<td>". $resultados['imei']."</td>";
              echo "<td>". $resultados['linea']."</td>";
              echo "<td>".$resultados['modelo']."</td>";
              echo "<td>".$resultados['cuatrigramaZona']."</td>";
              echo "<td>".$resultados['cuatrigramaDestino']."</td>";
              echo  "</tr>";
          }
          include('finConexion.php');
          ?>
          </tbody>
        </table>
                </div>
        <!-- Contenido -->
        <footer>
            <div class="container pt-0 mt-0 pieDePagina">
                <p>
                CONTACTO: DIRECCIÓN DE OPERACIONES - Sección Sistemas <br>
                Dirección: Edificio Guardacostas Av. Eduardo Madero 235 - C1106ACC <br>
                Ciudad Autónoma de Buenos Aires Argentina.<br>
                Teléfono: (+5411) 4318-7400 int 2326/2327 <br>
                Correo electrónico: <a href="diop-sistemas@prefecturanaval.gov.ar">diop-sistemas@prefecturanaval.gov.ar</a> 
                </p>
            </div>
        </footer>
    <!-- Para agregar JS en bootstrap -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
