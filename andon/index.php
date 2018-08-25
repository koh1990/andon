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
		<!-- section -->
		<section class="intro">
			<div class="intro__txt">
				<img src="<?php echo get_template_directory_uri(); ?>/img/txt_intro.svg" alt="">
			</div>
		</section>
		<section class="service">
			<div class="content">
				<?php
				   $newslist = get_posts( array(
				  'posts_per_page' => 18
				  ));
				   if( $newslist ):
				?>
				<article class="works">
					<?php
					    foreach( $newslist as $post ):
					    setup_postdata( $post );
					?>
					<div>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<figure>
								<?php the_post_thumbnail(); ?>
								<figcaption>
									<div>
										<?php
											$cat = get_the_category();
											$catname = $cat[0]->cat_name; //カテゴリー名
											//$catslug = $cat[0]->slug; //スラッグ名
										?>
										<span class="cat__name">
											<?php echo $catname; ?>
										</span>
										<?php the_title(); ?>
										<span class="date">
											<?php the_time('Y.m.d'); ?>
										</span>
									</div>
								</figcaption>
							</figure>
						</a>
					</div>
					<?php
					  endforeach;
					  wp_reset_postdata();
					?>
				</article>
				<?php else: ?>
				<p>あてはまる情報はまだありません。</p>
				<?php endif; ?>
			</div>
		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
