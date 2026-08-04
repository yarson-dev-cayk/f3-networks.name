<!--S1: HERO-->
<section class="f3-section f3-hero" id="hero">
    <!-- Background layers(stacked via CSS) -->
    <?php if($hero_fb_bgimage = get_field('hero_fb_bgimage')): ?>
        <div class="f3-hero__bg-image" style="background-image: url('<?php echo esc_url($hero_fb_bgimage);?>');"></div>
    <?php else: ?>
        <div class="f3-hero__bg-image" style="background-image: url('<?php echo esc_url(get_stylesheet_directory_uri().'/assets/images/hero-main.webp');?>');"></div>
    <?php endif;?>

    <!-- Content -->
    <div class="container-lg f3-hero__content mt-5">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-10 col-lg-9 col-xl-6">
                <?php if($hero_fb_title = get_field('hero_fb_title')): ?><h1 class="f3-hero__heading"><?php echo $hero_fb_title;?></h1><?php endif;?>
                <?php if($hero_fb_subtitle = get_field('hero_fb_subtitle')): ?><p class="f3-hero__subtext"><?php echo $hero_fb_subtitle;?></p><?php endif;?>
                
                <?php
                $hero_fb_btnlink = get_field('hero_fb_btnlink') ?? [];
                $hero_fb_btnlink2 = get_field('hero_fb_btnlink2') ?? [];

                $heroBtnlinkT   = $hero_fb_btnlink['title'] ?? '';
                $heroBtnlinkU   = $hero_fb_btnlink['url'] ?? '';
                $heroBtnlinkTrg = $hero_fb_btnlink['target'] ?? '_self';

                $heroBtnlink2T   = $hero_fb_btnlink2['title'] ?? '';
                $heroBtnlink2U   = $hero_fb_btnlink2['url'] ?? '';
                $heroBtnlink2Trg = $hero_fb_btnlink2['target'] ?? '_self';
                ?>
                <?php if( $hero_fb_btnlink || $hero_fb_btnlink2 ):?>
                    <div class="f3-hero__buttons">
                        <?php if($hero_fb_btnlink) :?>
                            <a href="<?php echo $heroBtnlinkU;?>" class="f3-btn f3-btn--outline" target="<?php echo $heroBtnlinkTrg;?>"><?php echo $heroBtnlinkT;?></a>
                        <?php endif;?>

                        <?php if($hero_fb_btnlink2) :?>
                            <a href="<?php echo $heroBtnlink2U;?>" class="f3-btn f3-btn--outline" target="<?php echo $heroBtnlink2Trg;?>"><?php echo $heroBtnlink2T;?></a>
                        <?php endif;?>
                    </div> 
                <?php endif;?>

            </div><!--/.col-->
        </div><!--/.row-->
    </div><!--/.container-->
</section>
<!--/S1: HERO-->