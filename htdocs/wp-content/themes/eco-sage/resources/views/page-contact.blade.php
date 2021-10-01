@extends('layouts.app')

@section('content')

<div class="page page-contact">
    <section class="section contact-hero">
        <div class="container">
            <h1>{{ $post->post_title}}</h1>
            <!--Post object is made available and shared by sage in setup.php-->
        </div>
    </section>

    <section class="section partners-wrapper">
        <div class="container">
            <hgroup>
                <h1>{{ $post->post_title }}</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam cum pariatur veniam mollitia exercitationem alias ipsum itaque numquam excepturi voluptas architecto tempora, doloremque eos recusandae officia quas aspernatur sit ad!</p>
            </hgroup>
            <div class="contact-wrapper">
                @php
                echo do_shortcode('[wpforms id="60" title="false"]')
                @endphp
            </div>
        </div>
    </section>



</div>

@endsection
