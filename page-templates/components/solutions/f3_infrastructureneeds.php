<!--S4: INFRASTRUCTURE NEEDS-->
<section class="f3-section f3-preamble f3-infrastructureneeds section-devider2" id="infrastructure_needs"> 
    <div class="container-lg">
        <div class="row f3-supporting__header">
            <div class="col-12 col-md-6">
                <?php if($infrastructureneeds_title = get_field('infrastructureneeds_title')):?><h2 class="f3-section__heading text-white"><?php echo $infrastructureneeds_title;?></h2><?php endif;?> <!--data-aos="fade-up-right"-->
                <?php if($infrastructureneeds_subtitle = get_field('infrastructureneeds_subtitle')):?><p class="f3-section__text text-white"><?php echo $infrastructureneeds_subtitle;?></p><?php endif;?> <!--data-aos="fade-up"-->
            </div>

            <?php
            $infrastructureneeds_btnlink1 = get_field('infrastructureneeds_btnlink1') ?? [];
            $infrastructureneeds_btnlink2 = get_field('infrastructureneeds_btnlink2') ?? [];

            $infrastructureneedsBtnlinkT   = $infrastructureneeds_btnlink1['title'] ?? '';
            $infrastructureneedsBtnlinkU   = $infrastructureneeds_btnlink1['url'] ?? '';
            $infrastructureneedsBtnlinkTrg = $infrastructureneeds_btnlink1['target'] ?? '_self';

            $infrastructureneedsBtn2linkT   = $infrastructureneeds_btnlink2['title'] ?? '';
            $infrastructureneedsBtn2linkU   = $infrastructureneeds_btnlink2['url'] ?? '';
            $infrastructureneedsBtn2linkTrg = $infrastructureneeds_btnlink2['target'] ?? '_self';
            ?>
            <?php if( $infrastructureneeds_btnlink1 || $infrastructureneeds_btnlink2 ):?>
                <div class="col-12 col-md-6 d-flex mt-3 mt-md-0" data-aos="zoom-in-right" data-aos-delay="700">
                    <?php if($infrastructureneeds_btnlink1):?>
                        <a href="<?php echo $infrastructureneedsBtnlinkU;?>" class="f3-btn f3-btn--outline me-3" target="<?php echo $infrastructureneedsBtnlinkTrg;?>"><?php echo $infrastructureneedsBtnlinkT;?></a>
                    <?php endif;?>

                    <?php if($infrastructureneeds_btnlink2):?>
                        <a href="<?php echo $infrastructureneedsBtn2linkU;?>" class="f3-btn f3-btn--outline me-3" target="<?php echo $infrastructureneedsBtn2linkTrg;?>"><?php echo $infrastructureneedsBtn2linkT;?></a>
                    <?php endif;?>
                </div> 
            <?php endif;?>
        </div>
    </div><!--.container-->
</section>
<!--/S4: INFRASTRUCTURE NEEDS--->


