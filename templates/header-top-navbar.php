<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
    </nav>
  </div>    
</header>

<section id="above-the-fold">
  <div class="wrap container">
    <div class="row">
      <div class="col-sm-8">
        <h1>Peace love and kale</h1>
        <h3>with Carly Shankman</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
          sed do eiusmod tempor incididunt ut labore 
          et dolore magna aliqua.</p>
        <button class="btn btn-default btn-lg">Subscribe</button>
      </div>
      <div class="col-sm-4">
        <img src="http://placehold.it/360x250">
      </div>
    </div>
  </div>
</section>

<section id="logos">
  <div class="wrap container" role="document">
    <div class="row vert-align">
      <img class="col-sm-3" src="http://placehold.it/160x48">
      <img class="col-sm-3" src="http://placehold.it/160x48">
      <img class="col-sm-3" src="http://placehold.it/160x48">
      <img class="col-sm-3" src="http://placehold.it/160x48">
    </div>
  </div>
</section>
