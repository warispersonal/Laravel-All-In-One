<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Algolia</title>
    <link href="{{asset('css/app.css')}}"/>
</head>
<body>

<div class="container">
    <div class="row">
        <form method="get" action="{{route('search')}}">
            <div class="col-12">
                <div class="form-control">
                    <input type="text" name="q" value="{{old('q')}}" class="form-group"/>
                </div>
                <button class="btn btn-lg btn-info" type="submit">Search</button>
            </div>
        </form>
        @foreach($results as $row)
            <div>
                <h1>{{$row->title}}</h1>
                <p>{{$row->body}}</p>
                <p>{{$row->created_at}}</p>
                <hr />
            </div>
        @endforeach
    </div>
</div>

<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
