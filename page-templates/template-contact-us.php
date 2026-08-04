<?php
/*
 * Template Name: Contact Us
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
<main id="f3_home" class="f3-home f3-home-page f3-contact-page">

    <?php get_template_part('page-templates/components/__header_menu');?> <!--OFFCANVAS SIDE MENU-->

    <div class="f3-zone f3-zone--dark">
        <?php get_template_part('page-templates/components/contact_us/f3_hero');?> <!--S1:HERO-->
    </div><!--/f3-zone--dark-->

    <!-- CITYSCAPE BRIDGE — sits between dark and light zones -->
    <div class="f3-cityscape-bridge" style="background-image: url('<?php echo esc_url(get_stylesheet_directory_uri().'/assets/images/Group-1-3.webp');?>');"></div>


    <div class="f3-zone f3-zone--light">
        <?php get_template_part('page-templates/components/contact_us/f3_contactinfo');?> <!--S1:CONTACT-INFO-->
        <?php get_template_part('page-templates/components/contact_us/f3_googlemap');?> <!--S2:GOOGLE MAP-->
    </div><!-- /f3-zone--light -->

</main>

<?php get_footer();?>
