{{--
  Template Name: Template Home
--}}
@extends('layouts.app')

@section('content')
  @include('components.history')
  @include('components.why')
  @include('components.differentials')
  @include('components.latest-news')
  @include('components.contact')
@endsection
