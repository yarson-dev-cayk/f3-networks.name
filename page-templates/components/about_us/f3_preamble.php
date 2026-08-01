<!--S9: PREAMBLE: LET'S TALK ABOUT YOUR INFRASTRUCTURE NEEDS-->
<section class="f3-section f3-solutions f3-preamble" id="preamble">
    <div class="f3-cityscape" style="background-image: url('<?php echo esc_url(get_stylesheet_directory_uri().'/assets/images/cityscape-dark-half.png');?>');"></div>

    <div class="container-lg">
        <div class="row f3-supporting__header">
            <div class="col-12 col-md-6">
                <?php if($preamble_title = get_field('preamble_title')):?><h2 class="f3-section__heading text-white" data-aos="fade-up-right"><?php echo $preamble_title;?></h2><?php endif;?>
                <?php if($preamble_subtitle = get_field('preamble_subtitle')):?><p class="f3-section__text text-white" data-aos="fade-up"><?php echo $preamble_subtitle;?></p><?php endif;?>
            </div>

            <?php
            $preamble_btnlink1 = get_field('preamble_btnlink1') ?? [];
            $preamble_btnlink2 = get_field('preamble_btnlink2') ?? [];

            $preambleBtnlinkT   = $preamble_btnlink1['title'] ?? '';
            $preambleBtnlinkU   = $preamble_btnlink1['url'] ?? '';
            $preambleBtnlinkTrg = $preamble_btnlink1['target'] ?? '_self';

            $preambleBtn2linkT   = $preamble_btnlink2['title'] ?? '';
            $preambleBtn2linkU   = $preamble_btnlink2['url'] ?? '';
            $preambleBtn2linkTrg = $preamble_btnlink2['target'] ?? '_self';
            ?>
            <?php if( $preamble_btnlink1 || $preamble_btnlink2 ):?>
                <div class="col-12 col-md-6 d-flex mt-3 mt-md-0" data-aos="zoom-in-right" data-aos-delay="700">
                    <?php if($preamble_btnlink1) :?>
                        <a href="<?php echo $preambleBtnlinkU;?>" class="f3-btn f3-btn--outline me-3" target="<?php echo $preambleBtnlinkTrg;?>"><?php echo $preambleBtnlinkT;?></a>
                    <?php endif;?>

                    <?php if($preamble_btnlink2) :?>
                        <a href="<?php echo $preambleBtn2linkU;?>" class="f3-btn f3-btn--outline me-3" target="<?php echo $preambleBtn2linkTrg;?>"><?php echo $preambleBtn2linkT;?></a>
                    <?php endif;?>
                </div> 
            <?php endif;?>
        </div>
    </div><!--.container-->
</section>
<!--/S9: PREAMBLE: LET"S TALK ABOUT UOYR INFRASTRUCTURE NEEDS-->