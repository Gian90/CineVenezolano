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
            <?php include("header_adm.php"); ?>
            <?php include("Modales_adm.php"); ?>
        </div>
        <!--  row primero -->
    </div>

    <!--_________________________________________________________________________________________________________________________________-->
    <div class="container">
      <!-- "nada_marquesina" es una clase q actua al momento de que la barra del header se pega a la parte
      superior de la ventana, cuando se hace scroll hacia abajo, ella evita q la pagina se mueva en un salto para reemplazar al header q se esta moviendo.
      "nada_marquesina" esta en todas las paginas del proyecto y es llamada y usada en el archivo Main.js de la carpeta javascript-->
        <div class="row nada_marquesina">

          <!-- Seccion de creditos de la pagina -->
          <div class=" clearfix col-md-3">
            <div class="panel panel-info" style="background-color:#292F33;">
                <div style="background-color:#292F33; background-image:initial;" class="panel-heading">
                    <font color="#FFFFFF"><strong>TABLAS</strong></font>
                </div>
                <div class="panel-body">
                  <div class="btn-group-vertical" role="list-group" aria-label="..." >
                    <a href="#" class="list-group-item">PERSONA</a>
                    <a href="#" class="list-group-item">PELICULA</a>
                    <a href="#" class="list-group-item">TIPO CARGO</a>
                    <a href="#" class="list-group-item">CASA PRODUCTORA</a>
                    <a href="#" class="list-group-item">LUGAR</a>
                    <a href="#" class="list-group-item">TRAILER</a>
                    <a href="#" class="list-group-item">REFERENCIA</a>
                    <a href="#" class="list-group-item">GENERO</a>
                    <a href="#" class="list-group-item">TEMATICA</a>
                    <a href="#" class="list-group-item">INSTITUTO</a>
                    <a href="#" class="list-group-item">CRITICA</a>

                    <a href="#" class="list-group-item">REPARTO</a>
                    <a href="#" class="list-group-item">PELICULA <=> REFERENCIA</a>
                    <a href="#" class="list-group-item">FICHA TECNICA</a>
                    <a href="#" class="list-group-item">LOCACION</a>
                    <a href="#" class="list-group-item">FINANCIAMIENTO</a>
                    <a href="#" class="list-group-item">REFERENCIA CRITICA</a>
                    <a href="#" class="list-group-item">PELICULA <=> GENERO</a>
                    <a href="#" class="list-group-item">PELICULA <=> TEMATICA</a>
                  </div>

                </div>
                <!--  "panel-body  -->
            </div>
          </div>
          <!-- fin de la primera columna col-md-6 -->

          <!-- Foto Del Equipo -->
          <div class=" clearfix col-md-9">
            <div class="panel panel-info" style="background-color:#292F33;">
                <div style="background-color:#292F33; background-image:initial;" class="panel-heading">
                    <font color="#FFFFFF"><strong>TABLA SELECCIONADA</strong></font>
                    <ul class="btn btn-default" type="button" aria-hidden="true">
                      <li>
                          <a href="Agregar_adm.php" class="glyphicon glyphicon-save"> &nbsp;Agregar</a>
                      </li>
                    </ul>
                    <ul class="btn btn-default" type="button" aria-hidden="true">
                      <li>
                          <a href="#" class="glyphicon glyphicon-refresh"> &nbsp;Refrescar</a>
                      </li>
                    </ul>
                </div>

                <div class="panel-body">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th><font color="#FFFFFF"><strong>#</strong></font></th>

                        <th><font color="#FFFFFF"><strong>Atributo1</strong></font></th>
                        <th><font color="#FFFFFF"><strong>Atributo2</strong></font></th>
                        <th><font color="#FFFFFF"><strong>Atributo3</strong></font></th>
                        <th><font color="#FFFFFF"><strong>Opcion</strong></font></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><font color="#FFFFFF"><strong>1</strong></font></th>

                        <td><font color="#FFFFFF">Campo1</font></td>
                        <td><font color="#FFFFFF">Campo2</font></td>
                        <td><font color="#FFFFFF">Campo3</font></td>

                        <td><ul class="btn btn-default" type="button" aria-hidden="true">
                              <li>
                                  <a href="#" class="glyphicon glyphicon-arrow-left" data-toggle="modal" data-target="#ModificarCampo"></a>
                              </li>
                            </ul>
                            <ul class="btn btn-default" type="button" aria-hidden="true">
                              <li>
                                  <a href="#" class="glyphicon glyphicon-remove"></a>
                              </li>
                            </ul></td>
                      </tr>
                      <tr>
                        <th scope="row"><font color="#FFFFFF"><strong>2</strong></font></th>

                        <td><font color="#FFFFFF">Campo1</font></td>
                        <td><font color="#FFFFFF">Campo2</font></td>
                        <td><font color="#FFFFFF">Campo3</font></td>
                        <td><ul class="btn btn-default" type="button" aria-hidden="true">
                              <li>
                                  <a href="#" class="glyphicon glyphicon-arrow-left" data-toggle="modal" data-target="#ModificarCampo"></a>
                              </li>
                            </ul>
                            <ul class="btn btn-default" type="button" aria-hidden="true">
                              <li>
                                  <a href="#" class="glyphicon glyphicon-remove"></a>
                              </li>
                            </ul></td>
                      </tr>
                      <tr>
                        <th scope="row"><font color="#FFFFFF"><strong>3</strong></font></th>

                        <td><font color="#FFFFFF">Campo1</font></td>
                        <td><font color="#FFFFFF">Campo2</font></td>
                        <td><font color="#FFFFFF">Campo3</font></td>
                        <td><ul class="btn btn-default" type="button" aria-hidden="true">
                              <li>
                                  <a href="#" class="glyphicon glyphicon-arrow-left" data-toggle="modal" data-target="#ModificarCampo"></a>
                              </li>
                            </ul>
                            <ul class="btn btn-default" type="button" aria-hidden="true">
                              <li>
                                  <a href="#" class="glyphicon glyphicon-remove"></a>
                              </li>
                            </ul></td>
                      </tr>
                      <tr>
                        <th scope="row"><font color="#FFFFFF"><strong>4</strong></font></th>

                        <td><font color="#FFFFFF">Campo1</font></td>
                        <td><font color="#FFFFFF">Campo2</font></td>
                        <td><font color="#FFFFFF">Campo3</font></td>
                        <td><ul class="btn btn-default" type="button" aria-hidden="true">
                              <li>
                                  <a href="#" class="glyphicon glyphicon-arrow-left" data-toggle="modal" data-target="#ModificarCampo"></a>
                              </li>
                            </ul>
                            <ul class="btn btn-default" type="button" aria-hidden="true">
                              <li>
                                  <a href="#" class="glyphicon glyphicon-remove"></a>
                              </li>
                            </ul></td>
                      </tr>
                      <tr>
                        <th scope="row"><font color="#FFFFFF"><strong>5</strong></font></th>

                        <td><font color="#FFFFFF">Campo1</font></td>
                        <td><font color="#FFFFFF">Campo2</font></td>
                        <td><font color="#FFFFFF">Campo3</font></td>
                        <td><ul class="btn btn-default" type="button" aria-hidden="true">
                              <li>
                                  <a href="#" class="glyphicon glyphicon-arrow-left" data-toggle="modal" data-target="#ModificarCampo"></a>
                              </li>
                            </ul>
                            <ul class="btn btn-default" type="button" aria-hidden="true">
                              <li>
                                  <a href="#" class="glyphicon glyphicon-remove"></a>
                              </li>
                            </ul></td>
                      </tr>
                      <tr>
                        <th scope="row"><font color="#FFFFFF"><strong>6</strong></font></th>

                        <td><font color="#FFFFFF">Campo1</font></td>
                        <td><font color="#FFFFFF">Campo2</font></td>
                        <td><font color="#FFFFFF">Campo3</font></td>
                        <td><ul class="btn btn-default" type="button" aria-hidden="true">
                              <li>
                                  <a href="#" class="glyphicon glyphicon-arrow-left" data-toggle="modal" data-target="#ModificarCampo"></a>
                              </li>
                            </ul>
                            <ul class="btn btn-default" type="button" aria-hidden="true">
                              <li>
                                  <a href="#" class="glyphicon glyphicon-remove"></a>
                              </li>
                            </ul></td>
                      </tr>
                      <tr>
                        <th scope="row"><font color="#FFFFFF"><strong>7</strong></font></th>

                        <td><font color="#FFFFFF">Campo1</font></td>
                        <td><font color="#FFFFFF">Campo2</font></td>
                        <td><font color="#FFFFFF">Campo3</font></td>
                        <td><ul class="btn btn-default" type="button" aria-hidden="true">
                              <li>
                                  <a href="#" class="glyphicon glyphicon-arrow-left" data-toggle="modal" data-target="#ModificarCampo"></a>
                              </li>
                            </ul>
                            <ul class="btn btn-default" type="button" aria-hidden="true">
                              <li>
                                  <a href="#" class="glyphicon glyphicon-remove"></a>
                              </li>
                            </ul></td>
                      </tr>
                      <tr>
                        <th scope="row"><font color="#FFFFFF"><strong>8</strong></font></th>

                        <td><font color="#FFFFFF">Campo1</font></td>
                        <td><font color="#FFFFFF">Campo2</font></td>
                        <td><font color="#FFFFFF">Campo3</font></td>
                        <td><ul class="btn btn-default" type="button" aria-hidden="true">
                              <li>
                                  <a href="#" class="glyphicon glyphicon-arrow-left" data-toggle="modal" data-target="#ModificarCampo"></a>
                              </li>
                            </ul>
                            <ul class="btn btn-default" type="button" aria-hidden="true">
                              <li>
                                  <a href="#" class="glyphicon glyphicon-remove"></a>
                              </li>
                            </ul></td>
                      </tr>
                      <tr>
                        <th scope="row"><font color="#FFFFFF"><strong>9</strong></font></th>

                        <td><font color="#FFFFFF">Campo1</font></td>
                        <td><font color="#FFFFFF">Campo2</font></td>
                        <td><font color="#FFFFFF">Campo3</font></td>
                        <td><ul class="btn btn-default" type="button" aria-hidden="true">
                              <li>
                                  <a href="#" class="glyphicon glyphicon-arrow-left" data-toggle="modal" data-target="#ModificarCampo"></a>
                              </li>
                            </ul>
                            <ul class="btn btn-default" type="button" aria-hidden="true">
                              <li>
                                  <a href="#" class="glyphicon glyphicon-remove"></a>
                              </li>
                            </ul></td>
                      </tr>
                      <tr>
                        <th scope="row"><font color="#FFFFFF"><strong>10</strong></font></th>

                        <td><font color="#FFFFFF">Campo1</font></td>
                        <td><font color="#FFFFFF">Campo2</font></td>
                        <td><font color="#FFFFFF">Campo3</font></td>
                        <td><ul class="btn btn-default" type="button" aria-hidden="true">
                              <li>
                                  <a href="#" class="glyphicon glyphicon-arrow-left" data-toggle="modal" data-target="#ModificarCampo"></a>
                              </li>
                            </ul>
                            <ul class="btn btn-default" type="button" aria-hidden="true">
                              <li>
                                  <a href="#" class="glyphicon glyphicon-remove"></a>
                              </li>
                            </ul></td>
                      </tr>
                      <tr>
                        <th scope="row"><font color="#FFFFFF"><strong>11</strong></font></th>

                        <td><font color="#FFFFFF">Campo1</font></td>
                        <td><font color="#FFFFFF">Campo2</font></td>
                        <td><font color="#FFFFFF">Campo3</font></td>
                        <td><ul class="btn btn-default" type="button" aria-hidden="true">
                              <li>
                                  <a href="#" class="glyphicon glyphicon-arrow-left" data-toggle="modal" data-target="#ModificarCampo"></a>
                              </li>
                            </ul>
                            <ul class="btn btn-default" type="button" aria-hidden="true">
                              <li>
                                  <a href="#" class="glyphicon glyphicon-remove"></a>
                              </li>
                            </ul></td>
                      </tr>
                      <tr>
                        <th scope="row"><font color="#FFFFFF"><strong>12</strong></font></th>

                        <td><font color="#FFFFFF">Campo1</font></td>
                        <td><font color="#FFFFFF">Campo2</font></td>
                        <td><font color="#FFFFFF">Campo3</font></td>
                        <td><ul class="btn btn-default" type="button" aria-hidden="true">
                              <li>
                                  <a href="#" class="glyphicon glyphicon-arrow-left" data-toggle="modal" data-target="#ModificarCampo"></a>
                              </li>
                            </ul>
                            <ul class="btn btn-default" type="button" aria-hidden="true">
                              <li>
                                  <a href="#" class="glyphicon glyphicon-remove"></a>
                              </li>
                            </ul></td>
                      </tr>
                    </tbody>
                  </table>

                  <div class="col-md-offset-4">
                    <div class="row">
                        <nav>
                            <ul class="pagination">
                                <li><a href="#" style="background-color:#292F33;">&laquo;</a></li>
                                <li><a href="#" style="background-color:#292F33;">1</a></li>
                                <li><a href="#" style="background-color:#292F33;">2</a></li>
                                <li><a href="#" style="background-color:#292F33;">3</a></li>
                                <li><a href="#" style="background-color:#292F33;">4</a></li>
                                <li><a href="#" style="background-color:#292F33;">5</a></li>
                                <li><a href="#" style="background-color:#292F33;">&raquo;</a></li>
                            </ul>
                       </nav>
                    </div>
                  </div>

                </div>
                <!--  "panel-body  -->
            </div>
            <!--panel panel-info -->
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
