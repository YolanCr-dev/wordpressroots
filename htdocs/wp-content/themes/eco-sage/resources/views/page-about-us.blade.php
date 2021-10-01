@extends('layouts.app')

@section('content')

<div class="about-wrapper">
    <h1>{{ $post->post_title }}</h1>
    {!! $post->post_content !!}
</div>
  {{-- @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile --}}
@endsection
