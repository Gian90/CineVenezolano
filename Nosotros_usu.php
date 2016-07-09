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
    <div class=" clearfix container">
          <div class="col-md-3 col-sm-6 ">
              <a href="Nosotros_usu.php" data-toggle="modal" data-target="#myModalImage">
                  <img alt="Nena saludame al diego" src="imagenes/Poster/Nena-Salud.jpg" width="500" height="300" class="img-rounded">
              </a>
          </div>
    </div>

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
