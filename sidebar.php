<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package IDontKnowAnymoreTheme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php
	if ( is_front_page() ) :
		$current_user = wp_get_current_user();
		if ( is_user_logged_in() ) {
			echo '<div class="login-logout">';
			echo '<h2>Welcome, ' . $current_user->user_login . '</h2>';
			echo '</div>';
		} else {
			echo '<div class="login-logout">';
			echo '<h1>Welcome to U3A</h1>';
			echo '</div>';
		}
	else :
		$current_user = wp_get_current_user();
		if ( is_user_logged_in() ) {
			echo '<div class="login-logout">';
			echo '<h2>Signed in, ' . $current_user->user_login . '</h2>';
			echo '</div>';
		} else {
			echo '<div class="login-logout">';
			echo '<h1>Welcome to U3A</h1>';
			echo '</div>';
		}
	endif;
	
	?>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>

</aside><!-- #secondary -->


<!-- 			'Username: ' . $current_user->user_login . '<br />';
		} else { -->