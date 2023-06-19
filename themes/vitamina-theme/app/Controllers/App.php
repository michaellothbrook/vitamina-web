<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller
{

    private $app_name;

    public function __construct()
    {
        $this->app_name = get_bloginfo('name');
    }

    public function siteName()
    {
        return $this->app_name;
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }

    public function optionsFooter()
    {
        return get_field('footer_options', 'option');
    }

    public function optionsFooterColumnOne()
    {
        return get_field('footer_column_1', 'options');
    }

    public function optionsFooterColumnTwo()
    {
        return get_field('footer_column_2', 'options');
    }
}
