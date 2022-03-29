<?php
add_action('init', function() {
    add_theme_support('post-thumbnails');
});

function my_php_Include($params = array()) {
    extract(shortcode_atts(array('file' => 'default'), $params));
    ob_start();
    include(STYLESHEETPATH . "/$file.php");
    return ob_get_clean();
}
    add_shortcode('myphp', 'my_php_Include');