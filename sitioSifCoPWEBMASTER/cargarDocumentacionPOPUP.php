<!doctype html>
<html class="no-js" lang="">
    <?php 
      include ('headSifcop.php');
     ?>
     <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <body>
     <?php
                require('conexion.php');
                include('funcionesAuxiliares.php');
      session_start();
      if (isset($_SESSION['usuario']) AND isset($_SESSION['idUsuarioAcceso'])) {
        $idCelular = $_POST['idCelular'];
        $idNovedad = $_POST['idNovedad'];
        $nombreArchivo = $_POST['idCelular']."-".date('z').date('m').date('Y').date('B').substr($_FILES['archivo']['name'],-4);
        $tipoArchivo = $_FILES['archivo']['type'];
        $tamanioArchivo = $_FILES['archivo']['size'];
        $rutaArchivo = $_FILES['archivo']['tmp_name'];
        $destinoArchivo = "img/documentacion/web/".$nombreArchivo;
        if($nombreArchivo != ""){
              if(!(copy($rutaArchivo, $destinoArchivo))){
                   echo "error al subir el archivo";
            }
        }
        $queryModiRuta = "UPDATE trasladostelefonos SET rutaImagenDocumentacion = '$destinoArchivo' WHERE idNovedad = $idNovedad";
        $cambioModiRuta = mysqli_query($conexion,$queryModiRuta) or die("Error en la consulta".mysqli_error($conexion)."$queryModiRuta");
        if ($cambioModiRuta==true) {
            echo "<div class='alert alert-success' role='alert'>
            Se ha cargado el documento satisfactoriamente para ver los cambios refresque la pagina principal
            </div>";
            echo "<div class='alinearBotton'>";
            echo "<button class='btn btn-primary' onclick='window.close()'>CERRAR</button>";
            echo "</div>";
            } else {
                echo "<div class='alert alert-danger' role='alert'>
                Hubo un error en la carga, intente nuevamente
                </div>";
          }
         ?>
 
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
