<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
    public function featuredHero(): \WP_Query
    {
        $args = [
            'post_type'                 => 'page',
            'post_name__in'             => ['hero'],
            'posts_per_page' =>         1,
            'post_status'               => 'published',
            'nopaging' => false,
            'paged' => 1,
            'no_found_rows'             => true,
        ];
        return new \WP_Query($args);
    }
    public function featuredAbout(): \WP_Query
    {
        $args = [
            'post_type'                 => 'page',
            'post_name__in'             => ['about'],
            'posts_per_page' =>         1,
            'post_status'               => 'published',
            'nopaging' => false,
            'paged' => 1,
            'no_found_rows'             => true,
        ];
        return new \WP_Query($args);
    }
    public function featuredClasses(): \WP_Query
    {
        $args = [
            'post_type'                 => 'page',
            'post_name__in'             => ['classes', 'instructors'],
            'orderby'                   => 'menu_order',
            'order' => 'ASC',
            'posts_per_page' =>         2,
            'post_status'               => 'published',
            'nopaging' => true,
            'paged' => 1,
            'no_found_rows'             => true,
        ];
        return new \WP_Query($args);
    }
}
