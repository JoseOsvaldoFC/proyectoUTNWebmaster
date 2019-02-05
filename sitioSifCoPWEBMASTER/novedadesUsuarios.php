
<?php 
                include 'conexion.php';
                $queryNovedadesUsuarios = "SELECT ns.idUsuario, ns.tipo, ns.destinoOrigen, ns.trasladoA, ns.fechaInformaNovedad, ns.observacion, us.apellidoNombre, us.numDni FROM novedadesusuarios AS ns, usuariossifcop AS us WHERE ns.idUsuario = us.idUsuario";
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
            include('funcionesAuxiliares.php'); 
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
              <th scope="col">APELLIDO Y NOMBRE</th>
              <th scope="col">Nº de DNI</th>
              <th scope="col">TIPO</th>
              <th scope="col">DESTINO ORIGEN</th>
              <th scope="col">TRASLADO A</th>
              <th scope="col">FECHA DE CARGA</th>
              <th scope="col">OBSERVACION</th>
            </tr>
          </thead>
          <tbody>
          <?php 
            while ($resultados=mysqli_fetch_array($consulta)) {
              $formatoFila = "";
              if ($resultados['tipo'] == 'BAJA'){
                $formatoFila = "FormatoFila";
              }
              echo "<tr class='$formatoFila'>";
              echo "<th scope='row'>".utf8_encode($resultados['apellidoNombre'])."</th>";
              echo "<td>".$resultados['numDni']."</td>";
              echo "<td>".$resultados['tipo']."</td>";
              echo "<td>".$resultados['destinoOrigen']."</td>";
              echo "<td>".$resultados['trasladoA']."</td>";
              echo "<td>".darVueltaFechaDDAAAA($resultados['fechaInformaNovedad'])."</td>";
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
