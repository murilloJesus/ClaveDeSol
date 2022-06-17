@extends('layouts.front')

@section('hero')
    <section id="hero" class="container">
        <header>
            <h2>@yield('title')</h2>
        </header>
    </section>
@endsection

@section('content')

    @yield('content')
@endsection


