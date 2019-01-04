<?php 
           require('conexion.php');
           include('funcionesAuxiliares.php');


          $idUsuario = $_GET['idUsuario'];
          $usuario = $_GET['usuario'];
          $nuevoDestino = $_GET['nuevoDestino'];
          $destinoOrigen = $_GET['destinoOrigen'];
          $nuevaZona = obtenerZonaDeLaCualDepende($nuevoDestino, $conexion);


         $queryCambioDestino = "UPDATE usuariossifcop SET cuatrigramaDestino = '$nuevoDestino', zona = '$nuevaZona' WHERE idUsuario = '$idUsuario'";

         $cambioDestinoUsuario = mysqli_query($conexion,$queryCambioDestino) or die("Error en la consulta".mysqli_error($conexion)."$queryCambioDestino");

         $queryInsertarTablaNovedadUsuario = "INSERT INTO novedadesusuarios (idNovedad, idUsuario, tipo, destinoOrigen, trasladoA, fechaInformaNovedad, motivo, observacion) VALUES (0, '$idUsuario', 'TRASLADO', '$destinoOrigen', '$nuevoDestino', CURDATE(), 'unMotivo', 'unaObservacion')";

         $insertarTablaNovedadUsuario = mysqli_query($conexion,$queryInsertarTablaNovedadUsuario) or die("Error en la consulta".mysqli_error($conexion)."$queryInsertarTablaNovedadUsuario");

         if ($cambioDestinoUsuario==true AND $insertarTablaNovedadUsuario==true) {
          echo "<div class='alert alert-success' role='alert'>
          El usuario ".$usuario." ha sido cambiado el destino satisfactoriamente
          </div>";
          include("inicioUsuarios.php");
        } else {
          echo "<div class='alert alert-danger' role='alert'>
          Hubo un error en el alta, intente nuevamente
          </div>";
          include("formCambioDestinoUsuarioPaso1.php");
        }
?>