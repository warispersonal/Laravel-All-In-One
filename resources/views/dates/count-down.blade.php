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

    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery.plugin.js')}}"></script>
    <script src="{{asset('js/jquery.countdown.js')}}"></script>
    <script>
        $('#showAll').countdown({
            until: new Date("{{$user->created_at}}"),
            format: 'YOWDHMS'
        });
    </script>
@endsection
