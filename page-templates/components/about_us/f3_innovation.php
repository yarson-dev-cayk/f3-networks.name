<!--S8: INNOVATION: LOOKING AHEAD-->
<section  class="f3-section f3-solutions f3-innovation" id="innovation">
    <!--Eye/fiber burst decorative — right side-->
    <?php if($innovation_bgimage = get_field('innovation_bgimage')):?>
        <div class="f3-blue__eye" style="background-image: url('<?php echo esc_url($innovation_bgimage);?>');"></div>
    <?php else:?>
        <div class="f3-blue__eye" style="background-image: url('<?php echo esc_url(get_stylesheet_directory_uri().'/assets/images/EYE-blue.webp');?>');"></div>
    <?php endif;?>

    <div class="container-lg" style="position:relative; opacity:1; z-index:16;">
        <div class="row f3-supporting__header">
            <div class="col-12 col-md-6">
                <?php if($innovation_title = get_field('innovation_title')):?><h2 class="f3-section__heading" data-aos="fade-up-right"><?php echo $innovation_title;?></h2><?php endif;?>
                <?php if($innovation_subtitle = get_field('innovation_subtitle')):?><div class="f3-section__text" data-aos="fade-up"><?php echo $innovation_subtitle;?></div><?php endif;?>
            </div>
        </div>
    </div><!--.container-->
</section>
<!--/S8: INNOVATION: LOOKING AHEAD-->