
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 

	<header class="entry-header">

		<?php the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url( get_permalink() )),'</a></h1>' ); ?>

		<small>Posted on: <?php the_time('F j, Y'); the_category(); ?></small>
	</header>
		<div class="row">
			<?php if ( has_post_thumbnail() ) : ?>
				<div class="col-xs-12 col-md-4">
					<div class="post-thumbnail thumbnail">
						<?php the_post_thumbnail( 'thumbnail', '' );  ?>		
					</div>
				</div>
				<div class="col-xs-12 col-md-8">
					<p><?php the_content(); ?></p>
				</div>
			<?php else: ?> 
				<div class="col-xs-12 col-md-8">
					<p><?php the_content(); ?></p>
				</div>
			<?php endif; ?>
		</div>
		 
</article>
<hr>