@extends('templates.back')
@section('content')
    @include('bo.editHero')
    <main id="main">
        @include('bo.editAbout')
        @include('partials.resume')
        @include('partials.services')
        @include('partials.testimonials')
        @include('partials.portfolio')
        @include('partials.pricing')
        @include('partials.contact')
        @include('bo.modals')

    </main>
@endsection