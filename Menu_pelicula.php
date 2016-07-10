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
      <!-- "nada_marquesina" es una clase q actua al momento de que la barra del header se pega a la parte
      superior de la ventana, cuando se hace scroll hacia abajo, ella evita q la pagina se mueva en un salto para reemplazar al header q se esta moviendo.
      "nada_marquesina" esta en todas las paginas del proyecto y es llamada y usada en el archivo Main.js de la carpeta javascript-->
        <div class="row nada_marquesina">
            <!--  row primero -->

            <div class=" col-md-4">
            </div>

            <div class=" col-md-4">
              <h3 style="color: #FFFFFF;"><strong>TITULO PELICULA</strong></h3>
            </div>

            <div class=" col-md-4">
                </br>
                <button type="submit" class="btn btn-primary">Editar</button>
            </div>

        </div>
    </div>

    </br>

    <div class="container">
        <!-- container segundo -->

        <div class="row">
            <!-- segundo row     -->

            <div class="col-md-4">

                <img alt="http://placehold.it/150x100" src="http://placehold.it/200x250">
            </div>

            <div class="col-md-6">
                <div class="row">

                    <div class="col-md-1">
                    </div>

                    <div class="col-md-2">
                      <h3 style="color: #FFFFFF;">Sinopsis</h3>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-12">
                      <p style="color: #FFFFFF;">Descripcion de la peliculaDescripcion de la peliculaDescripcion de la peliculaDescripcion de la peliculaDescripcion de la peliculaDescripcion de la peliculaDescripcion de la peliculaDescripcion de la pelicula</p>
                    </div>

                </div>

            </div>

        </div>
        <!-- fin segundo row     -->
        <br>
        <div class="row">
            <!-- Tercer row     -->

            <div class="col-md-4">
                <div class="thumbnail" style="background-color:#292F33;">

                    <div class="caption">
                        <h3 style="color: #FFFFFF;">FICHA TECNICA</h3>
                        <p style="color: #FFFFFF;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; En este campo se reúnen los aspectos básicos que describen una producción cinematográfica, así como los nombres de las personas encargadas de cada uno tanto en los aspectos artísticos como técnicos, entre otros: director, productor, guionista, vestuarista, maquillador, etc.</p>

                        <p>
                            <a href="#" class="btn btn-primary" role="button">Ver</a>
                        </p>

                    </div>
                </div>

            </div>

            <div class="col-md-4">
                <div class="thumbnail" style="background-color:#292F33;">

                    <div class="caption">
                        <h3 style="color: #FFFFFF;">REPARTO</h3>
                        <p style="color: #FFFFFF;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; En este campo se contempla o bien el elenco de actores que encarnan los personajes de un guión de ficción, o las personas cuyos testimonios narran o explican los aspectos de una historia narrada en un documental.</p>

                        <p>
                            <a href="#" class="btn btn-primary" role="button">Ver</a>
                        </p>

                    </div>
                </div>


            </div>
            <div class="col-md-4">

                <div class="thumbnail" style="background-color:#292F33;">

                    <div class="caption">
                        <h3 style="color: #FFFFFF;">DATA</h3>
                        <p style="color: #FFFFFF;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; En este campo hay recopilada información relevante sobre la película, tanto desde el punto de vista de su factura (póster, foto fija, locaciones empleadas), como de su desempeño socio-económico (monto de inversión, cantidad de espectadores, recaudación en taquilla) o de su apreciación cinematográfica (crítica).</p>

                        <p>
                            <a href="#" class="btn btn-primary" role="button">Ver</a>
                        </p>

                    </div>
                </div>

            </div>



        </div>
        <!-- fin  tercer row     -->

        <div class="row">
            <div class="col-md-6">
                <h3 style="color: #FFFFFF; text-shadow: black 0.1em 0.1em 0.2em"><strong>Imagen De La Pelicula</strong></h3>
                <img class="img-responsive" alt="http://placehold.it/150x100" src="http://placehold.it/500x350">
            </div>

            <div class="col-md-6">
              <h3 style="color: #FFFFFF;"><strong>Trailer De La Pelicula</strong></h3>
              <iframe width="100%" height="338" src="http://www.youtube.com/embed/KgMt0dtr4Vc" frameborder="0" allowfullscreen></iframe>
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
