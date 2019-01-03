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
{!! Form::open([
    'route' => ['admin.message.envoi', Request::segment(4)],
    'method' => 'post'
]) !!}

<p>
    Réponse au message de : <strong>{{ $message->name }}</strong>
    {{ Form::hidden('name', $message->name) }}
    <br/>
    dont l'email est : <strong>{{ $message->email }}</strong>
    {{ Form::hidden('email', $message->email) }}
    <br/>
    dont le statut est : <strong>{{ $message->role }}</strong>
    {{ Form::hidden('role', $message->role) }}
    <br/>
    dont le sujet était : <strong>{{ $message->sujet }}</strong>
    {{ Form::hidden('sujet', $message->sujet) }}
    <br/>
    dont le contenu était : <strong>{{ $message->contenu }}</strong>
    {{ Form::hidden('contenu', $message->contenu) }}
    <br/>
    et dont la date d'envoi fut le : <strong>{{ $message->created_at }}</strong>
    {{ Form::hidden('created_at', $message->created_at) }}

    <!-- Transformation de l'id en user_id -->
    {{ Form::hidden('reponse_id', $message->id) }}
    <!-- Réponse au message de l'id -->

</p>

<!-- Message -->
<!-- !!!! ON APELLE LA VARIABLE MESSAGE CONTENT CAR MESSAGE EST RÉSERVÉ À L'ENVOI DES MAILS !!!! -->
<div class="form-horizontal" style="margin-left: 20px">
    <div class="form-group {{ $errors->has('contenu') ? 'has-error': '' }}">
        <div class="col-xs-6">
            <small style="font-size: 8px; position: absolute; margin: 0 0 0 -20px">
                (<i class="fa fa-fw fa-asterisk text-red"></i>)
            </small>
            {!! Form::textarea('contenu', NULL, [
                'class' => 'form-control',
                'rows' => '8',
                'placeholder' => 'La réponse à ce message est :'
            ]) !!}
            @if ($errors->has('contenu'))
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
            <a href="{{ route ('admin.messages') }}" type="button" class="btn btn-default">Annulez</a>
        </div>
    </div>
</div>
<!-- ../Bouton d'envoi -->

{!! Form::close() !!}

<!-- Le formulaire -->