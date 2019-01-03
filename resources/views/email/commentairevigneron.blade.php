@component('mail::message')
# Un commentaire a été posté pour le vigneron {{ $name }}, {{ $creele->diffForHumans() }}. Nous devons le valider dans les 24 heures.

Voici le contenu du commentaire :
@component('mail::panel')
    {{ $contenu }}
@endcomponent

L'équipe de Vineapolis.

@component('mail::subcopy')
    Vous recevez cet mail, car vous êtes inscrit comme membre actif du site Vineapolis.
    <br/>Si c'est une erreur, il vous suffit de mettre cet email à la poubelle.
@endcomponent

@endcomponent