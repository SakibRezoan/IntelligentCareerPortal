@extends('main')
@section('title', 'Intelligent Career Portal')
@section('content')
    <div id="app">
        @yield('nav')
        @yield('content')
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/app.js') }}"> </script>
@endsection