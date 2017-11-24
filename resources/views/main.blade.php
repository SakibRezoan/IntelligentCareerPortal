<!DOCTYPE html>
<html lang="en">
    <head>
        @include('partials._head')
    </head>
    <body>
        @yield('nav')
        <div class="container">
            @yield('content')
        </div>
        @include('partials._footer')
        @include('partials._javascript')
        @yield('scripts')
    </body>
    <script>
                @if(Session::has('message'))
        var type="{{Session::get('alert-type','info')}}"


        switch(type){
            case 'info':
                toastr.info("{{ Session::get('message') }}");
                break;
            case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;
            case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;
            case 'error':
                toastr.error("{{ Session::get('message') }}");
                break;
        }
        @endif
    </script>

</html>
