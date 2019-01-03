 <!-- LE FORMULAIRE D'ENVOI DES MESSAGES -->
 {{ Form::open([
    'method' => 'POST',
    'route' => ['detailvin.body', $vin->aliassociete]
]) }}

<!-- L'input -->
@if(!$errors->has('body'))
<div class="form-group" style="margin-top: 40px;">
    <i class="fa fa-at fa-lg" title="Adressez-lui un message" aria-hidden="true"></i>
    {!! Form::label('body', "Adressez un message au vigneron {$nomvigneron}.") !!}

    {!! Form::textarea('body', null, [
        'class' => 'form-control5',
        'rows' => 5,
        'placeholder' => 'Adressez-lui un message…'
    ]) !!}
</div>
@else
<div class="form-group has-error" style="margin-top: 40px;">
    <i class="fa fa-at fa-lg" title="Adressez-lui un message" aria-hidden="true"></i>
    {!! Form::label('body', "Votre message ne peut être vide et doit comporter au moins 10 caractères.") !!}

    {!! Form::textarea('body', null, [
        'class' => 'form-control5',
        'rows' => 5,
        'placeholder' => 'Votre message ne peut être vide et doit comporter au moins 10 caractères.'
    ]) !!}
</div>
@endif
<!-- ../L'input -->

@if(Auth::user())
    <!-- Le bouton d'envoi -->
    {!! Form::submit('Envoyez', ['class' => 'btn btn-rouge']) !!}
    <!-- ../Le bouton d'envoi -->
@else
    <a href="{{ route('logininternaute') }}" class="btn btn-rouge"
        onclick="return confirm('Vous devez vous identifier ou créer '+
                'un compte pour adresser un message à {{$vin->societe}}.')">
        Envoyez
    </a>
@endif
{!! Form::close() !!}
<!-- ../LE FORMULAIRE D'ENVOI DES MESSAGES -->