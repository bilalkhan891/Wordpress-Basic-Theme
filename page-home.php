<?php get_header(); ?> 


<div class="row"> 
	
	<div class="col-xs-12">
		
		
		 <div id="awesomeCarousel" class="carousel slide" data-ride="carousel">
		 	
		 	<div class="carousel-inner">
			 	<?php 

			 		$args_cat = array(
			 			'include' => '1, 6, 7, 8'
			 		);
			 		$carousel_indicators = '';
			 		$count = 0;
			 		$is_active = '';
			 		$categories = get_categories($args_cat);
			 		foreach ($categories as $key => $value) :
			 			
			 			
			 			$lastBlog = new WP_Query( 
			 				array( 
			 					'type'			=> 'post', 
			 					'posts_per_page' => 2,
			 					'category__in' => $value->term_id,
			 					// 'category__not_in' => array(1,2,3)
			 				) 
			 			);
			 			if ( $lastBlog->have_posts() ) : 

			 				if ($count == 0) : $is_active = 'active'; else: $is_active = ''; endif;  
			 				
			 				while ( $lastBlog->have_posts() ) : $lastBlog->the_post(); ?> 
			 					
		 						<div class="carousel-item <?php if($count == 0){echo 'active '; echo $count;} ?>">
		 							<?php the_post_thumbnail( 'large', array('class' => 'd-block w-100', 'alt' => '') );  ?>
		 							<div class="carousel-caption d-none d-md-block">
		 								<?php the_title( sprintf('<h3 class="entry-title"><a href="%s">', esc_url( get_permalink() )),'</a></h3>' ); ?> 
		 								<small><?php the_category(' '); ?></small>
	 							    </div>
		 						</div>  

							<?php 

								$carousel_indicators .= '<li data-target="#awesomeCarousel" class="' . $is_active . '"" data-slide-to="'.$count.'"></li> ';
								$count ++; 

							?>
			 				<?php  endwhile; 

			 			endif; 
			 			wp_reset_postdata(); 

			 		endforeach;
			 	 ?>
			 	 <ol class="carousel-indicators">
			 	 	<?php echo $carousel_indicators; ?>
			 	 </ol>  
		 	</div>
		 	<a class="carousel-control-prev" href="#awesomeCarousel" role="button" data-slide="prev">
		 		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		 		<span class="sr-only">Previous</span>
		 	</a>
		 	<a class="carousel-control-next" href="#awesomeCarousel" role="button" data-slide="next">
		 		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		 		<span class="sr-only">Next</span>
		 	</a>
		 </div> 
	</div>
</div>
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


