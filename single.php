<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<!-- <div id="primary" class="site-content">
		<div id="content" role="main">

			<?php // while ( have_posts() ) : the_post(); ?>

				<?php // get_template_part( 'content', get_post_format() ); ?>

				<nav class="nav-single">
					<h3 class="assistive-text"><?php // _e( 'Post navigation', 'kolkatagives' ); ?></h3>
					<span class="nav-previous"><?php // previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'kolkatagives' ) . '</span> %title' ); ?></span>
					<span class="nav-next"><?php // next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'kolkatagives' ) . '</span>' ); ?></span>
				</nav><!-- .nav-single -->

				<?php // comments_template( '', true ); ?>

			<?php // endwhile; // end of the loop. ?>

<!--		</div><!-- #content -->
<!--	</div><!-- #primary -->
	<?php  while ( have_posts() ) : the_post(); ?>
	<div class="main-container about-us-banner">
		<?php the_post_thumbnail(); ?>
	</div>

	<div class="main-container news-container">
		<div class="row">
			<div class="col-lg-12 text-center news-title">
				<h1><?php the_title() ;?></h1>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 news-column">
				<?php the_content(); ?>

				<nav class="nav-single">
					<!-- <h3 class="assistive-text"><?php  _e( 'Post navigation', 'kolkatagives' ); ?></h3> -->
					<span class="nav-previous"><?php  previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'kolkatagives' ) . '</span> %title' ); ?></span>
					<span class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'kolkatagives' ) . '</span>' ); ?></span>
				</nav><!-- .nav-single -->

				<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 news-column pres-release">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>


<?php get_footer(); ?>