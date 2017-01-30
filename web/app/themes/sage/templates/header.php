<header class="site-header">
  <div class="container-fluid">
    <nav class="navbar navbar-dark navbar-full bg-custom" role="navigation">
      <div class="row">
        <div class="col-xs-6 toggle-wrap">
          <button class="navbar-toggler hidden-lg-up toggle-button" type="button" data-toggle="collapse" data-target="#navbar-header" aria-expanded="false" aria-label="Toggle navigation"></button>
        </div>
        <div class="col-xs-6">
          <img class="hidden-lg-up img-responsive invert-color float-right" alt="atx-logo" src="<?php echo get_template_directory_uri(); ?>/dist/images/COLLIDE-ATX-square.png" srcset="<?php echo get_template_directory_uri(); ?>/dist/images/COLLIDE-ATX-square.png 1x, <?php echo get_template_directory_uri(); ?>/dist/images/COLLIDE-ATX-square@2x.png 2x" />
        </div>
      </div>
      <div class="collapse navbar-toggleable-md" id="navbar-header">
        <a class="navbar-brand brand hidden-sm-down" href="<?= esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/COLLIDE-CLEAN-ATX-HORIZONTAL.png" srcset="<?php echo get_template_directory_uri(); ?>/dist/images/COLLIDE-CLEAN-ATX-HORIZONTAL.png 1x, <?php echo get_template_directory_uri(); ?>/dist/images/COLLIDE-CLEAN-ATX-HORIZONTAL@2x.png 2x"/></a>
        <div class="slogan-header hidden-sm-down">EAT, DRINK, CREATE</div>
        <div class="float-lg-right">
          <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav', 'container' => 'div', 'container_id' => 'navbar-collapse-1']);
          endif;
          ?>
        </div>
      </div>
    </nav>
  </div>
</header>
