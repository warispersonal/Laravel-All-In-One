<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .yellow-color{
            color: yellow;
        }
        .font-size{
            font-size: 25px;
        }
    </style>
</head>
<body>

    <h1>When passing dynamic data use :key="$value"</h1>
    <h1>If we pass some attributes from component then it can replace if you use both attributes you can use merge</h1>

    @foreach($users as $user)
        <x-user-component :user="$user" class="yellow-color" />
    @endforeach

</body>
</html>
