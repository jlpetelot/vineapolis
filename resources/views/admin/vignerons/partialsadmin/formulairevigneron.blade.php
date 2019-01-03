{!! Form::model($vigneron, [
    'method'    => 'POST',
    'route'     => 'admin.store',
    'files'      => true
]) !!}


<!-- Nom du vigneron -->
<div class="form-horizontal">
    <div class="form-group {{ $errors->has('societe') ? 'has-error': '' }}">
        <div class="col-xs-2  control-label">
            <small style="font-size: 8px; position: absolute; margin: 0 0 0 -20px">
                (<i class="fa fa-fw fa-asterisk text-red"></i>)
            </small>
            {!! Form::label('societe', 'Nom du vigneron') !!}
        </div>
        <div class="col-xs-10">
            {!! Form::text('societe', null,
            ['class' => 'form-control', 'placeholder' => 'Par exemple : Domaine Richer']) !!}
            @if ($errors->has('societe'))
                <span class="help-block">{{ $errors->first('societe') }}</span>
            @endif
        </div>
    </div>
</div>
<!-- ../Nom du vigneron -->

<!-- Adresse du vigneron -->
<div class="form-horizontal">
    <div class="form-group {{ $errors->has('adresse') ? 'has-error': '' }}">
        <div class="col-xs-2 control-label">
            <small style="font-size: 8px; position: absolute; margin: 0 0 0 -20px">
                (<i class="fa fa-fw fa-asterisk text-red"></i>)
            </small>
            {!! Form::label('adresse', 'Adresse du vigneron') !!}
        </div>
        <div class="col-xs-10">
            {!! Form::text('adresse', null,
            ['class' => 'form-control',
            'placeholder' => 'Par exemple : 5, rue des Vendages, 81000 Albi']) !!}
            @if ($errors->has('adresse'))
                <span class="help-block">{{ $errors->first('adresse') }}</span>
            @endif
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
            {!! Form::text('telephone', null, ['class' => 'form-control',
            'placeholder' => 'Par exemple : (+33) 03 85 33 20 15 ou 04 90 40 32 84']) !!}
        </div>
    </div>
</div>
<!-- ../Téléphone -->

<!-- Site internet -->
<div class="form-horizontal">
    <div class="form-group">
        <div class="col-xs-2 control-label">
            {!! Form::label('site', 'Site internet') !!}
        </div>
        <div class="col-xs-10">
            {!! Form::text('site', null, ['class' => 'form-control',
            'placeholder' => 'Par exemple : http://www.vignobles-mayard.fr']) !!}
        </div>
    </div>
</div>
<!-- ../Site internet -->

<!-- Email -->
<div class="form-horizontal {{ $errors->has('email') ? 'has-error': '' }}">
    <div class="form-group">
        <div class="col-xs-2 control-label">
            <small style="font-size: 8px; position: absolute; margin: 0 0 0 -20px">
                (<i class="fa fa-fw fa-asterisk text-red"></i>)
            </small>
            {!! Form::label('email', 'Email') !!}
        </div>
        <div class="col-xs-10">
            {!! Form::text('email', null, ['class' => 'form-control',
            'placeholder' => 'Par exemple : vigneron@gmail.com']) !!}
            @if ($errors->has('email'))
                <span class="help-block">{{ $errors->first('email') }}</span>
            @endif
        </div>
    </div>
</div>
<!-- ../Email -->

<!-- Latitude et longitude -->
<div class="form-horizontal">
    <div class="form-group {{ $errors->has('latlong') ? 'has-error': '' }}">
        <div class="col-xs-2 control-label">
            <small style="font-size: 8px; position: absolute; margin: 0 0 0 -20px">
                (<i class="fa fa-fw fa-asterisk text-red"></i>)
            </small>
            {!! Form::label('latlong', 'Latitude et longitude GPS') !!}
        </div>
        <div class="col-xs-10">
            {!! Form::text('latlong', null,
            ['class' => 'form-control',
            'placeholder' => 'Format obligatoire : 45.9747692,5.8180872']) !!}
            @if ($errors->has('latlong'))
                <span class="help-block">{{ $errors->first('latlong') }}</span>
            @endif
        </div>
    </div>
</div>
<!-- ../Latitude et longitude -->

