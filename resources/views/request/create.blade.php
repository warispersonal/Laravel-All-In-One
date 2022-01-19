@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="{{route('request', ['age'=>25])}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Name: </label>
                                <input type="text" name="name" value="{{old('name')}}" class="form-control" />
                            </div>

                            <div class="form-group">
                                <label>Email: </label>
                                <input type="email" name="email" value="{{old('email')}}" class="form-control" />
                            </div>

                            <div class="form-group">
                                <label>Male: </label>
                                <input type="radio" name="gender" {{old('gender') == "1" ? 'checked' : ''}} value="1"  />
                            </div>

                            <div class="form-group">
                                <label>Fe male: </label>
                                <input type="radio" name="gender" {{old('gender') == "0" ? 'checked' : ''}} value="0"  />
                            </div>

                            <div class="form-group">
                                <label>DOB: </label>
                                <input type="date" name="dob" value="{{old('dob')}}" class="form-control" />
                            </div>

                            <div class="form-group mt-5">
                                <input type="file" class="form-control" value="Select file" name="image" />
                            </div>

                            <button type="submit" class="btn btn-info mt-3"> Submit </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
