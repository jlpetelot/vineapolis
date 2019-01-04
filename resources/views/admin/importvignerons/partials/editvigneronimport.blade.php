{!! Form::model($vigneron, [
    'method'    => 'PUT',
    'route'     => ['admin.importvignerons.update', $vigneron->id]
]) !!}


<!-- URL du vigneron -->
<div class="form-horizontal">
    <div class="form-group">
        <div class="col-xs-2  control-label">
            {!! Form::label('id', 'Id') !!}
        </div>
        <div class="col-xs-10">
            <div class="form-control">
                {{ $vigneron->id }}
            </div>
        </div>
    </div>
</div>
<!-- ../URL du vigneron -->


<!-- URL du vigneron -->
<div class="form-horizontal">
    <div class="form-group">
        <div class="col-xs-2  control-label">
            {!! Form::label('url', 'URL du vigneron') !!}
        </div>
        <div class="col-xs-10">
            <div class="form-control">
                {{ $vigneron->url }}
            </div>
        </div>
    </div>
</div>
<!-- ../URL du vigneron -->



<!-- Société du vigneron -->
<div class="form-horizontal">
    <div class="form-group">
        <div class="col-xs-2  control-label">
            {!! Form::label('societe', 'Nom du vigneron') !!}
        </div>
        <div class="col-xs-10">
            <div class="form-control">
                {{ $vigneron->societe }}
            </div>
        </div>
    </div>
</div>
<!-- ../Société du vigneron -->

<!-- Adresse du vigneron -->
<div class="form-horizontal">
    <div class="form-group">
        <div class="col-xs-2 control-label">
            {!! Form::label('adresse', 'Adresse du vigneron') !!}
        </div>
        <div class="col-xs-10">
            <div class="form-control">
                {{ $vigneron->adresse }}
            </div>
        </div>
    </div>
</div>
<!-- ../Adresse du vigneron -->

<!-- Téléphone -->
<div class="form-horizontal">
    <div class="form-group">
        <div class="col-xs-2 control-label">
            {!! Form::label('telephone', 'Téléphone') !!}
        </div>
        <div class="col-xs-10">
            <div class="form-control">
                {{ $vigneron->telephone }}
            </div>
        </div>
    </div>
</div>
<!-- ../Téléphone -->

<!-- Email -->
<div class="form-horizontal">
    <div class="form-group">
        <div class="col-xs-2 control-label">
            {!! Form::label('email', 'Email') !!}
        </div>
        <div class="col-xs-10">
            <div class="form-control">
                {{ $vigneron->email }}
            </div>
        </div>
    </div>
</div>
<!-- ../Email -->

<!-- Latitude et longitude -->
<div class="form-horizontal">
    <div class="form-group">
        <div class="col-xs-2 control-label">
            {!! Form::label('latlong', 'Latitude et longitude GPS') !!}
        </div>
        <div class="col-xs-10">
            <div class="form-control">
                {{ $vigneron->latlong }}
            </div>
        </div>
    </div>
</div>
<!-- ../Latitude et longitude -->

<!-- Sorte de vin -->
<div class="form-horizontal">
    <div class="form-group">
        <div class="col-xs-2 control-label">
            {!! Form::label('sortevin', 'Sorte de vin') !!}
        </div>
        <div class="col-xs-10">
            <div class="form-control">
                {{ $vigneron->sortevin }}
            </div>
        </div>
    </div>
</div>
<!-- ../Sorte de vin -->

<!-- Etat du vigneron -->
<div class="form-horizontal">
    <div class="form-group">
        <div class="col-xs-2 control-label">
            <small style="font-size: 8px; position: absolute; margin: 0 0 0 -20px">
                (<i class="fa fa-fw fa-asterisk text-red"></i>)
            </small>
            {!! Form::label('statut', 'Vigneron fait / Pas fait') !!}
            {!! Form::checkbox('statut', 1, false) !!}
        </div>
    </div>
</div>
<!-- ../Etat -->

<br/>
<div class="form-horizontal">
    <div class="form-group">
        <div class="col-xs-2 control-label">
        </div>
        <div class="col-xs-10">
            {!! Form::submit('Mise à jour', ['class' => 'btn btn-primary']) !!}
            &nbsp;
            <a href="{{ route ('admin.importvignerons.index') }}" type="button" class="btn btn-default">Annulez</a>
        </div>
    </div>
</div>

{!! Form::close() !!}