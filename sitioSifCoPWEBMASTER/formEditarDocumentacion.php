<!doctype html>
<html class="no-js" lang="">
    <?php 
      include ('headSifcop.php');
     ?>
     <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
     <script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>
     <script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/js/messages/messages.es-es.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <body>
     <?php 
      session_start();
      if (isset($_SESSION['usuario']) AND isset($_SESSION['idUsuarioAcceso'])) {
        $idCelular = $_GET['idCelular'];
        $idNovedad = $_GET['idNovedad'];
         ?>
    <br>
        <div class="container">
           <div class="container text-center">
        <form action="cargarDocumentacionPOPUP.php" method="POST" enctype="multipart/form-data">
            <div class="container-fluid form-group row">
                <div class="col-5">
                    <label for="exampleFormControlFile1">
                    Seleccione Archivo con la Constancia del Movimiento:
                    </label>
                </div>
                <div class="col-7">
                   <input type="file" name="archivo" id="archivo" class="form-control-file" id="exampleFormControlFile1" required="true"/>
                </div>
            </div>
            <br>
            <div class="form-group row">
                <div class="col-sm-12">
                <input type="hidden" id="idCelular" name="idCelular" value="<?php echo $idCelular?>">
                <input type="hidden" id="idNovedad" name="idNovedad" value="<?php echo $idNovedad?>">
                    <button class="btn btn-primary" type="submit">
                        Cargar
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
<!-- Inicio Pie de pagina -->
        <?php 
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
