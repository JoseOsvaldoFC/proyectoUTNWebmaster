<!doctype html>
<html class="no-js" lang="">
    <?php 
      include ('headSifcop.php');
     ?>
    <body>
      <?php 
      session_start();
      if (isset($_SESSION['usuario']) AND isset($_SESSION['idUsuarioAcceso'])) {
            include ('encabezado.php');
            include ('panelNavegacionUsuarios.php');
         ?>
        <div class="container text-center">
          <h3>Baja Usuario</h3>
        </div> 
        <?php 
            include('footer.php');
            include('scriptJSBootstrap.php');
                              } else {
        ?>
        <script>
          alert("Debe ser usuario registrado");
        </script>
        <?php
          include('formLogin.php');
        }
         ?>
        </script>
    </body>
</html>
