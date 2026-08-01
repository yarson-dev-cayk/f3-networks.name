<?php
/*
 * Template Name: About Us
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
<main id="f3_home" class="f3-home f3-home-page f3-uboutus-page">

    <?php get_template_part('page-templates/components/__header_menu');?> <!--OFFCANVAS SIDE MENU-->

    <!-- ============================================================
         BACKGROUND ZONE 1: DARK NAVY (S1)
         Hero image + diagonal lines + white cityscape overlap
    ============================================================ -->
    <div class="f3-zone f3-zone--dark">
        <?php get_template_part('page-templates/components/about_us/f3_hero');?> <!--S1:HERO-->
    </div><!--/f3-zone--dark-->

    <!-- CITYSCAPE BRIDGE — sits between dark and light zones -->
    <div class="f3-cityscape-bridge" style="background-image: url('<?php echo esc_url(get_stylesheet_directory_uri().'/assets/images/Group-1-3.webp');?>');"></div>

    <!-- ============================================================
         BACKGROUND ZONE 2: LIGHT GREY (S2, S3, S4, S6)
         Continuous light zone — sections flow without hard breaks
         Diagonal lines overlay sits on top of entire zone
    ============================================================ -->
    <div class="f3-zone f3-zone--light">
        <!--Decorative lines overlay — covers entire light zone-->
        <div class="f3-zone__lines-overlay" style="background-image: url('<?php echo esc_url(get_stylesheet_directory_uri().'/assets/images/LINES_TOP2_torn.webp');?>');"></div>
        
        <?php get_template_part('page-templates/components/about_us/f3_approach');?> <!--S2:APPROACH-->
        <?php get_template_part('page-templates/components/about_us/f3_mission');?> <!--S3:MISSION--> 
        <?php get_template_part('page-templates/components/about_us/f3_offerings');?> <!--S4:OFFERINGS-->
        <?php get_template_part('page-templates/components/about_us/f3_methodology');?> <!--S5:METHODOLOGY-->
       
        <!-- ============================================================
         S5: GUIDED BY EXPERIENCE (dark fiber optic bg)
         Sits BETWEEN S4 and S6 — breaks the light zone
         Placed here in DOM but visually appears between S4 and S6
         via CSS order if needed, or just natural flow
        ============================================================ -->

        <?php get_template_part('page-templates/components/about_us/f3_team');?><!--S6:LEADERSHIP-TEAM-->
    </div><!-- /f3-zone--light -->

    <!-- ============================================================
         BACKGROUND ZONE 3: DARK NAVY (S7, S8, S9)
         Continuous dark zone — cityscape frames, lines overlay
    ============================================================ -->
    <div class="f3-zone f3-zone--light position-relative">
        <div class="f3-zone--dark__lines" style="background-image: url('<?php echo esc_url(get_stylesheet_directory_uri().'/assets/images/LINES_TOP3.webp');?>');"></div>
        
        <?php get_template_part('page-templates/components/about_us/f3_foundation');?><!--S7:FONDATION-->
        <?php get_template_part('page-templates/components/about_us/f3_innovation');?><!--S8:INNOVATION-->
        <?php get_template_part('page-templates/components/about_us/f3_preamble');?><!--S9:PREAMBLE-->

    </div> <!--/f3-zone--dark-->
</main>

<?php get_footer();?>
