<?php
/**
 * Page content
 *
 * @package    WordPress
 * @subpackage Call_Me_Mule
 * @since      3.0.0
 */

?>
<article class="entry h-entry" id="post-<?php the_ID(); ?>" role="article">

	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header>
	
	<div class="entry-content" itemprop="articleBody">
		<?php the_content(); ?>
	</div><!-- entry-content -->

</article>