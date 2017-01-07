  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-9 col-lg-9 pad-left">
      <div class="row">
        <div class="col-xs-12">
          <div class="front-text">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
      <?php get_template_part('templates/content', 'front_events'); ?>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 pad-right">
      <aside>
        <script type="text/javascript" src="//static.mailerlite.com/data/webforms/258122/r6a9p8.js?v1"></script>
        <div class="social-links">
          <a href="#" target="_blank" class="social-link"><i class="fa fa-twitter fa-lg"></i></a>
          <a href="#" target="_blank" class="social-link"><i class="fa fa-facebook fa-lg"></i></a>
          <a href="#" target="_blank" class="social-link"><i class="fa fa-instagram fa-lg"></i></a>
          <a href="#" target="_blank" class="social-link"><i class="fa fa-pinterest fa-lg"></i></a>
          <a href="#" target="_blank" class="social-link"><i class="fa fa-youtube-play fa-lg"></i></a>
          <a href="#" target="_blank" class="social-link"><i class="fa fa-tumblr fa-lg"></i></a>
          <a href="#" target="_blank" class="social-link"><i class="fa fa-spotify fa-lg"></i></a>
        </div>
      </aside>
    </div>
  </div>
