@extends('layouts.app')

@section('content')
<div class="page page-single">
    @while(have_posts()) @php the_post() @endphp
    @include('partials.content-single-'.get_post_type())
    @endwhile
</div>

@endsection
