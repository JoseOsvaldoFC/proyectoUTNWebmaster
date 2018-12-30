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
        <header class="container-fluid header1">
            <div>
                <img src="img/headerPrefectura.jpg" alt="headerPrefectura">
             </div>
        </header><!-- /header -->
        <section class="loginImagen container-fluid" data-type="parallax" data-speed="10">
          <div class="text-center">
            <div class="container header2">
              <img src="img/logoSifcop.png" alt="headerPrefectura">
            </div>
            <div class="container">
              <h1>Dirección de Operaciones</h1>
            </div>
            <div class="container">
              <h2>Gestión SiFCop - LOGIN</h2>
            </div> 
          </div>
          <!-- Contenido -->
                  <div  class="cajas text-center">
                    <form method="post" action="login.php" target="_blank">
                      <!-- Campo Nombre -->
                      <div class="form-group pt-5">
                        <label for="Usuario">Usuario</label>
                        <input type="text" name="usuario" class="form-control" id="usuario" placeholder="Usuario" required="true">
                      </div>
                      <div class="form-group">
                        <label for="Contraseña">Contraseña</label>
                        <input type="password" name="contrasenia" class="form-control" id="Contraseña" placeholder="Contraseña"  required="true">
                      </div>
                      <div class="form-group">
                        <div class="pb-5">
                          <button type="submit" class="btn btn-primary" style="font-size: 20px;">Ingresar</button>
                        </div>
                      </div>
                    </form>
                  </div>
          </section>
        <?php 
            include('footer.php');
            include('scriptJSBootstrap.php');
         ?>

    </body>
</html>
