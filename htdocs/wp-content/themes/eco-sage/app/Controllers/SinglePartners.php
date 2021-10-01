<?php

namespace App\controllers;

use Sober\Controller\Controller;

class SinglePartners extends Controller
{
    public function partner() {
        return (object)  [
            'name' => get_field('name', get_the_ID()),
            'url' => get_field('url', get_the_ID()),
            'short_description' => get_field('short_description', get_the_ID()),
            'type' => get_field('type', get_the_ID())[0],
            'featured_img_url' => get_the_post_thumbnail_url(get_the_ID()),
            'full_description' => get_field('full_description', get_the_ID())
        ];
    }
}