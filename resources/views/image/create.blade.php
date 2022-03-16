@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Upload Image') }}</div>
                    <div class="card-body">
                        <div class="max-w-sm mx-auto py-8">
                            <form action="{{route('image.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="file" class="form-control" name="image" id="image">
                                <button type="submit" class="btn btn-info mt-3 ">Upload</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
