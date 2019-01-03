@component('mail::message')

# Vous avez écrit à Vineapolis le {{ $date }}.

- Votre nom ou votre société : **{{ $name }}**
- Votre email :  **{{ $email }}**
- Le sujet de votre message était : **{{ $sujet }}**

@component('mail::panel')
    {{ $contenu }}
@endcomponent

L'équipe de Vineapolis.

@component('mail::subcopy')
    Vous recevez cet mail, car vous avez écrit à Vineapolis.
    <br/>Si c'est une erreur, il vous suffit de mettre cet email à la poubelle.
@endcomponent

@endcomponent


