<!-- Modal De Ingreso al Sistema-->
<div class="container">
    <!-- Modal -->
    <div class="modal fade" id="myModalLog" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" style="color: #FFFFFF;">&times;</button>
                    <h4 class="modal-title" style="color: #FFFFFF;"><strong>¡Iniciar Sesión!</strong></h4>
                </div>
                <div class="modal-body">
                    <form role="form">
                        <div class="form-group">
                            <label for="recipient-name" class="control-label" style="color: #FFFFFF;">Correo Electrónico de contacto</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="ejemplo_password_1" style="color: #FFFFFF;">Contraseña</label>
                            <input type="password" class="form-control" id="ejemplo_password_1" placeholder="Contraseña">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Enviar</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fin De Modal De Ingreso al Sistema-->

<!-- Modal De Registro-->
<div class="container">
    <!-- Modal -->
    <div class="modal fade" id="myModalReg" role="dialog">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" style="color: #FFFFFF;">&times;</button>
                    <h4 class="modal-title" style="color: #FFFFFF;"><strong>¡Forma parte de nuestra comunidad!</strong></h4>
                </div>
                <div class="modal-body">
                    <form role="form">
                        <div class="form-group">
                            <label for="recipient-name" class="control-label" style="color: #FFFFFF;">Correo Electrónico de contacto</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="control-label" style="color: #FFFFFF;">Anexa aquí un tema que quieras tratar con nosotros</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="ejemplo_archivo_1" style="color: #FFFFFF;">Si lo deseas, puedes enviar tu Currículum</label>
                            <input type="file" id="ejemplo_archivo_1" style="color: #FFFFFF;">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Enviar</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fin de Modal De Registro-->

<!-- Modal De Registro-->
<div class="container">
    <!-- Modal -->
    <div class="modal fade" id="myModalEnv" role="dialog">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" style="color: #FFFFFF;">&times;</button>
                    <h4 class="modal-title" style="color: #FFFFFF;"><strong>¡Forma parte de nuestra comunidad!</strong></h4>
                </div>
                <div class="modal-body">
                    <form role="form">
                        <div class="form-group">
                            <label for="recipient-name" class="control-label" style="color: #FFFFFF;">Correo Electrónico de contacto</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="control-label" style="color: #FFFFFF;">Anexa aquí un tema que quieras tratar con nosotros</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="ejemplo_archivo_1" style="color: #FFFFFF;">Si lo deseas, puedes enviar tu Currículum</label>
                            <input type="file" id="ejemplo_archivo_1" style="color: #FFFFFF;">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Enviar</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fin de Modal De Registro-->


<!-- Sistema de regillas bien implementado (cuidado!!!!) -->
<div id="gridSystemModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #FFFFFF;"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="gridModalLabel" style="color: #FFFFFF;">Modal title</h4>
            </div>
            <div class="modal-body">
                <div class="container-fluid bd-example-row">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="ejemplo_password_1" style="color: #FFFFFF;">Contraseña</label>
                            <input type="password" class="form-control" id="ejemplo_password_1" placeholder="Contraseña">
                        </div>
                        <div class="col-md-4 col-md-offset-4">
                            <label for="recipient-name" class="control-label" style="color: #FFFFFF;">Correo Electrónico de contacto</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-md-offset-3">
                            <label for="recipient-name" class="control-label" style="color: #FFFFFF;">contacto</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="col-md-2 col-md-offset-4">
                            <label for="recipient-name" class="control-label" style="color: #FFFFFF;">Electrónico</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">.col-md-6 .col-md-offset-3</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-9">
                            Level 1: .col-sm-9
                            <div class="row">
                                <div class="col-xs-8 col-sm-6">
                                    Level 2: .col-xs-8 .col-sm-6
                                </div>
                                <div class="col-xs-4 col-sm-6">
                                    Level 2: .col-xs-4 .col-sm-6
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Enviar</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Sistema de regillas Para el director de peliculas-->
<div id="gridSystemModalDir" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #FFFFFF;"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="gridModalLabel" style="color: #FFFFFF;">Modal title</h4>
            </div>
            <div class="modal-body">
                <div class="container-fluid bd-example-row">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="ejemplo_password_1" style="color: #FFFFFF;">Contraseña</label>
                            <input type="password" class="form-control" id="ejemplo_password_1" placeholder="Contraseña">
                        </div>
                        <div class="col-md-4 col-md-offset-4">
                            <label for="recipient-name" class="control-label" style="color: #FFFFFF;">Correo Electrónico de contacto</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-md-offset-3">
                            <label for="recipient-name" class="control-label" style="color: #FFFFFF;">contacto</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="col-md-2 col-md-offset-4">
                            <label for="recipient-name" class="control-label" style="color: #FFFFFF;">Electrónico</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">.col-md-6 .col-md-offset-3</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-9">
                            Level 1: .col-sm-9
                            <div class="row">
                                <div class="col-xs-8 col-sm-6">
                                    Level 2: .col-xs-8 .col-sm-6
                                </div>
                                <div class="col-xs-4 col-sm-6">
                                    Level 2: .col-xs-4 .col-sm-6
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Enviar</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
