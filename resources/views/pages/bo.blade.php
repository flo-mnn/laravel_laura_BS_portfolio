@extends('templates.back')
@section('content')
    @include('bo.editHero')
    <main id="main">
        @include('bo.editAbout')
        @include('bo.editResume')
        @include('bo.editServices')
        @include('bo.editTestimonials')
        @include('bo.editPortfolio')
        @include('bo.editPricing')
        @include('bo.editContact')
        @include('bo.modals')

    </main>
@endsection