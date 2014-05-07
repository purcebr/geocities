<?php while (have_posts()) : the_post(); ?>
<section <?php post_class(); ?> id="typography" style="padding-top: 0">
  <div class="page-header">
    <h1><?php the_title(); ?></h1>
    <?php get_template_part('templates/entry-meta'); ?>
  </div>
  <div class="row">
    <div class="span8">
      <?php the_content(); ?>
    </div>
    <div class="span4">
      <?php get_sidebar(); ?>
    </div>
    </div>
    <div class="row">
      <div class="span8">
        <?php comments_template('/templates/comments.php'); ?>
      </div>
    </div>
  </div>
</section>
<?php endwhile; ?>
