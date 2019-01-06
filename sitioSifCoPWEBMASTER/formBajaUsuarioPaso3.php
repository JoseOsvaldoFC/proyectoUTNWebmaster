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

            $idUsuario = $_POST['idUsuario'];
            $numDni = $_POST['numDni'];
            $usuario = $_POST['usuario'];
            $observacion = $_POST['observacion'];
         ?>
        <div class="container text-center">
            <div class="containter">
                <label for="customRange1">
                    PASO 3
                </label>
                <input class="custom-range" id="customRange1" max="1" min="0" step="1" type="range">
                </input>
            </div>
            <br>
                <div class="container">
                    <div class="alert alert-warning" role="alert">
                        ¿Seguro que desea dar de baja al usuario: <?php echo $usuario;?>?
                    </div>
                    <form action="bajaUsuarioPaso3.php" method="GET">
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <a href="inicioUsuarios.php">
                                    volver
                                </a>
                                <button class="btn btn-primary" type="submit">
                                    Acepto
                                </button>
                            </div>
                        </div>
                        <input type="hidden" id="idUsuario" name="idUsuario" value="<?php echo $idUsuario?>">
                        <input type="hidden" id="usuario" name="usuario" value="<?php echo $usuario?>">
                        <input type="hidden" id="observacion" name="observacion" value="<?php echo $observacion?>">
                    </form>
                </div>
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
