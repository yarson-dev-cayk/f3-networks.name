<!--S7: FONDATION: A STRONG FONDATION STARTS WHITHIN-->
<section class="f3-section f3-solutions f3-foundation" id="foundation">
    <!-- <div class="f3-cityscape f3-cityscape--dark" style="background-image: url('<?php echo esc_url(get_stylesheet_directory_uri().'/assets/images/cityscape-dark.webp');?>');"></div> -->

    <div class="container-lg">
        <div class="row f3-supporting__header">
            <div class="col-12 col-md-6">
                <?php if($foundation_title = get_field('foundation_title')):?><h2 class="f3-section__heading" data-aos="fade-up-right"><?php echo $foundation_title;?></h2><?php endif;?>
                <?php if($foundation_subtitle = get_field('foundation_subtitle')):?><p class="f3-section__text" data-aos="fade-up"><?php echo $foundation_subtitle;?></p><?php endif;?>
            </div>
        </div>

        <div class="row g-4 mt-2">
            <?php if(have_rows('foundation_blocks')) :?> 
                <?php while(have_rows('foundation_blocks')) : the_row();?>
                    <?php
                    $foundation_blocks_title = get_sub_field('foundation_blocks_title');
                    $foundation_blocks_subtitle = get_sub_field('foundation_blocks_subtitle');
                    ?>
                    <div class="col-12 col-md-4 d-block d-md-flex">
                        <div class="f3-feature-box-wrap h-100 d-flex flex-column" data-aos="fade-up-left">
                            <img class="f3-feature-box__pill" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/color_thingy.svg" alt="green-icon">
                            <div class="f3-feature-box flex-grow-1 d-flex flex-column">
                                <?php if($foundation_blocks_title):?><h3 class="f3-feature-box__title text-uppercase mt-3"><?php echo esc_html($foundation_blocks_title);?></h3><?php endif;?>
                                <?php if($foundation_blocks_subtitle):?><p class="f3-feature-box__text mb-3"><?php echo esc_html($foundation_blocks_subtitle);?></p><?php endif;?>
                            
                                <?php if( $foundation_blocks_btnlink = get_sub_field('foundation_blocks_btnlink') ?? [] ) :?>
                                    <?php $foundation_blocks_btnlink = get_sub_field('foundation_blocks_btnlink') ?? []; $foundationBtnlinkT = $foundation_blocks_btnlink['title'] ?? ''; $foundationBtnlinkU = $foundation_blocks_btnlink['url'] ?? ''; $foundationBtnlinkTrg = $foundation_blocks_btnlink['target'] ?? '_self';?>
                                    <a href="<?php echo $foundationBtnlinkU;?>" class="f3-btn f3-btn--dark-outline f3-btn--sm align-self-start mt-3 mt-auto" target="<?php echo $foundationBtnlinkTrg;?>"><?php echo $foundationBtnlinkT;?></a>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                <?php endwhile;?>
            <?php endif;?>
        </div><!--/.row-->

    </div> <!--/.container-->
</section>
<!--/S7: FONDATION: A STRONG FONDATION STARTS WHITHIN-->