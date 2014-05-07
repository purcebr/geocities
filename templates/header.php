  <!-- Navbar
  ================================================== -->
  <div class="navbar">
   <div class="navbar-inner">
     <div class="container">
       <div class="nav-collapse" id="main-menu">
        <?php wp_nav_menu(array('theme_location' => 'top-left', 'menu_class' => 'pull-right nav nav-pills')); ?>
        <?php wp_nav_menu(array('theme_location' => 'top-left', 'menu_class' => 'pull-left nav nav-pills')); ?>
        <?php get_search_form(); ?>
      </div>
    </div>
  </div>
</div>

<div class="container">

  <!-- Masthead
  ================================================== -->
  <header class="jumbotron subhead" id="overview">
    <div class="row">
      <div class="span6">
        <h1><?php bloginfo(); ?></h1>
        <p class="lead"><?php bloginfo ( 'description' ); ?></p>
      </div>
    </div>
    <div class="subnav">
      <!-- Main Navigation -->
      <?php wp_nav_menu(array('theme_location' => 'primary-nav', 'menu_class' => 'nav nav-pills')); ?>
    </div>
  </header>