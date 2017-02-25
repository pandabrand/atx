<?php dynamic_sidebar('sidebar-primary'); ?>
  <?php
    $today = date('Ymd');
    $args = array(
      'numberofposts' => 1,
      'post_type' => ['chef'],
      'orderby' => 'type',
      'order' => 'DESC',
      'meta_query' => array(
        array(
          'key' => 'start_date',
          'compare' => '>=',
          'value' => $today,
        )
      )
    );
    $front_query = new WP_Query($args);
    $upcoming_posts = $front_query->posts;
  ?>
  <?php if(!empty($upcoming_posts)): $upcoming = $upcoming_posts[0]; ?>
    <div class="upcoming">
      <h3>Serving Next</h3>
      <div class="upcoming-chef-aside">
        <div class="name"><?php echo the_full_name($upcoming->ID); ?></div>
        <div class="upcoming-image">
          <?php
          $image = get_field('front_page_image', $upcoming->ID);
          $img_src = wp_get_attachment_image_url( $image['ID'], 'small' );
          $img_srcset = wp_get_attachment_image_srcset( $image['ID'], 'small' );
          ?>
          <div class="image-container">
              <a href="<?php the_permalink($upcoming->ID); ?>">
              <img src="<?php echo esc_url( $img_src ); ?>"
                   srcset="<?php echo esc_attr( $img_srcset ); ?>" class="img-fluid" />
              </a>
          </div>
        </div>
        <div class="upcoming-date-aside">
          <?php the_field('start_date', $upcoming->ID); ?> - <?php the_field('end_date', $upcoming->ID); ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
