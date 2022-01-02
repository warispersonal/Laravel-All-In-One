@component('mail::message')
User file export created

@component('mail::button', ['url' => asset(Storage::url($file_name))])
Click here to view & download
@endcomponent

<h6>Link {{asset(Storage::url($file_name))}}</h6>
<img src="{{asset(Storage::url('abc.jpg'))}}"/>
Thanks,<br>
{{ config('app.name') }}
@endcomponent
