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
                <a href="https://www.youtube.com/channel/UCvNZ-Y0l7OWwKAx0DdDQj7A/videos?sort=dd&view=0&shelf_id=0" target="_blank" class="icon-youtube"></a>
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
      <!-- "nada_marquesina" es una clase q actua al momento de que la barra del header se pega a la parte
      superior de la ventana, cuando se hace scroll hacia abajo, ella evita q la pagina se mueva en un salto para reemplazar al header q se esta moviendo.
      "nada_marquesina" esta en todas las paginas del proyecto y es llamada y usada en el archivo Main.js de la carpeta javascript-->
        <div class="row footer-widgets  nada_marquesina">
          <script language="javascript" type="text/javascript" src="http://rss.sindicacion.net/view_rss/b2ZjPWZhbHNlJm9meD10cnVl/ZWJiPTI5MkYzMyZlYnQ9RkZGRkZGJmVmYj10cnVlJmVmYz1GRkZGRkYmZWZmPVZlcmRhbmElMkMrQXJpYWwlMkMrc2Fucy1zZXJpZiZlZnM9MyZlZnQ9MTQmZXRiPTI5MkYzMyZldHQ9MjkyRjMzJmV3PTUwMA==/aD1odHRwcyUzQSUyRiUyRm5ld3MuZ29vZ2xlLmNvbSUyRm5ld3MlM0ZxJTNEJTI1MjJjaW5lJTJCdmVuZXpvbGFubyUyNTIyJTJCJTI1N0MlMjU3QyUyQiUyNTIyY25hYyUyNTIyJTI2aGwlM0RlcyUyNmdsJTNEdmUlMjZhdXRodXNlciUzRDAlMjZ1bSUzRDElMjZpZSUzRFVURi04JTI2b3V0cHV0JTNEcnNz"></script><a href="http://rss.sindicacion.net/" style="padding:3px 0px 3px 8px;text-indent:-8px;font:14px Verdana, Arial, sans-serif;color:#FFFFFF;">RSS</a>
            <!-- <div class="col-md-4">
              <script language="javascript" type="text/javascript" src="http://rss.sindicacion.net/view_rss/b2ZkPSZvZm09MjAmb2Z4PXRydWU=/ZWJiPTI5MkYzMyZlYnQ9YWFhMWY0JmVmcz0zJmVmdD0xNCZldGI9MjkyRjMzJmV0dD00ZDNlYzkmZXc9MzAw/aD1odHRwcyUzQSUyRiUyRmNpbmVkZXZlbmV6dWVsYTIwMTEud29yZHByZXNzLmNvbSUyRmZlZWQlMkY="></script>
            </div>

            <div class="col-md-4">
              <script language="javascript" type="text/javascript" src="http://rss.sindicacion.net/view_rss/b2ZkPSZvZm09MjAmb2Z4PXRydWU=/ZWJiPTI5MkYzMyZlYnQ9YWFhMWY0JmVmcz0zJmVmdD0xNCZldGI9MjkyRjMzJmV0dD00ZDNlYzkmZXc9MzAw/aD1odHRwcyUzQSUyRiUyRmNpbmVkZXZlbmV6dWVsYTIwMTEud29yZHByZXNzLmNvbSUyRmZlZWQlMkY="></script>
            </div>

            <div class="col-md-4">
              <script language="javascript" type="text/javascript" src="http://rss.sindicacion.net/view_rss/b2ZkPSZvZm09MjAmb2Z4PXRydWU=/ZWJiPTI5MkYzMyZlYnQ9YWFhMWY0JmVmcz0zJmVmdD0xNCZldGI9MjkyRjMzJmV0dD00ZDNlYzkmZXc9MzAw/aD1odHRwcyUzQSUyRiUyRmNpbmVkZXZlbmV6dWVsYTIwMTEud29yZHByZXNzLmNvbSUyRmZlZWQlMkY="></script>
            </div> -->

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
