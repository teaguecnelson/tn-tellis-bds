@extends('layouts.app')

@section('content')
  @include('partials.hero-section')
  @include('partials.popular-posts')
  @include('partials.email-capture')
  @include('partials.recent-posts')
@endsection
