	

			
		</div>
		<footer class="main-footer footer mt-auto py-3">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<span class="text-muted">&copy; Copy Rights 2020 </span>
					</div>
					<div class="col-md-6">
						<nav class="navbar navbar-expand-lg navbar-light bg-light">  
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#footerNav" aria-controls="footerNav" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon"></span>
								</button>
								<div class="collapse navbar-collapse form-inline" id="footerNav">
										<?php wp_nav_menu( array( 
												'theme_location' => 'secondary', 
												'container' => false,
												'menu_class' => 'navbar-nav mr-0 ml-auto', 
											) 
										); ?>
								</div> 
						</nav> 
						
					</div>
				</div>	
				
			</div>
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>