<!-- Sorte de vin -->
<div class="form-horizontal">
    <div class="form-group {{ $errors->has('sortevin') ? 'has-error': '' }}">
        <div class="col-xs-2 control-label">
            <small style="font-size: 8px; position: absolute; margin: 0 0 0 -20px">
                (<i class="fa fa-fw fa-asterisk text-red"></i>)
            </small>
            {!! Form::label('sortevin', 'Sorte de vin') !!}
        </div>
        <div class="col-xs-10">
            {!! Form::select('sortevin', App\Sortedevin::pluck('sorte', 'sorte'),
            null, ['class' => 'form-control',
            'placeholder' => 'Choisissez une sorte de vin']) !!}
            @if ($errors->has('sortevin'))
                <span class="help-block">{{ $errors->first('sortevin') }}</span>
            @endif
        </div>
    </div>
</div>
<!-- ../Sorte de vin -->

<!-- Spécialité du vigneron -->
<div class="form-horizontal">
    <div class="form-group">
        <div class="col-xs-2 control-label">
            {!! Form::label('qualitevin', 'Spécialité du vigneron') !!}
        </div>
        <div class="col-xs-10">
            {!! Form::text('qualitevin', null,
            ['class' => 'form-control',
            'placeholder' => 'Par exemple : Roussette du Bugey']) !!}
        </div>
    </div>
</div>
<!-- ../Spécialité du vigneron -->

<!-- Actif/Inactif -->
<div class="form-horizontal">
    <div class="form-group">
        <div class="col-xs-2 control-label">
            <small style="font-size: 8px; position: absolute; margin: 0 0 0 -20px">
                (<i class="fa fa-fw fa-asterisk text-red"></i>)
            </small>
            {!! Form::label('actif', 'Vigneron actif / inactif&nbsp;') !!}
            {!! Form::checkbox('actif', 1, false) !!}
        </div>
    </div>
</div>
<!-- ../Actif/Inactif -->

<!-- Payé/Pas Payé -->
<div class="form-horizontal">
    <div class="form-group">
        <div class="col-xs-2 control-label">
            <small style="font-size: 8px; position: absolute; margin: 0 0 0 -20px">
                (<i class="fa fa-fw fa-asterisk text-red"></i>)
            </small>
            {!! Form::label('paye', 'Payé / Pas Payé') !!}
            {!! Form::checkbox('paye', 1, false) !!}
        </div>
    </div>
</div>
<!-- ../Payé/Pas Payé -->

<!-- Département -->
<div class="form-horizontal">
    <div class="form-group {{ $errors->has('departement') ? 'has-error': '' }}">
        <div class="col-xs-2 control-label">
            <small style="font-size: 8px; position: absolute; margin: 0 0 0 -20px">
                (<i class="fa fa-fw fa-asterisk text-red"></i>)
            </small>
            {!! Form::label('departement', 'Département') !!}
        </div>
        <div class="col-xs-10">
            {!! Form::select('departement', App\Departement::pluck('lieu', 'lieu'),
            null, ['class' => 'form-control',
            'placeholder' => 'Choisissez un département']) !!}
            @if ($errors->has('departement'))
                <span class="help-block">{{ $errors->first('departement') }}</span>
            @endif
        </div>
    </div>
</div>
<!-- ../Département -->

