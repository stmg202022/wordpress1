
<?php

    add_action( 'after_setup_theme', 'theme_slug_setup' );

    function theme_slug_setup() {
        error_log('Executing theme setup.');
        add_theme_support( 'wp-block-styles' );
    }

    // include get_parent_theme_file_path( 'inc/helpers.php' );
    include get_theme_file_path( 'inc/helpers.php' );
