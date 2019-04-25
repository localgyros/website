@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="About {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="A little bit about {{ $page->siteName }}" />
@endpush

@section('body')
    <h1>About</h1>

    <img src="/assets/img/about.png"
        alt="About image"
        class="flex h-64 w-64 bg-contain mx-auto md:float-right my-6 md:ml-10">

    <p class="mb-6"><a href="/">localgyros</a> builds satellite preview mission APIs.</p>
    <p class="mb-6">Why not build your application first, then design and launch your satellite <em>after</em> your
        application is ready to accept data from it, and capable of sending commands to it? After you have perfected
        your software, you can minimize the time needed to cut over to your real bird by using our <em>satellite
        preview mission APIs</em> (spmapi) to simulate data and command feeds before you even design it!</p>

@endsection
