			<?php 
			include("conexion.php");
			$usuario=$_POST['usuario'];
			$contrasenia=$_POST['contrasenia'];
			$query = "SELECT usuario, destino, acceso FROM usuariosacceso WHERE usuario='$usuario' and contrasenia='$contrasenia'";
			$consulta = mysqli_query($conexion, $query) or die (mysqli_error($conexion));
			$resultado = mysqli_num_rows($consulta);
			if ($resultado==0) {
			?>
			<html>
				<script>
					alert("Usuario y/o Contraseña incorrectos");		
				</script>
			</html>
			<?php 
				include('formLogin.php');
			} else {
				//procesamos el resultado
				$datos=mysqli_fetch_array($consulta);
				//Armar las variables de sesion, con lo devuelto por la base de datos
				session_start();
				$_SESSION['usuario'] = $usuario;
				$_SESSION['destino'] = $datos['destino'];
				$_SESSION['acceso'] = $datos['acceso'];
				require('inicioPagina.php');
			}
			?>