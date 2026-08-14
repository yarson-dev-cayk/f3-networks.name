<?php
/*
 * Template Name: Solutions
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

<main id="f3_home" class="f3-home f3-home-page f3-solutions-page">

    <?php get_template_part('page-templates/components/__header_menu');?> <!--OFFCANVAS SIDE MENU-->

    <div class="f3-zone f3-zone--dark">
        <?php get_template_part('page-templates/components/solutions/f3_hero');?> <!--S1:HERO-->
    </div><!--/f3-zone--dark-->

    <!-- CITYSCAPE BRIDGE — sits between dark and light zones -->
    <div class="f3-cityscape-bridge" style="background-image: url('<?php echo esc_url(get_stylesheet_directory_uri().'/assets/images/Group-1-3.webp');?>');"></div>

    <div class="f3-zone f3-zone--light">
        <!--Decorative lines overlay — covers entire light zone-->
        <!-- <div class="f3-zone__lines-overlay" style="background-image: url('<?php //echo esc_url(get_stylesheet_directory_uri().'/assets/images/LINES_TOP2_torn.webp');?>');"></div> -->
    </div><!-- /f3-zone--light -->

    <div class="f3-zone f3-zone--light position-relative">
        <div class="f3-zone--dark__lines sp" style="background-image: url('<?php echo esc_url(get_stylesheet_directory_uri().'/assets/images/LINES_TOP3.webp');?>');"></div>
        <?php get_template_part('page-templates/components/solutions/f3_solutionsblocks');?><!--S2:SOLUTIONS BLOCKS -->
        <?php get_template_part('page-templates/components/solutions/f3_preamble');?><!--S3:PREAMBLE-->
    </div> <!--/f3-zone--light-->

    <div class="f3-zone f3-zone--dark position-relative">
       <!-- <div class="f3-zone--dark__lines" style="background-image: url('<?php //echo esc_url(get_stylesheet_directory_uri().'/assets/images/LINES_BOTTOM.webp');?>');"></div>-->
       <?php get_template_part('page-templates/components/solutions/f3_infrastructureneeds');?> <!--S4:INFRASTRUCTURE NEEDS-->
    </div> <!--/f3-zone--dark-->
    
</main>

<?php get_footer();?>
