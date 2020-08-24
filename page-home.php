<?php get_header(); ?>
<div class="row">
	<div class="col-xs-12">
		<?php 

			$lastBlog = new WP_Query(
				array(
					'type'			=> 'post',
					'posts_per_page' => 3, 
				)
			);
			if ( $lastBlog->have_posts() ) :
				
				while ( $lastBlog->have_posts() ) : $lastBlog->the_post(); ?>

					<?php get_template_part('content', get_post_format()); ?>
				
				<?php endwhile;

			endif; 
			wp_reset_postdata();
		 ?>
	</div>
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


