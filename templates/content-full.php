<?php while (have_posts()) : the_post(); ?>
<section <?php post_class(); ?> id="typography" style="padding-top: 0">
  <div class="page-header">
    <h1><?php the_title(); ?></h1>
  </div>
  <div class="row">
    <div class="span12">
      <?php the_content(); ?>
    </div>
  </div>
</section>
<?php endwhile; ?>
