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
        <div class="row nada_marquesina">
            <!--  row primero -->

            <div class=" col-md-4 col-md-offset-4">
              <h3 style="color: #FFFFFF;"><strong>TITULO PELICULA &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>  <!-- <button type="submit" class="btn btn-primary">Editar</button> --></h3>
            </div>

        </div>
    </div>

    </br>

    <div class="container">
        <!-- container segundo -->

        <div class="row">
            <!-- segundo row     -->
            <div class="col-md-4">
                <!-- Imagen de pelicula -->
                <img class="img-responsive" width="75%" height="138" alt="Imagen_pelicula" src="imagenes/Poster/azul_y_no_tan_rosa-cartel-5478.jpg">
            </div>

            <div class="col-md-6">
                <div class="row">

                    <div class="col-md-12 panel panel-info" style="background-color:#292F33;">
                        <div class="panel-body">
                            <h3 style="color: #FFFFFF; text-shadow: black 0.1em 0.1em 0.2em"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sinopsis</h3>
                            <br/>
                            <p style="color: #FFFFFF; text-shadow: black 0.1em 0.1em 0.2em"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Descripcion de la peliculaDescripcion de la peliculaDescripcion de la peliculaDescripcion de la peliculaDescripcion de la peliculaDescripcion de la peliculaDescripcion de la
                                peliculaDescripcion de la pelicula Descripcion de la peliculaDescripcion de la peliculaDescripcion de la peliculaDescripcion de la peliculaDescripcion de la peliculaDescripcion de la peliculaDescripcion de la peliculaDescripcion
                                de la pelicula Descripcion de la peliculaDescripcion de la peliculaDescripcion de la peliculaDescripcion de la peliculaDescripcion de la peliculaDescripcion de la peliculaDescripcion de la peliculaDescripcion de la pelicula
                                Descripcion de la peliculaDescripcion de la peliculaDescripcion de la peliculaDescripcion de la peliculaDescripcion de la peliculaDescripcion de la peliculaDescripcion de la peliculaDescripcion de la pelicula</p>
                            <!-- <button type="submit" class="btn btn-primary">Editar</button> -->
                        </div>
                    </div>

                </div>

            </div>

        </div>
        <!-- fin segundo row     -->
        <br/>

        <div class="row">
            <!-- Esta Etiqueta llama al archivo Acordeon_usu.php que tiene todos los acordeones de esta pagina -->
            <?php include("Acordeon_usu.php") ?>
        </div>


        <div class="row">

            <div class="col-md-6  panel panel-info" style="background-color:#292F33;">

                <div class="panel-body">
                    <h3 style="color: #FFFFFF; text-shadow: black 0.1em 0.1em 0.2em"><strong>Imagen De La Pelicula</strong></h3>
                    <img class="img-responsive" width="100%" height="338" alt="Imagen_pelicula" src="imagenes/Poster/ImgAYR.jpg">
                    <br/>
                    <!-- <button type="submit" class="btn btn-primary">Editar</button> -->
                </div>

            </div>

            <div class="col-md-6 panel panel-info" style="background-color:#292F33;">

                <div class="panel-body">
                    <h3 style="color: #FFFFFF; text-shadow: black 0.1em 0.1em 0.2em"><strong>Trailer De La Pelicula</strong></h3>
                    <iframe width="100%" height="284" src="http://www.youtube.com/embed/KgMt0dtr4Vc" frameborder="0" allowfullscreen></iframe>
                    <br/>
                    <!-- <button type="submit" class="btn btn-primary">Editar</button> -->
                </div>

            </div>

        </div>
        <br>

    </div>
    <!-- fin container segundo -->
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
