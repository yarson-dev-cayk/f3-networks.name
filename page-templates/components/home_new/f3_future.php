<!--S7: SEE WHAT FUTURE-READY LOOKS LIKEW-->
<section class="f3-section f3-future section-devider" id="future">
    <div class="container-lg f3-future__content">
        <div class="row f3-supporting__header">
            <div class="col-12 col-md-6">
                <?php if($future_title = get_field('future_title')):?><h2 class="f3-section__heading text-white text-center text-md-start" data-aos="zoom-in"><?php echo $future_title;?></h2><?php endif;?>
                <?php if($future_subtitle = get_field('future_subtitle')):?><p class="f3-section__text text-white text-center text-md-start" data-aos="fade-right"><?php echo $future_subtitle;?></p><?php endif;?>
            </div> <!-- zoom-in | zoom-in-up | zoom-in-down | zoom-in-left | zoom-in-right -->

            <div class="col-12 col-md-6">
                <?php
                $future_btnlink1 = get_field('future_btnlink1') ?? [];
                $future_btnlink2 = get_field('future_btnlink2') ?? [];

                $futureBtnlinkT   = $future_btnlink1['title'] ?? '';
                $futureBtnlinkU   = $future_btnlink1['url'] ?? '';
                $futureBtnlinkTrg = $future_btnlink1['target'] ?? '_self';

                $futureBtn2linkT   = $future_btnlink2['title'] ?? '';
                $futureBtn2linkU   = $future_btnlink2['url'] ?? '';
                $futureBtn2linkTrg = $future_btnlink2['target'] ?? '_self';
                ?>
                <?php if( $future_btnlink1 || $future_btnlink2 ):?>
                    <div class="f3-hero__buttons text-center text-md-start mt-4" data-aos="fade-left">
                        <?php if($future_btnlink1) :?>
                            <a href="<?php echo $futureBtnlinkU;?>" class="f3-btn f3-btn--outline" target="<?php echo $futureBtnlinkTrg;?>"><?php echo $futureBtnlinkT;?></a>
                        <?php endif;?>

                        <?php if($future_btnlink2) :?>
                            <a href="<?php echo $futureBtn2linkU;?>" class="f3-btn f3-btn--outline" target="<?php echo $futureBtn2linkTrg;?>"><?php echo $futureBtn2linkT;?></a>
                        <?php endif;?>
                    </div> 
                <?php endif;?>
            </div>
        </div>
    </div>
</section>
<!--/S7: SEE WHAT FUTURE-READY LOOKS LIKEW-->