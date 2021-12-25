@component('mail::message')
We are please to announced that ....

@component('mail::button', ['url' => route('home')])
Visit website
@endcomponent


Thanks {{$user_name}},<br>
for register yourself in {{ config('app.name') }}
@endcomponent
