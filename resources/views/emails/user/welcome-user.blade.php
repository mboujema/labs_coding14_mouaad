@component('mail::message')
# Bienvenue {{ $user->name }}

Vous vous etes enregistré sur notre site avec cette adresse {{ $user->email }}.

@endcomponent
