@component('mail::message')
# L'administration du site de Vineapolis vous envoit un message.

- Le nom de votre société : **{{ $name }}**
- Votre email :  **{{ $email }}**
- Le sujet de ce mail :  **{{ $sujet }}**

Voici le message :
@component('mail::panel')
    {{ $contenu }}
@endcomponent

L'équipe de Vineapolis.

@component('mail::subcopy')
    Vous recevez cet mail, car vous êtes inscrit comme vigneron actif sur le site Vineapolis.
    <br/>Si c'est une erreur, il vous suffit de mettre cet email à la poubelle.
@endcomponent

@endcomponent
