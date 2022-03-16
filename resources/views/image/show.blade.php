@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Upload Image') }}</div>
                    <div class="card-body">
                        <div class="max-w-sm mx-auto py-8">
                            <h3>Showing image from file name </h3>
                            <img class="img img-fluid" src="{{Storage::disk('s3')->url('images/' .$imageName)}}">
                            <h3>Showing image from file url </h3>
                            <img class="img img-fluid" src="{{$imageUrl}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
