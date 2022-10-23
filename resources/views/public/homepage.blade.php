@extends('layouts/public')

@section('title', 'Homepage')

@section('content')
  @include('public/partials/slider')
  @include('public/partials/about')
  @include('public/partials/experience')
  @include('public/partials/services')
  @include('public/partials/menu')
  @include('public/partials/chefs')
  @include('public/partials/book-a-table')
  @include('public/partials/testimony')
  @include('public/partials/recent-posts')
@endsection