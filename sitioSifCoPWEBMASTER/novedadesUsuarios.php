
<?php 
                include 'conexion.php';
                $queryNovedadesUsuarios = "SELECT idNovedad, idUsuario, tipo, destinoOrigen, trasladoA, fechaInformaNovedad, observacion FROM novedadesUsuarios ORDER BY idUsuario";
                $consulta = mysqli_query($conexion,$queryNovedadesUsuarios);
 ?>

<!DOCTYPE doctype html>
<html class="no-js" lang="">
    <?php 
      include ('headSifcop.php');
     ?>
    <body>
           <?php 
      session_start();
      if (isset($_SESSION['usuario']) AND isset($_SESSION['idUsuarioAcceso'])) {
            include ('encabezado.php');
            include ('panelNavegacionUsuarios.php');
         ?>
        <!-- Contenido -->
        <div class="container text-center">
            <h3>
               Novedades de Usuarios
            </h3>
        </div>
        <div class="container">
        <table class="table table-bordered text-center">
          <thead>
            <tr class="table-active">
              <th scope="col">NUMERACION</th>
              <th scope="col">ID USUARIO</th>
              <th scope="col">TIPO</th>
              <th scope="col">DESTINO ORIGEN</th>
              <th scope="col">TRASLADO A</th>
              <th scope="col">FECHA DE CARGA</th>
              <th scope="col">OBSERVACION</th>
            </tr>
          </thead>
          <tbody>
          <?php 
            $contadorUsuario = 0;
            while ($resultados=mysqli_fetch_array($consulta)) {
              $contadorUsuario += 1;
              echo "<tr>";
              echo "<th scope='row'>".$contadorUsuario."</th>";
              echo "<td>".utf8_encode($resultados['idUsuario'])."</td>";
              echo "<td>".$resultados['tipo']."</td>";
              echo "<td>".$resultados['destinoOrigen']."</td>";
              echo "<td>".$resultados['trasladoA']."</td>";
              echo "<td>".utf8_encode($resultados['fechaInformaNovedad'])."</td>";
              echo "<td>".utf8_encode($resultados['observacion'])."</td>";
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
