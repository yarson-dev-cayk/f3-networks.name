<!--S6: LEADERSHIP-TEAM: MEET THE LEADERSHIP TEAM-->
<section class="f3-section f3-solutions f3-leadershipteam" id="leadership_team">
    <!-- Dark cityscape growing from bottom — transitions to S7 dark zone -->
    
    <div class="container-lg">
        <div class="row f3-supporting__header">
            <div class="col-12 col-md-10">
                <?php if($leadershipteam_title = get_field('leadershipteam_title')):?><h2 class="f3-section__heading text-white" data-aos="fade-up-right"><?php echo $leadershipteam_title;?></h2><?php endif;?>
                <?php if($leadershipteam_subtitle = get_field('leadershipteam_subtitle')):?><p class="f3-section__text text-white" data-aos="fade-up"><?php echo $leadershipteam_subtitle;?></p><?php endif;?>
            </div>
        </div>

        <div class="row g-4 mt-2">
            <?php if(have_rows('solutions_blocks')) :?>
                <?php while(have_rows('solutions_blocks')) : the_row();?>
                    <?php
                    $solutions_blocks_title = get_sub_field('solutions_blocks_title');
                    $solutions_blocks_subtitle = get_sub_field('solutions_blocks_subtitle');
                    ?>
                    <div class="col-12 col-md-4 d-block d-md-flex">
                        <div class="f3-feature-box-wrap h-100 d-flex flex-column" data-aos="fade-up-left">
                            <img class="f3-feature-box__pill" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/color_thingy.svg" alt="green-icon">
                            <div class="f3-feature-box flex-grow-1 d-flex flex-column">
                                <?php if($solutions_blocks_title):?><h3 class="f3-feature-box__title text-uppercase mt-3"><?php echo esc_html($solutions_blocks_title);?></h3><?php endif;?>
                                <?php if($solutions_blocks_subtitle):?><p class="f3-feature-box__text mb-3"><?php echo esc_html($solutions_blocks_subtitle);?></p><?php endif;?>

                                <?php if( $solutions_blocks_btnlink = get_sub_field('solutions_blocks_btnlink') ?? [] ) :?>
                                    <?php $solutions_blocks_btnlink = get_sub_field('solutions_blocks_btnlink') ?? []; $solutionsBtnlinkT = $solutions_blocks_btnlink['title'] ?? ''; $solutionsBtnlinkU = $solutions_blocks_btnlink['url'] ?? ''; $solutionsBtnlinkTrg = $solutions_blocks_btnlink['target'] ?? '_self';?>
                                    <a href="<?php echo $solutionsBtnlinkU;?>" class="f3-btn f3-btn--dark-outline f3-btn--sm align-self-start mt-3 mt-auto" target="<?php echo $solutionsBtnlinkTrg;?>"><?php echo $solutionsBtnlinkT;?></a>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                <?php endwhile;?>
            <?php endif;?>
        </div><!--/.row-->


        <div class="swiper f3-team-swiper d-none">
            <div class="row g-4 g-lg-5 f3-team-grid swiper-wrapper">
                <div class="col-6 col-md-4 col-lg-3 swiper-slide">
                    <div class="f3-project-card">
                        <div class="f3-project-card__img-wrap"><img src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/images/semeniuk.webp');?>" alt="????????????"></div>
                        <div class="f3-project-card__body">
                            <img class="f3-project-card__accent" src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/images/color-thingy2.webp');?>" alt="green-icon">
            
                            <h3 class="f3-team-card__name">Robert Toal</h3>
                            <p class="f3-team-card__title mb-2">Director & CEO</p>
                            <a href="#" class="f3-btn f3-btn--dark-outline f3-team-card__linkedin">LinkedIn</a>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg-3 swiper-slide">
                    <div class="f3-project-card">
                        <div class="f3-project-card__img-wrap"><img src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/images/semeniuk.webp');?>" alt="????????????"></div>
                        <div class="f3-project-card__body">
                            <img class="f3-project-card__accent" src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/images/color-thingy2.webp');?>" alt="green-icon">
            
                            <h3 class="f3-team-card__name">Robert Toal</h3>
                            <p class="f3-team-card__title mb-2">Director, Planning, Engineering & good guy</p>
                            <a href="#" class="f3-btn f3-btn--dark-outline f3-team-card__linkedin">LinkedIn</a>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg-3 swiper-slide">
                    <div class="f3-project-card">
                        <div class="f3-project-card__img-wrap"><img src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/images/semeniuk.webp');?>" alt="????????????"></div>
                        <div class="f3-project-card__body">
                            <img class="f3-project-card__accent" src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/images/color-thingy2.webp');?>" alt="green-icon">
            
                            <h3 class="f3-team-card__name">Robert Toal</h3>
                            <p class="f3-team-card__title mb-2">Director, Planning, Engineering</p>
                            <a href="#" class="f3-btn f3-btn--dark-outline f3-team-card__linkedin">LinkedIn</a>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg-3 swiper-slide">
                    <div class="f3-project-card">
                        <div class="f3-project-card__img-wrap"><img src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/images/semeniuk.webp');?>" alt="????????????"></div>
                        <div class="f3-project-card__body">
                            <img class="f3-project-card__accent" src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/images/color-thingy2.webp');?>" alt="green-icon">
            
                            <h3 class="f3-team-card__name">Robert Toal</h3>
                            <p class="f3-team-card__title mb-2">Director && PMO</p>
                            <a href="#" class="f3-btn f3-btn--dark-outline f3-team-card__linkedin">LinkedIn</a>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg-3 swiper-slide">
                    <div class="f3-project-card">
                        <div class="f3-project-card__img-wrap"><img src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/images/semeniuk.webp');?>" alt="????????????"></div>
                        <div class="f3-project-card__body">
                            <img class="f3-project-card__accent" src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/images/color-thingy2.webp');?>" alt="green-icon">
            
                            <h3 class="f3-team-card__name">Robert Toal</h3>
                            <p class="f3-team-card__title mb-2">Director && PMO</p>
                            <a href="#" class="f3-btn f3-btn--dark-outline f3-team-card__linkedin">LinkedIn</a>
                        </div>
                    </div>
                </div>
            </div><!--/.row-->
            <!--<div class="swiper-pagination"></div>-->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div> <!--/.swiper--> 


        <div class="swiper f3-team-swiper">
            <div class="row g-4 g-lg-5 f3-team-grid swiper-wrapper">
                <?php
                //1) Collect all repeater rows into a plain array first
                $team_slides = array();
                if (have_rows('leadershipteam_slider')) :
                    while (have_rows('leadershipteam_slider')) : the_row();
                        $team_slides[] = array(
                            'photo'    => get_sub_field('leadershipteam_slider_photo'),
                            'name'     => get_sub_field('leadershipteam_slider_name'),
                            'position' => get_sub_field('leadershipteam_slider_position'),
                            'linkedin' => get_sub_field('leadershipteam_slider_btnlink'),
                        );
                    endwhile;
                endif;
                //2) Pad up to a minimum so Swiper's loop mode always has enough real slides, no matter how few team members the client enters
                $min_slides = 5; $real_count = count($team_slides);
                if($real_count > 0 && $real_count < $min_slides){ $i = 0; while(count($team_slides) < $min_slides){ $team_slides[] = $team_slides[$i % $real_count]; $i++; } };?>

                <?php foreach ($team_slides as $slide):
                    $photo    = $slide['photo'];
                    $name     = $slide['name'];
                    $position = $slide['position'];
                    $linkedin = $slide['linkedin'];
                ?>
                    <div class="col-6 col-md-4 col-lg-3 swiper-slide">
                        <div class="f3-project-card">
                            <div class="f3-project-card__img-wrap"><?php if($photo):?><img src="<?php echo esc_url($photo);?>" alt="person photo"><?php endif;?></div>

                            <div class="f3-project-card__body">
                                <img class="f3-project-card__accent" src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/images/color-thingy2.webp');?>"  alt="green-icon">
                                <?php if($name):?><h3 class="f3-team-card__name"><?php echo esc_html($name);?></h3><?php endif;?>
                                <?php if($position):?><p class="f3-team-card__title mb-2"><?php echo esc_html($position);?></p><?php endif;?>

                                <?php if($linkedin):?>
                                    <a href="<?php echo esc_url($linkedin['url']);?>" class="f3-btn f3-btn--dark-outline f3-team-card__linkedin" target="<?php echo esc_attr($linkedin['target'] ?: '_self');?>">
                                        <?php echo esc_html($linkedin['title'] ?: 'L i n k'); ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div><!--/.row-->

            <!--<div class="swiper-pagination"></div>-->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div> <!--/.swiper--> 

    </div> <!--/.container-->
</section>
<!--/S6: LEADERSHIP-TEAM: MEET THE LEADERSHIP TEAM-->