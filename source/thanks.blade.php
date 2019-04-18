@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="Thanks {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="Thank you for contacting {{ $page->siteName }}" />
@endpush

@section('body')
    <h1>Thank You!</h1>

    <img src="/assets/img/about.png"
        alt="Thanks image"
        class="flex rounded-full h-64 w-64 bg-contain mx-auto md:float-right my-6 md:ml-10">

    <p class="mb-6">Thank you for contacting <a href="/">localgyros.com</a></p>

    <p class="mb-6">Your questions are important to us! We will get back to you as soon as possible.</p>

@endsection
