<!DOCTYPE html>
<html lang="es">
<?php include("Head.php"); ?>

<body>

    <div class="social">
        <ul>
            <li>
                <a href="https://www.facebook.com/CIC-UCAB-1626210684296485/timeline" target="_blank" class="icon-facebook"></a>
            </li>
            <li>
                <a href="https://twitter.com/cic_ucab" target="_blank" class="icon-twitter"></a>
            </li>
            <li>
                <a href="mailto:contacto@falconmasters.com" class="icon-youtube"></a>
            </li>
        </ul>
    </div>

    <div class="container">
        <div class="row">
            <?php include("header_usu.php"); ?>
            <?php include("Modales.php"); ?>
        </div>
        <!--  row primero -->
    </div>

    <!--_________________________________________________________________________________________________________________________________-->
    <div class="container">
        <div class="row">
          <div class=" clearfix col-md-6">


          </div>
          <!-- fin de la primera columna col-md-6 -->

          <!-- Foto Del Equipo -->
          <div class=" clearfix col-md-6">
            <div class="panel panel-info" style="background-color:#292F33;">
                <div style="background-color:#292F33; background-image:initial;" class="panel-heading">
                    <font color="#FFFFFF"><strong>¡Equipo CIC!</strong></font>
                </div>
                <div class="panel-body">
                  <img src="imagenes\Pag\SCRIPT(300).png" style="height:150;" class="img-responsive img-rounded">

                </div>
                <!--  "panel-body  -->
            </div>
            <!--panel panel-info -->
          </div>



            <div class=" clearfix col-md-6">


            </div>
            <!-- fin de la primera columna col-md-6 -->

            <!-- Contenedor del Mapa de Google -->
            <div class=" clearfix col-md-6">
              <!-- Inicio del panel panel-info -->
              <div class="panel panel-info" style="background-color:#292F33;">
                  <div style="background-color:#292F33; background-image:initial;" class="panel-heading">
                      <font color="#FFFFFF"><strong>¡Donde Estamos!</strong></font>
                  </div>
                  <!--  Inicio del panel-body  -->
                  <div class="panel-body">
                    <!-- Codigo del Mapa de Google -->
                    <iframe width="100%" height="268" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15693.84792777164!2d-66.9758!3d10.4642!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x43cb2d8100a63708!2sUniversidad+Cat%C3%B3lica+Andr%C3%A9s+Bello!5e0!3m2!1ses!2sve!4v1468088657141" frameborder="0" style="border:0" allowfullscreen></iframe>

                  </div>
                  <!--  Final del panel-body  -->
              </div>
              <!-- Final del panel panel-info -->
            </div>

        </div>
        <!--row -->
    </div>
    <!--container -->

    <!--_________________________________________________________________________________________________________________________________-->
    <div class="container">
        <div class="row">
            <?php include("footer_usu.php"); ?>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual
    files as needed -->
    <script src="bootstrap-3.3.5/dist/js/bootstrap.min.js"></script>
    <script src="bootstrap-3.3.5/dist/js/bootstrap-submenu.min.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="JavaScripts/Main.js"></script>
    <script src="JavaScripts/jquery.js"></script>
    <script src="JavaScripts/Carrusel.js"></script>
    <!--scripts encargados de la parte de auto completacion de las casillas de busqueda-->
    <script src="bootstrap-combobox-master/js/bootstrap-combobox.js" type="text/javascript"></script>
    <script type="text/javascript">
        //<![CDATA[
        $(document).ready(function() {
            $('.combobox').combobox()
        });
        //]]>
    </script>
</body>
</html>
