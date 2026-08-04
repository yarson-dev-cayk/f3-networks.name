<?php 
$googlemap_title = get_field('googlemap_title');
$googlemap_subtitle = get_field('googlemap_subtitle');

$googlemap_map = get_field('googlemap_map'); dd($googlemap_map);
$googlemap_map_height = get_field('googlemap_map_height');
$googlemap_map_logo_cover = get_field('googlemap_map_logo_cover');
?>
<!--S2: GOOGLE MAP-->
<section class="f3-section f3-solutions f3-googlemap" id="googlemap">

    <div class="container-lg">
        <div class="row f3-supporting__header">
            <?php if($googlemap_title || $googlemap_subtitle):?>
                <div class="col-12 col-md-6 mb-4">
                    <?php if($googlemap_title):?><h2 class="f3-section__heading" data-aos="fade-up-right"><?php echo esc_html($googlemap_title);?></h2><?php endif;?>
                    <?php if($googlemap_subtitle):?><div class="f3-section__text" data-aos="fade-up"><?php echo wp_kses_post($googlemap_subtitle);?></div><?php endif;?>
                </div>
            <?php endif;?>
        </div>
    </div> <!--/.container-->

    <div class="container-fluid g-0">
        <div class="row g-0">
            <div class="col-12">

            <?php if($googlemap_map):?>
                <div id="g_map_frame_container" class="g-map--frame-container">
                    <iframe src="<?php echo $googlemap_map ? get_iframe_src($googlemap_map) : '';?>"
                        width="100" 
                        height="<?php echo $googlemap_map_height ?: 500;?>"
                        style="border:0;" 
                        allowfullscreen="true" 
                        loading="lazy" 
                        referrerpolicy="strict-origin-when-cross-origin">
                    </iframe> <!--referrerpolicy="no-referrer-when-downgrade"--> 
                    <div class="map-overlay"></div>
                    <?php if($googlemap_map_logo_cover):?>
                        <img class="map-logo" src="<?php echo $googlemap_map_logo_cover;?>">
                    <?php else:?>
                        <img class="map-logo" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/logo-in-map.svg" alt="F3 Networks Logo Google Map">
                    <?php endif;?>
                </div>
            <?php endif;?>

            </div><!--/.col--> 
        </div><!--/.row-->
    </div> <!--/.container-->

</section>
<!--/S2: GOOGLE MAP--->
