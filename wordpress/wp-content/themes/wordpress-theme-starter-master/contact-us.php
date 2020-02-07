<?php 
/*
 * Template Name: ContactPage
 * Template Post Type: page
 */
 get_header(); ?>


<!--Contact Info Row-->
<div class="container">

    <div class="row">

        <div class="col-sm-8 d-flex justify-content-center"> 
             <img class="icons" src="<?php bloginfo('template_url'); ?>/img/icons/location-solid.png">
        </div>  

        <div class="col-sm-4 d-flex justify-content-center">  
            <h2> 2721 Ventura St, Fresno, CA 93721 </h2>
        </div>       
    </div><!-- end row -->


    <div class="row">

        <div class="col-sm-8 d-flex justify-content-center">
            <img class="icons" src="<?php bloginfo('template_url'); ?>/img/icons/email.png">
        </div>
        
        <div class="col-sm-4 d-flex justify-content-center">
                <h2> info.gkw.wp@gmail.com </h2>
        </div>
    </div><!-- end row -->     

          
    <div class="row">
        <div class="col-sm-8 d-flex justify-content-center">
            <img class="icons" src="<?php bloginfo('template_url');?>/img/icons/phone.png">
        </div>   

        <div class="col-sm-4 d-flex justify-content-center">
            <h2> ###-###-####</h2>
        </div>    
            
    </div><!-- end row -->   

    <div class="row">
        <div class="col-sm-8 d-flex justify-content-center">
            <h2>Have ideas? Send them to Us!</h2>
        </div>
    </div><!-- end row -->  

    <button type="button" class="btn btn-primary btn-lg" type="submit" value="Submit" >Submit </button>

</div><!--end container-->

<?php get_footer(); ?>