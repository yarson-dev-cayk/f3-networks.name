<!--S5: METHODOLOGY: THE F3 INTEGRADED APPROACH-->
<section class="f3-section f3-solutions f3-methodology section-devider" id="methodology">
    <!-- Dark cityscape growing from bottom — transitions to S7 dark zone -->
     <div class="f3-cityscape f3-cityscape--dark" style="background-image: url('<?php echo esc_url(get_stylesheet_directory_uri().'/assets/images/cityscape-dark2.webp');?>');"></div>

    <div class="container-lg">
        <div class="row f3-supporting__header">
            <div class="col-12 col-md-6">
                <?php if($methodology_title = get_field('methodology_title')):?><h2 class="f3-section__heading" data-aos="fade-up-right"><?php echo $methodology_title;?></h2><?php endif;?>
                <?php if($methodology_subtitle = get_field('methodology_subtitle')):?><div class="f3-section__text" data-aos="fade-up"><?php echo $methodology_subtitle;?></div><?php endif;?>
            </div>
        </div>

        <div class="row g-4 mt-2">
            <?php if(have_rows('methodology_blocks')) :?> 
                <?php while(have_rows('methodology_blocks')) : the_row();?>
                    <?php
                    $methodology_blocks_title = get_sub_field('methodology_blocks_title');
                    $methodology_blocks_subtitle = get_sub_field('methodology_blocks_subtitle');
                    ?>
                    <div class="col-12 col-md-4 d-block d-md-flex">
                        <div class="f3-feature-box-wrap h-100 d-flex flex-column" data-aos="fade-up-left">
                            <img class="f3-feature-box__pill" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/color_thingy.svg" alt="green-icon">
                            <div class="f3-feature-box flex-grow-1 d-flex flex-column">
                                <?php if($methodology_blocks_title):?><h3 class="f3-feature-box__title text-uppercase mt-3"><?php echo esc_html($methodology_blocks_title);?></h3><?php endif;?>
                                <?php if($methodology_blocks_subtitle):?><p class="f3-feature-box__text mb-3"><?php echo esc_html($methodology_blocks_subtitle);?></p><?php endif;?>
                            </div>
                        </div>
                    </div>
                <?php endwhile;?>
            <?php endif;?>
        </div><!--/.row-->

        <?php
        $methodology_btnlink1 = get_field('methodology_btnlink1') ?? [];
        $methodology_btnlink2 = get_field('methodology_btnlink2') ?? [];

        $methodologyBtnlinkT   = $methodology_btnlink1['title'] ?? '';
        $methodologyBtnlinkU   = $methodology_btnlink1['url'] ?? '';
        $methodologyBtnlinkTrg = $methodology_btnlink1['target'] ?? '_self';

        $methodologyBtn2linkT   = $methodology_btnlink2['title'] ?? '';
        $methodologyBtn2linkU   = $methodology_btnlink2['url'] ?? '';
        $methodologyBtn2linkTrg = $methodology_btnlink2['target'] ?? '_self';
        ?>
        <?php if( $methodology_btnlink1 || $methodology_btnlink2 ):?>
            <div class="f3-section__actions mt-4 text-center text-sm-start" data-aos="zoom-in-right" data-aos-delay="500">
                <?php if($methodology_btnlink1) :?>
                    <a href="<?php echo $methodologyBtnlinkU;?>" class="f3-btn f3-btn--dark-outline me-2" target="<?php echo $methodologyBtnlinkTrg;?>"><?php echo $methodologyBtnlinkT;?></a>
                <?php endif;?>

                <?php if($methodology_btnlink2) :?>
                    <a href="<?php echo $methodologyBtn2linkU;?>" class="f3-btn f3-btn--dark-outline" target="<?php echo $methodologyBtn2linkTrg;?>"><?php echo $methodologyBtn2linkT;?></a>
                <?php endif;?>
            </div> 
        <?php endif;?>

    </div> <!--/.container-->
</section>
<!--/S5: METHODOLOGY: THE F3 INTEGRADED APPROACH--->