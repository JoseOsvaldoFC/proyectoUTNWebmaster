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
        <?php 
            include('footer.php');
            include('scriptJSBootstrap.php');
         ?>
    </body>
</html>
