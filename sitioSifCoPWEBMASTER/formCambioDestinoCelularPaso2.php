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
            include ('conexion.php');
            include 'queryDestinosYZonas.php';
            $idCelular = $_GET['idCelular'];
/*Modificar a partir de aca*/

            $queryCelular = "SELECT idUsuario, apellidoNombre, numDni, usuario, contrasenia, zona, cuatrigramaDestino FROM usuariossifcop WHERE numDni = '$numDni'";

            $consulta = mysqli_query($conexion,$queryUsuarios);
            $resultado = mysqli_fetch_array($consulta);

           $idUsuario = $resultado['idUsuario'];
           $apellidoNombre = $resultado['apellidoNombre'];
           $numDni = $resultado['numDni'];
           $usuario = $resultado['usuario'];
           $contrasenia = $resultado['contrasenia'];
           $zona = $resultado['zona'];
           $cuatrigramaDestino = $resultado['cuatrigramaDestino'];


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
            <h5>Seleccione ID del Usuario</h3>
            <br>
        </div>
        <div class="container">
           <div class="container text-center">
        <form action="formCambioDestinoUsuarioPaso3.php" method="POST">
            <div class="form-group row conteiner">
                <label class="col-sm-2 col-form-label" for="inputApellidoYNombre">
                    Apellido y Nombre:
                </label>
                <div class="col-sm-7">
                    <output class="form-control" id="inputApellidoYNombre" placeholder="Apellido y Nombre">
                        <?php echo $apellidoNombre; ?>
                    </output>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="inputNumDeDNI">
                    Nº de DNI:
                </label>
                <div class="col-sm-7">
                    <output class="form-control" id="inputNumDeDNI" placeholder="Nº de DNI">
                        <?php echo $numDni; ?>
                    </output>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="inputUsuario">
                    Usuario:
                </label>
                <div class="col-sm-7">
                    <output class="form-control" id="inputUsuario" placeholder="Usuario">
                        <?php echo $usuario; ?>
                    </output>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="inputContrasenia">
                    Contraseña:
                </label>
                <div class="col-sm-7">
                    <output class="form-control" id="inputContrasenia" placeholder="Contraseña">
                        <?php echo $contrasenia; ?>
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
                 <label for="inputDestino" class="col-sm-2 col-form-label">Nuevo Destino:</label>
                <div class="col-sm-3">
                    <select class="custom-select my-1 mr-sm-2" id="inputDestino" name="nuevoDestino">
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
                        <?php echo $zona; ?>
                    </output>
                </div>
                <div class="col-sm-3">
                </div>
            </div>
              <div class="form-group text-left">
                <label for="exampleFormControlTextarea1">Motivo:</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>

            <input type="hidden" id="idUsuario" name="idUsuario" value="<?php echo $idUsuario?>">
            <input type="hidden" id="numDni" name="numDni" value="<?php echo $numDni?>">
            <input type="hidden" id="usuario" name="usuario" value="<?php echo $usuario?>">
            <input type="hidden" id="destinoOrigen" name="destinoOrigen" value="<?php echo $cuatrigramaDestino?>">

            <div class="form-group row">
                <div class="col-sm-12">
                    <a href="inicioUsuarios.php">volver</a>
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
