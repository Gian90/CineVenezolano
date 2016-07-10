/*"nada_marquesina" es una clase q actua al momento de que la barra del header se pega a la parte
superior de la ventana, cuando se hace scroll hacia abajo, ella evita q la pagina se mueva en un salto para reemplazar al header q se esta moviendo.
"nada_marquesina" esta en todas las paginas del proyecto y es llamada y usada en el archivo Main.js de la carpeta javascript*/
$(document).ready(function() {
    var altura = $('.menu').offset().top;
    $(window).on('scroll', function() {
        if ($(window).scrollTop() >= altura) {
            $('.menu').addClass('menu-fixed');
            $('.nada_marquesina').addClass('top_marquesina').fadeIn();

        } else {
            $('.menu').removeClass('menu-fixed');
            $('.nada_marquesina').removeClass('top_marquesina');
        }
    });

});
