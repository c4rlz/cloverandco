{{--
  Template Name: Landing Page
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    <!-- @include('partials.page-header') -->
    @include('partials.content-landing')
  @endwhile
@endsection

