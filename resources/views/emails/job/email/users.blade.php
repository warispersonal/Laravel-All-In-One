@component('mail::message')
User file export created

@component('mail::button', ['url' => asset(Storage::url($file_name))])
Click here to view & download
@endcomponent
<a href="{{asset(Storage::url('export.xlsx'))}}" >Download File</a>


<img src="{{asset(Storage::url('abc.jpg'))}}" />
Thanks,<br>
{{ config('app.name') }}
@endcomponent
