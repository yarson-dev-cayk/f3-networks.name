<!--S5:EXPERIENCE-->
<section class="f3-section f3-experience">
    <div class="container-lg">
        <div class="row f3-supporting__header">
            <div class="col-12 col-md-6">
                <?php if($experience_title = get_field('experience_title')):?><h2 class="f3-section__heading f3__light" data-aos="fade-right"><?php echo $experience_title;?></h2><?php endif;?>
                <?php if($experience_subtitle = get_field('experience_subtitle')):?><p class="f3-section__text f3__light" data-aos="fade-up"><?php echo $experience_subtitle;?></p><?php endif;?>
            </div>
        </div>

        <div class="row g-4 mt-2">
            <?php if(have_rows('experience_blocks')) :?>
                <?php while(have_rows('experience_blocks')) : the_row();?>
                    <?php
                        $experience_blocks_title = get_sub_field('experience_blocks_title');
                        $experience_blocks_subtitle = get_sub_field('experience_blocks_subtitle');
                    ?>
                    <div class="col-12 col-md-4 d-block d-md-flex">
                        <div class="f3-feature-box-wrap h-100 d-flex flex-column" data-aos="fade-left">
                            <img class="f3-feature-box__pill" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/color_thingy.svg" alt="Experienced Leadership">
                            <div class="f3-feature-box flex-grow-1 d-flex flex-column">
                                <?php if($experience_blocks_title):?><h3 class="f3-feature-box__title f3__light mt-3"><?php echo esc_html($experience_blocks_title);?></h3><?php endif;?>
                                <?php if($experience_blocks_subtitle):?><p class="f3-feature-box__text f3__light"><?php echo esc_html($experience_blocks_subtitle);?></p><?php endif;?>
                            </div>
                        </div>
                    </div>
                <?php endwhile;?>
            <?php endif;?>

            <?php
            $experience_btnlink1 = get_field('experience_btnlink1') ?? [];
            $experience_btnlink2 = get_field('experience_btnlink2') ?? [];

            $experienceBtnlinkT   = $experience_btnlink1['title'] ?? '';
            $experienceBtnlinkU   = $experience_btnlink1['url'] ?? '';
            $experienceBtnlinkTrg = $experience_btnlink1['target'] ?? '_self';

            $experienceBtn2linkT   = $experience_btnlink2['title'] ?? '';
            $experienceBtn2linkU   = $experience_btnlink2['url'] ?? '';
            $experienceBtn2linkTrg = $experience_btnlink2['target'] ?? '_self';
            ?>
            <?php if( $experience_btnlink1 || $experience_btnlink2 ):?>
                <div class="f3-section__actions mt-4 text-center text-sm-start">
                    <?php if($experience_btnlink1) :?>
                        <a href="<?php echo $experienceBtnlinkU;?>" class="f3-btn f3-btn--outline me-2" target="<?php echo $experienceBtnlinkTrg;?>"><?php echo $experienceBtnlinkT;?></a>
                    <?php endif;?>

                    <?php if($experience_btnlink2) :?>
                        <a href="<?php echo $experienceBtn2linkU;?>" class="f3-btn f3-btn--outline" target="<?php echo $experienceBtn2linkTrg;?>"><?php echo $experienceBtn2linkT;?></a>
                    <?php endif;?>
                </div> 
            <?php endif;?>











        </div> <!--/.row--> 
    </div>
</section>
<!--/S5:EXPERIENCE-->