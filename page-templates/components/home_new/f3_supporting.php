<!--S2: SUPPORTING MODERN INFRASTRUCTURE NEEDS-->
<section class="f3-section f3-supporting" id="supporting">
    <div class="container-lg">

        <!-- Full-width heading + text row -->
        <div class="row f3-supporting__header">
            <div class="col-12 col-md-6">
                <?php if($supporting_title= get_field('supporting_title')):?><h2 class="f3-section__heading"><?php echo $supporting_title;?></h2><?php endif;?>
                <?php if($supporting_subtitle = get_field('supporting_subtitle')):?><p class="f3-section__text"><?php echo $supporting_subtitle;?></p><?php endif;?>
            </div>
        </div>

        <!-- Content row: photos left, feature boxes right -->
        <div class="row align-items-center">
            <!-- Left: photos + button -->
            <div class="offset-0 offset-lg-1 col-12 col-lg-4 text-center text-lg-start f3-supporting__left mb-4 mb-lg-0">
                <div class="f3-photo-pair">
                    <?php if($supporting_image1 = get_field('supporting_image1')): ?>
                        <img class="f3-photo-pair-1 me-2" src="<?php echo esc_url($supporting_image1);?>" alt="Infrastructure work">
                    <?php else: ?>
                        <img class="f3-photo-pair-1 me-2" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/supporting-1.webp" alt="Infrastructure work">
                    <?php endif;?>

                    <?php if($supporting_image2 = get_field('supporting_image2')): ?>
                        <img class="f3-photo-pair-2" src="<?php echo esc_url($supporting_image2);?>" alt="Network infrastructure">
                    <?php else: ?>
                        <img class="f3-photo-pair-2" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/supporting-2.webp" alt="Network infrastructure">
                    <?php endif;?>
                </div>
            </div>

            <!--Right: feature boxes with overhanging pill-->
            <div class="col-12 col-lg-7">
                <?php if(have_rows('supporting_blocks')) :?>
                    <?php $i = 0;?>
                    <?php while(have_rows('supporting_blocks')) : the_row();?>
                        <?php
                        $supporting_blocks_title = get_sub_field('supporting_blocks_title');
                        $supporting_blocks_subtitle = get_sub_field('supporting_blocks_subtitle');
                        ?>
                        <div class="f3-feature-box-wrap <?php echo ($i === 1) ? 'mt-3' : '';?>">
                            <img class="f3-feature-box__pill" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/color_thingy.svg" alt="For Communities">
                            <div class="f3-feature-box">
                                <?php if($supporting_blocks_title):?>
                                    <h3 class="f3-feature-box__title text-uppercase mt-3"><?php echo esc_html($supporting_blocks_title);?></h3>
                                <?php endif;?>
                                <?php if($supporting_blocks_subtitle):?>
                                    <p class="f3-feature-box__text"><?php echo esc_html($supporting_blocks_subtitle);?></p>
                                <?php endif;?>
                            </div>
                        </div>
                        <?php $i++;?>
                    <?php endwhile;?>
                <?php endif;?>
            </div> <!--/.col-->
            <!--Right: feature boxes with overhanging pill-->

            <?php
            $supporting_btnlink = get_field('supporting_btnlink') ?? [];
            $supportingBtnlinkT   = $supporting_btnlink['title'] ?? '';
            $supportingBtnlinkU   = $supporting_btnlink['url'] ?? '';
            $supportingBtnlinkTrg = $supporting_btnlink['target'] ?? '_self';
            ?>
            <?php if($supporting_btnlink) :?>
                <div class="f3-section__actions mt-4 text-center">
                    <a href="<?php echo esc_url($supportingBtnlinkU);?>" class="f3-btn f3-btn--dark-outline" target="<?php echo esc_attr($supportingBtnlinkTrg);?>"><?php echo esc_html($supportingBtnlinkT);?></a>
                </div>
            <?php endif; ?>

        </div><!--/.row-->
    </div><!--/.container-->
</section>
<!--/S2: SUPPORTING MODERN INFRASTRUCTURE NEEDS-->