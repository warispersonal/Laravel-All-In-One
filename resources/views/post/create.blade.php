<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post Create</title>
    <style>
        .is-invalid{
            background-color: red;

        }
        .alert {
            color: red;
        }
    </style>
</head>
<body>

<h1>Create Post</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <h1>Showing all error messge</h1>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="post" action="{{route('save_post')}}" enctype="multipart/form-data">
    @csrf
    <div>
        <label>Title (with in line validation message)</label>
        <input type="text" class="@error('title') is-invalid @enderror" value="{{old("title")}}" name="title" />
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label>Tag</label>
        <input type="text" value="{{old("tag")}}" name="tag" />
    </div>
    <div>
        <label>Description</label>
        <textarea name="description">{{old("description")}}</textarea>
    </div>
    <div>
        <label>Image</label>
        <input type="file" name="image" />
    </div>
    <div>
        <label>Date</label>
        <input type="date" name="date" value="{{old('date')}}" />
    </div>
    <div>
        <button type="submit"  >Save</button>
    </div>
</form>
</body>
</html>
