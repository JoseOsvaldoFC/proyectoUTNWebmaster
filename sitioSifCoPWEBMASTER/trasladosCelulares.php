<?php 
                include 'conexion.php';

                $queryNovedadTelefonos = "SELECT idCel, destinoOrigen, trasladoA, fechaMovimiento, motivo, observacion FROM trasladostelefonos ORDER BY idCel";
                $consulta = mysqli_query($conexion,$queryNovedadTelefonos);
 ?>
<!doctype html>
<html class="no-js" lang="">
    <?php 
      include ('headSifcop.php');
     ?>
    <body>
           <?php 
      session_start();
      if (isset($_SESSION['usuario']) AND isset($_SESSION['idUsuarioAcceso'])) {
            include ('encabezado.php');
            include ('panelNavegacionCelulares.php');
        ?>
        <div class="container text-center">
            <h3>
               Movimientos de Celulares
            </h3>
        </div>
        <div class="container">
        <table class="table table-bordered text-center">
          <thead>
            <tr class="table-active">
              <th scope="col">NUM</th>
              <th scope="col">ID CELULAR</th>
              <th scope="col">DESTINO ORIGEN</th>
              <th scope="col">TRASLADO A</th>
              <th scope="col">FECHA MOVIMIENTO</th>
              <th scope="col">MOTIVO</th>
              <th scope="col">OBSERVACION</th>
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
              echo "<td>". $resultados['destinoOrigen']."</td>";
              echo "<td>". $resultados['trasladoA']."</td>";
              echo "<td>".$resultados['fechaMovimiento']."</td>";
              echo "<td>".utf8_encode($resultados['motivo'])."</td>";
              echo "<td>".$resultados['observacion']."</td>";
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
