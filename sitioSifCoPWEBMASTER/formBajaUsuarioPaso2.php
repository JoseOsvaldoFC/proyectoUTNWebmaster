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
    <div class="container text-center">
        <div class="containter">
            <label for="customRange1">
                PASO 2
            </label>
            <input class="custom-range" id="customRange1" max="1" min="0" step="0.5" type="range">
        </input>
    </div>
    <div class="container">
        <h5>
            Datos del Usuario
        </h5>
    </div>
</div>
<br>
<div class="container">
    <div class="container text-center">
        <form action="formBajaUsuarioPaso3.php">
            <div class="form-group row conteiner">
                <label class="col-sm-2 col-form-label" for="inputApellidoYNombre">
                    Apellido y Nombre:
                </label>
                <div class="col-sm-7">
                    <output class="form-control" id="inputApellidoYNombre" placeholder="Apellido y Nombre">
                        unApellidoYNombre
                    </output>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="inputNumDeDNI">
                    Nº de DNI:
                </label>
                <div class="col-sm-7">
                    <output class="form-control" id="inputNumDeDNI" placeholder="Nº de DNI">
                        unNº de DNI
                    </output>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="inputUsuario">
                    Usuario:
                </label>
                <div class="col-sm-7">
                    <output class="form-control" id="inputUsuario" placeholder="Usuario">
                        unUsuario
                    </output>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="inputContrasenia">
                    Contraseña:
                </label>
                <div class="col-sm-7">
                    <output class="form-control" id="inputContrasenia" placeholder="Contraseña">
                        unaContrasenia
                    </output>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="inputDestino">
                    Destino:
                </label>
                <div class="col-sm-7">
                    <output class="form-control" id="inputDestino" placeholder="inputDestino">
                        unDestino
                    </output>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="inlineZona">
                    Zona/Dirección:
                </label>
                <div class="col-sm-7">
                    <output class="form-control" id="inlineZona" placeholder="inlineZona">
                        unaZona
                    </output>
                </div>
            </div>

            <div class="form-group text-left">
                <label for="exampleFormControlTextarea1">Motivo:</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            
            <div class="form-group row">
                <div class="col-sm-12">
                    <a href="inicioUsuarios.php">volver</a>
                    <button class="btn btn-primary" type="submit">
                        Eliminar
                    </button>
                </div>
            </div>
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