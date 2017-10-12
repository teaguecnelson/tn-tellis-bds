@extends('layouts.app')

@section('mini-hero')
  <div class="category-mini-hero-wrapper">
    <div class="category-mini-hero">
      @include('partials.page-header')
      @if (is_category( 'DIY Projects for Preppers' ))
        @include('partials.sidebar-diy-submenu')
      @endif
    </div>
  </div>
@endsection

@section('content')
  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  @while (have_posts()) @php(the_post())
    @include('partials.content-'.get_post_type())
  @endwhile

  {!! get_the_posts_navigation() !!}
@endsection
