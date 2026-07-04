<!--S8: SUBMIT A REQUEST/CONTACT--> 
<section class="f3-section f3-contact section-devider" id="contact">

    <div class="f3-contact__lines"></div>

    <div class="container-lg">
        <div class="row">
            <!--Left: heading + text-->
            <div class="col-12 col-lg-4">
                <?php if($contact_title = get_field('contact_title')):?><h2 class="f3-section__heading f3__blue-light"><?php echo $contact_title;?></h2><?php endif;?>
                <?php if($contact_subtitle = get_field('contact_subtitle')):?><p class="f3-section__text f3__blue-light"><?php echo $contact_subtitle;?></p><?php endif;?>
            </div>

            <!--Center + Right: shared background wrapper-->
            <div class="col-12 col-lg-8 f3-form-wrapper mt-3 mt-lg-0">
                <!--Center: form-->
                <!-- <div id="contact_form">
                    <?php //echo do_shortcode('[gravityform id="1" title="false" ajax="true"]');?>
                </div> -->
                <div id="contact_form">
                    <?php if($form_shortcode = get_field('contact_form_shortcode')) :?><?php echo do_shortcode($form_shortcode);?><?php endif; ?>
                </div>

                <!--Right: how to reach us-->
                <div class="f3-reach">
                    <?php if($contact_form_title = get_field('contact_form_title')):?><h3 class="f3-reach__heading"><?php echo $contact_form_title;?></h3><?php endif;?>

                    <?php if (have_rows('contact_form_info')):?>
                        <ul class="f3-reach__list">

                            <?php $i = 0; ?>

                            <?php while (have_rows('contact_form_info')) : the_row(); ?>
                                <?php $icon = get_sub_field('contact_form_info_i'); $text = get_sub_field('contact_form_info_d'); $href = get_sub_field('contact_form_info_href');?>

                                <li class="f3-reach__item">
                                    <span class="f3-reach__icon"><img src="<?php echo esc_url($icon);?>" alt="<?php echo esc_attr($text);?>"></span>

                                    <?php if($i === 0):?>
                                        <span class="f3-reach__text"><?php echo esc_html($text);?></span>
                                    <?php else:?>
                                        <a href="<?php echo $href;?>" class="f3-reach__text"><span class="f3-reach__text"><?php echo esc_html($text);?></span></a>
                                    <?php endif; ?>
                                </li>
                                <?php $i++;?>
                            <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>
                    <!-- <ul class="f3-reach__list">
                        <li class="f3-reach__item">
                            <span class="f3-reach__icon">
                                <img src="<?php //echo get_stylesheet_directory_uri();?>/assets/images/file-form-icon.svg" alt="Submit a request through the contact form">
                            </span>
                            <span class="f3-reach__text">Submit a request through the contact form</span>
                        </li>
                        <li class="f3-reach__item">
                            <span class="f3-reach__icon">
                                <img src="<?php //echo get_stylesheet_directory_uri();?>/assets/images/phone-form-icon.svg" alt="Call our support line">
                            </span>
                            <a href="tel:844-390-9100" class="f3-reach__text"><span class="f3-reach__text">Call our support line</span></a>
                        </li>
                        <li class="f3-reach__item">
                            <span class="f3-reach__icon">
                                <img src="<?php //echo get_stylesheet_directory_uri();?>/assets/images/email-form-icon.svg" alt="Email our team directly">
                            </span>
                            <a href="mailto:CustomerService@F3Networks.ca" class="f3-reach__text"><span class="f3-reach__text">Email our team directly</span></a>
                        </li>
                    </ul> -->


                    <?php if($contact_form_note = get_field('contact_form_note')):?><p class="f3-reach__note"><?php echo $contact_form_note;?></p><?php endif;?>
                </div>

            </div><!--/.col-->
            <!--/Center + Right wrapper-->
        </div><!--/row--> 
    </div><!--/container--> 

    
</section>
<!--/S8:SUBMIT A REQUEST/CONTACT--> 