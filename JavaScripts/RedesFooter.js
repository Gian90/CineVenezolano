<script>

$(document).ready(function() {

    $(&#39;#footericons a&#39;).hover(function() {

        $(&#39;#footericons a img&#39;).not($(&#39;img&#39;, this)).stop().fadeTo(250, &#39;0.1&#39;);
    }, function() {
        $(&#39;#footericons a img&#39;).stop().fadeTo(250, &#39;1.0&#39;);
    });
});
</script> 
