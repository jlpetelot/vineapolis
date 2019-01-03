@component('mail::message')
# Demande de devis pour un reportage.

- Votre nom : **{{ $name }}**
- Votre email :  **{{ $email }}**

@component('mail::panel')
{{ $sujet }}. {{ $contenu }}. Date de la demande, le : {{ $date }}
@endcomponent

L'équipe de Vineapolis.

@component('mail::subcopy')
Vous recevez cet mail, car vous en avez fait la demande.
<br/>Si c'est une erreur, il vous suffit de le mettre à la poubelle.
@endcomponent

@endcomponent