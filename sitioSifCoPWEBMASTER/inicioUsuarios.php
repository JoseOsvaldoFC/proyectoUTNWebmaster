
<?php 
                include 'conexion.php';
                $queryUsuarios = "SELECT idUsuario, apellidoNombre, numDni, usuario, contrasenia, zona, cuatrigramaDestino FROM usuariossifcop WHERE estado LIKE '%ALTA%' AND NOT(zona LIKE '%DICR%') ORDER BY zona, cuatrigramaDestino";
                $consulta = mysqli_query($conexion,$queryUsuarios);
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
