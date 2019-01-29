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
            $idCelular = $_GET['idCel'];
            $queryCelular = "SELECT idCel, patrimonial, imei, linea, modelo, cuatrigramaZona, cuatrigramaDestino, estado FROM telefonos WHERE idCel = $idCelular";
            $consulta = mysqli_query($conexion,$queryCelular);
            //$queryNovedadTelefonos = "SELECT idCel, destinoOrigen, trasladoA, fechaMovimiento, motivo, observacion FROM trasladostelefonos ORDER BY idCel";
            $queryNovedadTelefonos = "SELECT tt.idCel, tt.destinoOrigen, tt.trasladoA, tt.fechaMovimiento, tt.motivo, tt.observacion, tt.rutaImagenDocumentacion, te.imei, te.linea FROM trasladostelefonos AS tt, telefonos AS te WHERE tt.idCel=te.idCel AND tt.idCel = $idCelular ORDER BY tt.fechaMovimiento";
            $consultaNovedad = mysqli_query($conexion,$queryNovedadTelefonos);

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
        <br>
          <h3>Detalle del Celular</h3>
        </div>
        <div class="container text-center">
        <div class="containter">
        <br>
        </div>
        <div class="container">
           <div class="container text-center">
        <form action="inicioCelulares.php" method="POST" enctype="multipart/form-data">

        <div class="form-group row conteiner">
                <label class="col-sm-2 col-form-label" for="id">
                    ID Celular:
                </label>
                <div class="col-sm-7">
                    <output class="form-control" id="id" placeholder="ID Celular">
                        <?php echo $idCelular; ?>
                    </output>
                </div>
            </div>
            <div class="form-group row conteiner">
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
                <label class="col-sm-2 col-form-label" for="inputDestino">
                    Destino:
                </label>
                <div class="col-sm-3">
                    <output class="form-control" id="inputDestino" placeholder="inputDestino">
                        <?php echo $cuatrigramaDestino; ?>
                    </output>
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
            </div>
            <div class="form-group row">
            </div>
          <h3>Movimientos</h3>
          <div class="container">
        <table class="table table-bordered text-center">
          <thead>
            <tr class="table-active">
              <th scope="col">DOC.</th>
              <th scope="col">DESTINO ORIGEN</th>
              <th scope="col">TRASLADO A</th>
              <th scope="col">FECHA</th>
              <th scope="col">MOTIVO</th>
              <th scope="col">OBSERVACION</th>
            </tr>
          </thead>
          <tbody>
          <?php 
            /* procesar resultados*/
            while ($resultados=mysqli_fetch_array($consultaNovedad)) {
              $formatoFila = "";
              $rutaImagenDocumentacion = $resultados['rutaImagenDocumentacion'];
              if ($resultados['motivo'] == 'BAJA'){
                $formatoFila = "FormatoFila";
              }
              echo "<tr class='$formatoFila'>";
            /*  echo "<th scope='row'>".$resultados['idCel']."<span class='icon-link'></span></th>";*/
              echo "<th scope='row'>"."<a href='$rutaImagenDocumentacion'>"."<span class='icon-link'></span></a>"."</th>";
              echo "<td>". $resultados['destinoOrigen']."</td>";
              echo "<td>". $resultados['trasladoA']."</td>";
              echo "<td>".$resultados['fechaMovimiento']."</td>";
              echo "<td>".utf8_encode($resultados['motivo'])."</td>";
              echo "<td>".$resultados['observacion']."</td>";
              echo  "</tr>";
          }
          include('finConexion.php');
          ?>
          </tbody>
        </table>
            </div>
            <input type="hidden" id="idCelular" name="idCelular" value="<?php echo $idCelular?>">
            <input type="hidden" id="imei" name="imei" value="<?php echo $imei?>">
            <input type="hidden" id="linea" name="linea" value="<?php echo $linea?>">
            <input type="hidden" id="destinoOrigen" name="destinoOrigen" value="<?php echo $cuatrigramaDestino?>">
            <div class="form-group row">
                <div class="col-sm-12">
                    <button class="btn btn-primary" type="submit">
                        volver
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
