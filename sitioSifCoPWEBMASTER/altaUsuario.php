     <?php 
      //Array Post
     $apellidoYNombre = $_POST['apellidoYNombre'];
     $numDni = $_POST['numDni'];
     $usuario = $_POST['usuario'];
     $contrasenia = $_POST['contrasenia'];
     $cuatrigramaDestino = $_POST['cuatrigramaDestino'];
     $cuatrigramaZona = $_POST['cuatrigramaZona'];
      //echo $nombre."<br>".$usuario."<br>".$clave."<br>".$email;
      // Conexion MYSQL
     require("conexion.php");
      // HACER VALIDACION PARA NO INGRESAR UN USUARIO QUE NO EXISTE
      // Subir el nuevo usuario
     $queryInsertarUsuario = "INSERT INTO usuariossifcop VALUES (0, '$apellidoYNombre', '$numDni', '$usuario', '$contrasenia', '$cuatrigramaDestino', '$cuatrigramaZona','ALTA')";
     $nuevoUsuario = mysqli_query($conexion,$queryInsertarUsuario) or die("Error en la consulta".mysqli_error($conexion)."$queryInsertarUsuario");
      //echo $query;
      // Evaluamos la respuesta
     if ($nuevoUsuario==true) {
      echo "<div class='alert alert-success' role='alert'>
      El personal ".$apellidoYNombre." con el usuario ".$usuario." ha sido dado de alta satisfactoriamente
      </div>";
        //echo "Gracias ".$usuario." por registrarse";
      include("formAltaUsuario.php");
    } else {
      echo "<div class='alert alert-danger' role='alert'>
      Hubo un error en el alta, intente nuevamente
      </div>";
        //echo "Hubo un error en el registro, intente nuevamente";
      include("formAltaUsuario.php");
    }
    ?>
    
