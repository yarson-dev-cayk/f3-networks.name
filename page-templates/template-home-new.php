<?php
/*
 * Template Name: Home New
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
<main id="f3_home" class="f3-home f3-home-page">

    <?php get_template_part('page-templates/components/__header_menu');?> <!--OFFCANVAS SIDE MENU-->

    <!-- ============================================================
         BACKGROUND ZONE 1: DARK NAVY (S1)
         Hero image + diagonal lines + white cityscape overlap
    ============================================================ -->
    <div class="f3-zone f3-zone--dark">
        <?php get_template_part('page-templates/components/home_new/f3_hero');?> <!--S1:HERO-->
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
        <div class="f3-zone__lines-overlay" style="background-image: url('<?php echo esc_url(get_stylesheet_directory_uri().'/assets/images/LINES_TOP.webp');?>');"></div>
        

        <?php get_template_part('page-templates/components/home_new/f3_supporting');?> <!--S2:SUPPORTING-->
        <?php get_template_part('page-templates/components/home_new/f3_growth');?> <!--S3:GROWTH-->
        <?php get_template_part('page-templates/components/home_new/f3_projects');?> <!--S4:PROJECTS-->

        <!-- ============================================================
         S5: GUIDED BY EXPERIENCE (dark fiber optic bg)
         Sits BETWEEN S4 and S6 — breaks the light zone
         Placed here in DOM but visually appears between S4 and S6
         via CSS order if needed, or just natural flow
        ============================================================ -->
        <?php if($experience_bgimage = get_field('experience_bgimage')):?>
            <div class="f3-zone f3-zone--fiber section-devider" id="experience" style="background-image: url('<?php echo esc_url($experience_bgimage);?>');">
        <?php else: ?>
            <div class="f3-zone f3-zone--fiber section-devider" id="experience" style="background-image: url('<?php echo esc_url(get_stylesheet_directory_uri().'/assets/images/bg-fiber-green.webp');?>');">
        <?php endif;?>
            <?php get_template_part('page-templates/components/home_new/f3_experience');?><!--S5:EXPERIENCE-->
        </div><!--/f3-zone--fiber -->

        <?php get_template_part('page-templates/components/home_new/f3_solutions');?><!--S6:SOLUTIONS-->
    </div><!-- /f3-zone--light -->


    <!-- ============================================================
         BACKGROUND ZONE 3: DARK NAVY (S7, S8, S9)
         Continuous dark zone — cityscape frames, lines overlay
    ============================================================ -->
    <div class="f3-zone f3-zone--dark position-relative">
        <div class="f3-zone--dark__lines" style="background-image: url('<?php echo esc_url(get_stylesheet_directory_uri().'/assets/images/LINES_BOTTOM.webp');?>');"></div>
        
        <?php get_template_part('page-templates/components/home_new/f3_future');?><!--S7:FUTURE-->
        <?php get_template_part('page-templates/components/home_new/f3_contact');?><!--S8:SUBMIT A REQUEST/CONTACT--> 
        <?php get_template_part('page-templates/components/home_new/f3_faq');?><!--S9: FAQ-->

    </div> <!--/f3-zone--dark-->
</main>

<script>
    /* FAQ Accordion */
    document.querySelectorAll('.f3-accordion__trigger').forEach(function(btn) {
        btn.addEventListener('click', function() {
            var expanded = this.getAttribute('aria-expanded') === 'true';
            document.querySelectorAll('.f3-accordion__trigger').forEach(function(b) {
                b.setAttribute('aria-expanded', 'false');
                b.closest('.f3-accordion__item').classList.remove('is-open');
            });
            if (!expanded) {
                this.setAttribute('aria-expanded', 'true');
                this.closest('.f3-accordion__item').classList.add('is-open');
            }
        });
    });
</script>

<?php get_footer();?>
