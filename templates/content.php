<section <?php post_class(); ?> id="typography" style="padding-top: 0">
  <div class="page-header">
    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    <?php get_template_part('templates/entry-meta'); ?>
  </div>
  <div class="row">
    <div class="span6">
    <?php the_excerpt(); ?>
    </div>
  </div>
</section>