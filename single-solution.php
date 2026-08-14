<?php
/**
 * Single template for "solution" CPT
*/
?>

<?php get_header();?>
<!-- <div id="f3-preloader"><div class="f3-loader"></div></div> ==> (VAR-1) -->
<!-- <div id="f3-preloader"><div class="dots-loader"><span></span><span></span><span></span></div></div> ==> (VAR-2) -->
<div id="f3-preloader"><img class="f3-preloader-logo" src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/images/F3-Networks-logo.webp');?>" alt="Loading"></div>
<?php
while ( have_posts() ) :
    the_post();
    //the_content();
endwhile;
?>

<main id="f3_home" class="f3-home f3-home-page f3-solutions-page f3-solutions-cpt-page">

    <?php get_template_part('page-templates/components/__header_menu');?> <!--OFFCANVAS SIDE MENU-->

    <div class="f3-zone f3-zone--dark _solutions-cpt-page">
        <?php get_template_part('page-templates/components/solutions/f3_hero');?> <!--S1:HERO-->
    </div><!--/f3-zone--dark-->

    <!-- CITYSCAPE BRIDGE — sits between dark and light zones -->
    <div class="f3-cityscape-bridge" style="background-image: url('<?php echo esc_url(get_stylesheet_directory_uri().'/assets/images/Group-1-3.webp');?>');"></div>

    <div class="f3-zone f3-zone--light f3-zone-light-solutions-cpt-page position-relative">
        <div class="f3-zone--dark__lines sp" style="background-image: url('<?php echo esc_url(get_stylesheet_directory_uri().'/assets/images/LINES_TOP3.webp');?>');"></div>

        <!--S2: SOLUTIONS-CPT BLOCKS-->
        <section class="f3-section f3-solutions f3-solutionsblocks f3-solutions-cpt-blocks section-devider" id="solutions_cpt_blocks">
            <div class="container-lg">
                <div class="row f3-supporting__header">
                    <div class="col-12 col-md-10">
                        <?php if($solution_cpt_title = get_field('solution_cpt_title')):?><h2 class="f3-section__heading" data-aos="fade-right"><?php echo $solution_cpt_title;?></h2><?php endif;?>
                        <?php if($solution_cpt_text = get_field('solution_cpt_text')):?><div class="f3-section__text" data-aos="fade-up"><?php echo $solution_cpt_text;?></div><?php endif;?>
                    </div>
                </div>

                <div class="row g-4 mt-2">
                    <?php if(have_rows('solution_cpt_solution_blocks')) :?> 
                        <?php while(have_rows('solution_cpt_solution_blocks')) : the_row();?>
                            <?php
                            $solution_cpt_solution_blocks_title = get_sub_field('solution_cpt_solution_blocks_title');
                            $solution_cpt_solution_blocks_subtitle = get_sub_field('solution_cpt_solution_blocks_subtitle');
                            ?>
                            <div class="col-12 col-md-4 d-block d-md-flex">
                                <div class="f3-feature-box-wrap h-100 d-flex flex-column" data-aos="fade-up-left">
                                    <img class="f3-feature-box__pill" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/color_thingy.svg" alt="green-icon">
                                    <div class="f3-feature-box flex-grow-1 d-flex flex-column">
                                        <?php if($solution_cpt_solution_blocks_title):?><h3 class="f3-feature-box__title text-uppercase mt-3"><?php echo esc_html($solution_cpt_solution_blocks_title);?></h3><?php endif;?>
                                        <?php if($solution_cpt_solution_blocks_subtitle):?><p class="f3-feature-box__text mb-3"><?php echo esc_html($solution_cpt_solution_blocks_subtitle);?></p><?php endif;?>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile;?>
                    <?php endif;?>
                </div><!--/.row-->

                <div class="row f3-supporting__header mt-5">
                    <?php if($solution_cpt_subtitle = get_field('solution_cpt_subtitle')):?><div class="f3-section__text" data-aos="fade-up"><?php echo $solution_cpt_subtitle;?></div><?php endif;?>
                </div>

                <?php
                $solution_cpt_btnlink = get_field('solution_cpt_btnlink') ?? [];
                $solution_cptBtnlinkT   = $solution_cpt_btnlink['title'] ?? '';
                $solution_cptBtnlinkU   = $solution_cpt_btnlink['url'] ?? '';
                $solution_cptBtnlinkTrg = $solution_cpt_btnlink['target'] ?? '_self';
                ?>
                <?php if($solution_cpt_btnlink):?>
                    <div class="f3-section__actions mt-4 text-center" data-aos="zoom-in-right" data-aos-delay="600">
                        <a href="<?php echo esc_url($solution_cptBtnlinkU);?>" class="f3-btn f3-btn--dark-outline" target="<?php echo esc_attr($solution_cptBtnlinkTrg);?>"><?php echo esc_html($solution_cptBtnlinkT);?></a>
                    </div>
                <?php endif; ?>
            </div> <!--/.container-->
        </section>
        <!--S2: SOLUTIONS-CPT BLOCKS-->

        <?php get_template_part('page-templates/components/solutions/f3_preamble');?><!--S3:PREAMBLE-->
    </div> <!--/f3-zone--light-->

    <div class="f3-zone f3-zone--dark position-relative">
       <!-- <div class="f3-zone--dark__lines" style="background-image: url('<?php //echo esc_url(get_stylesheet_directory_uri().'/assets/images/LINES_BOTTOM.webp');?>');"></div>-->

       <!--S3: SOLUTIONS-CPT FAQ-->
        <section class="f3-section f3-faq f3-solutions-cpt--faq section-devider2" id="faq">
            <div class="f3-faq__eye" style="background-image: url('<?php echo esc_url(get_stylesheet_directory_uri().'/assets/images/EYE.webp');?>');"></div><!--Eye/fiber burst decorative — right side-->
            
            <div class="container-lg">
                <?php if($faq_title = get_field('solution_cpt_faq_title')):?><h2 class="f3-section__heading f3__blue-light text-center mb-3 mb-md-5" data-aos="fade-down-right"><?php echo $faq_title;?></h2><?php endif;?>

                <div class="row justify-content-center mt-4">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-10" data-aos="zoom-in">

                        <div class="f3-accordion-bg">
                            <?php if(have_rows('solution_cpt_faq_blocks')):?>
                                <div class="f3-accordion f3-accordion-solutions-cpt--faq">
                                    <?php $i = 0;?>
                                    <?php while (have_rows('solution_cpt_faq_blocks')) : the_row(); ?>
                                        <?php $question = get_sub_field('solution_cpt_faq_blocks_question'); $answer = get_sub_field('solution_cpt_faq_blocks_answer');?>

                                        <div class="f3-accordion__item <?php echo ($i === 0) ? 'is-open' : ''; ?>">
                                            <button class="f3-accordion__trigger" aria-expanded="false"><?php echo $question;?><span class="f3-accordion__icon">+</span></button>
                                            <div class="f3-accordion__body"><p><?php echo $answer;?></p></div>
                                        </div>
                                        <?php $i++;?>
                                    <?php endwhile;?>
                                </div>
                            <?php endif;?>
                        </div>
                        
                    </div><!--.col-->
                </div><!--.row-->
            </div><!--.container-->
        </section>
        <!--S3: SOLUTIONS-CPT FAQ-->

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