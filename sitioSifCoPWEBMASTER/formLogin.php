<!doctype html>
<html class="no-js" lang="">
    <?php 
      include ('headSifcop.php');
     ?>
    <body>
        <header class="container-fluid header1">
            <div>
                <img src="img/headerPrefectura.jpg" alt="headerPrefectura">
             </div>
        </header><!-- /header -->
        <section class="loginImagen container-fluid" data-type="parallax" data-speed="10">
          <div class="text-center">
            <div class="container header2">
              <img src="img/logoSifcop.png" alt="headerPrefectura">
            </div>
            <div class="container">
              <h1>Dirección de Operaciones</h1>
            </div>
            <div class="container">
              <h2>Gestión SiFCop - LOGIN</h2>
            </div> 
          </div>
                  <div  class="cajas text-center">
                    <form method="post" action="login.php">
                      <!-- Campo Nombre -->
                      <div class="form-group pt-5">
                        <label for="Usuario">Usuario</label>
                        <input type="text" name="usuario" class="form-control" id="usuario" placeholder="Usuario" required="true">
                      </div>
                      <div class="form-group">
                        <label for="Contraseña">Contraseña</label>
                        <input type="password" name="contrasenia" class="form-control" id="Contraseña" placeholder="Contraseña"  required="true">
                      </div>
                      <div class="form-group">
                        <div class="pb-5">
                          <button type="submit" class="btn btn-primary" style="font-size: 20px;">Ingresar</button>
                        </div>
                      </div>
                    </form>
                  </div>
          </section>
        <?php 
            include('footer.php');
            include('scriptJSBootstrap.php');
         ?>

    </body>
</html>
