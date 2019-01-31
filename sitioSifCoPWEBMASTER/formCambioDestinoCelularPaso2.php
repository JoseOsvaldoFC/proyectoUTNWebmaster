<!doctype html>
<html class="no-js" lang="">
    <?php 
      include ('headSifcop.php');
     ?>
     <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
     <script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>
     <script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/js/messages/messages.es-es.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <body>
     <?php 
      session_start();
      if (isset($_SESSION['usuario']) AND isset($_SESSION['idUsuarioAcceso'])) {
            include ('encabezado.php');
            include ('panelNavegacionCelulares.php');
            include ('conexion.php');
            include 'queryDestinosYZonas.php';
            $idCelular = $_GET['idCelular'];
/*Modificar a partir de aca*/
            $queryCelular = "SELECT idCel, patrimonial, imei, linea, modelo, cuatrigramaZona, cuatrigramaDestino, estado FROM telefonos WHERE idCel = $idCelular";
            $consulta = mysqli_query($conexion,$queryCelular);
            $resultado = mysqli_fetch_array($consulta);
           $patrimonial = $resultado['patrimonial'];
           $imei = $resultado['imei'];
           $linea = $resultado['linea'];
           $modelo = $resultado['modelo'];
           $cuatrigramaZona = $resultado['cuatrigramaZona'];
           $cuatrigramaDestino = $resultado['cuatrigramaDestino'];
           $estado = $resultado['estado'];
         ?>
        <div class="container text-center">
          <h3>Cambio Destino</h3>
        </div>
        <div class="container text-center">
        <div class="containter">
            <label for="customRange2">PASO 2</label>
            <input type="range" class="custom-range" id="customRange2"  min="0" max="1" step="0.5">
        </div>
        <div class="container">
            <h5>Complete los campos para la carga de la novedad</h5>
            <br>
        </div>
        <div class="container">
           <div class="container text-center">
        <form action="formCambioDestinoCelularPaso3.php" method="POST" enctype="multipart/form-data">
           
        <div class="form-group row conteiner">
                <label class="col-sm-2 col-form-label" for="idCelular">
                    Id Celular:
                </label>
                <div class="col-sm-7">
                    <output class="form-control" id="idCelular" placeholder="Id Celular:">
                        <?php echo $idCelular; ?>
                    </output>
                </div>
            </div>

           
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="patrimonial">
                    Número Patrimonial:
                </label>
                <div class="col-sm-7">
                    <output class="form-control" id="patrimonial" placeholder="Apellido y Nombre">
                        <?php echo $patrimonial; ?>
                    </output>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="imei">
                    Número de IMEI:
                </label>
                <div class="col-sm-7">
                    <output class="form-control" id="imei" placeholder="Número de IMEI">
                        <?php echo $imei; ?>
                    </output>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="inputLinea">
                    Linea:
                </label>
                <div class="col-sm-7">
                    <output class="form-control" id="inputLinea" placeholder="linea">
                        <?php echo $linea; ?>
                    </output>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="inputModelo">
                    Modelo:
                </label>
                <div class="col-sm-7">
                    <output class="form-control" id="inputModelo" placeholder="Modelo">
                        <?php echo $modelo; ?>
                    </output>
                </div>
            </div>
            <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="inputEstado">
                    Estado:
                </label>
                <div class="col-sm-7">
                    <output class="form-control" id="inputEstado" placeholder="inputEstado">
                        <?php echo $estado; ?>
                    </output>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="inputDestino">
                    Destino:
                </label>
                <div class="col-sm-3">
                    <output class="form-control" id="inputDestino" placeholder="inputDestino">
                        <?php echo $cuatrigramaDestino; ?>
                    </output>
                </div>
                 <label for="inputNuevoDestino" class="col-sm-2 col-form-label">Nuevo Destino:</label>
                <div class="col-sm-3">
                    <select class="custom-select my-1 mr-sm-2" id="inputNuevoDestino" name="nuevoDestino" required="true">
                    <option value=''>Selecciones un Destino</option>
                    <?php 
                      while ($resultadosDestino=mysqli_fetch_array($consultaDestinos)) {
                        $datoDestino = $resultadosDestino['cuatrigramaDestino'];
                        echo "<option value='$datoDestino'>".$datoDestino." - ".$resultadosDestino['descripcionDestino']."</option>";
                    }
                    ?>
                  </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="inlineZona">
                    Zona/Dirección:
                </label>
                <div class="col-sm-3">
                    <output class="form-control" id="inlineZona" placeholder="inlineZona">
                        <?php echo $cuatrigramaZona; ?>
                    </output>
                </div>
                 <label for="inputMotivo" class="col-sm-2 col-form-label">Motivo:</label>
                <div class="col-sm-3">
                    <select class="custom-select my-1 mr-sm-2" id="inputMotivo" name="motivo" required="true">
                    <option value=''>Selecciones un Motivo</option>
                    <?php 
                      $queryMotivos = "SELECT idMotivo, descripcionMotivo from motivosTelefono";
                      $consultaMotivos = mysqli_query($conexion,$queryMotivos);
                      while ($resultadosMotivos=mysqli_fetch_array($consultaMotivos)) {
                        $datoMotivo = $resultadosMotivos['descripcionMotivo'];
                        echo "<option value='$datoMotivo'>".$datoMotivo."</option>";
                    }
                    ?>
                  </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="inlineZona">
                        Fecha Movimiento:
                </label>
                <div class="col-sm-7">
                    <input id="datepicker" class="my-1 mr-sm-2" width="276" name="fechaMovimiento" required="true" placeholder="dd-mm-aaaa"/>
                    <script>
                        $('#datepicker').datepicker({
                            uiLibrary: 'bootstrap4',
                            /*format: 'yyyy-mm-dd',*/
                            format: 'dd-mm-yyyy',
                            locale: 'es-es',
                        });
                    </script>
                </div>
            </div>
            <br>
            <div class="container-fluid form-group row">
                <div class="col-5">
                    <label for="exampleFormControlFile1">
                    Seleccione Archivo con la Constancia del Movimiento:
                    </label>
                </div>
                <div class="col-7">
                   <input type="file" name="archivo" id="archivo" class="form-control-file" id="exampleFormControlFile1" required="true"/>
                </div>
            </div>
            <br>
              <div class="form-group text-left">
                <label for="exampleFormControlTextarea1">Observación:</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="observacion"></textarea>
              </div>
            <input type="hidden" id="idCelular" name="idCelular" value="<?php echo $idCelular?>">
            <input type="hidden" id="imei" name="imei" value="<?php echo $imei?>">
            <input type="hidden" id="linea" name="linea" value="<?php echo $linea?>">
            <input type="hidden" id="destinoOrigen" name="destinoOrigen" value="<?php echo $cuatrigramaDestino?>">
            <div class="form-group row">
                <div class="col-sm-12">
                    <a href="formCambioDestinoCelularPaso1.php?idCel=<?php echo $idCelular?>">volver</a>
                    <button class="btn btn-primary" type="submit">
                        Modificar
                    </button>
                </div>
            </div>
        </form>
    </div>
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
