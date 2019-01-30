
<?php
	function existeUsuarioSifcop($numDni, $conexion)
	{
	    $queryValidacionUsuarios = "SELECT idUsuario, apellidoNombre, numDni, usuario, contrasenia, zona, cuatrigramaDestino FROM usuariossifcop WHERE numDni='$numDni'";
	    $consultaUsuarios = mysqli_query($conexion, $queryValidacionUsuarios);
	    return mysqli_num_rows($consultaUsuarios);
	}

		function existeUsuarioSifcopDadoDeAlta($numDni, $conexion)
	{
	    $queryValidacionUsuarios = "SELECT idUsuario, apellidoNombre, numDni, usuario, contrasenia, zona, cuatrigramaDestino FROM usuariossifcop WHERE numDni='$numDni' AND estado like '%ALTA%'";
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

	function existeCelularSifcop($idCelular, $conexion)
	{
		$queryValidacionCelular = "SELECT idCel, patrimonial, imei, linea, modelo, cuatrigramaZona, cuatrigramaDestino, estado FROM telefonos WHERE idCel = $idCelular";
		$consultaCelular = mysqli_query($conexion, $queryValidacionCelular);
		return mysqli_num_rows($consultaCelular);
	}

	function darVueltaFechaDDAAAA($fecha)
	{
		trim($fecha);
		$arrayFecha = explode("-", str_replace("/","-",$fecha));
		return ($arrayFecha[2]."-".$arrayFecha[1]."-".$arrayFecha[0]);
	}

?>

