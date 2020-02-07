<?php
/**
 * Site branding
 *
 * @package    WordPress
 * @subpackage Poker_Face
 * @since 3.0.0
 */

// Stop here if the ACF plugin is not active.
if ( ! class_exists( 'acf' ) ) {
	return;
}

$header_img    = get_field( 'intro_image' );
$header_size   = 'full-video';
$header_src    = wp_get_attachment_image_src( $header_img, $header_size );
$header_srcset = wp_get_attachment_image_srcset( $header_img, $header_size );

?>
<header class="header" role="banner" itemscope="itemscope" itemtype="http://schema.org/Organization">
<?php if ( is_front_page() ) : ?>
	<div class="intro-image front">
		<img class="intro-image" src="<?php echo esc_url( $header_src[0] ); ?>" srcset="<?php echo esc_attr( $header_srcset ); ?>" sizes="(max-width: 640px) 640px, (max-width: 1024px) 1024px, 2048px" />
	</div>
	<div class="intro-title front">
		<div class="wrapper">
			<h1 class="site-title screen-reader-text" itemprop="name"><?php bloginfo( 'name' ); ?></h1>
			<?php if ( ! empty( get_bloginfo( 'description' ) )) { ?><p class="site-description screen-reader-text" itemprop="description"><?php bloginfo( 'description', 'display' ); ?></p><?php } ?>
		</div>
	</div>
<?php else : ?>
	<div class="intro-title">
		<div class="wrapper">
			<p class="site-title screen-reader-text" itemprop="name"><?php bloginfo( 'name' ); ?></p>
		<?php if ( ! empty( get_bloginfo( 'description' ) )) { ?>
			<p class="site-description screen-reader-text" itemprop="description"><?php bloginfo( 'description', 'display' ); ?></p>
		<?php } ?>
			<img class="page-header" role="presentation" src="<?php echo get_theme_file_uri( '/assets/images/call-me-mule-page-header.png' ); ?>" alt="">
		</div>
	</div>
<?php endif; ?>
</header>