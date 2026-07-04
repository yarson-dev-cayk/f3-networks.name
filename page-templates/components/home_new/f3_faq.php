<!--S9: FAQ-->
<section class="f3-section f3-faq section-devider2" id="faq">
    <!--Eye/fiber burst decorative — right side-->
    <?php if($faq_bgimage = get_field('faq_bgimage')):?>
        <div class="f3-faq__eye" style="background-image: url('<?php echo esc_url($faq_bgimage);?>');"></div>
    <?php else:?>
        <div class="f3-faq__eye" style="background-image: url('<?php echo esc_url(get_stylesheet_directory_uri().'/assets/images/EYE.webp');?>');"></div>
    <?php endif;?>

    <div class="container-lg">
        <?php if($faq_title = get_field('faq_title')):?><h2 class="f3-section__heading f3__blue-light text-center mb-3 mb-md-5"><?php echo $faq_title;?></h2><?php endif;?>
        <?php if($faq_subtitle = get_field('faq_subtitle')):?><p class="f3-section__text f3__blue-light text-center mx-auto"><?php echo $faq_subtitle;?></p><?php endif;?>

        <div class="row justify-content-center mt-4">
            <div class="col-12 col-sm-12 col-md-12 col-lg-10">

                <div class="f3-accordion-bg">
                    <?php if(have_rows('faq_blocks')) : ?>
                        <div class="f3-accordion">
                            <?php $i = 0;?>
                            <?php while (have_rows('faq_blocks')) : the_row(); ?>
                                <?php $question = get_sub_field('faq_blocks_question'); $answer = get_sub_field('faq_blocks_answer');?>

                                <div class="f3-accordion__item <?php echo ($i === 0) ? 'is-open' : ''; ?>">
                                    <button class="f3-accordion__trigger" aria-expanded="false"><?php echo $question;?><span class="f3-accordion__icon">+</span></button>
                                    <div class="f3-accordion__body"><p><?php echo $answer;?></p></div>
                                </div>
                                <?php $i++;?>
                            <?php endwhile;?>
                        </div>
                    <?php endif;?>
                </div>
                <!-- <div class="f3-accordion-bg">
                    <div class="f3-accordion">
                        <div class="f3-accordion__item is-open">
                            <button class="f3-accordion__trigger" aria-expanded="false">
                                Who Is F3 Networks?
                                <span class="f3-accordion__icon">+</span>
                            </button>
                            <div class="f3-accordion__body">
                                <p>Answer content goes here.</p>
                            </div>
                        </div>
                        <div class="f3-accordion__item">
                            <button class="f3-accordion__trigger" aria-expanded="false">
                                What Does F3 Networks Do?
                                <span class="f3-accordion__icon">+</span>
                            </button>
                            <div class="f3-accordion__body">
                                <p>Answer content goes here.</p>
                            </div>
                        </div>
                        <div class="f3-accordion__item">
                            <button class="f3-accordion__trigger" aria-expanded="false">
                                Who Does F3 Networks Work With?
                                <span class="f3-accordion__icon">+</span>
                            </button>
                            <div class="f3-accordion__body">
                                <p>Answer content goes here.</p>
                            </div>
                        </div>
                        <div class="f3-accordion__item">
                            <button class="f3-accordion__trigger" aria-expanded="false">
                                What Solutions Does F3 Networks Offer?
                                <span class="f3-accordion__icon">+</span>
                            </button>
                            <div class="f3-accordion__body">
                                <p>Answer content goes here.</p>
                            </div>
                        </div>
                        <div class="f3-accordion__item">
                            <button class="f3-accordion__trigger" aria-expanded="false">
                                Where Is F3 Networks Active?
                                <span class="f3-accordion__icon">+</span>
                            </button>
                            <div class="f3-accordion__body">
                                <p>Answer content goes here.</p>
                            </div>
                        </div>
                        <div class="f3-accordion__item">
                            <button class="f3-accordion__trigger" aria-expanded="false">
                                How Can I Learn More About a Community Project?
                                <span class="f3-accordion__icon">+</span>
                            </button>
                            <div class="f3-accordion__body">
                                <p>Answer content goes here.</p>
                            </div>
                        </div>
                        <div class="f3-accordion__item">
                            <button class="f3-accordion__trigger" aria-expanded="false">
                                How Do I Contact F3 Networks or Submit a Request?
                                <span class="f3-accordion__icon">+</span>
                            </button>
                            <div class="f3-accordion__body">
                                <p>Answer content goes here.</p>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div><!--.col-->
        </div><!--.row-->
    </div><!--.container-->
</section>
<!--/S9: FAQ-->