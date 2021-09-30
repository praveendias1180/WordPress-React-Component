<?php
/**
* Plugin Name: UDSSL WP React
*/

/**
 * Add the shortcode [udssl_react] to display the react component
 */
add_shortcode('udssl_react', 'udssl_render_react_component');
function udssl_render_react_component(){
    wp_enqueue_script('udssl_wp_react_bundle', plugins_url('dist/bundle.js', __FILE__), array(), false, true);

    return '<div id="udssl_wp_react_element"></div>';
}