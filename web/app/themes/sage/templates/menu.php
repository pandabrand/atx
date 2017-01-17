<?php if(have_rows('menu_group')): ?>
  <?php while(have_rows('menu_group')): the_row(); ?>
    <div class="row chef-menu-group">
      <?php the_sub_field('menu_group_title'); ?>
    </div>
    <?php if(have_rows('menu_items')): ?>
      <div class="row chef-menu">
        <?php while(have_rows('menu_items')): the_row(); ?>
          <div class="col-xs-12 col-sm-3 title">
            <?php the_sub_field('title'); ?>
          </div>
          <div class="col-xs-12 col-sm-6 description">
            <?php the_sub_field('description'); ?>
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
<?php endif; ?>
