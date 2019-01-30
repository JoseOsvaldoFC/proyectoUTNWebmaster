<?php 
           require('conexion.php');
           include('funcionesAuxiliares.php');


          $idCelular = $_GET['idCelular'];
          $nuevoDestino = $_GET['nuevoDestino'];
          $destinoOrigen = $_GET['destinoOrigen'];
          $imei = $_GET['imei'];
          $motivo = $_GET['motivo'];
          $observacion = $_GET['observacion'];
          $destinoArchivo = $_GET['destinoArchivo'];
          $nuevaZona = obtenerZonaDeLaCualDepende($nuevoDestino, $conexion);
          $fechaMovimiento = darVueltaFechaDDAAAA($_GET['fechaMovimiento']);
          if ($motivo == 'BAJA') {
            $estado = 'BAJA';
          } else {
            $estado = 'ALTA';
          }
         $queryCambioDestino = "UPDATE telefonos SET cuatrigramaDestino = '$nuevoDestino', cuatrigramaZona = '$nuevaZona', estado = '$estado' WHERE idCel = $idCelular";
         $cambioDestinoCelular = mysqli_query($conexion,$queryCambioDestino) or die("Error en la consulta".mysqli_error($conexion)."$queryCambioDestino");
         $queryInsertarTablaNovedadCelular = "INSERT INTO trasladostelefonos (idNovedad, idCel, destinoOrigen, trasladoA, fechaMovimiento, motivo, observacion, rutaImagenDocumentacion) VALUES (0, '$idCelular', '$destinoOrigen', '$nuevoDestino', '$fechaMovimiento', '$motivo', '$observacion', '$destinoArchivo')";
         $insertarTablaNovedadCelular = mysqli_query($conexion,$queryInsertarTablaNovedadCelular) or die("Error en la consulta".mysqli_error($conexion)."$queryInsertarTablaNovedadCelular");
         if ($cambioDestinoCelular==true AND $insertarTablaNovedadCelular==true) {
          header("Location: inicioCelulares.php?cargado=1&imei=$imei");
        } else {
          header("Location: inicioCelulares.php?cargado=0&imei=$imei");
        }
?>