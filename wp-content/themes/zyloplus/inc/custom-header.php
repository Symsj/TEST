<?php
/**
 * @package Zyloplus
 * Setup the WordPress core custom header feature.
 *
 * @uses zyloplus_header_style()

 */
function zyloplus_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'zyloplus_custom_header_args', array(		
		'default-text-color'     => 'ffffff',
		'width'                  => 1400,
		'height'                 => 280,
		'wp-head-callback'       => 'zyloplus_header_style',		
	) ) );
}
add_action( 'after_setup_theme', 'zyloplus_custom_header_setup' );

if ( ! function_exists( 'zyloplus_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see zyloplus_custom_header_setup().
 */
function zyloplus_header_style() {
	$header_text_color = get_header_textcolor();
	?>
	<style type="text/css">
	<?php
		//Check if user has defined any header image.
		if ( get_header_image() || get_header_textcolor() ) :
	?>
		.header {
			background: url(<?php echo esc_url( get_header_image() ); ?>) no-repeat;
			background-position: center top;
		}
	<?php endif; ?>	
	</style>
	<?php    
}
endif; // zyloplus_header_style