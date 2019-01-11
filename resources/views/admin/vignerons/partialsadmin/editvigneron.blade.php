{!! Form::model($vigneron, [
    'method'    => 'PUT',
    'route'     => ['admin.update', $vigneron->id],
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
            {!! Form::label('actif', 'Vigneron actif / inactif&nbsp;') !!}
            @if ($vigneron->actif === 1)
                {!! Form::checkbox('actif', 1, true) !!}
            @elseif ($vigneron->actif === 0)
                {!! Form::checkbox('actif', 1, false) !!}
            @elseif ($vigneron->actif == NULL)
                {!! Form::checkbox('paye', 1, false) !!}
            @endif
        </div>
    </div>
</div>
<!-- ../Actif/Inactif -->

<!-- Payé/Pas Payé -->
<div class="form-horizontal">
    <div class="form-group">
        <div class="col-xs-2 control-label">
            {!! Form::label('paye', 'Payé / Pas Payé&nbsp;') !!}
            @if ($vigneron->paye === 1)
                {!! Form::checkbox('paye', 1, true) !!}
            @elseif ($vigneron->paye === 0)
                {!! Form::checkbox('paye', 1, false) !!}
            @elseif ($vigneron->paye == NULL)
                {!! Form::checkbox('paye', 1, false) !!}
            @endif
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
            <small style="font-size: 8px; position: absolute; margin: 0 0 0 -20px">
                (<i class="fa fa-fw fa-asterisk text-red"></i>)
            </small>
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
                'suisse' 						        => 'Suisse',
                'separateur20' 						    => '============================================================',
                'luxembourg' 						    => 'Luxembourg',
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
            {!! Form::submit('Mise à jour', ['class' => 'btn btn-primary']) !!}
            &nbsp;
            <a href="{{ route ('admin.all') }}" type="button" class="btn btn-default">Annulez</a>
        </div>
    </div>
</div>

{!! Form::close() !!}