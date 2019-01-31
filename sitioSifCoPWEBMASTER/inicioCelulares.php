<?php 
                include 'conexion.php';

                if (isset($_GET['perfil'])) {
                  if ($_GET['perfil'] == 'pzag') {
                    $queryTelefonos = "SELECT idCel, cuatrigramaZona, cuatrigramaDestino, imei, linea, modelo, estado FROM telefonos WHERE estado LIKE '%ALTA%' AND (cuatrigramaZona LIKE '%PZ%' OR cuatrigramaDestino LIKE '%AGAL%') ORDER BY cuatrigramaZona, cuatrigramaDestino";
                  }
                  if ($_GET['perfil'] == 'dicr') {
                    $queryTelefonos = "SELECT idCel, cuatrigramaZona, cuatrigramaDestino, imei, linea, modelo, estado FROM telefonos WHERE estado LIKE '%ALTA%' AND cuatrigramaZona LIKE '%DICR%' ORDER BY cuatrigramaZona, cuatrigramaDestino";
                  }
                  if ($_GET['perfil'] == 'reop') {
                    $queryTelefonos = "SELECT idCel, cuatrigramaZona, cuatrigramaDestino, imei, linea, modelo, estado FROM telefonos WHERE estado LIKE '%ALTA%' AND cuatrigramaDestino LIKE '%RESERVA%' ORDER BY cuatrigramaZona, cuatrigramaDestino";
                  }
                  if ($_GET['perfil'] == 'baja') {
                    $queryTelefonos = "SELECT idCel, cuatrigramaZona, cuatrigramaDestino, imei, linea, modelo, estado FROM telefonos WHERE estado LIKE '%BAJA%' ORDER BY cuatrigramaZona, cuatrigramaDestino";
                  }
                  if ($_GET['perfil'] == 'alta') {
                    $queryTelefonos = "SELECT idCel, cuatrigramaZona, cuatrigramaDestino, imei, linea, modelo, estado FROM telefonos WHERE estado LIKE '%ALTA%' ORDER BY cuatrigramaZona, cuatrigramaDestino";
                  }
                  if ($_GET['perfil'] == 'todos') {
                    $queryTelefonos = "SELECT idCel, cuatrigramaZona, cuatrigramaDestino, imei, linea, modelo, estado FROM telefonos ORDER BY cuatrigramaZona, cuatrigramaDestino";
                  }
                } else {
                  $queryTelefonos = "SELECT idCel, cuatrigramaZona, cuatrigramaDestino, imei, linea, modelo, estado FROM telefonos WHERE estado = 'ALTA' AND cuatrigramaDestino <> 'RESERVA G20' AND cuatrigramaZona <> 'DICR' ORDER BY cuatrigramaZona, cuatrigramaDestino";
                }
                
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
        //Para el feedback de la carga
        if(isset($_GET['cargado']) && isset($_GET['imei'])){
          if ($_GET['cargado']==1) {
            echo "<div class='alert alert-success' role='alert'>
            El Celular con el IMEI ".$_GET['imei']." ha sido cambiado el destino satisfactoriamente
            </div>";
          } 
          if ($_GET['cargado']==0) {
            echo "<div class='alert alert-danger' role='alert'>
            Hubo un error en la carga del traslado, intente nuevamente
            </div>";
          }
        }
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
              echo "<td>"."<a href='viewDetalleCelular.php?idCel=$idCel'>$idCel<span class='icon-text-document'></span></a>"."</td>";
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
