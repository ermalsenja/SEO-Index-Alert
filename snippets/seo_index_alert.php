<?php if(!defined('ABSPATH')) { die(); }  


add_action('plugins_loaded', function() {

                

	// Code Snippet Code
     

// Hook the functions into the correct actions
add_action('admin_head', 'custom_admin_bar_color');
add_action('wp_head', 'custom_admin_bar_color');
add_action('admin_notices', 'discourage_search_engines_notice');

function custom_admin_bar_color() {
    // Check if the user is logged in and has permission to see the admin bar
    if (is_user_logged_in() && current_user_can('manage_options')) {
        // Check if the "Discourage search engines" option is enabled
        if (get_option('blog_public') == '0') {
            echo '<style>
                #wpadminbar {
                    border-top: 5px solid #cf0000 !important;
                    background: #650000 !important;
                    color: #ffffff !important;
                }
                #wpadminbar a {
                    color: #ffffff !important;
                }
            </style>';
        }
    }
}

function discourage_search_engines_notice() {
    // Show a notice in the WordPress admin area if the setting is enabled
    if (get_option('blog_public') == '0' && current_user_can('manage_options')) {
        echo '<div class="notice notice-warning is-dismissible">
            <p><strong>Warning:</strong> The "Discourage search engines from indexing this site" setting is enabled. Search engines may not index your site properly. <a href="' . esc_url(admin_url('options-reading.php')) . '">Check your settings here.</a></p>
        </div>';
    }
}

    // End Code Snippet Code

}, 10);