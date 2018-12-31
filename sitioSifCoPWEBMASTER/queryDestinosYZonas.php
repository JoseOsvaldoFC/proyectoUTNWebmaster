<?php 
                $queryZona = "SELECT DISTINCT(cuatrigramaZona) from destinos";
                $consultaZonas = mysqli_query($conexion,$queryZona);

                $queryDestinos = "SELECT idDestino, cuatrigramaZona,cuatrigramaDestino, descripcionDestino from destinos";
                $consultaDestinos = mysqli_query($conexion,$queryDestinos);
 ?>

