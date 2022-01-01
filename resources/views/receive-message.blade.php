<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Receive message</title>
</head>
<body>
<div>
    <h1>Below receive message from server</h1>
    <p id="message"></p>
</div>
<script src="{{asset('js/app.js')}}"></script>
<script>
    //dynamic-notification-message is channel name
    // DynamicNotificationMessage this is event name
    Echo.channel('dynamic-notification-message')
        .listen('DynamicNotificationMessage',(e)=>{
            alert(e.message)
        })
</script>
</body>
</html>
