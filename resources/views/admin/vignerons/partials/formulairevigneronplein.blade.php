{!! Form::model($vigneron, [
   'method'    => 'PUT',
   // 'route'     => ['admin.vignerons.update', $vigneron->user_id],
   // Pour récupérer un segment comme dans Codeigniter, se servir de la classe Request::segment(x)
   // ici cela remplace $vigneron->user_id
   'route'     => ['admin.vignerons.update', Request::segment(4)],
   'files'      => true
]) !!}

<!-- Nom du vigneron -->
<div class="form-horizontal">
    <div class="form-group {{ $errors->has('societe') ? 'has-error': '' }}">
        <div class="col-xs-2  control-label">
            {!! Form::label('societe', 'Votre domaine/nom/société') !!}
        </div>
        <div class="col-xs-10">
            {!! Form::text('societe', null,
            ['class' => 'form-control',
            'placeholder' => 'Par exemple : Domaine Richer',
            ]) !!}
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
            {!! Form::label('adresse', 'Votre adresse') !!}
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
            {!! Form::label('telephone', 'Votre téléphone') !!}
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
            {!! Form::label('site', 'Votre site internet') !!}
        </div>
        <div class="col-xs-10">
            {!! Form::text('site', null, ['class' => 'form-control',
            'placeholder' => 'Par exemple : http://www.vignobles-mayard.fr']) !!}
        </div>
    </div>
</div>
<!-- ../Site internet -->

<!-- email -->
<div class="form-horizontal">
    <div class="form-group {{ $errors->has('email') ? 'has-error': '' }}">
        <div class="col-xs-2  control-label">
            <div style="color:#dd4b39">
                {!! Form::label('email', "Email (obligatoire)") !!}
            </div>
        </div>
        <div class="col-xs-10">
            {!! Form::text('email', null,
            [
                'class' => 'form-control',
                'placeholder' => 'Votre adresse mail est obligatoire.'
            ]) !!}
            @if ($errors->has('email'))
                <span class="help-block">{{ $errors->first('email') }}</span>
            @endif
        </div>
    </div>
</div>
<!-- ../Site internet -->

<!-- Latitude et longitude -->
<div class="form-horizontal">
    <div class="form-group {{ $errors->has('latlong') ? 'has-error': '' }}">
        <div class="col-xs-2 control-label">
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
            {!! Form::label('sortevin', 'Vous produisez du vin') !!}
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
            {!! Form::label('qualitevin', 'Votre spécialité') !!}
        </div>
        <div class="col-xs-10">
            {!! Form::text('qualitevin', null,
            ['class' => 'form-control',
            'placeholder' => 'Par exemple : Roussette du Bugey']) !!}
        </div>
    </div>
</div>
<!-- ../Spécialité du vigneron -->

<!-- Département -->
<div class="form-horizontal">
    <div class="form-group {{ $errors->has('departement') ? 'has-error': '' }}">
        <div class="col-xs-2 control-label">
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
                'provence' 								=> 'Provence',
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

<!-- Commune vinicole -->
{{-- <div class="form-horizontal">
    <div class="form-group">
        <div class="col-xs-2 control-label">
            {!! Form::label('communevinicole', 'Votre commune vinicole') !!}
        </div>
        <div class="col-xs-10">
            {!! Form::select('communevinicole', App\Communevinicole::pluck('commune', 'commune'),
            null, ['class' => 'form-control',
            'placeholder' => 'Choisissez une commune vinicole dans la liste déroulante']) !!}
        </div>
    </div>
</div> --}}
<!-- ../Communevinicole-->

<!-- Localité vinicole -->
{{-- <div class="form-horizontal">
    <div class="form-group">
        <div class="col-xs-2 control-label">
            {!! Form::label('localitevinicole', 'Votre localité vinicole') !!}
        </div>
        <div class="col-xs-10">
            {!! Form::select('localitevinicole', App\Localitevinicole::pluck('localite', 'localite'),
            null, ['class' => 'form-control',
            'placeholder' => 'Choisissez une localité vinicole dans la liste déroulante']) !!}
        </div>
    </div>
</div> --}}
<!-- ../Localité vinicole-->


