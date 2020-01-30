<?php
/**
 * Plugin Name: Hello Wordpress Plugin
 * Plugin URI: http://my.plugin
 * Description: My wordpress plugin
 * Version: 1.0
 * Author: Freewind
 * Author URI: http://my.host
 */

function helloHead()
{
    echo '<script>alert("Hello Head")</script>';
}

function helloFooter()
{
    echo '<h1>Hello, footer</h1>';
}

add_action('wp_head', 'helloHead');
add_action('wp_footer', 'helloFooter');

?>