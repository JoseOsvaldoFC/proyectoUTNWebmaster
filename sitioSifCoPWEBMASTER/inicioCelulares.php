<?php 
                include 'conexion.php';

                $queryTelefonos = "SELECT idCel, cuatrigramaZona, cuatrigramaDestino, imei, linea, modelo FROM telefonos WHERE estado = 'ALTA' AND cuatrigramaDestino <> 'RESERVA G20' AND cuatrigramaZona <> 'DICR' ORDER BY cuatrigramaZona, cuatrigramaDestino";
                $consulta = mysqli_query($conexion,$queryTelefonos);
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
              $idCel = $resultados['idCel'];
              echo "<tr>";
              echo "<th scope='row'>".$contadorCel."</th>";
              echo "<td>"."<a href='viewDetalleCelular.php?idCel=$idCel'>$idCel</a>"."</td>";
              /*echo "<td>". $resultados['idCel']."</td>";*/
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
