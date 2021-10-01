<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class PagePartners extends Controller
{
    public function partners(){
        $args = [
            'posts_per_page' > -1,
            'offset' => 0,
            'orderby' => 'date',
            'order' => 'DESC',
            'post_type' => 'partners',
        ];

        $the_query = new \WP_Query($args);
        $partners = [];

        if ($the_query->post_count > 0){
            $partners = array_map(function($project){

                // Custom post type fields
                // Image
                $logo = get_field('logo', $project);
                $logo_url = $logo["url"];
                $logo_title = $logo["title"];
                $logo_alt = $logo["alt"];
                $logo_caption = $logo["caption"];
                $size = 'medium'; // thumbnail, medium, large
                $logothumb = $logo['sizes'][$size];
                $logowidth = $logo['sizes'][$size . '-width'];
                $logoheight = $logo['sizes'][$size . '-height'];

                //Other Fields
                $name = get_field('name', $project);
                $url = get_field('url', $project);
                $short_description = get_field('short_description', $project);
                $type = get_field('type', $project);

                return (object)[
                    'logo_url' => $logo_url,
                    'logo_title' => $logo_title,
                    'logo_alt' => $logo_alt,
                    'logo_caption' => $logo_caption,
                    'logothumb' => $logothumb,
                    'logowidth' => $logowidth,
                    'logoheight' => $logoheight,
                    'name' => $name,
                    'url' => $url,
                    'short_description' => $short_description,
                    'type' => $type,
                    'permalink' => get_post_permalink($project)
                ];
                
            }, $the_query->posts);

            wp_reset_postdata();
        }
        return $partners;
    }
}