@component('mail::message')
 ANTONIN EDITIONS

Em breve responderemos seu chamado!

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
