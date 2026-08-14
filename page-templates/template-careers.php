<?php
/*
 * Template Name: Careers
 * Template Post Type: page
 */
?>
<?php get_header();?>
<!-- <div id="f3-preloader"><div class="f3-loader"></div></div> ==> (VAR-1) -->
<!-- <div id="f3-preloader"><div class="dots-loader"><span></span><span></span><span></span></div></div> ==> (VAR-2) -->
<div id="f3-preloader"><img class="f3-preloader-logo" src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/images/F3-Networks-logo.webp');?>" alt="Loading"></div>
<?php
while ( have_posts() ) :
    the_post();
    the_content();
endwhile;
?>
<main id="f3_careers" class="f3-home f3-home-page f3-careers-page">

    <?php get_template_part('page-templates/components/__header_menu');?> <!--OFFCANVAS SIDE MENU-->

    <div class="f3-zone f3-zone--dark">
        <?php get_template_part('page-templates/components/careers/f3_hero');?> <!--S1:HERO-->
    </div><!--/f3-zone--dark-->

    <!-- CITYSCAPE BRIDGE — sits between dark and light zones -->
    <div class="f3-cityscape-bridge f3-bridge-sp-dark" style="background-image: url('<?php echo esc_url(get_stylesheet_directory_uri().'/assets/images/cityscape-dark-half-reverse.webp');?>');"></div>

    <div class="f3-zone f3-zone--dark2">
        <?php get_template_part('page-templates/components/careers/f3_careerinfo');?> <!--S2:CAREERINFO--> 
    </div><!-- /f3-zone--light -->

    <div class="f3-zone f3-zone--light position-relative">
    </div> <!--/f3-zone--dark-->
</main>

<?php get_footer();?>
