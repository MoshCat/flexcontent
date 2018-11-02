<?php

namespace App;

/**
* Add Flexcontent Styling
*/
add_action('admin_enqueue_scripts', function () {
    wp_enqueue_style('flexcontent', get_template_directory_uri() . '/flexcontent.css', array(), '1.0');
});
