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
             <?php 
      // si estan seteadas las sesuines mostramos el codigo exclusivo 
      session_start();
      if (isset($_SESSION['usuario']) AND isset($_SESSION['idUsuarioAcceso'])) {
?>
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
        <?php 
            include ('panelNavegacionUsuarios.php');
         ?>
        <div class="container text-center">
        <div class="containter">
            <label for="customRange1">PASO 1</label>
            <input type="range" class="custom-range" id="customRange1"  min="0" max="1" step="2">
        </div>
        <div class="container">
            <h5>Seleccione ID del Usuario</h3>
            <br>
        </div>
        <div class="container">
            <div class="container text-center">
            <form action="bajaUsuarioPaso2.php">
              <div class="form-group row container">
                <label for="inputApellidoYNombre" class="col-sm-2 col-form-label">ID del Usuario:</label>
                <div class="col-sm-7">
                  <input class="form-control" id="inputApellidoYNombre" placeholder="ID del Usuario">
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
