<article <?php post_class(); ?>>
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  </header>
  <div class="entry-summary">
    <div class="row">
      <div class="col-md-12 col-lg-6 image-container">
        <?php
        $image = get_field('event_photo');
        $img_src = wp_get_attachment_image_url( $image['ID'], 'large' );
        $img_srcset = wp_get_attachment_image_srcset( $image['ID'], 'large' );
        ?>
        <img src="<?php echo esc_url( $img_src ); ?>"
             srcset="<?php echo esc_attr( $img_srcset ); ?>"
             sizes="(min-width: 80em) 33.75em, 540px">
      </div>
      <div class="col-md-12 col-lg-6">
        <div class="event-date-time">
          <span class="event-date"><?php the_field('event_date'); ?></span>
          <span class="event-time"><?php the_field('event_time'); ?></span>
        </div>
        <div class="event_excerpt">
          <?php the_field('event_excerpt'); ?>
        </div>
      </div>
    </div>
  </div>
</article>
