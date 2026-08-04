<!--S1: CONTACT-INFO-->
<?php
$f3_address = get_field('f3_address','option');
$f3_phone1 = get_field('f3_phone1','option'); $f3_phone2 = get_field('f3_phone2','option'); $f3_phone3 = get_field('f3_phone3','option');
$f3_email = get_field('f3_email','option');
$f3_linkedin = get_field('f3_linkedin','option');
?>
<section class="f3-section f3-solutions f3-contact-info section-devider2" id="contac_main_info">

    <div class="container-lg">
        <div class="row f3-supporting__header">
            <div class="col-12 col-md-6">
                <?php if($contactinfo_title = get_field('contactinfo_title')):?><h2 class="f3-section__heading" data-aos="fade-up-right"><?php echo $contactinfo_title;?></h2><?php endif;?>
                <?php if($contactinfo_subtitle = get_field('contactinfo_subtitle')):?><div class="f3-section__text" data-aos="fade-up"><?php echo $contactinfo_subtitle;?></div><?php endif;?>
            </div>
        </div>

        <div class="row g-4 mt-2">
            <?php if(have_rows('contactinfo_blocks')):?> 
                 <?php $i = 0;?>
                <?php while( have_rows('contactinfo_blocks') ) : the_row();?>
                    <?php
                    $contactinfo_blocks_title = get_sub_field('contactinfo_blocks_title');
                    $contactinfo_blocks_text = get_sub_field('contactinfo_blocks_text');
                    ?>
                    <div class="col-12 col-md-4 d-block">
                        <div class="f3-feature-box-wrap h-100 d-flex flex-column" data-aos="fade-up-left">
                            <img class="f3-feature-box__pill" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/color_thingy.svg" alt="green-icon">
                            <div class="f3-feature-box flex-grow-1 d-flex flex-column">
                                <?php if($contactinfo_blocks_title):?><h3 class="f3-feature-box__title text-uppercase mt-3"><?php echo esc_html($contactinfo_blocks_title);?></h3><?php endif;?>
                                <?php if($i === 1 && $f3_phone1):?><a class="f3-feature-box__text text-decoration-none contact-info-phone mb-1 " href="tel:<?php echo get_numerics($f3_phone1);?>"><?php echo esc_html($f3_phone1);?></a><?php endif;?>
                                <?php if($i === 2 && $f3_linkedin):?><a class="f3-feature-box__text text-decoration-none contact-info-social mb-1" href="<?php echo esc_html($f3_linkedin);?>" target="_blank">linkedin</a><?php endif;?>
                                <?php if($contactinfo_blocks_text):?><p class="f3-feature-box__text mb-1"><?php echo esc_html($contactinfo_blocks_text);?></p><?php endif;?>
                                <?php if($i === 0 && $f3_address):?><p class="f3-feature-box__text mb-1"><?php echo esc_html($f3_address);?></p><?php endif;?>
                            </div>
                        </div>
                    </div>
                    <?php $i++;?>
                <?php endwhile;?>
            <?php endif;?>
        </div><!--/.row-->
    </div> <!--/.container-->
</section>
<!--/S1: CONTACT-INFO-->