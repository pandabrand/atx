<article <?php post_class(); ?>>
  <header>
    <?php
      $names = array(get_field('first_name'),get_field('second_name'),get_field('third_name'));
    ?>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php echo implode(' ', $names); ?></a></h2>
  </header>
  <div class="entry-summary">
    <div class="row">
      <div class="col-md-12 col-lg-6 image-container">
        <?php
        $image = get_field('front_page_image');
        $img_src = wp_get_attachment_image_url( $image['ID'], 'large' );
        $img_srcset = wp_get_attachment_image_srcset( $image['ID'], 'large' );
        ?>
        <img src="<?php echo esc_url( $img_src ); ?>"
             srcset="<?php echo esc_attr( $img_srcset ); ?>"
             sizes="(min-width: 80em) 33.75em, 540px" class="img-fluid">
      </div>
      <div class="col-md-12 col-lg-6">
        <div class="teaser-text">
          <?php echo the_field('teaser_text'); ?>
        </div>
        <a href="<?php the_permalink(); ?>">Read More <i class="fa fa-angle-double-right"></i></a>
      </div>
    </div>
  </div>
</article>
