<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>SiFCop</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="img/logoSifcopFavicon.png">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
<!-- Inicio Encabezado -->
        <header class="container-fluid header1">
            <div>
                <img src="img/headerPrefectura.jpg" alt="headerPrefectura">
             </div>
        </header><!-- /header -->
        <div class="text-center">
            <div class="container header2">
                <img src="img/logoSifcop.png" alt="headerPrefectura">
            </div>
            <div class="container">
                <h1>Dirección de Operaciones</h1>
            </div>
            <div class="container">
                <h2>Gestion Usuario SiFCop</h2>
            </div> 
        </div>
<!-- Fin Encabezado -->
        <?php 
            include ('panelNavegacionUsuarios.php');
         ?>
        <br>
        <div class="container text-center">
          <h3>Alta Usuario</h3>
        </div>
        <div class="container text-center">
            <form action="inicioUsuarios.php">
              <div class="form-group row conteiner">
                <label for="inputApellidoYNombre" class="col-sm-2 col-form-label">Apellido y Nombre:</label>
                <div class="col-sm-7">
                  <input class="form-control" id="inputApellidoYNombre" placeholder="Apellido y Nombre">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputNumDeDNI" class="col-sm-2 col-form-label">Nº de DNI:</label>
                <div class="col-sm-7">
                  <input class="form-control" id="inputNumDeDNI" placeholder="Nº de DNI">
                </div>
              </div>
                <div class="form-group row">
                <label for="inputUsuario" class="col-sm-2 col-form-label">Usuario:</label>
                <div class="col-sm-7">
                  <input class="form-control" id="inputUsuario" placeholder="Usuario">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputContrasenia" class="col-sm-2 col-form-label">Contraseña:</label>
                <div class="col-sm-7">
                  <input class="form-control" id="inputContrasenia" placeholder="Contraseña">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputDestino" class="col-sm-2 col-form-label">Destino:</label>
                <div class="col-sm-7">
                    <select class="custom-select my-1 mr-sm-2" id="inputDestino">
                    <option selected>Elija Destino</option>
                    <option value="1">BARA</option>
                    <option value="2">BSAS</option>
                    <option value="3">CORR</option>
                  </select>
                </div>
              </div>
                <div class="form-group row">
                <label for="inlineZona" class="col-sm-2 col-form-label">Zona/Dirección:</label>
                <div class="col-sm-7">
                    <select class="custom-select my-1 mr-sm-2" id="inlineZona">
                    <option selected>Elija Prefectura de Zona/Dirección</option>
                    <option value="1">PZMN</option>
                    <option value="2">PZRP</option>
                    <option value="3">PZMS</option>
                  </select>
                </div>
              </div>
              </fieldset>
              <div class="form-group row">
                <div class="col-sm-12">
                 <a href="inicioUsuarios.php">volver</a>
                  <button type="submit" class="btn btn-primary">Cargar</button>
                </div>
              </div>
            </form>
        </div>
        <?php 
            include('footer.php');
         ?>
    <!-- Para agregar JS en bootstrap -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
