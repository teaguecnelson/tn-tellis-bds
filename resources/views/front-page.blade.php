@extends('layouts.app')

@section('content')
  @include('partials.sidebar-popular-posts')
  @include('partials.email-capture')
  @include('partials.authenticity-organism')

  <div class="three-up">
    <h4 class="three-up-header latest-articles-header">The Latest</h4>
    <div class="front-latest-articles-section">
      @if (!have_posts())
        <div class="alert alert-warning">
          {{ __('Sorry, no results were found.', 'sage') }}
        </div>
        {!! get_search_form(false) !!}
      @endif

      @while (have_posts()) @php(the_post())
        @include('partials.content-'.get_post_type())
      @endwhile
    </div>
  </div>

  {!! get_the_posts_navigation() !!}

@endsection
