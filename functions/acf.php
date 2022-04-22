<?php

function registerCustomThemeSettingsPage() {
    if (function_exists('acf_add_options_page')) {

        add_image_size('foundation-small', 640, 9999);
        add_image_size('foundation-medium', 1024, 9999);
        add_image_size('foundation-large', 1440, 9999);
        add_image_size('foundation-x-large', 1920, 9999);
        add_image_size('foundation-gallery-thumb', 350, 350, true);

        //Stworzenie głównego katalogu w kokpicie
        acf_add_options_page(array(
            'page_title' => 'Ustawienia strony',
            'menu_title' => 'Ustawienia strony',
            'menu_slug' => 'ustawienia_strony',
            'capability' => 'edit_posts',
            'parent_slug' => '',
            'position' => 10,
            'icon_url' => false,
            'redirect' => false,
        ));
    }
}

add_action('init', 'registerCustomThemeSettingsPage');

function dede_get_option($name) {
    // when using Polylang, itry to get options from the front page instead of options page

    if (function_exists('pll__')) {
        $field = get_field($name, get_option('page_on_front'));

        if (!$field) {
            $field = get_field($name, 'option');
        }
    } else {
        $field = get_field($name, 'option');
    }

    return $field;
}

