<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

<!--[if lt IE 8]>
	<div class="alert alert-warning">
		<?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
<![endif]-->

	<?php
	do_action('get_header');
	// Use Bootstrap's navbar if enabled in config.php
	if (current_theme_supports('bootstrap-top-navbar')) {
	  get_template_part('templates/header-top-navbar');
	} else {
	  get_template_part('templates/header');
	}
	?>
	<section>
		<div class="wrap container">
			<div class="row title-padding">
				<div class="col-sm-8">
		      		<h1>Peace love and kale</h1>
		      		<h3>with Carly Shankman</h3>
		      		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		      		<button class="btn btn-default btn-lg">Subscribe</button>
		      	</div>
		      	<div class="col-sm-4">
	      			<img src="http://placehold.it/300x450">
	      		</div>
	      	</div>
	    </div>
	</section>
    <section class="logos-bg">
	    <div class="wrap container" role="document">
		  	<div class="row vert-align">
				<img class="col-sm-3" src="http://placehold.it/160x48">
				<img class="col-sm-3" src="http://placehold.it/160x48">
				<img class="col-sm-3" src="http://placehold.it/160x48">
				<img class="col-sm-3" src="http://placehold.it/160x48">
		    </div>
	    </div>
    </section>    
    <section>
	    <div class="wrap container" role="document">
	    	<div class="col-sm-8">
				<div class="content row">
				  <main class="main <?php echo roots_main_class(); ?>" role="main">
				    <?php include roots_template_path(); ?>
				  </main><!-- /.main -->
				  <?php if (roots_display_sidebar()) : ?>
				    <aside class="sidebar <?php echo roots_sidebar_class(); ?>" role="complementary">
				      <?php include roots_sidebar_path(); ?>
				    </aside><!-- /.sidebar -->
				  <?php endif; ?>
				</div><!-- /.content -->
	    	</div>
	    	<div class="col-sm-offset-1 col-sm-3">
	    		<img class="title-padding" src="http://placehold.it/242x590">
	    		<img class="title-padding" src="http://placehold.it/242x242">
	    		<img class="title-padding" src="http://placehold.it/242x242">
		    </div>
		</div><!-- /.wrap -->
    </section>
    <section class="text-white logos-bg">
    	<div class="wrap container"> 
	    	<div class="footer-cta-padding col-sm-12">
	    		<center>
		    		<h3>Subscribe, bitches!</h3>
		    		<button class="btn btn-default btn-lg">Subscribe</button>
	    		</center>
	    	</div>
    	</div>
    </section>
	<?php get_template_part('templates/footer'); ?>

</body>
</html>
