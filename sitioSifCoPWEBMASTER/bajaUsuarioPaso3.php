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
        <div class="container-fluid navSifcop">
            <div class="row">
                <div class="col">
                    <nav class="navbar navbar-expand-lg navbar-light bg-none">
                        <!--<a class="navbar-brand" href="#">Navbar</a>-->
                        <div class="text-center">
                            <!--Hamburguer Icon-->
                            <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button">
                                <span class="navbar-toggler-icon">
                                </span>
                            </button>
                        </div>
                        <!-- Menu Mobile desplegable -->
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="inicioPagina.php">
                                        Inicio
                                    </a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="inicioUsuarios.php">
                                        Usuarios
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="navbarDropdown" role="button">
                                        Administración
                                    </a>
                                    <div aria-labelledby="navbarDropdown" class="dropdown-menu">
                                        <a class="dropdown-item" href="altaUsuario.php">
                                            Alta
                                        </a>
                                        <a class="dropdown-item" href="bajaUsuarioPaso1.php">
                                            Baja
                                        </a>
                                        <a class="dropdown-item" href="cambioDestinoUsuarioPaso1.php">
                                            Cambio de Destino
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
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
                <footer>
                    <div class="container pt-0 mt-0 pieDePagina">
                        <p>
                            CONTACTO: DIRECCIÓN DE OPERACIONES - Sección Sistemas
                            <br>
                                Dirección: Edificio Guardacostas Av. Eduardo Madero 235 - C1106ACC
                                <br>
                                    Ciudad Autónoma de Buenos Aires Argentina.
                                    <br>
                                        Teléfono: (+5411) 4318-7400 int 2326/2327
                                        <br>
                                            Correo electrónico:
                                            <a href="diop-sistemas@prefecturanaval.gov.ar">
                                                diop-sistemas@prefecturanaval.gov.ar
                                            </a>
                                        
                                    
                                
                            
                        </p>
                    </div>
                </footer>
                <!-- Para agregar JS en bootstrap -->
                <script crossorigin="anonymous" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
                </script>
                <script crossorigin="anonymous" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
                </script>
                <script crossorigin="anonymous" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js">
                </script>
                <script src="js/plugins.js">
                </script>
                <script src="js/main.js">
                </script>
                <script src="https://code.jquery.com/jquery-1.12.0.min.js">
                </script>
                <script>
                    window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')
                </script>
                <script src="js/plugins.js">
                </script>
                <script src="js/main.js">
                </script>
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
