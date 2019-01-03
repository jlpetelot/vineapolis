@component('mail::message')
# {{ ucfirst($sujet) }}

- L'annonce a été payée le : **{{ $date }}**
- **{{ $contenu }}**
- Votre nom : **{{ $name }}**
- L'email de la personne qui a souscrit :  **{{ $email }}**

@component('mail::panel')
    Gardez précieusement ces données.
    <br/>(mail reçu le : {{ $date }})
@endcomponent

@component('mail::button', ['url' => route('loginvigneron')])
    Vous pouvez dès maintenant accèder à votre espace sécurisé.
@endcomponent

L'équipe de Vineapolis.

@component('mail::subcopy')
    Vous recevez cet mail, car vous en avez fait la demande.
    <br/>Si c'est une erreur, il vous suffit de le mettre à la poubelle.
@endcomponent

@endcomponent