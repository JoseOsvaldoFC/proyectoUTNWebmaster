
<?php
	function existeUsuarioSifcop($numDni, $conexion)
	{
	    $queryValidacionUsuarios = "SELECT idUsuario, apellidoNombre, numDni, usuario, contrasenia, zona, cuatrigramaDestino FROM usuariossifcop WHERE numDni='$numDni'";
	    $consultaUsuarios = mysqli_query($conexion, $queryValidacionUsuarios);
	    return mysqli_num_rows($consultaUsuarios);
	}

	function obtenerZonaDeLaCualDepende($cuatrigramaDestino, $conexion)
	{
		 $queryZona = "SELECT cuatrigramaZona FROM destinos WHERE cuatrigramaDestino='$cuatrigramaDestino'";
	    $consultaZona = mysqli_query($conexion, $queryZona);
	    $resultado=mysqli_fetch_array($consultaZona);
	    return $resultado['cuatrigramaZona'];
	}
?>

