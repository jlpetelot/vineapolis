{!! Form::model($vigneron, [
    'method'    => 'PUT',
    'route'     => ['admin.updatemiseajourachat', $vigneron->id],
    'files'      => true
]) !!}

<!-- Les messages de session et erreurs -->
@if(session('message'))
    <div class="row">
        <div class="col-xs-12" style="margin-left: -15px">
            <div class="col-xs-7">
                <div class="alert alert-info">
                    {{ session('message') }}
                </div>
            </div>
        </div>
    </div>
@endif

@if(session('error'))
    <div class="row">
        <div class="col-xs-12" style="margin-left: -15px">
            <div class="col-xs-7">
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            </div>
        </div>
    </div>
@endif
<!-- ../Les messages de session et erreurs -->


<!-- Fiche individuelle vigneron -->
<div class="form-horizontal">
        <div class="form-group  {{ $errors->has('fiche') ? 'has-error': '' }}">
            <div class="col-xs-2 control-label">
                {!! Form::label('fiche', "L'activité du vigneron en 2 paragraphes") !!}
            </div>
            <div class="col-xs-10">
                {!! Form::textarea('fiche', NULL, ['class' => 'form-control', 'rows' => '4', 'style' => 'margin-top:10px']) !!}
                @if ($errors->has('fiche'))
                    <span class="help-block">{{ $errors->first('fiche') }}</span>
                @endif
            </div>
        </div>
    </div>
<!-- ../Fiche individuelle vigneron -->


<!-- Image reportage -->
<div class="form-horizontal">
    <div class="form-group  {{ $errors->has('imagereportage') ? 'has-error': '' }}">
        <div class="col-xs-2 control-label">
            {!! Form::label('imagereportage', "Image du reportage") !!}
            <p style="margin-top: -5px"> L'image à teléverser est au format &laquo;&nbsp;.jpg&nbsp;&raquo; et sera un dividende du format indiqué.
                Idéalement exactement à
                <br/><strong>1920 x 480 pixels</strong>.
            </p>
        </div>
        <div class="col-xs-10">
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-preview" data-trigger="fileinput" style="width: 200px; height: 150px;">
                    @if($vigneron->imagereportage != NULL)
                        <img src="{{ asset('img/filemanager/reportage/'.$vigneron->imagereportage) }}" width="1308" height="325">
                    @else
                        <img src="{{ asset('img/fakeimg-1920x480.jpg') }}" width="1308" height="325">
                    @endif
                </div>
                <div style="margin-top: 195px;">
                    <span class="btn btn-default btn-file">
                        <span class="fileinput-new">Sélectionnez votre image</span>
                        {!! Form::file('imagereportage') !!}
                    </span>
                    <a href="#" class="btn btn-default fileinput-exists" id="image" data-dismiss="fileinput">Retirez-la</a>
                </div>
            </div>
            @if ($errors->has('imagereportage'))
                <span class="help-block">{{ $errors->first('imagereportage') }}</span>
            @endif
        </div>
    </div>
</div>
<br/>
<!-- ../Image reportage -->

<!-- Reportage -->
<div class="form-horizontal">
    <div class="form-group">
        <div class="col-xs-2 control-label">
            {!! Form::label('reportage', 'Le reportage') !!}
        </div>
        <div class="col-xs-10">
            {!! Form::textarea('reportage', null, [
            'class' => 'form-control',
            'id' => 'reportage',
            'style' => 'z-index:10000'
            ]) !!}
        </div>
    </div>
</div>

<!-- bouton -->
<br/>
<div class="form-horizontal">
    <div class="form-group">
        <div class="col-xs-2 control-label">
        </div>
        <div class="col-xs-10">
            {!! Form::submit('Mise à jour', ['class' => 'btn btn-primary']) !!}
            &nbsp;
            <a href="{{ route ('admin.all') }}" type="button" class="btn btn-default">Annulez</a>
        </div>
    </div>
</div>
<!-- bouton -->

{!! Form::close() !!}