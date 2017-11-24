@if(Session::has('toastr.alerts'))
    <div id="toastr">
        @foreach(Session::get('toastr.alerts') as $alert)

            <div class='alert alert-{{ $alert['type'] }} @if(array_get($alert,'params.important') == true) important @endif'>
                <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&times;</button>

                @if( ! empty($alert['title']))
                    <div><strong>{{ $alert['title'] }}</strong></div>
                @endif

                {{ $alert['message'] }}

                @if(array_get($alert,'params.important')) (This alert is marked as important) @endif

            </div>

        @endforeach
    </div>
@endif

{{--<div id="flash-message">--}}
    {{--@if (Session::has('success'))--}}

        {{--<div class="alert alert-success" role="alert">--}}
            {{--<strong>Success:</strong> {{ Session::get('success') }}--}}
        {{--</div>--}}

    {{--@endif--}}

    {{--@if (count($errors) > 0)--}}

        {{--<div class="alert alert-danger" role="alert">--}}
            {{--<strong>Errors:</strong>--}}
            {{--<ul>--}}
                {{--@foreach ($errors->all() as $error)--}}
                    {{--<li>{{ $error }}</li>--}}
                {{--@endforeach--}}
            {{--</ul>--}}
        {{--</div>--}}

    {{--@endif--}}
{{--</div>--}}