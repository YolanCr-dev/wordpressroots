@extends('layouts.app')

@section('content')

{{-- Check page exists --}}
@while (have_posts()) @php the_post() @endphp

<div class="page-partners">
    <section class="section partners-hero">
        <div class="container">
            <h1>Our Partners</h1>
        </div>
    </section>

    <section class="section partners-wrapper">
        <div class="container">

            @php
            $args = [
            'posts_per_page' > -1,
            'offset' => 0,
            'orderby' => 'date',
            'order' => 'DESC',
            'post_type' => 'partners',
            ];

            $the_query = new \WP_Query($args);
            @endphp

            @while ($the_query->have_posts()) @php $the_query->the_post() @endphp

            @php

            // Custom post type fields
            // Image
            $logo = get_field('logo');
            $logo_url = $logo["url"];
            $logo_title = $logo["title"];
            $logo_alt = $logo["alt"];
            $logo_caption = $logo["caption"];
            $size = 'medium'; // thumbnail, medium, large
            $thumb = $logo['sizes'][$size];
            $width = $logo['sizes'][$size . '-width'];
            $height = $logo['sizes'][$size . '-height'];

            //Other Fields
            $name = get_field('name');
            $url = get_field('url');
            $short_description = get_field('short_description');
            $type = get_field('type');

            @endphp

            <div class="card-partner-wrapper">
                <div class="card card-partner">
                    <div class="card-img">
                        <img class="card-img-top" src="{{ $logo_url }}" alt="{{$logo_alt}}">
                    </div>
                    <div class="card-body">
                        <div class="card-body-text">
                            <span>{{ $type[0] }} Partner</span>
                            <h3 class="card-title">{{ $name }}</h3>
                            <p class="card-text">{{ $short_description }}</p>
                        </div>
                        <div class="card-body-action">
                            <a href="{{ $url }}" class="btn btn-primary">Go to website</a>
                        </div>
                    </div>
                </div>
            </div>


            @endwhile

            @php
            wp_reset_postdata();
            @endphp

        </div>
    </section>

</div>
@endwhile

@endsection
