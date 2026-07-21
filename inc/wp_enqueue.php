<?php
/**
 * SCRIPTS / STYLES
*/

/**
 * Define Constants
*/
define('CHILD_THEME_F3_NETWORKS_VERSION', '1.0.0');

if ( ! function_exists('child_enqueue_styles_f3') ):
	function child_enqueue_styles_f3(){
		$theme_url = get_stylesheet_directory_uri();
		$theme_path = get_stylesheet_directory();

		//____________________________________Fonts:
		//wp_enqueue_style( 'montserrat_font', 'https://fonts.googleapis.com/css2?family=Montserrat', array() ); + display=swap ???
		wp_enqueue_style('source-sans-3','https://fonts.googleapis.com/css2?family=Source+Sans+3:wght@200;300;400;900&display=swap',array(),null);

		//____________________________________Styles:
wp_enqueue_style('aos-css', $theme_url . '/assets/aos-animation/aos.css', array(), null); //(!)It's a bundle with 'animate-css-4'+'aos-js' AND actually 'animate-css-4' no need to use here
		wp_enqueue_style('bootstrap-css','https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css',array(),'5.3.0','all' );
		wp_enqueue_style('f3-networks-theme-css',$theme_url.'/style.css',array('astra-theme-css'),CHILD_THEME_F3_NETWORKS_VERSION,'all');

		wp_enqueue_style('f3-main-css',$theme_url.'/assets/css/main.css',array(),filemtime($theme_path.'/assets/css/main.css'));
		//wp_enqueue_style('f3-main-css',$theme_url.'/assets/css/main.css',array(),filemtime($theme_path.'/assets/css/main-min.css'));

		//___________________________________Scripts:
wp_enqueue_script('aos-js', $theme_url . '/assets/aos-animation/aos.js', array(), null, true); /*Need initial in JS-file --> AOS.init({ duration:1000, once:true, offset:100 }); (!)It's a bundle with 'animate-css-4'+'aos-css' AND actually 'animate-css-4' no need to use here*/
		wp_enqueue_script('bootstrap-js','https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js',array(),'5.3.0',true );
		wp_enqueue_script('main-js', $theme_url . '/assets/js/main.js', array('bootstrap-js','aos-js'), filemtime($theme_path . '/assets/js/main.js'),true);
	} 
	add_action('wp_enqueue_scripts','child_enqueue_styles_f3',15);
endif;