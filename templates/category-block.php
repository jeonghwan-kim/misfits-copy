<div class="su-posts su-posts-default-loop">
	<?php $isFirst = true; ?>
	<?php if ( $posts->have_posts() ): ?>
		<?php while ( $posts->have_posts() ) : ?>
			<?php $posts->the_post(); ?>
			<?php global $post; ?>

			<?php if ( $isFirst ) : ?>
				<?php $isFirst = false; ?>
				<?php // Category name and link ?>
				<div class="category-link">
					<a href="<?php echo get_category_link( the_category_ID( false ) ); ?>">
						<span class="category-name">
							<?php echo get_cat_name( the_category_ID( false ) ); ?>
						</span>
						<span class="angle-right"><i class="fa fa-angle-right"></i></span>
						<span class="pull-right btn text-muted"><i class="fa fa-list-ul"></i></span>
					</a>
				</div>

				<div id="su-post-<?php the_ID(); ?>" class="su-post" style="clear:both;">
					<?php if ( has_post_thumbnail() ) : ?>
						<a class="" href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); ?></a>
					<?php endif; ?>
					<h4 class="su-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					<div class="entry-meta"><?php twentyfifteen_entry_meta(); ?></div>
				</div>

			<?php else: ?>
			<div id="su-post-<?php the_ID(); ?>" class="su-post" style="clear:both;">
				<?php if ( has_post_thumbnail() ) : ?>
					<a class="su-post-thumbnail thumbnail-small" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
				<?php endif; ?>
				<div class="su-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
				<div class="entry-meta"><?php twentyfifteen_entry_meta(); ?></div>
			</div>
			<?php endif; ?>

		<?php endwhile; ?>
	<?php else: ?>
		<?php echo '<h4>' . __( 'Posts not found', 'su' ) . '</h4>'; ?>
	<?php endif; ?>
</div>
