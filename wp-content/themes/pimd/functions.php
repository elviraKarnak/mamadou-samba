<?php
// style sheet & scripts
function pimd_enqueue(){

	$uri = get_theme_file_uri();
  
	$ver = 1.0;
	$vert = time();
  
	// CSS
	  // external library
	  wp_register_style( 'aos',   $uri. '/assets/css/aos.css', [], $ver);
      wp_register_style( 'bootstrap',   $uri. '/assets/css/bootstrap.min.css', [], $ver);
	  wp_register_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css', [], $ver);
	  wp_register_style( 'slick',  	   $uri. '/assets/css/slick.css', [], $ver);
	  wp_register_style( 'slick-theme',  $uri. '/assets/css/slick-theme.css', [], $ver);

	  //external custom css
	  wp_register_style( 'theme-css',  $uri. '/assets/css/style.css', [], $vert);
	  wp_register_style( 'theme-responsive_css',  $uri. '/assets/css/responsive.css', [], $vert);
	  wp_register_style( 'theme_stylesheet', $uri. '/style.css', [], $vert);
  
	   // external library
	  wp_enqueue_style( 'aos');
	  wp_enqueue_style( 'bootstrap');
	  wp_enqueue_style( 'font-awesome');
	  wp_enqueue_style( 'slick');
	  wp_enqueue_style( 'slick-theme');

	    //external custom css
	  wp_enqueue_style( 'theme-css');
	  wp_enqueue_style( 'theme-responsive_css');
	  wp_enqueue_style( 'theme_stylesheet');

    //JS
		// external library
	  wp_register_script( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js', [], $ver, true );
	  wp_register_script( 'aos', $uri . '/assets/js/aos.js', [], $ver, true );
	  wp_register_script( 'slick', $uri . '/assets/js/slick.min.js', [], $ver, true ); 
	  wp_register_script( 'bootstrap', $uri . '/assets/js/bootstrap.bundle.min.js', [], $ver, true );

		//external custom js
	  wp_register_script( 'custom-js', $uri . '/assets/js/custom.js', [], $vert, true );
  
	  wp_enqueue_script('jquery');
	  wp_enqueue_script('font-awesome');
	  wp_enqueue_script('aos');
	  wp_enqueue_script('slick');
	  wp_enqueue_script('bootstrap');
	  wp_enqueue_script('custom-js');
  }
	   
  add_action( 'wp_enqueue_scripts', 'pimd_enqueue' );

// register navs
	register_nav_menus(
		array(
			'menu-1' => __( 'Header Menu', 'pimd' ),
			'menu-2' => __( 'Footer Menu', 'pimd' ),
		)
	);
		// theme support
			function pimd_setup_theme(){
				add_theme_support( 'custom-logo' );
				add_theme_support( 'post-thumbnails' );
				add_theme_support( 'title-tag' );
				}
			add_action( 'after_setup_theme', 'pimd_setup_theme' );

require get_template_directory() . '/inc/custom_functions.php';


