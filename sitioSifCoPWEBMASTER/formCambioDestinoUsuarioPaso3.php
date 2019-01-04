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

            $idUsuario = $_POST['idUsuario'];
            $numDni = $_POST['numDni'];
            $usuario = $_POST['usuario'];
            /*$observacion = $_POST['observacion'];*/
            $destinoOrigen = $_POST['destinoOrigen'];
            $nuevoDestino = $_POST['nuevoDestino'];

         ?>
        <div class="container text-center">
          <h3>Cambio Destino</h3>
        </div>
        <div class="container text-center">
        <div class="containter">
            <label for="customRange1">PASO 3</label>
            <input type="range" class="custom-range" id="customRange1"  min="0" max="1" step="1">
        </div>
            <br>
                <div class="container">
                    <div class="alert alert-warning" role="alert">
                        ¿Seguro que desea cambiar el destino del usuario <?php echo $usuario; ?> desde el Destino <?php echo $destinoOrigen; ?> a <?php echo $nuevoDestino; ?>?
                    </div>
                    <form action="cambioDestinoUsuarioPaso3.php" method="GET">
                        <div class="form-group row">
                            <div class="col-sm-12">
                               <input type="hidden" id="idUsuario" name="idUsuario" value="<?php echo $idUsuario?>">
                               <input type="hidden" id="numDni" name="numDni" value="<?php echo $numDni?>">
                               <input type="hidden" id="nuevoDestino" name="nuevoDestino" value="<?php echo $nuevoDestino?>">
                               <input type="hidden" id="destinoOrigen" name="destinoOrigen" value="<?php echo $destinoOrigen?>">
                                <input type="hidden" id="usuario" name="usuario" value="<?php echo $usuario?>">
                                <a href="inicioUsuarios.php">
                                    volver
                                </a>
                                <button class="btn btn-primary" type="submit">
                                    Acepto
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
<!-- Inicio Pie de pagina -->
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
