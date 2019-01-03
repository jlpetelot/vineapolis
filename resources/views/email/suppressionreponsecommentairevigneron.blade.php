@component('mail::message')
# Votre réponse au commentaire postée {{ $miseajour->diffForHumans() }} vient d'être supprimée.

@component('mail::panel')
    Votre réponse ne correspondait à la ligne rédactionnelle du site Vineapolis. Veuillez-nous en excuser.
    Vous pouvez soumettre une nouvelle réponse à ce commentaire si vous le souhaitez.
@endcomponent

L'équipe de Vineapolis.

@component('mail::subcopy')
    Vous recevez cet mail, car vous êtes inscrit comme membre actif du site Vineapolis.
    <br/>Si c'est une erreur, il vous suffit de mettre cet email à la poubelle.
@endcomponent

@endcomponent