<!-- Région vinicole -->
<div class="form-horizontal">
    <div class="form-group {{ $errors->has('region') ? 'has-error': '' }}">
        <div class="col-xs-2 control-label">
            {!! Form::label('region', 'Région vinicole') !!}
        </div>
        <div class="col-xs-10">
            {{ Form::select('region', 
            [
                'alsace' 								=> 'Alsace',
                'separateur1' 						    => '============================================================',
                'armagnac' 								=> 'Armagnac',
                'separateur2' 						    => '============================================================',
                'auvergne' 								=> 'Auvergne',
                'separateur3' 						    => '============================================================',
                'beaujolais' 							=> 'Beaujolais',
                'separateur4' 						    => '============================================================',
				'bordeaux' 								=> 'Bordeaux',
				'medoc' 								=> 'Bordeaux -> Médoc',
				'margaux' 								=> 'Bordeaux -> Médoc -> Margaux',
            	'moulis-listrac' 						=> 'Bordeaux -> Médoc -> Moulis et Listrac',
            	'pauillac' 								=> 'Bordeaux -> Médoc -> Pauillac',
            	'saint-estephe' 						=> 'Bordeaux -> Médoc -> Saint-Estèphe',
            	'saint-julien' 							=> 'Bordeaux -> Médoc -> Saint-Julien',
            	'pessac-leognan' 						=> 'Bordeaux -> Pessac-Léognan',
            	'pomerol' 								=> 'Bordeaux -> Pomerol',
            	'saint-emilion' 						=> 'Bordeaux -> Saint-Émilion',
                'sauternes-et-barsac' 					=> 'Bordeaux -> Sauternes et Barsac',
                'separateur5' 						    => '============================================================',
            	'bourgogne' 							=> 'Bourgogne',
            	'chablis' 								=> 'Bourgogne -> Chablis',
            	'grands-crus-de-chablis' 				=> 'Bourgogne -> Chablis -> Grands Crus de Chablis',
            	'cote-de-nuits' 						=> 'Bourgogne -> Côte de Nuits',
            	'chambolle-musigny-morey-saint-denis' 	=> 'Bourgogne -> Côte de Nuits -> Chambolle-Musigny et Morey-Saint-Denis',
            	'gevrey-chambertin' 					=> 'Bourgogne -> Côte de Nuits -> Gevrey-Chambertin',
            	'nuits-saint-georges' 					=> 'Bourgogne -> Côte de Nuits -> Nuits-Saint-Georges',
            	'vosne-romanee' 						=> 'Bourgogne -> Côte de Nuits -> Vosne-Romanée',
            	'vougeot' 								=> 'Bourgogne -> Côte de Nuits -> Vougeot',
            	'beaune-et-cotes-de-beaune' 			=> 'Bourgogne -> Beaune et Côtes de Beaune',
            	'1ers-crus-et-grands-crus-de-beaune' 	=> 'Bourgogne -> Beaune et Côtes de Beaune -> 1ers crus et Grands Crus de Beaune',
            	'aloxe-corton' 							=> 'Bourgogne -> Beaune et Côtes de Beaune -> Aloxe-Corton',
            	'chassagne-montrachet' 					=> 'Bourgogne -> Beaune et Côtes de Beaune -> Chassagne-Montrachet',
            	'pommard' 								=> 'Bourgogne -> Beaune et Côtes de Beaune -> Pommard',
            	'puligny-montrachet' 					=> 'Bourgogne -> Beaune et Côtes de Beaune -> Puligny-Montrachet',
            	'volnay' 								=> 'Bourgogne -> Beaune et Côtes de Beaune -> Volnay',
            	'cote-chalonnaise-et-couchoise' 		=> 'Bourgogne -> Côte Chalonnaise et Couchoise',
                'macon' 								=> 'Bourgogne -> Mâcon',
                'separateur6' 						    => '============================================================',
                'bugey' 								=> 'Bugey',
                'separateur7' 						    => '============================================================',
            	'champagne' 							=> 'Champagne',
            	'vallee-de-la-marne' 					=> 'Champagne -> De la Vallée de la Marne',
                'montagne-de-reims-et-cote-des-blancs' 	=> 'Champagne -> De la Montagne de Reims et de la Côte des Blancs',
                'separateur8' 						    => '============================================================',
                'cognac' 								=> 'Cognac',
                'separateur9' 						    => '============================================================',
                'corse' 								=> 'Corse',
                'separateur10' 						    => '============================================================',
                'cotes-du-rhone-meridional' 			=> 'Côtes du Rhône Méridional',
                'separateur11' 						    => '============================================================',
                'cotes-du-rhone-septentrional' 			=> 'Côtes du Rhône Septentrional',
                'saint-peray-et-cornas' 			    => 'Côtes du Rhône Septentrional -> Saint-Peray et Cornas',
                'separateur12' 						    => '============================================================',
                'jura' 									=> 'Jura',
                'separateur13' 						    => '============================================================',
                'languedoc-roussillon' 					=> 'Languedoc-Roussillon',
                'separateur14' 						    => '============================================================',
            	'loire' 								=> 'Loire',
            	'pouilly' 								=> 'Loire -> Pouilly',            	
            	'quincy-et-reuilly' 					=> 'Loire -> Quincy et Reuilly',
            	'sancerre-et-menetou-salon' 			=> 'Loire -> Sancerre et Menetou-Salon',
                'saumur-champigny' 						=> 'Loire -> Saumur-Champigny',
                'separateur15' 						    => '============================================================',
                'lorraine' 								=> 'Lorraine',
                'separateur16' 						    => '============================================================',
                'Provence' 								=> 'Provence',
                'separateur17' 						    => '============================================================',
                'savoie' 								=> 'Savoie',
                'separateur18' 						    => '============================================================',
            	'sud-ouest' 							=> 'Sud-Ouest',
                'aveyron' 								=> 'Sud-Ouest -> Aveyron',
                'separateur19' 						    => '============================================================',
                'sanscategorie' 						=> 'Sans Catégorie',
            ],
            null, 
            [
                'class' => 'form-control',
                'placeholder' => 'Choisissez une région vinicole'
            ]) }}
             @if ($errors->has('region'))
                <span class="help-block">{{ $errors->first('region') }}</span>
            @endif
        </div>
    </div>
</div>
<!-- ../Région vinicole-->

