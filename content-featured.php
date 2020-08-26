
<article class="featured-posts my-4" id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 

	
		<div class="row">
			<?php if ( has_post_thumbnail() ) : ?>
				<div class="col-xs-12 col-md-12">
					<div class="post-thumbnail thumbnail text-center">
						<?php the_post_thumbnail( 'large', array('class' => 'img-fluid') );  ?>		
					</div>
				</div> 
			<?php else: ?>  
				<!-- <div class="col-xs-12 col-md-8">
					<p><?php //the_content(); ?></p>
				</div> -->
				<h4>No Image</h4>
			<?php endif; ?>
		</div>
		 <header class="entry-header">

		 	<?php the_title( sprintf('<h3 class="entry-title"><a href="%s">', esc_url( get_permalink() )),'</a></h3>' ); ?> 
		 	<small><?php the_category(); ?></small>
		 </header>
</article>
 