<?php
$solutions_query = new WP_Query( array(
    'post_type'      => 'solution',
    'posts_per_page' => -1,
    'orderby'        => 'menu_order',
    'order'          => 'ASC',
    'post_status'    => 'publish',
) );
?>
<!--S2: SOLUTIONS BLOCKS-->
<section class="f3-section f3-solutions f3-solutionsblocks section-devider2" id="solution_sblocks">
    <div class="container-lg">
        <div class="row f3-supporting__header">
            <div class="col-12 col-md-10">
                <?php if($solutions_title = get_field('solutions_title')):?><h2 class="f3-section__heading" data-aos="fade-right"><?php echo $solutions_title;?></h2><?php endif;?>
                <?php if($solutions_subtitle = get_field('solutions_subtitle')):?><div class="f3-section__text" data-aos="fade-up"><?php echo $solutions_subtitle;?></div><?php endif;?>
            </div>
        </div>

        <div class="row g-4 mt-2">
                <!--Solutions blocks — pulls all published "solution" CPT posts--> 
                <?php if($solutions_query->have_posts()):?>
                    <?php while($solutions_query->have_posts()): $solutions_query->the_post();?>
                        <div class="col-12 col-md-4 d-block d-md-flex">
                            <div class="f3-feature-box-wrap h-100 d-flex flex-column" data-aos="fade-up-left">
                                <img class="f3-feature-box__pill" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/color_thingy.svg" alt="green-icon">
                                <div class="f3-feature-box flex-grow-1 d-flex flex-column">
                                    <?php if( get_the_title() ):?><h3 class="f3-feature-box__title text-uppercase mt-3"><?php the_title();?></h3><?php endif;?>

                                    <?php $f3_excerpt = get_the_excerpt(); if(empty($f3_excerpt)){ $f3_excerpt = wp_trim_words( wp_strip_all_tags(strip_shortcodes(get_the_content())),20,'…'); } ?>
                                    <?php if($f3_excerpt):?><p class="f3-feature-box__text mb-3"><?php echo esc_html( get_the_excerpt() );?></p><?php endif;?>

                                    <a href="<?php echo esc_url( get_permalink() );?>" class="f3-btn f3-btn--dark-outline f3-btn--sm align-self-start mt-3 mt-auto"><?php esc_html_e('Learn More','maxcanvas_child');?></a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile;?>
                <?php endif;?>
                <?php wp_reset_postdata();?>
                <!--/Solutions blocks — pulls all published "solution" CPT posts--> 
        </div><!--/.row-->
    </div> <!--/.container-->

</section>
<!--S2: SOLUTIONS BLOCKS -->