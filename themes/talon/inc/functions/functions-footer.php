<?php
/**
 * Footer functions
 *
 * @package Talon
 */

/**
 * Footer sidebar
 */
function talon_footer_sidebar() {
	if ( is_active_sidebar( 'footer-1' ) ) {
		get_sidebar('footer');		
	}
}
add_action('talon_footer', 'talon_footer_sidebar', 7);

/**
 * Footer menu
 */
function talon_footer_menu() {
	?>
		<nav id="footer-navigation" class="footer-navigation col-md-6" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_id' => 'footer-menu', 'depth' => 1 ) ); ?>
		</nav>
	<?php
}
add_action('talon_footer', 'talon_footer_menu', 9);