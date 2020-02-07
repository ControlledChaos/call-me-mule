<?php
/**
 * Header template
 *
 * @package    WordPress
 * @subpackage Call_Me_Mule
 * @since      3.0.0
 */

?>
<!doctype html>
<?php do_action( 'before_html' ); ?>
<html <?php language_attributes(); ?> class="no-js">

<head id="<?php echo get_bloginfo( 'wpurl' ); ?>">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<!--[if IE ]>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<![endif]-->

	<meta name="viewport" content="width=device-width, initial-scale=1"/>

	<link href="<?php echo $canonical; ?>" rel="canonical" />
	<?php if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">' . "\n", get_bloginfo( 'pingback_url' ) );
	} ?>
	<?php if ( is_search() ) { echo '<meta name="robots" content="noindex,nofollow" />'; } ?>

	<?php do_action( 'before_wp_head' ); ?>
	<?php wp_head(); ?>
	<?php do_action( 'after_wp_head' ); ?>
</head>

<?php mule_body(); ?>

	<?php get_template_part( 'template-parts/navigation/nav', 'main' );	?>

	<?php get_template_part( 'template-parts/header/site-header' ); ?>