@if(session('success'))
    <div class="row">
        <div class="col-xs-12" style="margin-left: -15px">
            <div class="col-xs-7">
                <div class="alert alert-info">
                    {{ session('success') }}
                </div>
            </div>
        </div>
    </div>
@endif
<!-- Le formulaire -->
{!! Form::model($vigneron, [
    'route' => ['admin.vignerons.postmessage', Request::segment(4)],
    'method' => 'post'
    ]) !!}

<p>
    Vigneron : <strong>{{ $vigneron->societe }}</strong>
    <br/>
    Email : <strong>{{ $vigneron->email }}</strong>
</p>


<!-- Sujet -->
<div class="form-horizontal" style="margin-left: 20px">
    <div class="form-group {{ $errors->has('sujet') ? 'has-error': '' }}">
        <div class="col-xs-6">
            <small style="font-size: 8px; position: absolute; margin: 0 0 0 -20px">
                (<i class="fa fa-fw fa-asterisk text-red"></i>)
            </small>
            {!! Form::text('sujet', null,
            ['class' => 'form-control', 'placeholder' => "Sujet de l'email en une phrase maximum"]) !!}
            @if ($errors->has('sujet'))
                <span class="help-block">{{ $errors->first('sujet') }}</span>
            @endif
        </div>
    </div>
</div>
<!-- ../Sujet  -->


<!-- Message -->
<!-- !!!! ON APELLE LA VARIABLE MESSAGE CONTENT CAR MESSAGE EST RÉSERVÉ À L'ENVOI DES MAILS !!!! -->
<div class="form-horizontal" style="margin-left: 20px">
    <div class="form-group {{ $errors->has('contenu') ? 'has-error': '' }}">
        <div class="col-xs-6">
            <small style="font-size: 8px; position: absolute; margin: 0 0 0 -20px">
                (<i class="fa fa-fw fa-asterisk text-red"></i>)
            </small>
            {!! Form::textarea('contenu', NULL, ['class' => 'form-control', 'rows' => '8', 'placeholder' => 'Le contenu du message']) !!}
            @if ($errors->has('sujet'))
                <span class="help-block">{{ $errors->first('contenu') }}</span>
            @endif
        </div>
    </div>
</div>
<!-- ../Message  -->


<!-- Bouton d'envoi -->
<div class="form-horizontal" style="margin-left: 20px">
    <div class="form-group">
        <div class="col-xs-12">
            {!! Form::submit('Envoyer', ['class' => 'btn btn-primary']) !!}
            &nbsp;
            <a href="{{ route ('admin.all') }}" type="button" class="btn btn-default">Annulez</a>
        </div>
    </div>
</div>
<!-- ../Bouton d'envoi -->

{!! Form::close() !!}

<!-- Le formulaire -->