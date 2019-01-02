<?php 
     require('conexion.php');
     require('funcionesAuxiliares.php');

     $numDni = $_GET['numDni'];

     if (existeUsuarioSifcop($numDni, $conexion) == 0) {
          echo "<div class='alert alert-danger' role='alert'>
          El usuario con el Número de Documento $numDni no existe, ingrese otro Número de Documento
          </div>";
          require("formBajaUsuarioPaso1.php");
     } else {
      header("Location: formBajaUsuarioPaso2.php?numDni=$numDni");
     }
?>