<?php get_template_part('templates/head'); ?>
 <body <?php body_class("preview"); ?> id="top" data-spy="scroll" data-target=".subnav" data-offset="80">
  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'geocities'); ?>
    </div>
  <![endif]-->

  <?php
    do_action('get_header');
    get_template_part('templates/header');
  ?>
  
  <?php get_template_part('templates/page', 'header'); ?>
  <?php include geocities_template_path(); ?>
  
  <?php get_template_part('templates/footer'); ?>

</body>
</html>
