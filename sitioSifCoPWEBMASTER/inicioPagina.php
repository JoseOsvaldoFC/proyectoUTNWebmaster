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
                <h2>Gestión SiFCoP</h2>
            </div> 
        </div>
        <!-- Contenido -->
        <div class="header3 container-fluid">
            <section class="container text-center">
                <div class="container">
                    <div class="row">
                        <article class="col-md col-sm-6">
                             <h3>Usuarios</h3>
                            <a href="inicioUsuarios.php"> 
                                <img src="img/usuario.png" alt="" class="img-fluid">
                            </a>
                            <p>Haciendo click en la imagen podrá visualizar todos los usuarios que fueron dados de alta en la Prefectura de Zona</p>
                        </article>
                        <article class="col-md col-sm-6">
                             <h3>Telefonos</h3>
                             <a href="inicioCelulares.php"> 
                                <img src="img/telefonoGalaxyS5.png" alt="">
                             </a>
                            <p>Haciendo click en la imagen podrá ver todos los telefonos con la aplicación SifCop que fueron entregados en la Prefectura de Zona</p>
                        </article>
                    </div>
                </div>
            </section>
        </div>
        <div class="container-fluid slider mt-5">
            <div class="container">
                <!-- Carousel -->
                <div id="carouselExampleIndicators" class="carousel slide carousel" data-ride="carousel" data-interval="3000" data-pause="hover">
                  <ol class="carousel-indicators"><!--son las rayitas de abajo-->
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                  </ol>
                  <!-- Contenido del Carouse / imagenes o slides o item -->
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="img/carouseSifcop4.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="img/carouseSifcop2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="img/carouseSifcop5.jpg" alt="Third slide">
                    </div>
                  <div class="carousel-item">
                      <img class="d-block w-100" src="img/carouseSifcop1.jpg" alt="Four slide">
                    </div>
                  </div>
                  <!-- Son las flechas -->
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">antes</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">despues</span>
                  </a>
                </div>
            </div>
        </div>
        <div class="espacio">
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
