@component('mail::message')
# Introduction

You are receiving this email through job Counter: {{$counter}}

@component('mail::button', ['url' => ''])
Waris Zargar
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
