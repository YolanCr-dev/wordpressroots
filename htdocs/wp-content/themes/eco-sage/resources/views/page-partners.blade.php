@extends('layouts.app')

@section('content')

<div class="page-partners">
    <section class="section partners-hero">
        <div class="container">
            <h1>{{ $post->post_title}}</h1>
            <!--Post object is made available and shared by sage in setup.php-->
        </div>
    </section>

    <section class="section partners-wrapper">
        <div class="container">

            <!--All WP_Query code is handled in controller to seperate front & back-end -->

            @foreach($partners as $partner)

            <div class="card-partner-wrapper">

                <div class="card card-partner">
                    <div class="card-img">
                        <img class="card-img-top" src="{{ $partner->logo_url }}" alt="{{$partner->logo_alt}}">
                    </div>
                    <div class="card-body">
                        <div class="card-body-text">
                            <span>{{ $partner->type[0] }} Partner</span>
                            <h3 class="card-title">{{ $partner->name }}</h3>
                            <p class="card-text">{{ $partner->short_description }}</p>
                            <a target="_blank" href="{{ $partner->url }}">Go to partners website >></a>
                        </div>
                        <div class="card-body-action">
                            <a href="{{ $partner->permalink }}" class="btn btn-primary">About our partnership</a>
                        </div>
                    </div>
                </div>

            </div>
            @endforeach

        </div>
    </section>

</div>

@endsection
