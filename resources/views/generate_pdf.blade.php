<!DOCTYPE html>
<html>
<head>
    <title>Generate Pdf</title>
<style>
    h1{
        font-size: 12px;
        color: yellow;
    }
    img{
        height: 500px;
        width: 500px;
    }
</style>
</head>

<body>
<h1>{{ $heading}}</h1>
<div>
    <p>{{$content}}</p>
</div>
<img class="image" src="{{asset('abc.jpg')}}" alt="Image" />

</body>
</html>
