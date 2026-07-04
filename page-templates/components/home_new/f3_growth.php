<!--S3: DESIGNED FOR GROWTH AND CHANGE-->     
<section class="f3-section f3-growth section-devider" id="growth">
    <div class="container-lg">
        <div class="row f3-supporting__header">
            <div class="col-12 col-md-6">
                <?php if($growth_title = get_field('growth_title')):?><h2 class="f3-section__heading"><?php echo $growth_title;?></h2><?php endif;?>
                <?php if($growth_subtitle = get_field('growth_subtitle')):?><p class="f3-section__text"><?php echo $growth_subtitle;?></p><?php endif;?>
            </div>
        </div>

        <div class="row g-4 mt-2">
            <?php if(have_rows('growth_blocks')) :?>
                <?php while(have_rows('growth_blocks')) : the_row();?>
                    <?php
                        $growth_blocks_title = get_sub_field('growth_blocks_title');
                        $growth_blocks_subtitle = get_sub_field('growth_blocks_subtitle');
                    ?>
                    <div class="col-12 col-md-4">
                        <div class="f3-feature-box-wrap">
                            <img class="f3-feature-box__pill" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/color_thingy.svg" alt="Built For Long-Term Performance">
                            <div class="f3-feature-box">
                                <?php if($growth_blocks_title):?>
                                    <h3 class="f3-feature-box__title text-uppercase mt-3"><?php echo esc_html($growth_blocks_title);?></h3>
                                <?php endif;?>
                                <?php if($growth_blocks_subtitle):?>
                                    <p class="f3-feature-box__text"><?php echo esc_html($growth_blocks_subtitle);?></p>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                <?php endwhile;?>
            <?php endif;?>
        </div>

        <?php
        $growth_btnlink = get_field('growth_btnlink') ?? [];
        $growthBtnlinkT   = $growth_btnlink['title'] ?? '';
        $growthBtnlinkU   = $growth_btnlink['url'] ?? '';
        $growthBtnlinkTrg = $growth_btnlink['target'] ?? '_self';
        ?>
        <?php if ($growth_btnlink) :?>
            <div class="f3-hero__buttons">
                <a href="<?php echo esc_url($growthBtnlinkU);?>" class="f3-btn f3-btn--dark-outline" target="<?php echo esc_attr($growthBtnlinkTrg);?>"><?php echo esc_html($growthBtnlinkT);?></a>
            </div>
        <?php endif;?>
    </div>
</section>
<!--/S3: DESIGNED FOR GROWTH AND CHANGE-->  