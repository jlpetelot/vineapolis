@component('mail::message')
# {{ $sujet }}

@component('mail::panel')
    {{ $contenu }}
@endcomponent

@component('mail::button', ['url' => route('admin')])
Se rendre sur l'administration
@endcomponent

L'administration de Vineapolis.

@endcomponent

