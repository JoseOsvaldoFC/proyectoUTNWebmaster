<?php 
           require('conexion.php');
           include('funcionesAuxiliares.php');


          $idCelular = $_GET['idCelular'];
          $nuevoDestino = $_GET['nuevoDestino'];
          $destinoOrigen = $_GET['destinoOrigen'];
          $imei = $_GET['imei'];
          $motivo = $_GET['motivo'];
          $observacion = $_GET['observacion'];
          $nuevaZona = obtenerZonaDeLaCualDepende($nuevoDestino, $conexion);
          $fechaMovimiento = $_GET['fechaMovimiento'];
          if ($motivo == 'BAJA') {
            $estado = 'BAJA';
          } else {
            $estado = 'ALTA';
          }
         $queryCambioDestino = "UPDATE telefonos SET cuatrigramaDestino = '$nuevoDestino', cuatrigramaZona = '$nuevaZona', estado = '$estado' WHERE idCel = $idCelular";
         $cambioDestinoCelular = mysqli_query($conexion,$queryCambioDestino) or die("Error en la consulta".mysqli_error($conexion)."$queryCambioDestino");
         $queryInsertarTablaNovedadCelular = "INSERT INTO trasladostelefonos (idNovedad, idCel, destinoOrigen, trasladoA, fechaMovimiento, motivo, observacion) VALUES (0, '$idCelular', '$destinoOrigen', '$nuevoDestino', '$fechaMovimiento', '$motivo', '$observacion')";
         $insertarTablaNovedadCelular = mysqli_query($conexion,$queryInsertarTablaNovedadCelular) or die("Error en la consulta".mysqli_error($conexion)."$queryInsertarTablaNovedadCelular");
         if ($cambioDestinoCelular==true AND $insertarTablaNovedadCelular==true) {
          echo "<div class='alert alert-success' role='alert'>
          El Celular con el IMEI ".$imei." ha sido cambiado el destino satisfactoriamente
          </div>";
          include("inicioCelulares.php");
        } else {
          echo "<div class='alert alert-danger' role='alert'>
          Hubo un error en el cambio de destino, intente nuevamente
          </div>";
          include("formCambioDestinoCelularPaso1.php");
        }
?>