<!-- Fiche individuelle vigneron -->
@if (empty($vigneron->fiche))
    <div class="form-horizontal">
        <div class="form-group">
            <div class="col-xs-2 control-label">
                {!! Form::label('fiche', 'Votre activité en 2 paragraphes') !!}
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
                        <br/>Modifiez-le suivant votre contenu en écrivant entre les balises p et p pour constituer les 2 paragraphes (en HTML).
                        <br/>Si vous ne souhaitez pas de contenu, laissez le champ vide.
                    </h4>
                </div>
            </div>
        </div>
    </div>
@else
    <div class="form-horizontal">
        <div class="form-group">
            <div class="col-xs-2 control-label">
                {!! Form::label('fiche', 'Votre activité en 2 paragraphes') !!}
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
                        Ecrivez entre les balises p et p pour constituer 2 paragraphes (en HTML).
                        <br/>Si vous ne souhaitez plus de contenu, supprimez le texte du champ.
                    </h4>
                </div>
            </div>
        </div>
    </div>
@endif
<!-- ../Fiche individuelle vigneron -->

{!! Form::hidden('user_id') !!}


<div class="col-xs-12 col-xs-offset-2">
    <h4 style="margin-top: 40px;">Votre option (<i class="fa fa-fw fa-asterisk text-red"></i>)</h4>
</div>

<!-- Image reportage -->
<div class="form-horizontal">
    <div class="form-group  {{ $errors->has('imagereportage') ? 'has-error': '' }}">
        <div class="col-xs-2 control-label">
            <small style="font-size: 8px; position: absolute; margin: 0 0 0 -20px">
                (<i class="fa fa-fw fa-asterisk text-red"></i>)
            </small>
            {!! Form::label('imagereportage', "L'image de votre reportage") !!}
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
            <small style="font-size: 8px; position: absolute; margin: 0 0 0 -20px">
                (<i class="fa fa-fw fa-asterisk text-red"></i>)
            </small>
            {!! Form::label('reportage', 'Reportage') !!}
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
<!-- ../Reportage -->

<!-- Fiche individuelle vigneron : Youtube -->
<div class="form-horizontal">
    <div class="form-group">
        <div class="col-xs-2 control-label">
            <small style="font-size: 8px; position: absolute; margin: 0 0 0 -20px">
                (<i class="fa fa-fw fa-asterisk text-red"></i>)
            </small>
            {!! Form::label('video', "Votre vidéo Youtube") !!}
        </div>
        <div class="col-xs-10" style="margin-top: 7px;">
            Établissement d'un devis à part :
            {!! Form::checkbox('video', 1) !!}
        </div>
    </div>
</div>
<!-- ../Fiche individuelle vigneron : Youtube -->

<br/>
<div class="form-horizontal">
    <div class="form-group">
        <div class="col-xs-2 control-label">
        </div>
        <div class="col-xs-10">
            {!! Form::submit('Validez', ['class' => 'btn btn-primary']) !!}
            &nbsp;
            <a href="{{ route ('admin') }}" type="button" class="btn btn-default">Retour à l'accueil</a>
            <!-- Ici, on ferme le formulaire pour la mise à jour-->
        {!! Form::close() !!}

        <!-- On en ouvre un autre pour l'annulation -->
            <div style="margin-top: -34px; margin-left: 212px;">
            {!! Form::model($vigneron, [
                'method'    => 'PUT',
                'route'     => ['admin.vignerons.annulation', $vigneron->user_id]
             ]) !!}
            {!! Form::submit("Annulez l'opération", ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}<!-- On ferme le formulaire d'annulation -->
                <!-- ../On en ouvre un autre pour l'annulation -->
            </div>
        </div>
    </div>

    <br/><br/>

{!! Form::close() !!}

