<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Awesome Theme</title>
	<?php wp_head(); ?>
</head>

<?php 

if (is_front_page()):
	$awesome_classes = array('awesome-class', 'my-class');
else: 
	$awesome_classes = array('no-awesome-class', 'my-class');
endif;

?>

<body <?php body_class($awesome_classes); ?>>
	
	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="#">Awesome Theme</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse form-inline" id="navbarText">
					<?php wp_nav_menu( array( 
							'theme_location' => 'primary', 
							'container' => false,
							'menu_class' => 'navbar-nav mr-0 ml-auto', 
						) 
					); ?>
			</div>
		</div>
	</nav>
	<!-- /END Navigation -->

	<div class="container">
		<div class="row">
			<div class="col-xs-12">

				

			</div>
		</div>



