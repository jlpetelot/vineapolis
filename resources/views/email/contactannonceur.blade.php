@component('mail::message')
# Demande d'accréditation d'un annonceur.

- Son nom ou société : **{{ $name }}**
- Son email :  **{{ $email }}**

@component('mail::panel')
    Créer une accréditation dans les 24 heures qui suit ce mail dans l'administration. 
    Date d'envoi du mail : {{ $date->diffForHumans() }}
@endcomponent

@component('mail::button', ['url' => route('admin')])
Se rendre sur l'administration des accréditations
@endcomponent

L'équipe de Vineapolis.

@endcomponent
