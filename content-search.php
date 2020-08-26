<?php 

	$imgUrl = 'http://via.placeholder.com/500';
	$url 	= esc_url( get_permalink() );
	if (has_post_thumbnail()) : 
		$imgUrl = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
	endif;
?>

 
<article class="col-xs-12 col-md-4">
	<div >
		<div class="card" >
		 	<img src="<?php echo $imgUrl; ?>" class="card-img-top" alt="...">
		 	<div class="card-body">
		 		<h4 class="card-title"><a href="<?php echo $url ?>"> <?php the_title(); ?> </a></h4>
		 		<p class="card-text"><?php the_excerpt(); ?></p>
		 		<a href="#" class="btn btn-primary">Read More</a>
		 	</div>
		</div>
	</div>
</article>