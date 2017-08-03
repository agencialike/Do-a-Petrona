<?php include "header.php"; ?>

<div class="container-fluid" style="padding:0px;">
	<?php include "carrousel.php"; ?>
</div>

<div class="container">
<h1>Descubre todo lo que tenemos para tí</h1>
<?php get_search_form( true ); ?>
		<?php include "loop1.php"; ?>
		<?php include "loop2.php"; ?>
	</div>


<?php include "footer.php"; ?>