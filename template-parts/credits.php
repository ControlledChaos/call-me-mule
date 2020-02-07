<?php
/**
 * Website credits content
 *
 * @package    WordPress
 * @subpackage Call_Me_Mule
 * @since      3.0.0
 */

if ( ! function_exists( 'mule_credits' ) ) :
	function mule_credits() { ?>
		<p class="site-credits-link"><a data-fancybox data-src="#site-credits" href="javascript:;"><?php _e( 'Photo & Website Credits', 'call-me-mule' ); ?></a></p>
		<div id="site-credits" class="site-credits" style="display: none;">
			<h3><?php _e( 'Photo & Website Credits', 'call-me-mule' ); ?></h3>
			<h4><?php _e( 'Photos:', 'call-me-mule' ); ?></h4>
			<p><?php _e( '<span class="site-credits-name">JC Dill:</span> Photo of "Mule" riding lead animal, used in the Support section of the front page and on the Support page.', 'call-me-mule' ); ?></p>
			<p><?php _e( '<span class="site-credits-name">JC Dill:</span> Headshot photo of "Mule", used in the header image and on the Links page.', 'call-me-mule' ); ?></p>
			<p><?php _e( '<span class="site-credits-name">Kent Porter, The Press Democrat (Sonoma, CA):</span> Photo of "Mule" leading the pack string, used on the Press page.', 'call-me-mule' ); ?></p>
			<p><?php _e( '<span class="site-credits-name">John McDonald:</span> All other photos used on the site.', 'call-me-mule' ); ?></p>
			<h4><?php _e( 'Website:', 'call-me-mule' ); ?></h4>
			<p><?php _e( 'Designed, developed and donated by Greg Sweet | ', 'call-me-mule' ); ?><a href="http://ccdzine.com/" target="_blank"><?php _e( '<span class="site-credits-name">Controlled Chaos Design</span>', 'call-me-mule' ); ?></a></p>
		</div>
	<?php }
endif;
?>