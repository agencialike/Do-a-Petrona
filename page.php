<?php include "header.php"; ?>
<div class="container">
	<div class=" col-md-9 col-xs-12 single" >
		 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<!-- post -->
		<h3 class=" col-md-2 col-xs-12">
			<?php the_date( ); ?>
		</h3>
		<h1 class=" col-md-10 col-xs-12">
			<?php the_title( ); ?>
		</h1>
		<figure class="col-xs-12 img-responsive">
			<?php the_post_thumbnail( ); ?>
			<div class="col-xs-12 parrafo">
				<?php the_content( ); ?>
			</div>
		</figure>
		<?php endwhile; ?>
		<!-- post navigation -->
		<?php else: ?>
		<!-- no posts found -->
		<?php endif; ?> 
	</div>
	
	<div class=" col-md-3 col-xs-12" style="background: #ecf0f1; padding: 0px;">
		<?php include "ult-receta.php"; ?>
	</div>
	</div>
<?php  include "recom-single.php"; ?>
</div>

<?php include "footer.php"; ?>