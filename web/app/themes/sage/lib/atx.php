<?php
add_filter('get_the_archive_title', function($title){
  if(is_post_type_archive()) {
    $title = sprintf(__('%s'), post_type_archive_title('', false));
  } elseif (is_category()) {
    $title = sprintf(__('%s'), single_cat_title('', false));
  }
  return $title;
});

function load_google_fonts() {
  echo '<link href="http://fonts.googleapis.com/css?family=HIND:400,700|Roboto|Bungee+Inline" rel="stylesheet" type="text/css" />'."\n";
}
add_action('wp_head', 'load_google_fonts', 1);

/**
 * Retrieve full name for Artist and Chef Post Types.
 *
 * @since 1.0.0
 *
 * @param int|WP_Post $post      Optional. Post ID or post object. Default is the global `$post`.
 * @return string|false The permalink URL or false if post does not exist.
 */
function the_full_name($post_id) {
  $names = array(get_field('first_name', $post_id),get_field('second_name', $post_id),get_field('third_name', $post_id));
  $full_name = implode(' ', $names);
  return $full_name;
}
