<!--S3: MISSION: WHY F3 NETWORKS EXISTS-->
<section class="f3-section f3-supporting f3-mission" id="mission">
    <div class="container-lg">

        <!-- Content row: photos left, feature boxes right -->
        <div class="row align-items-center">
            <!--Right: Title + Text-->
            <div class="col-12 col-lg-6 mb-2">
                <?php if($mission_title = get_field('mission_title')):?><h2 class="f3-section__heading" data-aos="fade-right"><?php echo $mission_title;?></h2><?php endif;?>
                <?php if($mission_text = get_field('mission_text')):?><div class="f3-section__text" data-aos="fade-up"><?php echo $mission_text;?></div><?php endif;?>
            </div> <!--/.col-->
            <!--Left: Title + Text-->

            <!--Right: feature boxes with overhanging pill-->
            <div class="col-12 col-lg-6">
                <?php if(have_rows('mission_blocks')) :?>
                    <?php $i = 0;?>
                    <?php while(have_rows('mission_blocks')) : the_row();?>
                        <?php
                        $mission_blocks_title = get_sub_field('mission_blocks_title');
                        ?>
                        <div class="f3-feature-box-wrap <?php echo ($i !== 0) ? 'mt-3' : '';?>" data-aos="zoom-out-up">
                            <img class="f3-feature-box__pill" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/color_thingy.svg" alt="For Communities">
                            <div class="f3-feature-box">
                                <?php if($mission_blocks_title):?><h3 class="f3-feature-box__title text-uppercase mt-3"><?php echo esc_html($mission_blocks_title);?></h3><?php endif;?>
                            </div>
                        </div>
                        <?php $i++;?>
                    <?php endwhile;?>
                <?php endif;?>
            </div> <!--/.col-->
            <!--Right: feature boxes with overhanging pill-->

            <?php
            $mission_btnlink1 = get_field('mission_btnlink1') ?? [];
            $mission_btnlink2 = get_field('mission_btnlink2') ?? [];

            $missionBtnlinkT   = $mission_btnlink1['title'] ?? '';
            $missionBtnlinkU   = $mission_btnlink1['url'] ?? '';
            $missionBtnlinkTrg = $mission_btnlink1['target'] ?? '_self';

            $missionBtn2linkT   = $mission_btnlink2['title'] ?? '';
            $missionBtn2linkU   = $mission_btnlink2['url'] ?? '';
            $missionBtn2linkTrg = $mission_btnlink2['target'] ?? '_self';
            ?>
            <?php if( $mission_btnlink1 || $mission_btnlink2 ):?>
                <div class="f3-section__actions mt-3 mt-lg-0 text-center text-sm-start" data-aos="zoom-in-right" data-aos-delay="500">
                    <?php if($mission_btnlink1) :?>
                        <a href="<?php echo $missionBtnlinkU;?>" class="f3-btn f3-btn--dark-outline me-2" target="<?php echo $missionBtnlinkTrg;?>"><?php echo $missionBtnlinkT;?></a>
                    <?php endif;?>
                    <?php if($mission_btnlink2) :?>
                        <a href="<?php echo $missionBtn2linkU;?>" class="f3-btn f3-btn--dark-outline" target="<?php echo $missionBtn2linkTrg;?>"><?php echo $missionBtn2linkT;?></a>
                    <?php endif;?>
                </div> 
            <?php endif;?>

        </div><!--/.row-->
    </div><!--/.container-->
</section>
<!--/S3: MISSION: WHY F3 NETWORKS EXISTS-->