<?php get_header(); ?>

	<main class="under" role="main">
		<div class="mv">
			<!-- logo -->
			<div class="logo">
				<a href="<?php echo home_url(); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="andon">
				</a>
			</div>
			<!-- /logo -->
		</div>
		<section>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<!-- post thumbnail -->
				<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
						<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				<?php endif; ?>
				<!-- /post thumbnail -->

				<!-- post title -->
				<h1>
					<?php the_title(); ?>
				</h1>
				<!-- /post title -->

				<?php the_content(); // Dynamic Content ?>


			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h1><?php _e( 'すみません。お探しの記事は見当たりません。', 'html5blank' ); ?></h1>


			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
