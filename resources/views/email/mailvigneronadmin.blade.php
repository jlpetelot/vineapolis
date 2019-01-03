@component('mail::message')
# Un message nous est envoyé par le vigneron {{ $name }} via son administration.
Message envoyé {{ $created_at->diffForHumans() }}. Nous devons y répondre les 48 heures.

Sujet du message : 
# {{ $sujet }}

Son contenu :
@component('mail::panel')
    {{ $contenu }}
@endcomponent

@component('mail::button', ['url' => route('admin')])
Se rendre sur l'administration
@endcomponent

L'administration de Vineapolis.

@endcomponent
