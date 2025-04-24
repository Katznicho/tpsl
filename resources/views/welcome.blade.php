@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
    @include('components.home.hero')
    @include('components.home.about-us')
    @include('components.home.services')
    @include('components.home.why-choose-us')
    @include('components.home.core-services')
    @include('components.home.expertise')
    @include('components.home.training-programs')
    @include('components.home.client-testimonials')
    @include('components.home.certifications')
    @include('components.home.contact')
@endsection