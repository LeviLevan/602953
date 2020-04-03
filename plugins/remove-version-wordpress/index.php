<?php
/*
Plugin Name: Remove Version for Wordpress
Version: 0.1
Plugin URI: http://codecanyon.net/item/remove-version-for-wordpress
Description: A simple plugin that upon activation will save you from the annoying "?ver=" signs inside your perfect code.
Author: George Gkouvousis
Author URI: http://www.8web.gr/
*/

add_filter( 'style_loader_src', 'wordpress_remove_version' );
add_filter( 'script_loader_src', 'wordpress_remove_version' );

function wordpress_remove_version( $url )
{
    return remove_query_arg( 'ver', $url );
}

?>