{{--
  Template Name: Template Full
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    <h2>Full</h2>
    @include('partials.content-page')
  @endwhile
@endsection