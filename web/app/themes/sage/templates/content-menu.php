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
    <?php if(have_rows('menu_items')): ?>
      <div class="row chef-menu">
        <?php while(have_rows('menu_items')): the_row(); ?>
          <div class="col-xs-12 col-sm-3 title">
            <?php the_sub_field('title'); ?>
          </div>
          <div class="col-xs-12 col-sm-6 description">
            <?php the_sub_field('item_description'); ?>
            <span class="menu-notes"><? the_sub_field('item_details'); ?></span>
          </div>
          <div class="col-xs-12 col-sm-3">
            <?php the_sub_field('price'); ?>
          </div>
          <div class="col-xs-12 menu-spacer"></div>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>
  <?php endwhile; ?>
  <div class="row">
    <div class="col-xs-12 col-sm-6 image-container">
      <?php
      $image = get_field('biography_image');
      $img_src = wp_get_attachment_image_url( $image['ID'], 'small' );
      $img_srcset = wp_get_attachment_image_srcset( $image['ID'], 'small' );
      ?>
      <img src="<?php echo esc_url( $img_src ); ?>"
           srcset="<?php echo esc_attr( $img_srcset ); ?>"
           >
    </div>
    <div class="col-xs-12 col-sm-6">
      <a href="<?php the_permalink(); ?>"><?php echo the_full_name(get_the_ID()); ?></a>
      <br/>Biography here
    </div>
  </div>
<?php endif; ?>
<?php the_content(); ?>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
