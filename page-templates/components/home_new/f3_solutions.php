<!--S6:SOLUTIONS FOR EVOLVING DIGITAL NEEDS-->
<section class="f3-section f3-solutions section-devider" id="solutions">
    <!-- Dark cityscape growing from bottom — transitions to S7 dark zone -->
    <div class="f3-cityscape f3-cityscape--dark" style="background-image: url('<?php echo esc_url(get_stylesheet_directory_uri().'/assets/images/cityscape-dark.webp');?>');"></div>

    <div class="container-lg">
        <div class="row f3-supporting__header">
            <div class="col-12 col-md-6">
                <?php if($solutions_title = get_field('solutions_title')):?><h2 class="f3-section__heading" data-aos="fade-up-right"><?php echo $solutions_title;?></h2><?php endif;?>
                <?php if($solutions_subtitle = get_field('solutions_subtitle')):?><p class="f3-section__text" data-aos="fade-up"><?php echo $solutions_subtitle;?></p><?php endif;?>
            </div>
        </div>

        <div class="row g-4 mt-2">
            <?php if(have_rows('solutions_blocks')) :?>
                <?php while(have_rows('solutions_blocks')) : the_row();?>
                    <?php
                    $solutions_blocks_title = get_sub_field('solutions_blocks_title');
                    $solutions_blocks_subtitle = get_sub_field('solutions_blocks_subtitle');
                    ?>
                    <div class="col-12 col-md-4 d-block d-md-flex">
                        <div class="f3-feature-box-wrap h-100 d-flex flex-column" data-aos="fade-up-left">
                            <img class="f3-feature-box__pill" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/color_thingy.svg" alt="green-icon">
                            <div class="f3-feature-box flex-grow-1 d-flex flex-column">
                                <?php if($solutions_blocks_title):?><h3 class="f3-feature-box__title text-uppercase mt-3"><?php echo esc_html($solutions_blocks_title);?></h3><?php endif;?>
                                <?php if($solutions_blocks_subtitle):?><p class="f3-feature-box__text mb-3"><?php echo esc_html($solutions_blocks_subtitle);?></p><?php endif;?>

                                <?php if( $solutions_blocks_btnlink = get_sub_field('solutions_blocks_btnlink') ?? [] ) :?>
                                    <?php $solutions_blocks_btnlink = get_sub_field('solutions_blocks_btnlink') ?? []; $solutionsBtnlinkT = $solutions_blocks_btnlink['title'] ?? ''; $solutionsBtnlinkU = $solutions_blocks_btnlink['url'] ?? ''; $solutionsBtnlinkTrg = $solutions_blocks_btnlink['target'] ?? '_self';?>
                                    <a href="<?php echo $solutionsBtnlinkU;?>" class="f3-btn f3-btn--dark-outline f3-btn--sm align-self-start mt-3 mt-auto" target="<?php echo $solutionsBtnlinkTrg;?>"><?php echo $solutionsBtnlinkT;?></a>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                <?php endwhile;?>
            <?php endif;?>
        </div><!--/.row-->

        <?php if( get_field('solutions_btnlink') ?? [] ):?>
            <div class="f3-section__actions mt-4 text-center">
                <?php $solutions_btnlink = get_field('solutions_btnlink') ?? []; $solutionsBtnlinkT = $solutions_btnlink['title'] ?? ''; $solutionsBtnlinkU = $solutions_btnlink['url'] ?? ''; $solutionsBtnlinkTrg = $solutions_btnlink['target'] ?? '_self';?>
                <a href="<?php echo $solutionsBtnlinkU;?>" class="f3-btn f3-btn--dark-outline" target="<?php echo $solutionsBtnlinkTrg;?>"><?php echo $solutionsBtnlinkT;?></a>
            </div>
        <?php endif;?>

    </div> <!--/.container-->
</section>
<!--/S6:SOLUTIONS FOR EVOLVING DIGITAL NEEDS-->