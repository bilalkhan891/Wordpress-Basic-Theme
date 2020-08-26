<?php get_header(); ?>
<div class="row">  
	<div class="col-sx-12 col-md-8">  
		<div class="row text-center"> 
		<?php  
			if (have_posts()) : $i = 0; 
				while (have_posts()) : the_post(); ?>

					<?php //get_template_part('content', get_post_format()); ?>

					<?php
						$class = '';
						$imgUrl = 'http://via.placeholder.com/500';
						if ( $i == 0 ) : 
							$column = 12;
						elseif ($i > 0 && $i <= 2 ) : 
							$column = 6; $class = 'second-row';
						elseif ( $i > 2  ) : 
							$column = 4; $class = 'third-row';
						endif;
					?> 

					<div class="col-xs-12 col-md-<?php echo $column.' '.$class; ?>">
						<div class="blog-element">
							<a href="<?php get_the_permalink( get_the_ID() ); ?>">
								<?php if (has_post_thumbnail()) : 
									$imgUrl = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
								endif;
								 ?>
								<?php //the_post_thumbnail( 'medium', 'thumbnail' );  ?>

								<img src="<?php echo $imgUrl; ?>" class="">
								<div class="blog-element-title">
									<?php the_title( sprintf('<h3 class="entry-title"><a href="%s">', esc_url( get_permalink() )),'</a></h3>' ); ?> 
									<small>Posted on: <?php the_time('F j, Y');the_category("<strong></strong>"); ?></small>
								</div>
							</a>
						</div>
					</div> 

				<?php $i++; endwhile; ?>

			<?php endif; ?>
		 </div>
	</div>
	<div class="col-sx-12 col-md-4">
		
	 <?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>


