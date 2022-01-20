@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <h1>Total users {{$counter}}</h1>
                @php
                echo "<pre>";
                print_r($users);
                @endphp
            </div>
        </div>
    </div>
</div>
@endsection
