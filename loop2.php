<div class="col-xs-12 Loop1">
	<h1 class="col-xs-12" style="font-weight: 800;">NOTICIAS Y PRENSA</h1>
	<div class="col-xs-12" style="padding: 20px 0px 50px 0px;">
	<?php rewind_posts(); ?>
	<?php query_posts("cat=‘4’&&posts_per_page=6" ); ?>
	 	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<!-- post -->
		<a href=" <?php the_permalink(); ?>">
		<div class="col-md-4 col-xs-12">
			<figure class="img-responsive">
				<?php the_post_thumbnail( ); ?>
				<h1 class="titu-rec" style="height: 70px;"><?php the_title( ); ?></h1>
			</figure>
		</div>
		</div>
		<?php endwhile; ?>
		<!-- post navigation -->
		<?php else: ?>
		<!-- no posts found -->
		<?php endif; ?>
	</div>
	<?php if ( function_exists( 'pgntn_display_pagination' ) ) pgntn_display_pagination( 'posts' );
	if ( function_exists( 'pgntn_display_pagination' ) ) pgntn_display_pagination( 'multipage' );
 ?>
</div>

{   }