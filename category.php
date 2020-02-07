<?php
/**
 * Category template
 *
 * @package    WordPress
 * @subpackage Call_Me_Mule
 * @since      3.0.0
 */
get_header(); ?>

<div class="site-content wrapper">

	<main class="main" role="main" itemscope itemprop="mainContentOfPage">

		<header class="archive-title">
			<h1><?php _e( 'Posts in "', 'call-me-mule' ) . single_cat_title() . _e( '" Category', 'call-me-mule'  ); ?></h1>
		</header>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/post/content' ); ?>

		<?php endwhile;

			mule_numeric_posts_nav();

		else :
			get_template_part( 'template-parts/post/content', 'none' );
		endif; ?>

	</main>

</div><!-- site-content -->

<?php get_footer(); ?>