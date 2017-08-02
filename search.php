<?php include "header.php"; ?>


<div class="container">
	<h1 class="search-title" style="font-size: 16px; font-weight: 800;">
	<?php echo $wp_query->found_posts; ?> <?php _e( 'Resultado encontrados', 'locale' ); ?>: "<?php the_search_query(); ?>"
	</h1>
	<div class=" col-md-9 col-xs-12 single" >
	<a href=" <?php the_permalink(); ?>">
		<div class="col-md-4">
			 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<!-- post -->
			<figure class="col-xs-12 img-responsive">
				<?php the_post_thumbnail( ); ?>
			</figure>
			<h1 style="font-size: 16px; font-weight: 800;"> <?php the_title( ); ?></h1>
			<?php endwhile; ?>
			<!-- post navigation -->
			<?php else: ?>
			<!-- no posts found -->
			<?php endif; ?> 
		</div>
		</a>
	</div>
	
	<div class=" col-md-3 col-xs-12" style="background: #ecf0f1; padding: 0px;">
		<?php include "ult-receta.php"; ?>
	</div>
<?php  include "recom-single.php"; ?>
</div>
