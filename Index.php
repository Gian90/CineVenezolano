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
            <?php include("Marquesina_pc.php"); ?>
            <?php include("Modales.php"); ?>
            <?php  include("Marquesina_cell.php"); ?>
        </div>
        <!--  row primero -->
    </div>

    <div class="container">
        <div class="row">
            <div class=" clearfix col-md-6">
                <div class="panel panel-info" style="background-color:#292F33;">
                    <div style="background-color:#292F33; background-image:initial;" class="panel-heading">
                        <font color="#FFFFFF"><strong>NOTICIAS</strong></font>
                    </div>
                    <div class="panel-body">
                      <script language="javascript" type="text/javascript" src="http://rss.sindicacion.net/view_rss/b2ZkPSZvZm09MjAmb2Z4PXRydWU=/ZWJiPTI5MkYzMyZlYnQ9YWFhMWY0JmVmcz0zJmVmdD0xNCZldGI9MjkyRjMzJmV0dD00ZDNlYzkmZXc9NDAw/aD1odHRwcyUzQSUyRiUyRmNpbmVkZXZlbmV6dWVsYTIwMTEud29yZHByZXNzLmNvbSUyRmZlZWQlMkY="></script><a href="http://rss.sindicacion.net/" style="padding:3px 0px 3px 8px;text-indent:-8px;font:14px Times New Roman, serif;color:#aaa1f4;">RSS</a>

                        <!--<div id="carousel-example-generic" class="carousel slide" data-ride="carousel_noticias">
                            <!-- Indicators
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="http://placehold.it/1200x550" alt="...">
                                    <div class="carousel-caption">
                                        <h3>Caption Text</h3>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="http://placehold.it/1200x550" alt="...">
                                    <div class="carousel-caption">
                                        <h3>Caption Text</h3>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="http://placehold.it/1200x550" alt="...">
                                    <div class="carousel-caption">
                                        <h3>Caption Text</h3>
                                    </div>
                                </div>
                            </div>

                            <!-- Controls
                            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>-->
                        <!-- Carousel -->
                    </div>
                    <!--  "panel-body  -->
                </div>
                <!--panel panel-info -->

            </div>
            <!-- fin de la primera columna col-md-6 -->


            <div class=" clearfix col-md-6">
                <a class="twitter-timeline" data-theme="dark" data-link-color="#008080" href="https://twitter.com/cic_ucab" data-widget-id="657229786876628993">Tweets de @cic_ucab </a>
                <script>
                    ! function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0],
                            p = /^http:/.test(d.location) ? 'http' : 'https';
                        if (!d.getElementById(id)) {
                            js = d.createElement(s);
                            js.id = id;
                            js.src = p + "://platform.twitter.com/widgets.js";
                            fjs.parentNode.insertBefore(js, fjs);
                        }
                    }(document, "script", "twitter-wjs");
                </script>
            </div>
        </div>
        <!--row -->




    </div>
    <!--container -->

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
