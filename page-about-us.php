<?php get_header(); ?>

	<?php 

		if (have_posts()) :
			
			while (have_posts()) : ?>
				
				<?php the_post(); ?>
				 </small>
				<p><?php the_content(); ?></p>
				<h3><?php the_title(); ?></h3>

	<?php
			endwhile;

		endif;

	 ?>

<?php get_footer(); ?>