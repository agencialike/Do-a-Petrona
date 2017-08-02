<div class="col-xs-12 Loop1" style="padding: 0px;">
	<h1 class="col-xs-12" style="font-weight: 800; font-size: 22px;">Últimas noticias</h1>
	<?php rewind_posts(); ?>
	<?php query_posts("cat=‘3’&&posts_per_page=1" ); ?>
	 	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<!-- post -->
		<a href=" <?php the_permalink(); ?>">
		<div class="col-xs-12">
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
<img src="http://dpetrona.com/wp-content/uploads/2017/08/20158057_1389986707733305_3206763404836837720_o.jpg" class="col-xs-12 img-responsive" style="padding: 25px 0px;" alt="">