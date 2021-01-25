{{--
  Template Name: Home page Template
--}}


@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    {{-- @include('partials.page-header') --}}
    <div class="slider-banner">
      {{-- Home page banner --}}
      <?php the_post_thumbnail(); ?>
      <h1><?php the_field('banner_heading'); ?></h1>
      <p><?php the_field('banner_paragraph'); ?></p>
    </div>
    @include('partials.bgimg')
    <div class="container">
      <div class="row">
        <div class="col-sm-8">
          @include('partials.content-page')
        </div>
        <div class="col-sm-4">
          @include('partials.sidebar')
        </div>
      </div>
  @endwhile
@endsection
