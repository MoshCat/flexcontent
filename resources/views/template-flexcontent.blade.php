{{--
  Template Name: Flexcontent
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('flexcontent.flexcontent')
  @endwhile
@endsection
