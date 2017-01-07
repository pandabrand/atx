<?php the_content(); ?>
<?php get_template_part('templates/content-gallery_images'); ?>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
