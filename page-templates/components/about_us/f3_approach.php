<!--S2: APPROACH: ONE PARTNER. ONE COORDINATED APPROACH--> 
<section class="f3-section f3-supporting f3-approach section-devider" id="approach">
    <div class="container-lg">

        <div class="row align-items-center">
            <!--Right: Title + Text-->
            <div class="col-12 col-lg-6 mb-4">
                <?php if($approach_title = get_field('approach_title')):?><h2 class="f3-section__heading" data-aos="fade-right"><?php echo $approach_title;?></h2><?php endif;?>
                <?php if($approach_text = get_field('approach_text')):?><div class="f3-section__text aos-init" data-aos="fade-up"><?php echo $approach_text;?></div><?php endif;?>
            </div> <!--/.col-->
            <!--Left: Title + Text-->

            <!-- Right: photos-->
            <div class="col-12 col-lg-5 text-center text-lg-start mb-4 mb-lg-0">
                <div class="f3-photo-pair">
                    <?php if($approach_image1 = get_field('approach_image1')): ?>
                        <img class="f3-photo-pair-1 me-3" src="<?php echo esc_url($approach_image1);?>" alt="Infrastructure work">
                    <?php else: ?>
                        <img class="f3-photo-pair-1 me-3" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/supporting-1.webp" alt="Infrastructure work">
                    <?php endif;?>

                    <?php if($approach_image2 = get_field('approach_image2')): ?>
                        <img class="f3-photo-pair-2" src="<?php echo esc_url($approach_image2);?>" alt="Infrastructure work">
                    <?php else: ?>
                        <img class="f3-photo-pair-2" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/supporting-2.webp" alt="Infrastructure work">
                    <?php endif;?>
                </div>
            </div>
            <!-- Right: photos-->

            <?php
            $approach_btnlink1 = get_field('approach_btnlink1') ?? [];
            $approach_btnlink2 = get_field('approach_btnlink2') ?? [];

            $approachBtnlinkT   = $approach_btnlink1['title'] ?? '';
            $approachBtnlinkU   = $approach_btnlink1['url'] ?? '';
            $approachBtnlinkTrg = $approach_btnlink1['target'] ?? '_self';

            $approachBtn2linkT   = $approach_btnlink2['title'] ?? '';
            $approachBtn2linkU   = $approach_btnlink2['url'] ?? '';
            $approachBtn2linkTrg = $approach_btnlink2['target'] ?? '_self';
            ?>
            <?php if( $approach_btnlink1 || $approach_btnlink2 ):?>
                <div class="f3-section__actions mt-0 text-center text-sm-start">
                    <?php if($approach_btnlink1) :?>
                        <a href="<?php echo $approachBtnlinkU;?>" class="f3-btn f3-btn--dark-outline me-2" target="<?php echo $approachBtnlinkTrg;?>"><?php echo $approachBtnlinkT;?></a> <!--f3-btn--dark-outline-->
                    <?php endif;?>

                    <?php if($approach_btnlink2) :?>
                        <a href="<?php echo $approachBtn2linkU;?>" class="f3-btn f3-btn--dark-outline" target="<?php echo $approachBtn2linkTrg;?>"><?php echo $approachBtn2linkT;?></a> <!--f3-btn--dark-outline-->
                    <?php endif;?>
                </div> 
            <?php endif;?>

        </div><!--/.row-->
    </div><!--/.container-->
</section>
<!--/S2: APPROACH: ONE PARTNER. ONE COORDINATED APPROACH-->