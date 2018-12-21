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
<!-- Inicio Navigator -->
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
<!-- Fin Navigator -->
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
        <form action="cambioDestinoUsuarioPaso3.php">
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
                <div class="col-sm-3">
                    <output class="form-control" id="inputDestino" placeholder="inputDestino">
                        unDestino
                    </output>
                </div>
                 <label for="inputDestino" class="col-sm-2 col-form-label">Nuevo Destino:</label>
                <div class="col-sm-3">
                    <select class="custom-select my-1 mr-sm-2" id="inputDestino">
                    <option selected>Elija Destino</option>
                    <option value="1">BARA</option>
                    <option value="2">BSAS</option>
                    <option value="3">CORR</option>
                  </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="inlineZona">
                    Zona/Dirección:
                </label>
                <div class="col-sm-3">
                    <output class="form-control" id="inlineZona" placeholder="inlineZona">
                        unaZona
                    </output>
                </div>

                <label for="inlineZona" class="col-sm-2 col-form-label">Nueva Zona/Dirección:</label>
                <div class="col-sm-3">
                    <select class="custom-select my-1 mr-sm-2" id="inlineZona">
                    <option selected>Elija Prefectura de Zona/Dirección</option>
                    <option value="1">PZMN</option>
                    <option value="2">PZRP</option>
                    <option value="3">PZMS</option>
                  </select>
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
                        Modificar
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
 
<!-- Inicio Pie de pagina -->
        <footer>
            <div class="container pt-0 mt-0 pieDePagina">
                <p>
                CONTACTO: DIRECCIÓN DE OPERACIONES - Sección Sistemas <br>
                Dirección: Edificio Guardacostas Av. Eduardo Madero 235 - C1106ACC <br>
                Ciudad Autónoma de Buenos Aires Argentina.<br>
                Teléfono: (+5411) 4318-7400 int 2326/2327 <br>
                Correo electrónico: <a href="diop-sistemas@prefecturanaval.gov.ar">diop-sistemas@prefecturanaval.gov.ar</a> 
                </p>
            </div>
        </footer>
<!-- Fin Pie de pagina -->
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
