<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head
        content must come *after* these tags -->
        <title>Bootstrap 101 Template</title>
        <!-- Bootstrap -->
        <link href="bootstrap-3.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap-3.3.5/dist/css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="bootstrap-3.3.5/dist/css/bootstrap-submenu.min.css" rel="stylesheet">
        <link href="estilo_carrucel.css" rel="stylesheet">
         <link href="font-awesome-4.4.0/css/font-awesome.min.css" rel="stylesheet">
         <link href="bootstrap-combobox-master/css/bootstrap-combobox.css" media="screen" rel="stylesheet" type="text/css">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media
        queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file://
        -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
        
      <!--  <script src="bootstrap-3.3.5/dist/js/bootstrap.min.js"></script>
   -->         
    </head>
    
    <body>
        <?php
  include('header-admin.php');
?>        
 <div class="container">

	<div class="row">

		<!-- row para poner la busquedad-->

		<div class=" col-md-4">
         <!--menu vertical  -->
         
            </div>
            <div class=" col-md-4">
            	<!--<form  > -->
            <form action="procesar_persona.php" method="POST" enctype="multipart/form-data">    
            <div class="control-group">
                <h4>PERSONA</h4>
                <div class="control-group">
                	<div class="form-group">
                        <div class="controls">
                            <input  class="form-control"type="text" id="Primer_Nombre" name="Primer_Nombre" placeholder="Primer Nombre">
                        </div>
                    </div>
                    <div class="form-group">
                          <div class="controls">
                            <input type="text"  class="form-control" id="Segundo_Nombre" name="Segundo_Nombre" placeholder="Segundo Nombre">
                         </div>
                    </div>
                    <div class="form-group">
                          <div class="controls">
                            <input type="text"  class="form-control" id="Primer_Apellido" name="Primer_Apellido" placeholder="Primer  Apellido">
                        </div>
                    </div>
                    <div class="form-group">
                          <div class="controls">
                            <input type="text"  class="form-control" id="Segundo_Apellido" name="Segundo_Apellido" placeholder="Segundo  Apellido">
                        </div>
                    </div>
                    <div class="form-group">
                          <div class="controls">
                            <input type="text"  class="form-control" id="Biografia" name="Biografia" placeholder="Biografia">
                        </div>
                    </div>
                      <div class="form-group">
                          <div class="controls">
                           
                          <label>Adjuntar un archivo</label>
                          <input class="form-control" type="file"   name="imagen_foto" id="ejemplo_archivo_1">
                          
                         </div>
                     </div>
                </div>
               
            </div>
            <input id="btn_env_pers" type="submit"  class="btn btn-primary" value="Enviar"/>
            </form>
        <!--</form>-->
            </div>
            <div class=" col-md-4">
            </div>
        
        

	</div> <!--  row primero -->
 </div>
 
 


<div class="container">
            <div class="row">
                <p class="text-center"><strong>PIE DE PAGINA...........</strong></p>
            </div>
</div>



        
            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
            <!-- Include all compiled plugins (below), or include individual
            files as needed -->
            <script src="bootstrap-3.3.5/dist/js/bootstrap.min.js"></script>
            <script src="bootstrap-3.3.5/dist/js/bootstrap-submenu.min.js"></script>
            <script>
    $('.carousel').carousel({
        interval: 3000
    })
</script>
            
            
       <script src="bootstrap-combobox-master/js/bootstrap-combobox.js" type="text/javascript"></script>
    <script type="text/javascript">
      //<![CDATA[
        $(document).ready(function(){
          $('.combobox').combobox()
        });
      //]]>
    </script>

    </body>

</html>










