     <?php 
      //Array Post
     $apellidoYNombre = $_POST['apellidoYNombre'];
     $numDni = $_POST['numDni'];
     $usuario = $_POST['usuario'];
     $contrasenia = $_POST['contrasenia'];
     $cuatrigramaDestino = $_POST['cuatrigramaDestino'];
     $cuatrigramaZona = $_POST['cuatrigramaZona'];
     require("conexion.php");
     include('funcionesAuxiliares.php');
      if (existeUsuarioSifcop($numDni, $conexion) == 0) {
         $queryInsertarUsuario = "INSERT INTO usuariossifcop VALUES (0, '$numDni', '$apellidoYNombre', '$usuario', '$contrasenia', '$cuatrigramaDestino', '$cuatrigramaZona','ALTA')";
         $nuevoUsuario = mysqli_query($conexion,$queryInsertarUsuario) or die("Error en la consulta".mysqli_error($conexion)."$queryInsertarUsuario");
         if ($nuevoUsuario==true) {
          echo "<div class='alert alert-success' role='alert'>
          El personal ".$apellidoYNombre." con el usuario ".$usuario." ha sido dado de alta satisfactoriamente
          </div>";
          include("formAltaUsuario.php");
        } else {
          echo "<div class='alert alert-danger' role='alert'>
          Hubo un error en el alta, intente nuevamente
          </div>";
          include("formAltaUsuario.php");
        }

    } else {
      echo "<div class='alert alert-danger' role='alert'>
      El usuario ". $usuario. " con el Número de Documento ".$numDni." ya existe
      </div>";
          include("formAltaUsuario.php");
    }
    ?>
    
