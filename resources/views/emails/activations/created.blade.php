@component('mail::message')
# Introduction

account activation

@component('mail::button', ['url' => 'links'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
