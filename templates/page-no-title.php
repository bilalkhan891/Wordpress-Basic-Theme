<?php 

/*

	Template Name: No Title

*/

get_header(); 

		if (have_posts()) :
			
			while (have_posts()) : ?>
				
				<?php the_post(); ?>
				
				<h1>My Static Title</h1> </small>
				<p><?php the_content(); ?></p>
				<h3><?php //the_title(); ?></h3>

			<?php endwhile;

		endif;

	 ?>

<?php get_footer(); ?>