<!--S4: ACTIVE INFRASTRUCTURE PROJECTS-->
<section class="f3-section f3-projects section-devider" id="projects">
    <div class="container-lg">
        <div class="row">

            <!-- Left: heading + text + 2 photos -->
            <div class="col-12 col-lg-5">
                <?php if($projects_title = get_field('projects_title')):?>
                    <h2 class="f3-section__heading"><?php echo $projects_title;?></h2>
                <?php endif;?>
                <?php if($projects_subtitle = get_field('projects_subtitle')):?>
                    <p class="f3-section__text"><?php echo $projects_subtitle;?></p>
                <?php endif;?>
             
                <div class="f3-photo-pair f3-photo-pair-f3-projects text-center text-lg-start">
                    <?php if($projects_image1 = get_field('projects_image1')): ?>
                        <img class="f3-photo-pair-f3-projects-1 me-2" src="<?php echo esc_url($projects_image1);?>" alt="Cable infrastructure">
                    <?php else: ?>
                        <img class="f3-photo-pair-f3-projects-1 me-2" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/supporting-3.webp" alt="Cable infrastructure">
                    <?php endif;?>

                    <?php if($projects_image2 = get_field('projects_image2')): ?>
                        <img class="f3-photo-pair-f3-projects-2" src="<?php echo esc_url($projects_image2);?>" alt="Construction site">
                    <?php else: ?>
                        <img class="f3-photo-pair-f3-projects-2" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/supporting-4.webp" alt="Construction site">
                    <?php endif;?>
                </div>
            </div>

            <!-- Right: project cards -->
            <div class="col-12 col-lg-7 mt-4 mt-lg-0 f3-project-cards--container">
                <img class="f3-feature-box__pill" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/color_thingy.svg" alt="green-icon">
                <div class="row g-4 f3-project-cards">
                    <?php if(have_rows('projects_blocks')) :?>
                        <?php while(have_rows('projects_blocks')) : the_row();?>
                            <?php
                            $projects_blocks_title = get_sub_field('projects_blocks_title');
                            $projects_blocks_subtitle = get_sub_field('projects_blocks_subtitle');
                            $projects_blocks_text = get_sub_field('projects_blocks_text');
                            $projects_blocks_img = get_sub_field('projects_blocks_img');
                            //$projects_blocks_btnlink = get_sub_field('projects_blocks_btnlink');
                            ?>
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="f3-project-card">

                                    <?php if($projects_blocks_img):?> 
                                        <div class="f3-project-card__img-wrap"><img src="<?php echo $projects_blocks_img;?>" alt="<?php echo $projects_blocks_title;?>"></div>
                                    <?php else: ?>
                                        <div class="f3-project-card__img-wrap"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/pipes.webp" alt="Red Deer"></div>
                                    <?php endif;?>

                                    <div class="f3-project-card__body">
                                        <img class="f3-project-card__accent" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/color-thingy2.webp" alt="green-icon">

                                        <?php if($projects_blocks_title):?><h3 class="f3-project-card__city mt-4"><?php echo $projects_blocks_title;?></h3><?php endif;?>
                                        <?php if($projects_blocks_subtitle):?><p class="f3-project-card__label"><?php echo $projects_blocks_subtitle;?></p><?php endif;?>
                                        <?php if($projects_blocks_text):?><p class="f3-project-card__status"><?php echo $projects_blocks_text;?></p><?php endif;?>
                                        
                                        <?php if( get_sub_field('projects_blocks_btnlink') ?? [] ): ?>
                                            <?php $projects_blocks_btnlink = get_sub_field('projects_blocks_btnlink') ?? []; $projectsBtnlinkT = $projects_blocks_btnlink['title'] ?? ''; $projectsBtnlinkU = $projects_blocks_btnlink['url'] ?? ''; $projectsBtnlinkTrg = $projects_blocks_btnlink['target'] ?? '_self';?>
                                            <a href="<?php echo $projectsBtnlinkU;?>" class="f3-btn f3-btn--dark-outline f3-btn--sm" target="<?php echo $projectsBtnlinkTrg;?>"><?php echo $projectsBtnlinkT;?></a>
                                        <?php endif;?>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile;?>
                    <?php endif;?>
                </div><!--/.f3-project-cards-->
            </div>

        </div><!--/.row-->
    </div><!--/.container-->
</section>
<!--/S4: ACTIVE INFRASTRUCTURE PROJECTS-->