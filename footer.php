<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package site
 */
$full_path = get_template_directory_uri();


?>


<div id="contato"></div>
<section class="contato p-5">
    <div class="container p-5 text-light">
        <div class="row">
            <div class="col-md-6 ">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3667.032101941083!2d-45.90220268502895!3d-23.205500684860613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cc4a77391fd735%3A0x4bbc866975510cca!2sR.%20Justino%20Cobra%2C%2043%20-%20Vila%20Ema%2C%20S%C3%A3o%20Jos%C3%A9%20dos%20Campos%20-%20SP%2C%2012243-030!5e0!3m2!1spt-BR!2sbr!4v1607030494158!5m2!1spt-BR!2sbr"
                    width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
          
                <br>
                <p class="text-light"><span class="uss"><i class="fas fa-map-marker-alt"></i></span> Av. Dr João Guilhermino,65</p>
                <p class="text-light"><span class="uss"><i class="fas fa-phone"></i></span> (12) 3942-4497</p>

                
            </div>
            <div class="col-md-6">
                <h2>CONTATO</h2>
                <?=apply_filters('the_content', '[contact-form-7 id="16" title="Formulário de contato 1"]');?>

            </div>
        </div>
    </div>
</section>


<footer id="colophon" class="site-footer">
    <div class="">
        <div class="site-info">
            <p class="text-center">© 2020 by <?php bloginfo( 'name' ); ?>. Todos os direitos reservados</p>
        </div><!-- .site-info -->
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
    integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>



</body>

</html>