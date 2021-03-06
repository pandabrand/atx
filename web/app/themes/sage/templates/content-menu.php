<?php
  $today = date('Ymd');
  $args = array(
    'numberofposts' => 1,
    'post_type' => ['chef'],
    'meta_query' => array(
      'relation' => 'AND',
      array(
        'key' => 'start_date',
        'compare' => '<=',
        'value' => $today,
      ),
      array(
        'key' => 'end_date',
        'compare' => '>=',
        'value' => $today,
      )
    )
  );
  $chef_query = new WP_Query($args);
?>
<?php if($chef_query->have_posts()): ?>
  <?php while($chef_query->have_posts()): $chef_query->the_post(); ?>
    <div class="row">
      <div class="col-xs-12 chef-menu-description">
        <h1><?php the_field('menu_name'); ?></h1>
        <h4>by <?php echo the_full_name(get_the_ID()); ?></h4>
        <div class="run-dates"><?php the_field('start_date'); ?> - <?php the_field('end_date'); ?></div>
        <div class="description"><?php the_field('menu_description'); ?></div>
      </div>
    </div>
    <?php get_template_part('templates/menu'); ?>
  <?php endwhile; ?>
<?php endif; ?>
<?php the_content(); ?>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
