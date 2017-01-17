<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <div class="row">
      <?php
      $image = get_field('front_page_image');
      $img_src = wp_get_attachment_image_url( $image['ID'], 'full' );
      $img_srcset = wp_get_attachment_image_srcset( $image['ID'], 'full' );
      ?>
      <div class="col-xs-12 bio-image" style="background: url(<?php echo $image['url']; ?>) no-repeat center fixed; background-size:cover;">
      </div>
      <div class="col-xs-12 col-sm-6 bio-content">
        <h1><?php echo the_full_name(get_the_ID());; ?></h1>
        <div class="bio-text">
          <?php the_field('biography'); ?>
        </div>
      </div>

        <div class="col-xs-12 col-sm-6 chef-menu-description bio-content">
          <h1><?php the_field('menu_name'); ?></h1>
          <div class="run-dates"><?php the_field('start_date'); ?> - <?php the_field('end_date'); ?></div>
          <div class="description"><?php the_field('menu_description'); ?></div>
          <?php get_template_part('templates/menu'); ?>
        </div>

    </div>
  </article>
<?php endwhile; ?>
