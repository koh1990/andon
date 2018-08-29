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
		<h1><?php _e( 'blog', 'html5blank' ); ?></h1>
		<div class="blog__sec">
			<!-- section -->
			<section>

				<?php get_template_part('loop-blog'); ?>

				<?php get_template_part('pagination'); ?>

			</section>
			<!-- /section -->
			<?php get_sidebar(); ?>
		</div>
	</main>
<?php get_footer(); ?>
