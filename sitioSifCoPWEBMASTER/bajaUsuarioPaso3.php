<?php 
           require('conexion.php');

          $idUsuario = $_GET['idUsuario'];
          $usuario = $_GET['usuario'];
          $observacion = $_GET['observacion'];
         $queryBajaUsuario = "UPDATE usuariossifcop SET estado = 'BAJA' WHERE idUsuario = '$idUsuario'";
         $bajaUsuario = mysqli_query($conexion,$queryBajaUsuario) or die("Error en la consulta".mysqli_error($conexion)."$queryBajaUsuario");



         $queryInsertarTablaNovedadUsuario = "INSERT INTO novedadesusuarios (idNovedad, idUsuario, tipo, destinoOrigen, trasladoA, fechaInformaNovedad, observacion) VALUES (0, '$idUsuario', 'BAJA', 'S/N', 'S/N', CURDATE(), '$observacion')";

         $insertarTablaNovedadUsuario = mysqli_query($conexion,$queryInsertarTablaNovedadUsuario) or die("Error en la consulta".mysqli_error($conexion)."$queryInsertarTablaNovedadUsuario");



         if ($bajaUsuario==true) {
          echo "<div class='alert alert-success' role='alert'>
          El usuario ".$usuario." ha sido dado de baja satisfactoriamente
          </div>";
          include("inicioUsuarios.php");
        } else {
          echo "<div class='alert alert-danger' role='alert'>
          Hubo un error en el alta, intente nuevamente
          </div>";
          include("formBajaUsuarioPaso1.php");
        }
?>