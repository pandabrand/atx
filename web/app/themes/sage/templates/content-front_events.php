<?php
  $args = array(
    'numberofposts' => 3,
    'post_type' => 'event',
    'meta_key' => 'event_date',
    'orderby' => 'meta_value',
    'order' => 'DESC'
  );

  $event_query = new WP_Query($args);
  if($event_query->have_posts()):
?>
  <div class="front-events">
    <?php while ($event_query->have_posts()): $event_query->the_post(); ?>
      <div class="row event-row">
        <div class="front-event-image-container col-md-12 col-lg-8">
          <?php
          $image = get_field('event_photo');
          $img_src = wp_get_attachment_image_url( $image['ID'], 'full' );
          $img_srcset = wp_get_attachment_image_srcset( $image['ID'], 'full' );
          ?>
          <img src="<?php echo esc_url( $img_src ); ?>"
               srcset="<?php echo esc_attr( $img_srcset ); ?>"
               sizes="(min-width: 80em) 55.5em, 720px">
        </div>
        <div class="front-event-content-container col-md-12 col-lg-4">
          <h2><?php the_title(); ?></h2>
          <div class="brief">
            <?php echo get_field('event_excerpt'); ?>
          </div>
          <div class="details">
            <div class="date-time-container">
              <span class="event-date"><?php echo get_field('event_date'); ?></span>
              <span class="event-time"><?php echo get_field('event_time'); ?></span>
            </div>
            <a class="btn btn-outline-secondary" href="<?php the_permalink(); ?>">More Info</a>
          </div>
      </div>
    </div>
    <?php endwhile; ?>
  </div>
<?php endif; ?>
