<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Algolia</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet"/>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <form method="get" action="{{route('search')}}">
            <div class="col-12">
                <div class="input-group mb-3">
                    <input type="text"  name="q" value="{{old('q')}}"   class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit">Search</button>
                    </div>
                </div>
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
    {{$results->links()}}
</div>

<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
