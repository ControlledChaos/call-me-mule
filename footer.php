<?php
/**
 * Footer template
 *
 * @package    WordPress
 * @subpackage Call_Me_Mule
 * @since      3.0.0
 */
?>
<footer class="footer" role="contentinfo">
	<div class="wrapper">

		<?php get_template_part( 'template-parts/navigation/nav', 'social' ); ?>

		<p class="newsletter-message"><?php _e( 'Sign up to get free newsletter updates regarding the documentary', 'call-me-mule' ) ?></p>
		<p class="newsletter-link"><a data-fancybox="iframe" data-src="http://visitor.r20.constantcontact.com/manage/optin?v=001pO9vk1Sn2XjMpOAFAgqsAt1acURxfa6OXx-ETQt4sHVfp70quV1ptKk40n7L2kxGRSvD7oW4uwX9R03kPTfYT1WHZUYRl93Y567O3NnWkUo%3D" data-type="iframe" href="javascript:;" target="_blank"><span class="screen-reader-text"><?php _e( 'Subscribe', 'call-me-mule' ) ?></span><img src="<?php echo get_theme_file_uri( '/assets/images/subscribe.png' ); ?>" alt="<?php _e( 'Subscribe', 'call-me-mule' ) ?>"></a></p>

		<?php mule_credits(); ?>

		<?php wp_nav_menu(
			[
				'theme_location'  => 'footer',
				'container_id'    => 'footer-nav',
				'container_class' => 'footer-nav',
				'menu_id'         => 'footer-menu',
				'menu_class'      => 'footer-menu',
				'fallback_cb'     => false
			]
		); ?>

		<p class="copyright">&copy;<?php echo date( 'Y' ); _e( ' 3MulesMovie.com and <a href="http://www.mcdonaldproductions.com/" target="_blank">McDonald Productions</a>', 'call-me-mule' ); ?></p>

		<p class="screen-reader-text"><?php _e( 'Website designed, developed and donated by Greg Sweet | ', 'call-me-mule' ); ?><a href="http://ccdzine.com/" target="_blank"><?php _e( 'Controlled Chaos Design', 'call-me-mule' ); ?></a></p>

	</div><!-- wrapper -->
</footer>
<?php wp_footer(); ?>
</body>
</html>