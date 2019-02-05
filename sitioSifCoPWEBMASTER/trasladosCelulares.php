<?php 
                include 'conexion.php';

                //$queryNovedadTelefonos = "SELECT idCel, destinoOrigen, trasladoA, fechaMovimiento, motivo, observacion FROM trasladostelefonos ORDER BY idCel";
                $queryNovedadTelefonos = "SELECT tt.idCel, tt.destinoOrigen, tt.trasladoA, tt.fechaMovimiento, tt.motivo, tt.observacion, te.imei, te.linea FROM trasladostelefonos AS tt, telefonos AS te WHERE tt.idCel=te.idCel ORDER BY idCel";

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
            include('funcionesAuxiliares.php');
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
              <th scope="col">ID CEL</th>
              <th scope="col">IMEI</th>
              <th scope="col">LINEA</th>
              <th scope="col">DESTINO ORIGEN</th>
              <th scope="col">TRASLADO A</th>
              <th scope="col">FECHA MOVIMIENTO</th>
              <th scope="col">MOTIVO</th>
              <th scope="col">OBSERVACION</th>
            </tr>
          </thead>
          <tbody>
          <?php 
            /* procesar resultados*/
            while ($resultados=mysqli_fetch_array($consulta)) {
              $formatoFila = "";
              if ($resultados['motivo'] == 'BAJA'){
                $formatoFila = "FormatoFila";
              }
              echo "<tr class='$formatoFila'>";
              echo "<th scope='row'>".$resultados['idCel']."</th>";
              echo "<td>". $resultados['imei']."</td>";
              echo "<td>". $resultados['linea']."</td>";
              echo "<td>". $resultados['destinoOrigen']."</td>";
              echo "<td>". $resultados['trasladoA']."</td>";
              echo "<td>".darVueltaFechaDDAAAA($resultados['fechaMovimiento'])."</td>";
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
