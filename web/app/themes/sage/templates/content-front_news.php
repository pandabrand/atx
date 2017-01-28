<?php
  $args = array(
    "posts_per_page" => 3,
    "orderby"        => "date",
    "order"          => "DESC"
);
  $recent_posts = new WP_Query( $args );
  if($recent_posts->have_posts()):
?>
  <div class="front-events">
    <h2>Latest News</h2>
    <?php while($recent_posts->have_posts()): $recent_posts->the_post(); ?>
    <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
    <?php endwhile; ?>
  </div>
<?php endif; ?>
