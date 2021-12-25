@component('mail::message')
# Test email with attachment

Test email with attachment

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
