<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.10&appId=831236913700820";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

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
		<div class="col-xs-12">
		<h1 class="titu-rec">
			Déjanos tus comentarios.
		</h1>
			<div class="fb-comments col-xs-12" data-href="<?php get_site_url();?>" data-width="100%" data-numposts="5"></div>
		</div>
	</div>
	
	<div class=" col-md-3 col-xs-12" style="background: #ecf0f1; padding: 0px;">
		<?php include "ult-receta.php"; ?>
	</div>
<?php  include "recom-single.php"; ?>
</div>