<footer class="content-info">
  <div class="container">
    <div class="row">
      <div class="copyright col-xs-12 col-sm-4 align-self-end">&copy; <?php echo date('Y'); ?> Culture Collide</div>
      <div class="footer-links col-xs-12 col-sm-8">
        <div class="cc-brand-link">
          Take a tour with today's top bands, artists and tastemakers
          <a class="footer-brand" href="http://www.collidetravel.com" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/new-logo.png" srcset="<?php echo get_template_directory_uri(); ?>/dist/images/new-logo.png 1x, <?php echo get_template_directory_uri(); ?>/dist/images/new-logo@x2.png 2x"/></a>
        </div>
        <div class="cc-brand-link">
          Curating the most inspiring music, travel and culinary the globe has to offer.
          <a class="footer-brand" href="http://www.culturecollide.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/new-logo.png" srcset="<?php echo get_template_directory_uri(); ?>/dist/images/new-logo.png 1x, <?php echo get_template_directory_uri(); ?>/dist/images/new-logo@x2.png 2x"/></a>
        </div>
      </div>
    </div>
    <?php dynamic_sidebar('sidebar-footer'); ?>
  </div>
</footer>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=1247963348571465";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
