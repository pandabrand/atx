<div class="front-carousel">
  <?php while ($front_query->have_posts()): $front_query->the_post(); ?>
    <div class="carousel-container">
      <div class="content-container">
        <a href="<?php the_permalink(); ?>">
          <?php
          $image = get_field('front_page_image');
          $img_src = wp_get_attachment_image_url( $image['ID'], 'full' );
          $img_srcset = wp_get_attachment_image_srcset( $image['ID'], 'full' );
          ?>
          <img src="<?php echo esc_url( $img_src ); ?>"
               srcset="<?php echo esc_attr( $img_srcset ); ?>"
               sizes="(min-width: 80em) 55.5em, 877px">
       </a>
       <div class="carousel-text">
         <div class="carousel-text-title">
          <?php echo the_full_name(get_the_ID()); ?>
        </div>
        <div class="carousel-text-body">
          <?php echo the_field('teaser_text'); ?>
        </div>
       </div>
      </div>
    </div>
  <?php endwhile; ?>
</div>
