<!--S8: SUBMIT A REQUEST/CONTACT--> 
<section class="f3-section f3-contact section-devider" id="contact">

    <div class="f3-contact__lines"></div>

    <div class="container-lg">
        <div class="row">

        <!--Left: heading + text-->
        <div class="col-12 col-lg-4">
            <h2 class="f3-section__heading f3__blue-light">Submit A Request</h2>
            <p class="f3-section__text f3__blue-light">
                Have a question about a project, active work in your area, or general
                support? Submit a request and the right team will follow up with more
                information.
            </p>
        </div>

        <!--Center + Right: shared background wrapper-->
        <div class="col-12 col-lg-8 f3-form-wrapper mt-3 mt-lg-0">

            <!--Center: form-->
            <div id="contact_form">
                <?php echo do_shortcode('[gravityform id="1" title="false" ajax="true"]');?>
            </div>

            <!--Right: how to reach us-->
            <div class="f3-reach">
                <h3 class="f3-reach__heading">How To Reach Us</h3>
                <ul class="f3-reach__list">
                    <li class="f3-reach__item">
                        <span class="f3-reach__icon">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/file-form-icon.svg" alt="Submit a request through the contact form">
                        </span>
                        <span class="f3-reach__text">Submit a request through the contact form</span>
                    </li>
                    <li class="f3-reach__item">
                        <span class="f3-reach__icon">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/phone-form-icon.svg" alt="Call our support line">
                        </span>
                        <a href="tel:844-390-9100" class="f3-reach__text"><span class="f3-reach__text">Call our support line</span></a>
                    </li>
                    <li class="f3-reach__item">
                        <span class="f3-reach__icon">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/email-form-icon.svg" alt="Email our team directly">
                        </span>
                        <a href="mailto:CustomerService@F3Networks.ca" class="f3-reach__text"><span class="f3-reach__text">Email our team directly</span></a>
                    </li>
                </ul>
                <p class="f3-reach__note">
                    Note: Once we receive your message, our team will follow up within 2 business days.
                </p>
            </div>

        </div>
        <!--/Center + Right wrapper-->
           
        </div><!--/row--> 
    </div><!--/container--> 

    
</section>
<!--/S8:SUBMIT A REQUEST/CONTACT--> 