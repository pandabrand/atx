<?php get_template_part('templates/content', 'menu'); ?>
<?php while (have_posts()) : the_post(); ?>
  <div class="row">
    <div class="col-xs-12 chef-menu-description">
      <h1>Bar Menu</h1>
      <div class="description"><?php the_field('menu_description'); ?></div>
    </div>
  </div>
  <?php get_template_part('templates/menu'); ?>
<?php endwhile; ?>
