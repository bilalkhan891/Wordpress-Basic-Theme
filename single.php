<?php get_header(); ?>
<div class="row">
	<div class="col-xs-12 col-sm-8">
		
	<?php 
		$imgUrl = 'http://via.placeholder.com/500';
		if (have_posts()) : ?>
			
			<div class="blog-element">
				<a href="<?php get_the_permalink( get_the_ID() ); ?>">
					<?php if (has_post_thumbnail()) : 
						$imgUrl = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
					endif; ?>
					<img src="<?php echo $imgUrl; ?>" class="">
					<div class="blog-element-title p-3">
						<?php the_title( sprintf('<h3 class="entry-title"><a href="%s">', esc_url( get_permalink() )),'</a></h3>' ); ?>
						<p><small>Posted on: <?php the_time('F j, Y');the_category(' '); ?> || <?php the_tags(' '); ?> || <?php edit_post_link(); ?></small></p>
					</div>
				</a>
			</div>
			<?php while (have_posts()) : ?>
				
				<?php the_post(); ?>
				 </small>
				<p><?php the_content(); ?></p> 
			<?php endwhile; ?> 
			<hr>
			<?php if ( comments_open() ) : ?>
				<?php comments_template(); ?>
				<?php else: echo '<h5>Sorry, Comments are disabled.</h5>'; ?>
				<?php endif; ?>
		<?php endif; ?>

	</div>
	<div class="col-sx-12 col-md-4">
		
	 <?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>