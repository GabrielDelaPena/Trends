@component('mail::message')
# Beste klant,

Bedankt voor het bestellen van uw ticket.
In de bijlage vindt u uw ticket.

@component('mail::button', ['url' => 'http://127.0.0.1:8000/test'])
Ticket
@endcomponent

Met vriendelijke groeten,<br>
{{ config('app.name') }}
@endcomponent
