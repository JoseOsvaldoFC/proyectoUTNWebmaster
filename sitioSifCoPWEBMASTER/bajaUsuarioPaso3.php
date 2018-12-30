<!DOCTYPE doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <title>
        SiFCop
    </title>
    <meta content="" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="img/logoSifcopFavicon.png" rel="shortcut icon">
    <link href="css/normalize.css" rel="stylesheet">
    <link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <script src="js/vendor/modernizr-2.8.3.min.js">
    </script>   
</head>
    <body>
             <?php 
      // si estan seteadas las sesuines mostramos el codigo exclusivo 
      session_start();
      if (isset($_SESSION['usuario']) AND isset($_SESSION['idUsuarioAcceso'])) {
?>
        <header class="container-fluid header1">
            <div>
                <img alt="headerPrefectura" src="img/headerPrefectura.jpg">
                </img>
            </div>
        </header>
        <!-- /header -->
        <div class="text-center">
            <div class="container header2">
                <img alt="headerPrefectura" src="img/logoSifcop.png">
                </img>
            </div>
            <div class="container">
                <h1>
                    Dirección de Operaciones
                </h1>
            </div>
            <div class="container">
                <h2>
                    Gestion Usuario SiFCop
                </h2>
            </div>
        </div>
         <?php 
            include ('panelNavegacionUsuarios.php');
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
                        ¿Seguro que desea eliminar al usuario: UnUsuario?
                    </div>
                    <form action="inicioUsuarios.php">
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
