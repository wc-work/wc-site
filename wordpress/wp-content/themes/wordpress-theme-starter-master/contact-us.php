<?php
/*
 * Template Name: ContactPage
 * Template Post Type: page
 */
get_header(); ?>


<!--Contact Info Rows-->
<div class="container-fluid">
    <div class="row row1">

        <!-- icon-text-container is to help align the icons and text together -->
        <div class="icon-text-container col-xs col-lg-4">
            <img class="icons" src="<?php bloginfo('template_url'); ?>/img/icons/location-solid.png">
            <h2> 2721 Ventura St, Fresno, CA 93721 </h2>
        </div>


        <div class="icon-text-container col-xs col-lg-4">
            <img class="icons" src="<?php bloginfo('template_url'); ?>/img/icons/email.png">
            <h2> info.gkw.wp@gmail.com </h2>
        </div>



        <div class="icon-text-container col-xs col-lg-4">
            <img class="icons" src="<?php bloginfo('template_url'); ?>/img/icons/phone.png">
            <h2> ###-###-####</h2>
        </div>



        <div class="icon-text-container col-xs col-12 text-center">
            <h2>Have ideas? Send them to Us!</h2>
            <button type="button" class="btn btn-primary btn-lg">Send Ideas</button>
        </div>

    </div> <!-- end row -->
</div> <!-- end container -->

<?php get_footer(); ?>