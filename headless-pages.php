<?php
/*
Plugin Name: Headless Pages
Plugin URI:  https://github.com/johnmmackey/wp-headless-pages
Description: Disables the default WP editor and other unneeded features on the Page Edit screen for use in headless CMS applications
Version:     1.0.0
Author:      John Mackey
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html 
*/

/**
 * Hide the Page and Post Content Editor - Gutenberg, as well as other fields
 * not used in headless mode
 */
add_action( 'init', function() {
        remove_post_type_support( 'page', 'editor' );
        remove_post_type_support( 'page', 'excerpt' );
        remove_post_type_support( 'page', 'trackbacks' );
        remove_post_type_support( 'page', 'comments' );
}, 99);
?>

