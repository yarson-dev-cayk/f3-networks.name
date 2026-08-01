<!--S4: OFFERINGS: ONE PARTNER. THREE CORE SOLUTIONS-->
<section class="f3-section f3-solutions f3-offerings section-devider" id="offerings">

    <div class="container-lg">
        <div class="row f3-supporting__header">
            <div class="col-12 col-md-6">
                <?php if($offerings_title = get_field('offerings_title')):?><h2 class="f3-section__heading" data-aos="fade-right"><?php echo $offerings_title;?></h2><?php endif;?>
                <?php if($offerings_text = get_field('offerings_text')):?><p class="f3-section__text" data-aos="fade-up"><?php echo $offerings_text;?></p><?php endif;?>
            </div>
        </div>

        <div class="row g-4 mt-2">
            <?php if(have_rows('offerings_blocks')) :?> 
                <?php while(have_rows('offerings_blocks')) : the_row();?>
                    <?php
                    $offerings_blocks_title = get_sub_field('offerings_blocks_title');
                    $offerings_blocks_subtitle = get_sub_field('offerings_blocks_subtitle');
                    ?>
                    <div class="col-12 col-md-4 d-block d-md-flex">
                        <div class="f3-feature-box-wrap h-100 d-flex flex-column" data-aos="fade-up-left">
                            <img class="f3-feature-box__pill" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/color_thingy.svg" alt="green-icon">
                            <div class="f3-feature-box flex-grow-1 d-flex flex-column">
                                <?php if($offerings_blocks_title):?><h3 class="f3-feature-box__title text-uppercase mt-3"><?php echo esc_html($offerings_blocks_title);?></h3><?php endif;?>
                                <?php if($offerings_blocks_subtitle):?><p class="f3-feature-box__text mb-3"><?php echo esc_html($offerings_blocks_subtitle);?></p><?php endif;?>

                                <?php if( $offerings_blocks_btnlink = get_sub_field('offerings_blocks_btnlink') ?? [] ) :?>
                                    <?php $offerings_blocks_btnlink = get_sub_field('offerings_blocks_btnlink') ?? []; $offeringsBtnlinkT = $offerings_blocks_btnlink['title'] ?? ''; $offeringsBtnlinkU = $offerings_blocks_btnlink['url'] ?? ''; $offeringsBtnlinkTrg = $offerings_blocks_btnlink['target'] ?? '_self';?>
                                    <a href="<?php echo $offeringsBtnlinkU;?>" class="f3-btn f3-btn--dark-outline f3-btn--sm align-self-start mt-3 mt-auto" target="<?php echo $offeringsBtnlinkTrg;?>"><?php echo $offeringsBtnlinkT;?></a>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                <?php endwhile;?>
            <?php endif;?>
        </div><!--/.row-->

    </div> <!--/.container-->
</section>
<!--/S4:OFFERINGS: ONE PARTNER. THREE CORE SOLUTIONS-->