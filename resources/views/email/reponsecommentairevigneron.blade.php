@component('mail::message')
# Le vigneron {{ $vigneron }} vient de répondre au commentaire posté {{ $creationmessage->diffForHumans() }}.

Voici le contenu de la réponse :
@component('mail::panel')
    {{ $contenu }}
@endcomponent

L'équipe de Vineapolis.

@component('mail::subcopy')
    Vous recevez cet mail, car vous êtes inscrit comme membre actif du site Vineapolis.
    <br/>Si c'est une erreur, il vous suffit de mettre cet email à la poubelle.
@endcomponent

@endcomponent
