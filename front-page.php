<?php
/**
 * Front page template
 *
 * @package    WordPress
 * @subpackage Call_Me_Mule
 * @since      3.0.0
 */
get_header(); ?>

<section class="mule-trailer" id="watch">
	<div class="wrapper">
		<?php
			$video_title = get_field( 'featured_video_title' );
			if ( $video_title ) { echo '<h3 class="featured-video-title">' . $video_title . '</h3>'; }
		?>
		<div class="featured-video">
			<?php the_field( 'featured_video' ); ?>
		</div>
		<?php
		$donate_button  = get_field( 'mule_donate_button' );
		$donate_message = get_field( 'mule_donate_message' );
		if ( $donate_button ) {
			$button = $donate_button;
		} else {
			$button = __( 'Support the Film', 'call-me-mule' );
		}
		if ( $donate_message ) {
			$message = $donate_message;
		} else {
			$message = __( 'Please be a part of the team that helps complete the documentary with your tax-deductible donation.', 'call-me-mule' );
		}
		?>
		<h3 class="featured-video-donate"><a href="#support-front"><?php echo $button; ?></a></h3>
		<p class="featured-video-message"><?php echo $message; ?></p>
	</div><!-- trailer-inner -->
</section><!-- trailer -->

<article class="entry front-page-content" id="film-front">
	<header>
		<h2 class="screen-reader-text"><?php _e( 'The Film', 'call-me-mule' ); ?></h2>
		<img src="<?php echo get_theme_file_uri( '/assets/images/the-film.png' ); ?>" alt="">
	</header>
	<div class="wrapper">
		<?php echo apply_filters( 'the_content', get_post_field( 'post_content', 33 ) ); ?>
	</div>
</article>

<article class="entry front-page-content" id="filmmaker-front">
	<header>
		<h2 class="screen-reader-text"><?php _e( 'The Filmmaker', 'call-me-mule' ); ?></h2>
		<img src="<?php echo get_theme_file_uri( '/assets/images/the-filmmaker.png' ); ?>" alt="">
	</header>

	<div class="wrapper">
		<?php echo apply_filters( 'the_content', get_post_field( 'post_content', 35 ) ); ?>
	</div>
</article>

<article class="entry front-page-content" id="support-front">
	<header>
		<h2 class="screen-reader-text"><?php echo apply_filters( 'the_title', get_post_field( 'post_title', 39 ) ); ?></h2>
		<img src="<?php echo get_theme_file_uri( '/assets/images/support-the-film.png' ); ?>" alt="">
	</header>

	<div class="wrapper">
		<?php echo apply_filters( 'the_content', get_post_field( 'post_content', 39 ) );

		$add_blog_link  = get_field( 'mule_add_blog_link' );
		$blog_link_text = get_field( 'mule_blog_link_text' );
		$blog_page_url  = get_permalink( get_option( 'page_for_posts' ) );

		if ( true == $add_blog_link ) {
			echo '<h4 class="front-news-link"><a href="' . $blog_page_url . '">' . $blog_link_text . '</a></h4>';
		} ?>
	</div>
</article>

<?php get_footer(); ?>