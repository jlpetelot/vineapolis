<!-- On met le champ cache de l'image choisie -->
{!! Form::hidden('choixpub', $pub->id) !!}
<!-- ../On met le champ cache de l'image choisie -->
<!-- Téléchargement annonce -->
<div class="form-horizontal">
    <div class="form-group {{ $errors->has('annonce') ? 'has-error': '' }}">
        <div class="col-xs-2 control-label">
            {!! Form::label('annonce', "L'image de votre annonce") !!}
            <p style="margin-top: -5px"> L'image à teléverser est au format &laquo;&nbsp;.jpg&nbsp;&raquo;,
                aux dimensions exactes de <br/><strong>{{ $pub->format }}</strong>.
            </p>
        </div>
        <div class="col-xs-10">
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-preview" data-trigger="fileinput">
                    @if($annonceur->annonce != NULL)
                        <img src="{{ asset('img/filemanager/annonceurs/'.$annonceur->annonce) }}" width="7%" height="7%">
                    @else
                        <img src="{{ asset('backend/img/'.$pub->formatremplace) }}" width="10%" height="10%">
                    @endif
                </div>
                <div>
                    <span class="btn btn-default btn-file">
                        <span class="fileinput-new">Sélectionnez votre image</span>
                        {!! Form::file('annonce') !!}
                    </span>
                    <a href="#" class="btn btn-default fileinput-exists" id="image" data-dismiss="fileinput">Retirez-la</a>
                </div>
            </div>
            @if ($errors->has('annonce'))
                <span class="help-block">{{ $errors->first('annonce') }}</span>
            @endif
        </div>
    </div>
</div>
</p>
@if (session('error-message'))
    <span class="text-danger">{{ session('error-message') }}</span>
@endif
<!-- ../Téléchargement annonce -->

<!-- URL de l'annonceur -->
<div class="form-horizontal">
    <div class="form-group {{ $errors->has('urlsite') ? 'has-error': '' }}">
        <div class="col-xs-2 control-label">
            {!! Form::label('urlsite', "L'adresse complète de votre site") !!}
        </div>
        <div class="col-xs-5">
            {!! Form::text('urlsite', null,
            ['class' => 'form-control',
            'placeholder' => 'http://www.monsite.com']) !!}
            @if ($errors->has('urlsite'))
                <span class="help-block">{{ $errors->first('urlsite') }}</span>
            @endif
        </div>
    </div>
</div>
<!-- ../URL de l'annonceur -->
<br/>