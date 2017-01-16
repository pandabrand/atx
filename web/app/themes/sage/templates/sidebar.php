<div>
  <address>
    <h5>Come Join Us</h5>
    <div class="row">
      <div class="col-xs-6 address-left">
        <a href="https://www.google.com/maps/place/1802+E+6th+St,+Austin,+TX+78702/@30.2622365,-97.7253246,17z/data=!3m1!4b1!4m5!3m4!1s0x8644b5b6fba59221:0x2758a79d2d61b7f3!8m2!3d30.2622365!4d-97.7231359" target="_blank">1802 E. 6th St.</a><br>
        Austin, TX 78702<br>
        <a href="tel:1-512-609-8174">512.609.8174</a><br>
      </div>
      <div class="col-xs-6 address-right">
        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/dist/images/COLLIDE-ATX-square.png" srcset="<?php echo get_template_directory_uri(); ?>/dist/images/COLLIDE-ATX-square.png 1x, <?php echo get_template_directory_uri(); ?>/dist/images/COLLIDE-ATX-square@2x.png 2x" />
      </div>
    </div>
  </address>
  <address>
    <h5>Hours</h5>
    Sunday 11am-10pm<br>
    Monday-Thursday 5pm - 10pm<br>
    Friday-Saturday 11am - 12am
  </address>
</div>
<div class="social-links">
  <a href="http://twitter.com/@culturecollide" target="_blank" class="social-link"><i class="fa fa-twitter fa-lg"></i></a>
  <a href="http://facebook.com/culturecollideofficial" target="_blank" class="social-link"><i class="fa fa-facebook fa-lg"></i></a>
  <a href="http://instagram.com/officialculturecollide" target="_blank" class="social-link"><i class="fa fa-instagram fa-lg"></i></a>
  <a href="http://youtube.com/culturecollide" target="_blank" class="social-link"><i class="fa fa-youtube-play fa-lg"></i></a>
  <a href="http://culturecollideofficial.tumblr.com/" target="_blank" class="social-link"><i class="fa fa-tumblr fa-lg"></i></a>
  <a href="https://open.spotify.com/user/culturecollide" target="_blank" class="social-link"><i class="fa fa-spotify fa-lg"></i></a>
</div>
<div class="upcoming">
  <h3>Serving Next</h3>
  <?php
    $today = date('Ymd');
    $args = array(
      'numberofposts' => 2,
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
    $upcoming = $upcoming_posts[0];
  ?>
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
  <div class="membership-link">
    <div>Want exclusives? Become a member.</div>
    <a href="/become-a-member/">Apply Here <i class="fa fa-angle-double-right"></i></a>
  </div>
  <?php dynamic_sidebar('sidebar-primary'); ?>
