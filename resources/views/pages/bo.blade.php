@extends('templates.back')
@section('content')
    @include('partials.hero')
    <main id="main">
        @include('partials.about')
        @include('partials.resume')
        @include('partials.services')
        @include('partials.testimonials')
        @include('partials.portfolio')
        @include('partials.pricing')
        @include('partials.contact')
    </main>
@endsection