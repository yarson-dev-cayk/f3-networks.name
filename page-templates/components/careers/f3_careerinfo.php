<!--S2: CAREERINFO-->
<section class="f3-section f3-supporting f3-careers" id="careers">
    <div class="container-lg">
        <div class="row align-items-center">
            <div class="col-12">
                <?php if($careers_title = get_field('careers_title')):?><h2 class="f3-section__heading f3-section__text--white" data-aos="fade-right"><?php echo $careers_title;?></h2><?php endif;?>
                <?php if($careers_text = get_field('careers_text')):?><div class="f3-section__text f3-section__text--white" data-aos="fade-up"><?php echo $careers_text;?></div><?php endif;?>
            </div><!--/.col-->
        </div><!--/.row-->

        <div class="row g-5 mt-2 align-items-center">
            <div class="col-12">
                <?php if($careers_opportunities_title = get_field('careers_opportunities_title')):?><h2 class="f3-section__heading f3-section__text--white" data-aos="fade-right"><?php echo $careers_opportunities_title;?></h2><?php endif;?>
                <?php if($careers_opportunities_text = get_field('careers_opportunities_text')):?><div class="f3-section__text f3-section__text--white" data-aos="fade-up"><?php echo $careers_opportunities_text;?></div><?php endif;?>
            </div><!--/.col-->

            <?php if(have_rows('opportunities_blocks')) :?> 
                <?php while(have_rows('opportunities_blocks')): the_row();?>
                    <?php
                    $opportunities_blocks_img = get_sub_field('opportunities_blocks_img');
                    $opportunities_blocks_title = get_sub_field('opportunities_blocks_title');
                    $opportunities_blocks_subtitle = get_sub_field('opportunities_blocks_subtitle');
                    $opportunities_blocks_download_doc = get_sub_field('opportunities_blocks_download_doc');
                    $opportunities_blocks_hr_email = get_sub_field('opportunities_blocks_hr_email');
                    ?>
                    <div class="col-12 col-md-6">
                        <article class="career-article">
                            <?php if($opportunities_blocks_img):?><img src="<?php echo esc_url($opportunities_blocks_img);?>" alt=""><?php endif;?>
                            <div class="career-article--content">
                                <?php if($opportunities_blocks_title):?><h4 class="text-uppercase f3-section__text--white mt-4"><?php echo esc_html($opportunities_blocks_title);?></h4><?php endif;?>
                                <?php if($opportunities_blocks_subtitle):?><p class="f3-section__text--white"><?php echo esc_html($opportunities_blocks_subtitle);?></p><?php endif;?>

                                <?php if($opportunities_blocks_download_doc):?>
                                    <a class="dwl--position-description" href="<?php echo esc_url($opportunities_blocks_download_doc);?>" target="_blank">Download <span class="jd">Job Description</span></a>
                                <?php endif;?>
                                <?php if($opportunities_blocks_hr_email):?>
                                    <a class="apply--position-description mt-3" href="mailto:<?php echo antispambot($opportunities_blocks_hr_email);?>?subject=F3%20Job%20Application" target="_blank">Apply Now</a>
                                <?php endif;?>
                            </div>
                        </article>
                    </div>
                <?php endwhile;?>
            <?php endif;?>
        </div><!--/.row-->

    </div><!--/.container-->
</section>
<!--/S2: CAREERINFO-->