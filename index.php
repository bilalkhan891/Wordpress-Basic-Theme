<?php get_header(); ?>
<div class="row">
	<div class="col-sx-12 col-md-8">
		<?php 

			if (have_posts()) :
				
				while (have_posts()) : the_post(); ?>

					<?php get_template_part('content', get_post_format()); ?>
				
				<?php endwhile;

			endif;

		 ?>
	</div>
	<div class="col-sx-12 col-md-4">
		
	 <?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>


