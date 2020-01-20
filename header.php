<?php
/**
 * Header template
 *
 * @package    WordPress
 * @subpackage Call_Me_Mule
 * @since      3.0.0
 */

namespace Call_Me_Mule;

// Access methods of the functions file.
use Call_Me_Mule\Functions;

// Restrict direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?><!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<?php Functions::remove_cf7_scripts(); mule_head(); ?>
</head>
	<?php mule_body(); ?>
	<?php mule_loader(); ?>
	<?php get_template_part( 'template-parts/navigation/nav', 'main' );	?>
<?php mule_header(); ?>