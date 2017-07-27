<div class="col-xs-12 Loop1">
	<h1 class="col-xs-12" style="font-weight: 800;">Tambien te puede interesar</h1>
	<div class="col-xs-12" style="padding: 20px 0px 50px 0px;">
	<?php rewind_posts(); ?>
	<?php query_posts("cat=‘2’&&posts_per_page=3" ); ?>
	 	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<!-- post -->
		<a href=" <?php the_permalink(); ?>">
		<div class="col-md-4 col-xs-12">
			<figure class="img-responsive">
				<?php the_post_thumbnail( ); ?>
			</figure>
			<h1 style="color: #333; text-align: center; font-size: 20px;"><?php the_title( ); ?></h1>
		</div>
		</a>
		<?php endwhile; ?>
		<!-- post navigation -->
		<?php else: ?>
		<!-- no posts found -->
		<?php endif; ?>
	</div>
</div>