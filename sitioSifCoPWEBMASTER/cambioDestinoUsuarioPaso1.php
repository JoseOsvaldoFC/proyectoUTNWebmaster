<?php 
     require('conexion.php');
     require('funcionesAuxiliares.php');

     $numDni = $_GET['numDni'];

     if (existeUsuarioSifcopDadoDeAlta($numDni, $conexion) == 0) {
          echo "<div class='alert alert-danger' role='alert'>
          El usuario con el Número de Documento $numDni no existe o fue dado de baja, ingrese otro Número de Documento
          </div>";
          require("formCambioDestinoUsuarioPaso1.php");
     } else {
      header("Location: formCambioDestinoUsuarioPaso2.php?numDni=$numDni");
     }
?>