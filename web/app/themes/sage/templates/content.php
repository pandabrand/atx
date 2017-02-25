<article <?php post_class(); ?>>
  <header>
    <h4 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary">
    <div class="entry-summary-image">
      <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive responsive--full', 'title' => 'Feature image']); ?>
    </div>
    <div class="entry-summary-excerpt">
      <?php the_excerpt(); ?>
    </div>
  </div>
</article>
