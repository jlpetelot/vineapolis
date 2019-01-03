@component('mail::message')
# Accréditation d'un annonceur sur le site de Vineapolis.

- Le nom de votre société : **{{ $name }}**
- Votre email :  **{{ $email }}**
- Votre mot de passe en clair : **{{ $motdepasse }}**

@component('mail::panel')
    Gardez précieusement ces données.
    <br/>(mail reçu {{ $date->diffForHumans() }})
@endcomponent

@component('mail::button', ['url' => route('loginvigneron')])
    Vous pouvez dès maintenant accéder à votre espace sécurisé.
@endcomponent

L'équipe de Vineapolis.

@component('mail::subcopy')
    Vous recevez cet mail, car vous en avez fait la demande.
    <br/>Si c'est une erreur, il vous suffit de le mettre à la poubelle.
@endcomponent

@endcomponent