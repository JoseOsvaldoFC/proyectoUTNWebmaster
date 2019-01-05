<?php 
     require('conexion.php');
     require('funcionesAuxiliares.php');

     $idCelular = $_GET['idCelular'];

     if (existeCelularSifcop($idCelular, $conexion) == 0) {
          echo "<div class='alert alert-danger' role='alert'>
          El celular con el Número de Id $idCelular no existe, ingrese otro Número de Id
          </div>";
          require("formCambioDestinoCelularPaso1.php");
     } else {
      header("Location: formCambioDestinoCelularPaso2.php?idCelular=$idCelular");
     }
?>