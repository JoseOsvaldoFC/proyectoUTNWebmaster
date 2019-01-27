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
            $nombreArchivo = $_POST['idCelular']."-".date('z').date('m').date('Y').date('B').substr($_FILES['archivo']['name'],-4);
            $tipoArchivo = $_FILES['archivo']['type'];
            $tamanioArchivo = $_FILES['archivo']['size'];
            $rutaArchivo = $_FILES['archivo']['tmp_name'];
            $destinoArchivo = "img/documentacion/".$nombreArchivo;
            if($nombreArchivo != ""){
                  if(!(copy($rutaArchivo, $destinoArchivo))){
                       echo "error al subir el archivo";
                }
            }
            $idCelular = $_POST['idCelular'];
            $imei = $_POST['imei'];
            $linea = $_POST['linea'];
            $motivo = $_POST['motivo'];
            $destinoOrigen = $_POST['destinoOrigen'];
            $nuevoDestino = $_POST['nuevoDestino'];
            $fechaMovimiento = $_POST['fechaMovimiento'];
            $observacion = $_POST['observacion'];

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
                        ¿Seguro que desea cambiar el destino del Celular con IMEI <?php echo $imei; ?> y Nº de Abonado <?php echo $linea; ?> desde el Destino <?php echo $destinoOrigen; ?> a <?php echo $nuevoDestino; ?>?
                    </div>
                    <form action="cambioDestinoCelularPasoFinal.php" method="GET">
                        <div class="form-group row">
                            <div class="col-sm-12">
                               <input type="hidden" id="idUsuario" name="idCelular" value="<?php echo $idCelular?>">
                               <input type="hidden" id="nuevoDestino" name="nuevoDestino" value="<?php echo $nuevoDestino?>">
                               <input type="hidden" id="destinoOrigen" name="destinoOrigen" value="<?php echo $destinoOrigen?>">
                               <input type="hidden" id="observacion" name="observacion" value="<?php echo $observacion?>">
                               <input type="hidden" id="imei" name="imei" value="<?php echo $imei?>">
                               <input type="hidden" id="motivo" name="motivo" value="<?php echo $motivo?>">
                               <input type="hidden" id="fechaMovimiento" name="fechaMovimiento" value="<?php echo $fechaMovimiento?>">
                               <input type="hidden" id="destinoArchivo" name="destinoArchivo" value="<?php echo $destinoArchivo?>">
                                <a href="inicioCelulares.php">
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
