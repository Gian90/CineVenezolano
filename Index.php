<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- The above 3 meta tags *must* come first in the head; any other head
        content must come *after* these tags -->
        <title>SCRIPT</title>
        <!-- Bootstrap -->
        <link href="bootstrap-3.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap-3.3.5/dist/css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="bootstrap-3.3.5/dist/css/bootstrap-submenu.min.css" rel="stylesheet">
        <link href="Estilos/estilo_general.css" rel="stylesheet">
        <link href="Estilos/estilo_carrucel.css" rel="stylesheet">
        <link href="Estilos/fonts.css" rel="stylesheet">
      <!--  <link href="Estilos/estilo_general.css" rel="stylesheet">-->
        <link href="font-awesome-4.4.0/css/font-awesome.min.css" rel="stylesheet">
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

        <div class="social">
          <ul>
            <li><a href="http://www.facebook.com/falconmasters" target="_blank" class="icon-facebook"></a></li>
            <li><a href="http://www.twitter.com/falconmasters" target="_blank" class="icon-twitter"></a></li>
            <li><a href="mailto:contacto@falconmasters.com" class="icon-mail"></a></li>
          </ul>
        </div>

      <div class="container">
        <div class="row">
          <?php include("header_usu.php"); ?>
          <?php include("Marquesina_pc.php"); ?>

          <?php  include("Marquesina_cell.php"); ?>
        </div> <!--  row primero -->
      </div>

    <div class="container">
      <div class="row">
        <div  class=" clearfix col-md-6">
          <div class="panel panel-info" >
            <div style="background-color:#000; background-image:initial;" class="panel-heading" >
              <font color="#FFFFFF"><strong>NOTICIA</strong></font>
            </div>
            <div class="panel-body">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel_noticias">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
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

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
              </div> <!-- Carousel -->
            </div> <!--  "panel-body  -->
          </div><!--panel panel-info -->

        </div><!-- fin de la primera columna col-md-6 -->


        <div  class=" clearfix col-md-6">
          <a class="twitter-timeline" href="https://twitter.com/cic_ucab" data-widget-id="657229786876628993">Tweets by @cic_ucab </a>
          <script>
            !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
          </script>
        </div>
      </div><!--row -->




    </div><!--container -->

    <div class="container">
      <div class="row">
        <a>FOOTER AQuI</a>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

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

    <script>
      $('.carousel').carousel({
        interval: 3000
      })

      $('.carousel_noticias').carousel({
        interval: 2000
      })
    </script>


  </body>
</html>
