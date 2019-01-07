{!! Form::model($vigneron, [
    'method'    => 'PUT',
    'route'     => ['admin.updateachat', $vigneron->id],
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

<!-- Option 1 -->
<div class="row">
    <div class="col-xs-2"><h4>1 - Option 1</h4></div>
    <div class="col-xs-10">
       <p style="margin-top:12px; margin-bottom: 30px">
            Achat de l'option 1 pour le vigneron <strong>{{ $vigneron->societe }}</strong>, 
            dont l'adresse est : <strong>{{ $vigneron->adresse }}</strong>,
            l'email : <strong>{{ $vigneron->email }}</strong> et la région vinicole : <strong>{{ $vigneron->regionvinicole }}</strong>
       </p>
    </div>
</div>
<!-- ../Option 1-->

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

<div class="col-xs-10 col-xs-offset-2">
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true"
         style="margin-left: -11px;">
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingThree">
                <h4 class="panel-title">
                    Copiez le contenu ci-dessous et collez-le dans le champ. Le texte est limité à 2 paragraphes.</h4>
<xmp>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam blanditiis doloremque inventore  minus quia quibusdam tenetur.
Commodi debitis esse facere, fuga incidunt iste iure laboriosam laborum repellat suscipit totam voluptate.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam blanditiis doloremque inventore minus quia quibusdam tenetur.
Commodi debitis esse facere, fuga incidunt iste iure laboriosam laborum repellat suscipit totam voluptate.</p>
</xmp>
            </div>
        </div>
    </div>
</div>
<!-- ../Fiche individuelle vigneron -->

<!-- Date de création -->
<div class="form-horizontal">
    <div class="form-group {{ $errors->has('created_at') ? 'has-error': '' }}">
        <div class="col-xs-2 control-label">
            <small style="font-size: 8px; position: absolute; margin: 0 0 0 -20px">
                (<i class="fa fa-fw fa-asterisk text-red"></i>)
            </small>
            {!! Form::label('created_at', 'Date de création') !!}
        </div>
        <div class="col-xs-10">
            {{--{!! Form::text('created_at', null,--}}
            {{--['class' => 'form-control', 'placeholder' => --}}
            {{--'Format obligatoire : Y-m-d H:i:s (2018-04-14 16:30:26)']) !!}--}}
            {!! Form::date('created_at', \Carbon\Carbon::now()) !!}
            @if ($errors->has('created_at'))
                <span class="help-block">{{ $errors->first('created_at') }}</span>
            @endif
        </div>
    </div>
</div>
<!-- ../Date de création -->
    
<!-- Durée de l'achat -->
<div class="form-horizontal">
    <div class="form-group {{ $errors->has('duree') ? 'has-error': '' }}">
        <div class="col-xs-2 control-label">
            <small style="font-size: 8px; position: absolute; margin: 0 0 0 -20px">
                (<i class="fa fa-fw fa-asterisk text-red"></i>)
            </small>
            {!! Form::label('duree', "Durée de l'option") !!}
        </div>
        <div class="col-xs-10">
            {{ Form::select('duree', 
            [
                1 => '1 an',
                2 => '2 ans',
                3 => '3 ans',
                4 => '4 ans',
                5 => '5 ans',
                
            ],
            null, 
            [
                'class' => 'form-control',
                'placeholder' => "Choisissez la durée de l'option"
            ]) }}
            @if ($errors->has('duree'))
                <span class="help-block">{{ $errors->first('duree') }}</span>
            @endif
        </div>
    </div>
</div>
<!-- ../Durée de l'achat -->

<!-- Option 2 -->
<div class="row" style="margin-top:80px">
    <div class="col-xs-2"><h4>2 - Option 2</h4></div>
    <div class="col-xs-10">
        <p style="margin-top:10px; margin-bottom: 30px">
            Achat de l'option 2 pour le vigneron <strong>{{ $vigneron->societe }}</strong>, 
            dont l'adresse est : <strong>{{ $vigneron->adresse }}</strong>,
            l'email : <strong>{{ $vigneron->email }}</strong> et la région vinicole : <strong>{{ $vigneron->regionvinicole }}</strong>
        </p>
    </div>
</div>
<!-- ../Option 2-->

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
                        <img src="{{ asset('img/'.$vigneron->imagereportage) }}" width="1308" height="325">
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

<div class="col-xs-10 col-xs-offset-2">
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="false"
         style="margin-left: -11px;">
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title">
                    Pour ajouter le reportage, cliquez sur le bouton Code. Copiez son contenu
                    et collez-le tel quel dans l'éditeur de texte ci-dessus en mode Code.
                    <i class="fa fa-fw fa-angle-left"
                       style="color: #dd4b39; font-weight: 700"></i>
                    <i class="fa fa-fw fa-angle-right"
                       style="color: #dd4b39; font-weight: 700; position: absolute; margin-left: -11px;"></i>
                    <br/>
                    Puis cliquez sur le bouton Ok. Vous passez en mode pseudo HTML.
                    <br/>
                    <a class="btn btn-primary" role="button" data-toggle="collapse" href="#collapseExample"
                       aria-expanded="false" aria-controls="collapseExample" style="color: white; margin: 20px 0;">
                        Code
                    </a>
                    <div class="collapse" id="collapseExample">
                        <div class="well">
<xmp>
<!-- Début du code -->
<div id="modal">
<div class="modal-content-tls">
<div class="row">
<div id="modalentete" class="col-md-12"><!-- col-md-12 -->
<div class="margehaute10px">
<a href="http://www.lesiteduvigneron.com" target="_blank">
<h3 class="gras rouge sitemodal">http://www.lesiteduvigneron.com</h3>
</a>
</div>
</div>
<div class="col-md-12">
<img style="width: 100%; max-height: 480px;" src="/img/filemanager/reportage/lenomdevotreimage.jpg"/>
<div class="commentaires2">
<ul>
<li>
<h3 class="gras">Nom du vigneron</h3>
</li>
<li>  00, rue de vendanges -  00000 -  Vendange Ville - </li>
<li>  (0)0 00 00 00 00</li>
</ul>
</div>
<div class="modal2touslesvins">
<div class="col-md-4"><hr class="moins15px" />
<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum, quis, natus, tempore aspernatur laborum ipsa
<span class="vert gras">illo quae commodi quosodit culpa</span> distinctio ut amet omnis sint voluptate exercitationem
totam veniam!
</p>
<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum, quis, natus, tempore aspernatur laborum
ipsa illo quae commodi quos odit culpa distinctio ut amet omnis sint voluptate exercitationem totam veniam!
</p>
<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum, quis, natus, tempore aspernatur laborum ipsa
<span class="vert gras">illo quae commodi quosodit culpa</span> distinctio ut amet omnis sint voluptate
exercitationem totam veniam!
</p>
</div>
<div class="col-md-4">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum, quis, natus, tempore aspernatur
laborum ipsa illo quae commodi quos odit culpa distinctio ut amet omnis sint voluptate exercitationem
totam veniam!
</p>
<p>Lorem ipsum dolor sit amet, <span class="vert gras">consectetur adipisicing elit.</span> Eum, quis, natus,
tempore aspernatur laborum ipsa illo quae commodi quos odit culpa distinctio ut amet omnis sint voluptate
exercitationem totam veniam!</p>
</div>
<div class="col-md-4">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum, quis, natus, tempore aspernatur laborum ipsa
illo quae commodi quos odit culpa distinctio ut amet omnis sint voluptate exercitationem totam veniam!</p>
<p>Lorem ipsum dolor sit amet, <span class="vert gras">consectetur adipisicing elit.</span>
Eum, quis, natus, tempore aspernatur laborum ipsa illo quae commodi quos odit culpa distinctio ut amet omnis
sint voluptate exercitationem totam veniam!</p>
</div>
</div>
<div class="modal-footer">
<a class="btn btn-vert2" href="#" type="button" data-dismiss="modal">Fermer</a>
</div>
</div>
</div>
</div>
</div>
<!-- Fin du code -->
</xmp>
                        </div>
                    </div>


                    <br/>Dans ce mode, repérez le petit icone <img src="{{ asset('backend/img/no-image.png') }}" alt="">,
                     source de l'image. Cliquez dessus avec votre souris ;
                    cela sélectionnera automatiquement l'icone similaire de l'éditeur de texte : <img src="{{ asset('backend/img/icone-editeur.png') }}" alt="">.
                    <br/>Cliquez sur cette icone. Une popup « Insérer/Modifier une image » s'ouvre. Dans cette popup, cliquez sur l'icône dossier image à droite :
                    <img src="{{ asset('backend/img/popup-dossier.png') }}" alt="">.
                    <br/>La popup s'agrandit pour devenir Filemanager. Dans cette popup, 2 icônes de dossiers  : « fichevigneron » et « reportage. »
                    <br/>Cliquez sur le dossier reportage. Celui-ci s'ouvre sur des images déjà présentes.
                    <br/>Nous allons à présent téléverser notre image sur le serveur.
                    Intéressons-nous à l'icone bleu pâle <img src="{{ asset('backend/img/pale.png') }}" width="32" height="32"> en bas à droite.
                    <br/>Si vous passez la souris dessus, cette icône se démultiplie en 3 : « Nouveau dossier »  et « Envoyer. »
                    <br/>C'est Envoyer, le téléversement de l'image qui nous intéresse.
                    <br/>Cliquez dessus, une nouvelle popup s'ouvre et vous propose de choisir une image sur votre dique dur.
                    <br/>Vous le faites. L'image à teléverser sera au format « .jpg » et sera un dividende de <strong>1920 x 480 pixels</strong>.
                    Idéalement exactement à ce format.<br/>
                    Une fois téléversée, vous sélectionnez l'image, puis cliquez successivement sur tous les « Ok. » L'images est placée.

                    <br/><br/>Modifiez le texte comme vous l'entendez selon le contenu du vigneron en vous aidant des outils fournis par l'éditeur de texte.
                    <br/>Également le titre du reportage, qui peut être aussi le lien du site, s'il en posséde un.
                    <br/>Sélectionnez ce titre avec votre souris,
                    cliquez sur l'outil lien <img src="{{ asset('backend/img/lien.png') }}" alt="">, une popup s'ouvre.
                    <br/>Complétez-là en renseignant l'url et le texte à afficher, qui sont les mêmes.
                    Mettez un titre si vous le souhaitez. Et disposez le champ cible sur « Nouvelle fenêtre », puis cliquez sur Ok.
                    <br/><br/>Le reportage est prêt à être diffusé.
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                 aria-labelledby="headingTwo">
                <div class="panel-body">
                    @include('admin.vignerons.partials.fakereportagevigneron')
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ../Reportage -->


<!-- Option 3 -->
<div class="row">
    <div class="col-xs-2" style="margin-top:40px"><h4>3 - Option 3</h4></div>
    <div class="col-xs-10">
        <p style="margin-top:50px; margin-bottom: 30px">
            Achat de l'option 3 pour le vigneron <strong>{{ $vigneron->societe }}</strong>, 
            dont l'adresse est : <strong>{{ $vigneron->adresse }}</strong>,
            l'email : <strong>{{ $vigneron->email }}</strong> et la région vinicole : <strong>{{ $vigneron->regionvinicole }}</strong>
        </p>
    </div>
</div>
<!-- ../Option 3 -->

<!-- Fiche Youtube -->
<div class="form-horizontal">
    <div class="form-group {{ $errors->has('video') ? 'has-error': '' }}">
        <div class="col-xs-2 control-label">
            {!! Form::label('video', "La vidéo Youtube") !!}
        </div>
        <div class="col-xs-10" style="margin-top:7px">
            {{ Form::radio('video', 'video') }}
            @if ($errors->has('video'))
                <span class="help-block">{{ $errors->first('video') }}</span>
            @endif
        </div>
    </div>
</div>
<!-- ../Fiche Youtube -->

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