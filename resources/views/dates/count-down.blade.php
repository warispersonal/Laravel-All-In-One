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

    <button type="button" id="toggleButton">Toggle</button>

    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery.plugin.js')}}"></script>
    <script src="{{asset('js/jquery.countdown.js')}}"></script>
    <script>
        $('#showAll').countdown({
            until: new Date("{{$user->created_at}}"),
            format: 'YOWDHMS', // Show all values every time even if these are zeros
            onExpiry: liftOff, // when time is expire then this functiona is call
            onTick: watchCountdown, // When 1 tick then call this function
            tickInterval: 5, // this can set about function time how much time passed then its function cal
            expiryText: '<div class="over">It\'s all over</div>', // show test instead of showing empty zero its only work when time left and you dont have empty value
            expiryUrl: 'https://jquery.com', // when time passed then goto this url
            description: 'To go to jQuery', // Show text or description
            padZeroes: true, // If you want to show 00 Two digit value like previous
            format: 'yowdhms', // show only non zero values  if all small the no values show if time is zero
            // layout: '{sn} {sl}, {mn} {ml}, {hn} {hl}, and {dn} {dl}', // custom formatting 2 Seconds, 53 Minutes, 23 Hours, and 4 Days,
            until: +300, //Until 300 seconds time
            until: '+2d', //Until two days time
            until: '+2d +4h', //Until two days and four hours time

        });

        // Start and stop timer
        $('#toggleButton').click(function() {
            $('#showAll').countdown('toggle');
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
