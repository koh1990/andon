<?php get_header(); ?>

	<main role="main">
		<div class="mv">
			<!-- logo -->
			<div class="logo">
				<a href="<?php echo home_url(); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="andon">
				</a>
			</div>
			<!-- /logo -->
		</div>
		<section class="service">
			<div class="content">

				<h1 class="cat__title"><?php _e( '', 'html5blank' ); single_cat_title(); ?></h1>

				<article class="works">
					<?php get_template_part('loop'); ?>
				</article>

			</div>
		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
