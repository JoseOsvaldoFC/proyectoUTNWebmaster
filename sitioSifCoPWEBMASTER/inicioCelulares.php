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
         <?php 
            include('footer.php');
            include('scriptJSBootstrap.php');
         ?>

    </body>
</html>
