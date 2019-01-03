@component('mail::message')

# On a reçu un message depuis contact de Vineapolis.

- Ses nom et prénom : **{{ $name }}**
- Son email :  **{{ $email }}**
- Le sujet de son message : **{{ $sujet }}**

Voici le message :
@component('mail::panel')
    {{ $contenu }}
@endcomponent

@component('mail::button', ['url' => 'mailto:'.$email])
    Répondre à ce message
@endcomponent

{{--Merci, {{ config('app.name') }}--}}
{{--Merci, l'équipe de Vineapolis.--}}

@component('mail::subcopy')
    Vous recevez cet mail, car vous avez souscrit à notre newsletter. <br/>Si vous désirez vous désinscrire, cliquez ici :
    <a href="#" target="_blank">Désinscription</a>
@endcomponent

@endcomponent


