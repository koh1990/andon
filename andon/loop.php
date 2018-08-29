<?php if (have_posts()): while (have_posts()) : the_post(); ?>

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

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'すみません。お探しの記事は見当たりません。', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