<!-- Région visible de la carte Google-->
{{-- <div class="form-horizontal">
    <div class="form-group {{ $errors->has('latlongregion') ? 'has-error': '' }}">
        <div class="col-xs-2 control-label">
            <small style="font-size: 8px; position: absolute; margin: 0 0 0 -20px">
                (<i class="fa fa-fw fa-asterisk text-red"></i>)
            </small>
            {!! Form::label('latlongregion', 'Région visible de la carte Google') !!}
        </div>
        <div class="col-xs-10">
            {!! Form::text('latlongregion', null,
            ['class' => 'form-control',
            'placeholder' => 'Format obligatoire : 45.9747692,5.8180872']) !!}
            @if ($errors->has('latlongregion'))
                <span class="help-block">{{ $errors->first('latlongregion') }}</span>
            @endif
        </div>
    </div>
</div> --}}
<!-- ../Région visible de la carte Google -->

<!-- Centre de la carte Google -->
{{-- <div class="form-horizontal">
    <div class="form-group {{ $errors->has('zoom') ? 'has-error': '' }}">
        <div class="col-xs-2 control-label">
            <small style="font-size: 8px; position: absolute; margin: 0 0 0 -20px">
                (<i class="fa fa-fw fa-asterisk text-red"></i>)
            </small>
            {!! Form::label('latlongregion', 'Centre de la carte Google') !!}
        </div>
        <div class="col-xs-10">
            {!! Form::select('zoom', App\Zoom::pluck('niveau', 'niveau'),
            null, ['class' => 'form-control',
            'placeholder' => 'Choisissez un niveau de zoom pour la carte Google']) !!}
            @if ($errors->has('zoom'))
                <span class="help-block">{{ $errors->first('zoom') }}</span>
            @endif
        </div>
    </div>
</div> --}}
<!-- ../Centre de la carte Google -->

<!-- Fiche individuelle vigneron -->
<div class="form-horizontal">
    <div class="form-group">
        <div class="col-xs-2 control-label">
            {!! Form::label('fiche', "L'activité du vigneron en 2 paragraphes") !!}
        </div>
        <div class="col-xs-10">
            {!! Form::textarea('fiche', NULL, ['class' => 'form-control', 'rows' => '4']) !!}
        </div>
    </div>
</div>

<div class="col-xs-10 col-xs-offset-2">
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true"
         style="margin-left: -11px;">
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingThree">
                <h4 class="panel-title">
                    Copiez le contenu ci-dessous et collez-le dans le champ. Le texte est limité à 2 paragraphes.
<xmp>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam blanditiis doloremque inventore  minus quia quibusdam tenetur.
Commodi debitis esse facere, fuga incidunt iste iure laboriosam laborum repellat suscipit totam voluptate.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam blanditiis doloremque inventore minus quia quibusdam tenetur.
Commodi debitis esse facere, fuga incidunt iste iure laboriosam laborum repellat suscipit totam voluptate.</p>
</xmp>
                    <br/>Modifiez-le suivant le contenu du vigneron en écrivant entre les balises p et p pour constituer les 2 paragraphes (en HTML).
                    <br/>S'il n'existe pas de contenu, laissez le champ vide.
                </h4>
            </div>
        </div>
    </div>
</div>
<!-- ../Fiche individuelle vigneron -->

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
                    et collez-le tel quel dans l'éditeur de texte ci-dessus en mode Code
                    <i class="fa fa-fw fa-angle-left"
                       style="color: #dd4b39; font-weight: 700"></i>
                    <i class="fa fa-fw fa-angle-right"
                       style="color: #dd4b39; font-weight: 700; position: absolute; margin-left: -11px;"></i>
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
<h3 class="gras rouge sitemodal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;http://www.lesiteduvigneron.com</h3>
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

<br/><br/>
<!-- Fiche Youtube -->
<div class="form-horizontal">
    <div class="form-group">
        <div class="col-xs-2 control-label">
            {!! Form::label('video', "La vidéo Youtube") !!}
        </div>
        <div class="col-xs-10">
            {!! Form::text('video', null,
            ['class' => 'form-control',
            'placeholder' => 'Par exemple : ']) !!}
        </div>
    </div>
</div>
<!-- ../Fiche Youtubee -->

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

<br/>
<div class="form-horizontal">
    <div class="form-group">
        <div class="col-xs-2 control-label">
        </div>
        <div class="col-xs-10">
            {!! Form::submit('Créer un vigneron', ['class' => 'btn btn-success']) !!}
            &nbsp;
            <a href="{{ route ('admin.all') }}" type="button" class="btn btn-default">Annulez</a>
        </div>
    </div>
</div>

{!! Form::close() !!}