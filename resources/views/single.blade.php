@extends('layouts.app-single')

@section('mini-hero')
	@if (in_category( 20 ) || post_is_in_descendant_category( 20 )) 
		@include('partials.submenu-prepping')
	@endif

	@if (in_category( 9 ) || post_is_in_descendant_category( 9 ))
		@include('partials.submenu-self-reliance')
	@endif
@endsection

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.content-single-'.get_post_type())
  @endwhile
@endsection
