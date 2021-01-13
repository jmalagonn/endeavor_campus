<?php

// Setup
define( 'CA_DEV_MODE', true );

// Includes
include(get_theme_file_path( 'inc/front/enqueue.php' ));
include(get_theme_file_path( 'inc/setup.php' ));
include(get_theme_file_path( 'process/categories-fields.php' ));
include(get_theme_file_path( 'process/save-extra-cat-fields.php' ));
include(get_theme_file_path( 'process/filter-content-click.php' ));

// Hooks
add_action( 'wp_enqueue_scripts', 'ca_enqueue');
add_action( 'after_setup_theme', 'ca_setup_theme');
add_action( 'category_edit_form_fields', 'custom_categories_fields' );
add_action( 'edited_category', 'edited_category_extra_fields' );
add_action( 'wp_ajax_filter_content_click', 'filter_content_click' );
add_action( 'wp_ajax_nopriv_filter_content_click', 'filter_content_click' );

// Shortcodes