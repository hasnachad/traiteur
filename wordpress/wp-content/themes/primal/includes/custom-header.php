<?php
/**
 * Sample implementation of the Custom Header feature
 * http://codex.wordpress.org/Custom_Headers
 *
 * You can add an optional custom header image to header.php like so ...

	<?php if ( get_header_image() ) : ?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
		<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
	</a>
	<?php endif; // End header image check. ?>

 *
 * @package Primal
 */
 
/**
 * Setup the WordPress core custom header feature.
 *
 * @uses primal_header_style()  
 * @uses primal_admin_header_style() 
 * @uses primal_admin_header_image()   
 *
 * @package Primal
 */
function primal_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'primal_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => '272727', 
		'header_text'            => true,
		'width'                  => 1920,
		'height'                 => 400,
		'flex-height'            => true, 
		'wp-head-callback'       => 'primal_header_style'
	) ) );
}

add_action( 'after_setup_theme', 'primal_custom_header_setup' );



if ( ! function_exists( 'primal_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see primal_custom_header_setup().  
 */
function primal_header_style() {
	if ( get_header_image() ) {
	?>
	<style type="text/css">    
		.header-image {
			background-image: url(<?php echo esc_url(get_header_image()); ?>);
			display: block;
		}
        .header-inner {
        	
        }
      
	</style>
	<?php
	}

}
endif; // primal_header_style


