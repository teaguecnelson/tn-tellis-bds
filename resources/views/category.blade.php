@extends('layouts.app')

@section('mini-hero')
  @if (is_category( 20 ) || cat_is_ancestor_of( 20, get_queried_object_id())) 
    @include('partials.submenu-prepping')
  @endif

  @if (is_category( 9 ) || cat_is_ancestor_of( 9, get_queried_object_id()))
    @include('partials.submenu-self-reliance')
  @endif
  <div class="category-mini-hero-wrapper">
    <div class="category-mini-hero">
      @include('partials.page-header')
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
