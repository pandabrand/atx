<header class="site-header">
  <div class="container-fluid">
    <nav class="navbar navbar-dark navbar-full bg-custom" role="navigation">
      <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbar-header" aria-controls="navbar-header" aria-expanded="false" aria-label="Toggle navigation"></button>
      <div class="collapse navbar-toggleable-md" id="navbar-header">
        <a class="navbar-brand brand" href="<?= esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/COLLIDE-ATX.png" srcset="<?php echo get_template_directory_uri(); ?>/dist/images/COLLIDE-ATX.png 1x, <?php echo get_template_directory_uri(); ?>/dist/images/COLLIDE-ATX@2x.png 2x"/></a>
        <div class="slogan-header">EAT, DRINK, CREATE</div>
        <div class="float-lg-right">
          <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav']);
          endif;
          ?>
        </div>
      </div>
    </nav>
  </div>
</header>
