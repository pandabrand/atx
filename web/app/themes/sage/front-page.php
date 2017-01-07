<?php
  $today = date('Ymd');
  $args = array(
    'numberofposts' => 2,
    'post_type' => ['chef', 'artist'],
    'orderby' => 'type',
    'order' => 'DESC',
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
  $front_query = new WP_Query($args);
?>
<?php if($front_query->have_posts()): ?>
  <?php include( locate_template('templates/content-front_carousel.php', false , false)); ?>
<?php endif; ?>
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'front'); ?>
<?php endwhile; ?>
