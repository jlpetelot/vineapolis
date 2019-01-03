@component('mail::message')
# {{ $sujet }}

- Son nom ou société : **{{ $name }}**
- Son email :  **{{ $email }}**

@component('mail::panel')
    {{ $contenu }}
    - Date d'envoi du mail : {{ $date->diffForHumans() }}
@endcomponent

@component('mail::button', ['url' => route('admin')])
Vous pouvez dès maintenant vous rendre sur votre interface d'administration.
@endcomponent

@component('mail::subcopy')
    Vous recevez cet mail, car vous en avez fait la demande.
    <br/>Si c'est une erreur, il vous suffit de le mettre à la poubelle.
@endcomponent

L'équipe de Vineapolis.

@endcomponent
