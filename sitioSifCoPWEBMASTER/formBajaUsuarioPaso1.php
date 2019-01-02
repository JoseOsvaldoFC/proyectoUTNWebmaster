<?php 

     require("conexion.php");
     $queryDni = "SELECT numDni FROM usuariossifcop";
     $consultaDniUsuarios = mysqli_query($conexion,$queryDni);
     $arrayDniPHP = [];
     while ($resultados=mysqli_fetch_array($consultaDniUsuarios)) {
        array_push($arrayDniPHP , $resultados['numDni']);
      }
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
            include ('panelNavegacionUsuarios.php');
         ?>
        <div class="container text-center">
        <div class="containter">
            <label for="customRange1">PASO 1</label>
            <input type="range" class="custom-range" id="customRange1"  min="0" max="1" step="2">
        </div>
        <div class="container">
            <h5>Seleccione DNI del Usuario</h3>
            <br>
        </div>
        <div class="container">
            <div class="container text-center">
            <form action="bajaUsuarioPaso1.php" method="GET">
              <div class="form-group row container">
                <label for="inputApellidoYNombre" class="col-sm-2 col-form-label">DNI del Usuario:</label>
                <div class="col-sm-7">
                  <input class="form-control" id="inputApellidoYNombre" placeholder="DNI del Usuario" name="numDni" required="true">
                  <br>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-12">
                   <a href="inicioUsuarios.php">volver</a>
                  <button type="submit" class="btn btn-primary">Continuar</button>
                </div>
              </div>
            </form>
        </div>
        </div>
        </div>

<!-- trabajar con javascript --> 
        <script type="text/javascript">
          var arrayJS=<?php echo json_encode($arrayDniPHP);?>;
          for (var i = 0; i < arrayJS.length; i+=1) {
           // document.write(arrayJS[i]);
          }
        </script>



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
