<?php get_header(); ?>
<div class="row">  
	<div class="col-sx-12 col-md-8">  
		<div class="row text-center"> 
		<?php  
			if (have_posts()) : $i = 0; 
				while (have_posts()) : the_post(); ?>

					<?php //get_template_part('content', get_post_format()); ?>

					<?php get_template_part('content', 'search'); ?>

				<?php $i++; endwhile; ?>

			<?php endif; ?>
		 </div>
	</div>
	<div class="col-sx-12 col-md-4">
		
	 <?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>


