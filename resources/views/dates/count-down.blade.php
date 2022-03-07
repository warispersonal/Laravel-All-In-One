@extends('layouts.app')

@section('content')
    <link href="{{asset('css/jquery.countdown.css')}}" />
    <style>
        .countdown-row span{
            padding: 10px !important;
        }
    </style>
    <h1>Count Down</h1>

    <div id="showAll">

    </div>

    <h1 id="monitor">Call Back </h1>

    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery.plugin.js')}}"></script>
    <script src="{{asset('js/jquery.countdown.js')}}"></script>
    <script>
        $('#showAll').countdown({
            until: new Date("{{$user->created_at}}"),
            format: 'YOWDHMS',
            onExpiry: liftOff, // when time is expire then this functiona is call
            onTick: watchCountdown, // When 1 tick then call this function
            tickInterval: 5, // this can set about function time how much time passed then its function cal

        });

        function liftOff() {
            alert('My dear sorry! time complete');
        }

        function watchCountdown(periods) {
            $('#monitor').text('Just ' + periods[5] + ' minutes and ' +
                periods[6] + ' seconds to go');
        }

    </script>
@endsection
