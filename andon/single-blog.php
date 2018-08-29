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
		<div class="blog__sec">
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
					<!-- post details -->
					<span class="date"><?php the_time('Y.m.d'); ?></span>
					<!-- /post details -->

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
			<?php get_sidebar(); ?>
		</div>
		<div class="paging">
			<?php if (get_next_post()):?>
			    <div class="next"><?php next_post_link('< %link','next',false); ?></div>
			<?php endif; ?>

			<?php if (get_previous_post()):?>
			    <div class="prev"><?php previous_post_link('%link >','prev',false); ?></div>
			<?php endif; ?>
		</div>
	</main>

<?php get_footer(); ?>
