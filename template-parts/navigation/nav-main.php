<?php
/**
 * Main navigation template
 *
 * @package    WordPress
 * @subpackage Call_Me_Mule
 * @since      3.0.0
 */

 // Conditional navigation theme location.
if ( is_front_page() ) {
	$main_menu = 'main-front';
} else {
	$main_menu = 'main';
}

?>
<nav class="nav nav-scroll" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
	<div class="wrapper">
		<p id="menu-toggle" class="menu-toggle"><a><span class="not__screen-reader-text"><?php _e( 'Menu', 'call-me-mule' ); ?></span></a></p>
		<?php wp_nav_menu(
			[
				'theme_location'  => $main_menu,
				'container_id'    => 'main-menu',
				'container_class' => 'main-menu',
				'menu_id'         => 'main-menu-list',
				'menu_class'      => 'main-menu-list',
				'fallback_cb'     => false
			]
		); ?>
	</div>
</nav>