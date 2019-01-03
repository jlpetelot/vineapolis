@extends('admin.layouts.backend.main')

@section('title', 'Créer un administrateur')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Créer une facture</h1>
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h4>
                        Facture | <span style="color: #3c8dbc">Créer une facture pour un vigneron ou un annonceur</span>
                        <small></small>
                    </h4>
                    <p style="font-size: 12px; margin-top: -10px;">(Les champs marqués d'une astérisque
                        <i class="fa fa-fw fa-asterisk text-red"></i>
                        sont obligatoires)
                    </p>
                </div>

                <div class="box-body">

                {!! Form::open([
                    'method'    => 'POST',
                    'route'     => 'factures.store',
                ]) !!}

                <!-- Nom de l'utilisateur -->
                <div class="form-horizontal">
                    <div class="form-group {{ $errors->has('name') ? 'has-error': '' }}">
                        <div class="col-xs-2 control-label">
                            <small style="font-size: 8px; position: absolute; margin: 0 0 0 -20px">
                                (<i class="fa fa-fw fa-asterisk text-red"></i>)
                            </small>
                            {!! Form::label('name', 'Choisissez le nom ou la société') !!}
                            <br/><small>Le vigneron et/ou annonceur est nécessairement connu et donc présent dans cette liste</small>
                        </div>
                        <div class="col-xs-10">
                            {!! Form::select('name', App\User::pluck('name', 'name'),
                            null, [
                            'class' => 'form-control',
                            'placeholder' => 'Choisissez le nom ou la société',
                            'order-by' => 'id'
                            ]) !!}
                            @if ($errors->has('name'))
                                <span class="help-block">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
                <!-- ../Nom de l'utilisateur -->

                <!-- Adresse de l'utilisateur -->
                {{-- <div class="form-horizontal">
                    <div class="form-group {{ $errors->has('adresse') ? 'has-error': '' }}">
                        <div class="col-xs-2  control-label">
                            <small style="font-size: 8px; position: absolute; margin: 0 0 0 -20px">
                                (<i class="fa fa-fw fa-asterisk text-red"></i>)
                            </small>
                            {!! Form::label('adresse', "Adresse") !!}
                        </div>
                        <div class="col-xs-10">
                            {!! Form::text('adresse', null,
                            [
                                'class' => 'form-control',
                                'placeholder' => "L'adresse est connue et correspond à l'adresse du vigneron ou de l'annonceur"
                                ]) !!}
                            @if ($errors->has('adresse'))
                                <span class="help-block">{{ $errors->first('adresse') }}</span>
                            @endif
                        </div>
                    </div>
                </div> --}}
                <!-- ../Adresse de l'utilisateur -->

                <!-- Téléphone de l'utilisateur -->
                {{-- <div class="form-horizontal">
                    <div class="form-group {{ $errors->has('telephone') ? 'has-error': '' }}">
                        <div class="col-xs-2  control-label">
                            <small style="font-size: 8px; position: absolute; margin: 0 0 0 -20px">
                                (<i class="fa fa-fw fa-asterisk text-red"></i>)
                            </small>
                            {!! Form::label('telephone', "Téléphone") !!}
                        </div>
                        <div class="col-xs-10">
                            {!! Form::text('telephone', null,
                            [
                                'class' => 'form-control',
                                'placeholder' => "Le numéro de téléphone est connu et correspond au téléphone du vigneron ou de l'annonceur"
                                ]) !!}
                            @if ($errors->has('telephone'))
                                <span class="help-block">{{ $errors->first('telephone') }}</span>
                            @endif
                        </div>
                    </div>
                </div> --}}
                <!-- ../Téléphone de l'utilisateur -->

                <!-- Email de l'utilisateur -->
                {{-- <div class="form-horizontal">
                    <div class="form-group {{ $errors->has('email') ? 'has-error': '' }}">
                        <div class="col-xs-2 control-label">
                            <small style="font-size: 8px; position: absolute; margin: 0 0 0 -20px">
                                (<i class="fa fa-fw fa-asterisk text-red"></i>)
                            </small>
                            {!! Form::label('email', "Email") !!}
                        </div>
                        <div class="col-xs-10">
                            {!! Form::text('email', null,
                            [
                                'class' => 'form-control',
                                'placeholder' => "L'email est connu et correspond à l'email du vigneron ou de l'annonceur"
                                ]) !!}
                            @if ($errors->has('email'))
                                <span class="help-block">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>
                </div> --}}
                <!-- ../Email de l'utilisateur -->

                <!-- Le choix de l'annonce -->
                <div class="form-horizontal">
                    <div class="form-group {{ $errors->has('pub') ? 'has-error': '' }}">
                            <div class="col-xs-2 control-label">
                                <small style="font-size: 8px; position: absolute; margin: 0 0 0 -20px">
                                    (<i class="fa fa-fw fa-asterisk text-red"></i>)
                                </small>
                                {!! Form::label('pub', "La publicité choisie") !!}
                            </div>
                        <div class="col-xs-10">
                            {{ Form::select('pub', 
                            [
                                1       => "option lisibilité et détail de votre activité",
                                2       => "option lisibilité, détail de votre activité et reportage",
                                'separateur1'   => '=============================================================',
                                3       => "France, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                                4       => "France, annonce en haut, 2ème à gauche et d'un format de (191px) x (238px)",
                                5       => "France, annonce au milieu, tout à gauche et d'un format de (191px) x (238px)",
                                6       => "France, annonce au milieu, 2ème à gauche et d'un format de (191px) x (238px)",
                                7       => "France, annonce en bas à gauche et d'un format de (382px) x (440px)",
                                8       => "France, annonce en haut à droite et d'un format de (382px) x (238px)",
                                9       => "France, annonce au milieu à droite et d'un format de (382px) x (238px)",
                                10      => "France, annonce en bas à droite et d'un format de (382px) x (440px)",
                                'separateur2' 	=> '=============================================================',
                                315     => "Alsace, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                                316     => "Alsace, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                                317     => "Alsace, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                                318     => "Alsace, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                                319     => "Alsace, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                                320     => "Alsace, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                                321     => "Alsace, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                                322     => "Alsace, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                                'separateur3' 	=> '==============================================================',
                                395     => "Armagnac, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                                396     => "Armagnac, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                                397     => "Armagnac, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                                398     => "Armagnac, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                                399     => "Armagnac, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                                400     => "Armagnac, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                                401     => "Armagnac, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                                402     => "Armagnac, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                                'separateur4' 	=> '==============================================================',
                                411     => "Auvergne, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                                412     => "Auvergne, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                                413     => "Auvergne, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                                414     => "Auvergne, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                                415     => "Auvergne, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                                416     => "Auvergne, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                                417     => "Auvergne, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                                418     => "Auvergne, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                                'separateur6' 	=> '==============================================================',
                                371     => "Beaujolais, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                                372     => "Beaujolais, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                                373     => "Beaujolais, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                                374     => "Beaujolais, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                                375     => "Beaujolais, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                                376     => "Beaujolais, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                                377     => "Beaujolais, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                                378     => "Beaujolais, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                                'separateur7' 	=> '==============================================================',
                                19      => "Bordeaux, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                                20      => "Bordeaux, annonce en haut, 2ème à gauche et d'un format de (191px) x (238px)",
                                21      => "Bordeaux, annonce au milieu, tout à gauche et d'un format de (191px) x (238px)",
                                22      => "Bordeaux, annonce au milieu, 2ème à gauche et d'un format de (191px) x (238px)",
                                23      => "Bordeaux, annonce en bas à gauche et d'un format de (382px) x (440px)",
                                24      => "Bordeaux, annonce en haut à droite et d'un format de (382px) x (238px)",
                                25      => "Bordeaux, annonce au milieu à droite et d'un format de (382px) x (238px)",
                                26      => "Bordeaux, annonce en bas à droite et d'un format de (382px) x (440px)",
                                203     => "Bordeaux -> Médoc, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                                204     => "Bordeaux -> Médoc, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                                205     => "Bordeaux -> Médoc, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                                206     => "Bordeaux -> Médoc, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                                207     => "Bordeaux -> Médoc, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                                208     => "Bordeaux -> Médoc, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                                209     => "Bordeaux -> Médoc, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                                210     => "Bordeaux -> Médoc, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                                211     => "Bordeaux -> Médoc -> Margaux, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                                212     => "Bordeaux -> Médoc -> Margaux, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                                213     => "Bordeaux -> Médoc -> Margaux, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                                214     => "Bordeaux -> Médoc -> Margaux, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                                215     => "Bordeaux -> Médoc -> Margaux, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                                216     => "Bordeaux -> Médoc -> Margaux, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                                217     => "Bordeaux -> Médoc -> Margaux, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                                218     => "Bordeaux -> Médoc -> Margaux, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                                219     => "Bordeaux -> Médoc -> Moulis-Listrac, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                                220     => "Bordeaux -> Médoc -> Moulis-Listrac, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                                221     => "Bordeaux -> Médoc -> Moulis-Listrac, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                                222     => "Bordeaux -> Médoc -> Moulis-Listrac, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                                223     => "Bordeaux -> Médoc -> Moulis-Listrac, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                                224     => "Bordeaux -> Médoc -> Moulis-Listrac, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                                225     => "Bordeaux -> Médoc -> Moulis-Listrac, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                                226     => "Bordeaux -> Médoc -> Moulis-Listrac, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                                227     => "Bordeaux -> Médoc -> Pauillac, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                                228     => "Bordeaux -> Médoc -> Pauillac, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                                229     => "Bordeaux -> Médoc -> Pauillac, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                                230     => "Bordeaux -> Médoc -> Pauillac, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                                231     => "Bordeaux -> Médoc -> Pauillac, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                                232     => "Bordeaux -> Médoc -> Pauillac, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                                233     => "Bordeaux -> Médoc -> Pauillac, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                                234     => "Bordeaux -> Médoc -> Pauillac, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                                235     => "Bordeaux -> Médoc -> Saint-Estèphe, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                                236     => "Bordeaux -> Médoc -> Saint-Estèphe, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                                237     => "Bordeaux -> Médoc -> Saint-Estèphe, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                                238     => "Bordeaux -> Médoc -> Saint-Estèphe, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                                239     => "Bordeaux -> Médoc -> Saint-Estèphe, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                                240     => "Bordeaux -> Médoc -> Saint-Estèphe, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                                241     => "Bordeaux -> Médoc -> Saint-Estèphe, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                                242     => "Bordeaux -> Médoc -> Saint-Estèphe, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                                243     => "Bordeaux -> Médoc -> Saint-Julien, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                                244     => "Bordeaux -> Médoc -> Saint-Julien, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                                245     => "Bordeaux -> Médoc -> Saint-Julien, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                                246     => "Bordeaux -> Médoc -> Saint-Julien, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                                247     => "Bordeaux -> Médoc -> Saint-Julien, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                                248     => "Bordeaux -> Médoc -> Saint-Julien, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                                249     => "Bordeaux -> Médoc -> Saint-Julien, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                                250     => "Bordeaux -> Médoc -> Saint-Julien, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                                267     => "Bordeaux -> Pessac-Léognan, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                                268     => "Bordeaux -> Pessac-Léognan, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                                269     => "Bordeaux -> Pessac-Léognan, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                                270     => "Bordeaux -> Pessac-Léognan, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                                271     => "Bordeaux -> Pessac-Léognan, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                                272     => "Bordeaux -> Pessac-Léognan, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                                273     => "Bordeaux -> Pessac-Léognan, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                                274     => "Bordeaux -> Pessac-Léognan, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                                275     => "Bordeaux -> Pomerol, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                                276     => "Bordeaux -> Pomerol, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                                277     => "Bordeaux -> Pomerol, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                                278     => "Bordeaux -> Pomerol, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                                279     => "Bordeaux -> Pomerol, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                                280     => "Bordeaux -> Pomerol, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                                281     => "Bordeaux -> Pomerol, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                                282     => "Bordeaux -> Pomerol, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                                283     => "Bordeaux -> Saint-Émilion, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                                284     => "Bordeaux -> Saint-Émilion, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                                285     => "Bordeaux -> Saint-Émilion, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                                286     => "Bordeaux -> Saint-Émilion, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                                287     => "Bordeaux -> Saint-Émilion, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                                288     => "Bordeaux -> Saint-Émilion, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                                289     => "Bordeaux -> Saint-Émilion, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                                290     => "Bordeaux -> Saint-Émilion, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                                291     => "Bordeaux -> Sauternes, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                                292     => "Bordeaux -> Sauternes, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                                293     => "Bordeaux -> Sauternes, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                                294     => "Bordeaux -> Sauternes, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                                295     => "Bordeaux -> Sauternes, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                                296     => "Bordeaux -> Sauternes, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                                297     => "Bordeaux -> Sauternes, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                                298     => "Bordeaux -> Sauternes, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                                'separateur8' 	=> '=====================================================================',
                                11      => "Bourgogne, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                                12      => "Bourgogne, annonce en haut, 2ème à gauche et d'un format de (191px) x (238px)",
                                13      => "Bourgogne, annonce au milieu, tout à gauche et d'un format de (191px) x (238px)",
                                14      => "Bourgogne, annonce au milieu, 2ème à gauche et d'un format de (191px) x (238px)",
                                15      => "Bourgogne, annonce en bas à gauche et d'un format de (382px) x (440px)",
                                16      => "Bourgogne, annonce en haut à droite et d'un format de (382px) x (238px)",
                                17      => "Bourgogne, annonce au milieu à droite et d'un format de (382px) x (238px)",
                                18      => "Bourgogne, annonce en bas à droite et d'un format de (382px) x (440px)",
                                67      => "Bourgogne -> Chablis, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                                68      => "Bourgogne -> Chablis, annonce en haut, 2ème à gauche et d'un format de (191px) x (238px)",
                                69      => "Bourgogne -> Chablis, annonce au milieu, tout à gauche et d'un format de (191px) x (238px)",
                                70      => "Bourgogne -> Chablis, annonce au milieu, 2ème à gauche et d'un format de (191px) x (238px)",
                                71      => "Bourgogne -> Chablis, annonce en bas à gauche et d'un format de (382px) x (440px)",
                                72      => "Bourgogne -> Chablis, annonce en haut à droite et d'un format de (382px) x (238px)",
                                73      => "Bourgogne -> Chablis, annonce au milieu à droite et d'un format de (382px) x (238px)",
                                74      => "Bourgogne -> Chablis, annonce en bas à droite et d'un format de (382px) x (440px)",
                                99      => "Bourgogne -> Chablis -> Grands Crus de Chablis, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                                100     => "Bourgogne -> Chablis -> Grands Crus de Chablis, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                                101     => "Bourgogne -> Chablis -> Grands Crus de Chablis, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                                102     => "Bourgogne -> Chablis -> Grands Crus de Chablis, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                                103     => "Bourgogne -> Chablis -> Grands Crus de Chablis, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                                104     => "Bourgogne -> Chablis -> Grands Crus de Chablis, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                                105     => "Bourgogne -> Chablis -> Grands Crus de Chablis, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                                106     => "Bourgogne -> Chablis -> Grands Crus de Chablis, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                                83      => "Bourgogne -> Côtes de Nuits, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                                84      => "Bourgogne -> Côtes de Nuits, annonce en haut, 2ème à gauche et d'un format de (191px) x (238px)",
                                85      => "Bourgogne -> Côtes de Nuits, annonce au milieu, tout à gauche et d'un format de (191px) x (238px)",
                                86      => "Bourgogne -> Côtes de Nuits, annonce au milieu, 2ème à gauche et d'un format de (191px) x (238px)",
                                87      => "Bourgogne -> Côtes de Nuits, annonce en bas à gauche et d'un format de (382px) x (440px)",
                                88      => "Bourgogne -> Côtes de Nuits, annonce en haut à droite et d'un format de (382px) x (238px)",
                                89      => "Bourgogne -> Côtes de Nuits, annonce au milieu à droite et d'un format de (382px) x (238px)",
                                90      => "Bourgogne -> Côtes de Nuits, annonce en bas à droite et d'un format de (382px) x (440px)",
                                123     => "Bourgogne -> Côtes de Nuits -> Chambolle-Musigny et Morey-Saint-Denis, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                                124     => "Bourgogne -> Côtes de Nuits -> Chambolle-Musigny et Morey-Saint-Denis, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                                125     => "Bourgogne -> Côtes de Nuits -> Chambolle-Musigny et Morey-Saint-Denis, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                                126     => "Bourgogne -> Côtes de Nuits -> Chambolle-Musigny et Morey-Saint-Denis, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                                127     => "Bourgogne -> Côtes de Nuits -> Chambolle-Musigny et Morey-Saint-Denis, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                                128     => "Bourgogne -> Côtes de Nuits -> Chambolle-Musigny et Morey-Saint-Denis, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                                129     => "Bourgogne -> Côtes de Nuits -> Chambolle-Musigny et Morey-Saint-Denis, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                                130     => "Bourgogne -> Côtes de Nuits -> Chambolle-Musigny et Morey-Saint-Denis, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                                115     => "Bourgogne -> Côtes de Nuits -> Gevrey-Chambertin, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                                116     => "Bourgogne -> Côtes de Nuits -> Gevrey-Chambertin, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                                117     => "Bourgogne -> Côtes de Nuits -> Gevrey-Chambertin, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                                118     => "Bourgogne -> Côtes de Nuits -> Gevrey-Chambertin, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                                119     => "Bourgogne -> Côtes de Nuits -> Gevrey-Chambertin, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                                120     => "Bourgogne -> Côtes de Nuits -> Gevrey-Chambertin, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                                121     => "Bourgogne -> Côtes de Nuits -> Gevrey-Chambertin, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                                122     => "Bourgogne -> Côtes de Nuits -> Gevrey-Chambertin, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                                147     => "Bourgogne -> Côtes de Nuits -> Nuits-Saint-Georges, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                                148     => "Bourgogne -> Côtes de Nuits -> Nuits-Saint-Georges, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                                149     => "Bourgogne -> Côtes de Nuits -> Nuits-Saint-Georges, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                                150     => "Bourgogne -> Côtes de Nuits -> Nuits-Saint-Georges, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                                151     => "Bourgogne -> Côtes de Nuits -> Nuits-Saint-Georges, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                                152     => "Bourgogne -> Côtes de Nuits -> Nuits-Saint-Georges, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                                153     => "Bourgogne -> Côtes de Nuits -> Nuits-Saint-Georges, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                                154     => "Bourgogne -> Côtes de Nuits -> Nuits-Saint-Georges, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                                139     => "Bourgogne -> Côtes de Nuits -> Vosne-Romanée, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                                140     => "Bourgogne -> Côtes de Nuits -> Vosne-Romanée, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                                141     => "Bourgogne -> Côtes de Nuits -> Vosne-Romanée, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                                142     => "Bourgogne -> Côtes de Nuits -> Vosne-Romanée, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                                143     => "Bourgogne -> Côtes de Nuits -> Vosne-Romanée, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                                144     => "Bourgogne -> Côtes de Nuits -> Vosne-Romanée, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                                145     => "Bourgogne -> Côtes de Nuits -> Vosne-Romanée, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                                146     => "Bourgogne -> Côtes de Nuits -> Vosne-Romanée, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                                131     => "Bourgogne -> Côtes de Nuits -> Vougeot, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                                132     => "Bourgogne -> Côtes de Nuits -> Vougeot, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                                133     => "Bourgogne -> Côtes de Nuits -> Vougeot, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                                134     => "Bourgogne -> Côtes de Nuits -> Vougeot, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                                135     => "Bourgogne -> Côtes de Nuits -> Vougeot, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                                136     => "Bourgogne -> Côtes de Nuits -> Vougeot, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                                137     => "Bourgogne -> Côtes de Nuits -> Vougeot, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                                138     => "Bourgogne -> Côtes de Nuits -> Vougeot, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                                59      => "Bourgogne -> Beaune et Côtes de Beaune, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                                60      => "Bourgogne -> Beaune et Côtes de Beaune, annonce en haut, 2ème à gauche et d'un format de (191px) x (238px)",
                                61      => "Bourgogne -> Beaune et Côtes de Beaune, annonce au milieu, tout à gauche et d'un format de (191px) x (238px)",
                                62      => "Bourgogne -> Beaune et Côtes de Beaune, annonce au milieu, 2ème à gauche et d'un format de (191px) x (238px)",
                                63      => "Bourgogne -> Beaune et Côtes de Beaune, annonce en bas à gauche et d'un format de (382px) x (440px)",
                                64      => "Bourgogne -> Beaune et Côtes de Beaune, annonce en haut à droite et d'un format de (382px) x (238px)",
                                65      => "Bourgogne -> Beaune et Côtes de Beaune, annonce au milieu à droite et d'un format de (382px) x (238px)",
                                66      => "Bourgogne -> Beaune et Côtes de Beaune, annonce en bas à droite et d'un format de (382px) x (440px)",
                                163     => "Bourgogne -> Beaune et Côtes de Beaune -> 1ers crus et Grands Crus de Beaune, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                                164     => "Bourgogne -> Beaune et Côtes de Beaune -> 1ers crus et Grands Crus de Beaune, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                                165     => "Bourgogne -> Beaune et Côtes de Beaune -> 1ers crus et Grands Crus de Beaune, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                                166     => "Bourgogne -> Beaune et Côtes de Beaune -> 1ers crus et Grands Crus de Beaune, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                                167     => "Bourgogne -> Beaune et Côtes de Beaune -> 1ers crus et Grands Crus de Beaune, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                                168     => "Bourgogne -> Beaune et Côtes de Beaune -> 1ers crus et Grands Crus de Beaune, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                                169     => "Bourgogne -> Beaune et Côtes de Beaune -> 1ers crus et Grands Crus de Beaune, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                                170     => "Bourgogne -> Beaune et Côtes de Beaune -> 1ers crus et Grands Crus de Beaune, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                                155     => "Bourgogne -> Beaune et Côtes de Beaune -> Aloxe-Corton, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                                156     => "Bourgogne -> Beaune et Côtes de Beaune -> Aloxe-Corton, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                                157     => "Bourgogne -> Beaune et Côtes de Beaune -> Aloxe-Corton, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                                158     => "Bourgogne -> Beaune et Côtes de Beaune -> Aloxe-Corton, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                                159     => "Bourgogne -> Beaune et Côtes de Beaune -> Aloxe-Corton, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                                160     => "Bourgogne -> Beaune et Côtes de Beaune -> Aloxe-Corton, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                                161     => "Bourgogne -> Beaune et Côtes de Beaune -> Aloxe-Corton, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                                162     => "Bourgogne -> Beaune et Côtes de Beaune -> Aloxe-Corton, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                                195     => "Bourgogne -> Beaune et Côtes de Beaune -> Chassagne-Montrachet, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                                196     => "Bourgogne -> Beaune et Côtes de Beaune -> Chassagne-Montrachet, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                                197     => "Bourgogne -> Beaune et Côtes de Beaune -> Chassagne-Montrachet, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                                198     => "Bourgogne -> Beaune et Côtes de Beaune -> Chassagne-Montrachet, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                                199     => "Bourgogne -> Beaune et Côtes de Beaune -> Chassagne-Montrachet, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                                200     => "Bourgogne -> Beaune et Côtes de Beaune -> Chassagne-Montrachet, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                                201     => "Bourgogne -> Beaune et Côtes de Beaune -> Chassagne-Montrachet, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                                202     => "Bourgogne -> Beaune et Côtes de Beaune -> Chassagne-Montrachet, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                                171     => "Bourgogne -> Beaune et Côtes de Beaune -> Pommard, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                                172     => "Bourgogne -> Beaune et Côtes de Beaune -> Pommard, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                                173     => "Bourgogne -> Beaune et Côtes de Beaune -> Pommard, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                                174     => "Bourgogne -> Beaune et Côtes de Beaune -> Pommard, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                                175     => "Bourgogne -> Beaune et Côtes de Beaune -> Pommard, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                                176     => "Bourgogne -> Beaune et Côtes de Beaune -> Pommard, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                                177     => "Bourgogne -> Beaune et Côtes de Beaune -> Pommard, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                                178     => "Bourgogne -> Beaune et Côtes de Beaune -> Pommard, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                                187     => "Bourgogne -> Beaune et Côtes de Beaune -> Puligny-Montrachet, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                                188     => "Bourgogne -> Beaune et Côtes de Beaune -> Puligny-Montrachet, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                                189     => "Bourgogne -> Beaune et Côtes de Beaune -> Puligny-Montrachet, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                                190     => "Bourgogne -> Beaune et Côtes de Beaune -> Puligny-Montrachet, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                                191     => "Bourgogne -> Beaune et Côtes de Beaune -> Puligny-Montrachet, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                                192     => "Bourgogne -> Beaune et Côtes de Beaune -> Puligny-Montrachet, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                                193     => "Bourgogne -> Beaune et Côtes de Beaune -> Puligny-Montrachet, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                                194     => "Bourgogne -> Beaune et Côtes de Beaune -> Puligny-Montrachet, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                                179     => "Bourgogne -> Beaune et Côtes de Beaune -> Volnay, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                                180     => "Bourgogne -> Beaune et Côtes de Beaune -> Volnay, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                                181     => "Bourgogne -> Beaune et Côtes de Beaune -> Volnay, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                                182     => "Bourgogne -> Beaune et Côtes de Beaune -> Volnay, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                                183     => "Bourgogne -> Beaune et Côtes de Beaune -> Volnay, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                                184     => "Bourgogne -> Beaune et Côtes de Beaune -> Volnay, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                                185     => "Bourgogne -> Beaune et Côtes de Beaune -> Volnay, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                                186     => "Bourgogne -> Beaune et Côtes de Beaune -> Volnay, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                                91      => "Bourgogne -> Côte Chalonnaise et Couchoise, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                                92      => "Bourgogne -> Côte Chalonnaise et Couchoise, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                                93      => "Bourgogne -> Côte Chalonnaise et Couchoise, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                                94      => "Bourgogne -> Côte Chalonnaise et Couchoise, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                                95      => "Bourgogne -> Côte Chalonnaise et Couchoise, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                                96      => "Bourgogne -> Côte Chalonnaise et Couchoise, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                                97      => "Bourgogne -> Côte Chalonnaise et Couchoise, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                                98      => "Bourgogne -> Côte Chalonnaise et Couchoise, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                                107     => "Bourgogne -> Mâcon, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                                108     => "Bourgogne -> Mâcon, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                                109     => "Bourgogne -> Mâcon, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                                110     => "Bourgogne -> Mâcon, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                                111     => "Bourgogne -> Mâcon, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                                112     => "Bourgogne -> Mâcon, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                                113     => "Bourgogne -> Mâcon, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                                114     => "Bourgogne -> Mâcon, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                                'separateur9' 	=> '=====================================================================',
                                251     => "Bugey, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                                252     => "Bugey, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                                253     => "Bugey, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                                254     => "Bugey, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                                255     => "Bugey, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                                256     => "Bugey, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                                257     => "Bugey, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                                258     => "Bugey, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                                'separateur10' 	=> '=====================================================================',
                                27      => "Champagne, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                                28      => "Champagne, annonce en haut, 2ème à gauche et d'un format de (191px) x (238px)",
                                29      => "Champagne, annonce au milieu, tout à gauche et d'un format de (191px) x (238px)",
                                30      => "Champagne, annonce au milieu, 2ème à gauche et d'un format de (191px) x (238px)",
                                31      => "Champagne, annonce en bas à gauche et d'un format de (382px) x (440px)",
                                32      => "Champagne, annonce en haut à droite et d'un format de (382px) x (238px)",
                                33      => "Champagne, annonce au milieu à droite et d'un format de (382px) x (238px)",
                                34      => "Champagne, annonce en bas à droite et d'un format de (382px) x (440px)",
                                307     => "Champagne -> Vallée de la Marne, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                                308     => "Champagne -> Vallée de la Marne, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                                309     => "Champagne -> Vallée de la Marne, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                                310     => "Champagne -> Vallée de la Marne, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                                311     => "Champagne -> Vallée de la Marne, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                                312     => "Champagne -> Vallée de la Marne, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                                313     => "Champagne -> Vallée de la Marne, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                                314     => "Champagne -> Vallée de la Marne, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                                299     => "Champagne -> Montagne de Reims et Côte des Blancs, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                                300     => "Champagne -> Montagne de Reims et Côte des Blancs, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                                301     => "Champagne -> Montagne de Reims et Côte des Blancs, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                                302     => "Champagne -> Montagne de Reims et Côte des Blancs, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                                303     => "Champagne -> Montagne de Reims et Côte des Blancs, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                                304     => "Champagne -> Montagne de Reims et Côte des Blancs, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                                305     => "Champagne -> Montagne de Reims et Côte des Blancs, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                                306     => "Champagne -> Montagne de Reims et Côte des Blancs, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                                'separateur11' 	=> '=====================================================================',
                                387     => "Cognac, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                                388     => "Cognac, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                                389     => "Cognac, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                                390     => "Cognac, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                                391     => "Cognac, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                                392     => "Cognac, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                                393     => "Cognac, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                                394     => "Cognac, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                                'separateur12' 	=> '=====================================================================',
                                427     => "Corse, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                                428     => "Corse, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                                429     => "Corse, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                                430     => "Corse, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                                431     => "Corse, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                                432     => "Corse, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                                433     => "Corse, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                                434     => "Corse, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                                'separateur13' 	=> '=====================================================================',
                                259     => "Côtes du Rhône Méridional, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                                260     => "Côtes du Rhône Méridional, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                                261     => "Côtes du Rhône Méridional, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                                262     => "Côtes du Rhône Méridional, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                                263     => "Côtes du Rhône Méridional, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                                264     => "Côtes du Rhône Méridional, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                                265     => "Côtes du Rhône Méridional, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                                266     => "Côtes du Rhône Méridional, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                                'separateur14' 	=> '=====================================================================',
                                43      => "Côtes du Rhône Septentrional, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                                44      => "Côtes du Rhône Septentrional, annonce en haut, 2ème à gauche et d'un format de (191px) x (238px)",
                                45      => "Côtes du Rhône Septentrional, annonce au milieu, tout à gauche et d'un format de (191px) x (238px)",
                                46      => "Côtes du Rhône Septentrional, annonce au milieu, 2ème à gauche et d'un format de (191px) x (238px)",
                                47      => "Côtes du Rhône Septentrional, annonce en bas à gauche et d'un format de (382px) x (440px)",
                                48      => "Côtes du Rhône Septentrional, annonce en haut à droite et d'un format de (382px) x (238px)",
                                49      => "Côtes du Rhône Septentrional, annonce au milieu à droite et d'un format de (382px) x (238px)",
                                50      => "Côtes du Rhône Septentrional, annonce en bas à droite et d'un format de (382px) x (440px)",
                                443     => "Côtes du Rhône Septentrional -> Saint-Peray et Cornas, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                                444     => "Côtes du Rhône Septentrional -> Saint-Peray et Cornas, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                                445     => "Côtes du Rhône Septentrional -> Saint-Peray et Cornas, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                                446     => "Côtes du Rhône Septentrional -> Saint-Peray et Cornas, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                                447     => "Côtes du Rhône Septentrional -> Saint-Peray et Cornas, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                                448     => "Côtes du Rhône Septentrional -> Saint-Peray et Cornas, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                                449     => "Côtes du Rhône Septentrional -> Saint-Peray et Cornas, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                                450     => "Côtes du Rhône Septentrional -> Saint-Peray et Cornas, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                                'separateur15' 	=> '=====================================================================',
                                355     => "Jura, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                                356     => "Jura, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                                357     => "Jura, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                                358     => "Jura, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                                359     => "Jura, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                                360     => "Jura, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                                361     => "Jura, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                                362     => "Jura, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                                'separateur16' 	=> '=====================================================================',
                                363     => "Languedoc-Roussillon, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                                364     => "Languedoc-Roussillon, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                                365     => "Languedoc-Roussillon, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                                366     => "Languedoc-Roussillon, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                                367     => "Languedoc-Roussillon, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                                368     => "Languedoc-Roussillon, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                                369     => "Languedoc-Roussillon, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                                370     => "Languedoc-Roussillon, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                                'separateur17' 	=> '=====================================================================',
                                35      => "Loire, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                                36      => "Loire, annonce en haut, 2ème à gauche et d'un format de (191px) x (238px)",
                                37      => "Loire, annonce au milieu, tout à gauche et d'un format de (191px) x (238px)",
                                38      => "Loire, annonce au milieu, 2ème à gauche et d'un format de (191px) x (238px)",
                                39      => "Loire, annonce en bas à gauche et d'un format de (382px) x (440px)",
                                40      => "Loire, annonce en haut à droite et d'un format de (382px) x (238px)",
                                41      => "Loire, annonce au milieu à droite et d'un format de (382px) x (238px)",
                                42      => "Loire, annonce en bas à droite et d'un format de (382px) x (440px)",
                                323     => "Loire -> Pouilly, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                                324     => "Loire -> Pouilly, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                                325     => "Loire -> Pouilly, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                                326     => "Loire -> Pouilly, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                                327     => "Loire -> Pouilly, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                                328     => "Loire -> Pouilly, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                                329     => "Loire -> Pouilly, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                                330     => "Loire -> Pouilly, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                                331     => "Loire -> Quincy et Reuilly, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                                332     => "Loire -> Quincy et Reuilly, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                                333     => "Loire -> Quincy et Reuilly, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                                334     => "Loire -> Quincy et Reuilly, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                                335     => "Loire -> Quincy et Reuilly, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                                336     => "Loire -> Quincy et Reuilly, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                                337     => "Loire -> Quincy et Reuilly, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                                338     => "Loire -> Quincy et Reuilly, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                                339     => "Loire -> Sancerre et Menetou-Salon, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                                340     => "Loire -> Sancerre et Menetou-Salon, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                                341     => "Loire -> Sancerre et Menetou-Salon, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                                342     => "Loire -> Sancerre et Menetou-Salon, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                                343     => "Loire -> Sancerre et Menetou-Salon, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                                344     => "Loire -> Sancerre et Menetou-Salon, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                                345     => "Loire -> Sancerre et Menetou-Salon, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                                346     => "Loire -> Sancerre et Menetou-Salon, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                                347     => "Loire -> Saumur-Champigny, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                                348     => "Loire -> Saumur-Champigny, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                                349     => "Loire -> Saumur-Champigny, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                                350     => "Loire -> Saumur-Champigny, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                                351     => "Loire -> Saumur-Champigny, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                                352     => "Loire -> Saumur-Champigny, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                                353     => "Loire -> Saumur-Champigny, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                                354     => "Loire -> Saumur-Champigny, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                                'separateur18' 	=> '=====================================================================',
                                379     => "Lorraine, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                                380     => "Lorraine, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                                381     => "Lorraine, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                                382     => "Lorraine, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                                383     => "Lorraine, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                                384     => "Lorraine, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                                385     => "Lorraine, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                                386     => "Lorraine, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                                'separateur19' 	=> '=====================================================================',
                                435     => "Provence, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                                436     => "Provence, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                                437     => "Provence, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                                438     => "Provence, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                                439     => "Provence, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                                440     => "Provence, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                                441     => "Provence, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                                442     => "Provence, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                                'separateur20' 	=> '=====================================================================',
                                419     => "Savoie, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                                420     => "Savoie, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                                421     => "Savoie, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                                422     => "Savoie, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                                423     => "Savoie, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                                424     => "Savoie, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                                425     => "Savoie, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                                426     => "Savoie, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                                'separateur21' 	=> '=====================================================================',
                                51      => "Sud-Ouest, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                                52      => "Sud-Ouest, annonce en haut, 2ème à gauche et d'un format de (191px) x (238px)",
                                53      => "Sud-Ouest, annonce au milieu, tout à gauche et d'un format de (191px) x (238px)",
                                54      => "Sud-Ouest, annonce au milieu, 2ème à gauche et d'un format de (191px) x (238px)",
                                55      => "Sud-Ouest, annonce en bas à gauche et d'un format de (382px) x (440px)",
                                56      => "Sud-Ouest, annonce en haut à droite et d'un format de (382px) x (238px)",
                                57      => "Sud-Ouest, annonce au milieu à droite et d'un format de (382px) x (238px)",
                                58      => "Sud-Ouest, annonce en bas à droite et d'un format de (382px) x (440px)",
                                403     => "Sud-Ouest -> Aveyron, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                                404     => "Sud-Ouest -> Aveyron, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                                405     => "Sud-Ouest -> Aveyron, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                                406     => "Sud-Ouest -> Aveyron, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                                407     => "Sud-Ouest -> Aveyron, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                                408     => "Sud-Ouest -> Aveyron, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                                409     => "Sud-Ouest -> Aveyron, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                                410     => "Sud-Ouest -> Aveyron, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                                'separateur22' 	=> '=====================================================================',
                                75      => "Tous les vins, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                                76      => "Tous les vins, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                                77      => "Tous les vins, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                                78      => "Tous les vins, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                                79      => "Tous les vins, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                                80      => "Tous les vins, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                                81      => "Tous les vins, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                                82      => "Tous les vins, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                            ],
                            null, 
                            [
                                'class' => 'form-control',
                                'placeholder' => "Sélectionnez la publicité"
                            ]) }}
                            @if ($errors->has('pub'))
                                <span class="help-block">{{ $errors->first('pub') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
                <!-- ../Le choix de l'annonce -->

                <!-- Le choix de l'annonce -->
                {{-- <div class="form-horizontal">
                    <div class="form-group {{ $errors->has('pub') ? 'has-error': '' }}">
                        <div class="col-xs-2 control-label">
                            <small style="font-size: 8px; position: absolute; margin: 0 0 0 -20px">
                                (<i class="fa fa-fw fa-asterisk text-red"></i>)
                            </small>
                            {!! Form::label('pub', 'Le produit choisi') !!}
                        </div>
                        <div class="col-xs-10">
                            {!! Form::select('pub', App\Product::pluck('name'),
                            null, [
                            'class' => 'form-control',
                            'placeholder' => 'Sélectionnez le produit',
                            'order-by' => 'id'
                            ]) !!}
                            @if ($errors->has('pub'))
                                <span class="help-block">{{ $errors->first('pub') }}</span>
                            @endif
                        </div>
                    </div>
                </div> --}}
                <!-- ../Le choix de l'annonce -->

                <!-- Le prix HT du produit -->
                {{-- <div class="form-horizontal">
                    <div class="form-group {{ $errors->has('prixHT') ? 'has-error': '' }}">
                        <div class="col-xs-2 control-label">
                            <small style="font-size: 8px; position: absolute; margin: 0 0 0 -20px">
                                (<i class="fa fa-fw fa-asterisk text-red"></i>)
                            </small>
                            {!! Form::label('prixHT', "Le prix HT de ce produit ") !!}
                        </div>
                        <div class="col-xs-10">
                            {{ Form::select('prixHT', 
                            [
                            1       => "25,00 € HT",
                            2       => "40,00 € HT",
                            'separateur'   => '=============================================================',
                            3       => "790,00 € HT",
                            4       => "990,00 € HT",
                            5       => "1 990,00 € HT",
                            6       => "2 990,00 € HT",
                            7       => "3 490,00 € HT",
                            9       => "5 490,00 € HT",
                            10      => "7 990,00 € HT",
                            ],
                            null, 
                            [
                                'class' => 'form-control',
                                'placeholder' => "Sélectionnez le prix HT de ce produit "
                            ]) }}
                            @if ($errors->has('prixHT'))
                                <span class="help-block">{{ $errors->first('prixHT') }}</span>
                            @endif
                        </div>
                    </div>
                </div> --}}
                <!-- ../Le prix HT du produit -->

                <!-- La durée du produit -->
                {{-- <div class="form-horizontal">
                    <div class="form-group {{ $errors->has('qte') ? 'has-error': '' }}">
                        <div class="col-xs-2 control-label">
                            <small style="font-size: 8px; position: absolute; margin: 0 0 0 -20px">
                                (<i class="fa fa-fw fa-asterisk text-red"></i>)
                            </small>
                            {!! Form::label('qte', "La durée du produit") !!}
                        </div>
                        <div class="col-xs-10">
                            {{ Form::select('qte', 
                            [
                            1   => "1 an",
                            2   => "2 ans",
                            3   => "3 ans",
                            4   => "4 ans",
                            5   => "5 ans"
                            ],
                            null, 
                            [
                                'class' => 'form-control',
                                'placeholder' => "Sélectionnez la durée"
                            ]) }}
                            @if ($errors->has('qte'))
                                <span class="help-block">{{ $errors->first('qte') }}</span>
                            @endif
                        </div>
                    </div>
                </div> --}}
                <!-- ../La durée du produit-->

                <!-- La durée du produit -->
                <div class="form-horizontal">
                    <div class="form-group {{ $errors->has('qte') ? 'has-error': '' }}">
                        <div class="col-xs-2 control-label">
                            <small style="font-size: 8px; position: absolute; margin: 0 0 0 -20px">
                                (<i class="fa fa-fw fa-asterisk text-red"></i>)
                            </small>
                            {!! Form::label('qte', "La durée du produit") !!}
                            <br/><small>(en années)</small>
                        </div>
                        <div class="col-xs-10" style="margin-top:6px">
                            {{ Form::selectRange('qte', 1, 5) }}
                            @if ($errors->has('qte'))
                                <span class="help-block">{{ $errors->first('qte') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
                <!-- ../La durée du produit-->

                <!-- Le moyen de paiement -->
                <div class="form-horizontal">
                    <div class="form-group {{ $errors->has('type') ? 'has-error': '' }}">
                        <div class="col-xs-2 control-label">
                            <small style="font-size: 8px; position: absolute; margin: 0 0 0 -20px">
                                (<i class="fa fa-fw fa-asterisk text-red"></i>)
                            </small>
                            {!! Form::label('type', "Le moyen de paiement") !!}
                        </div>
                        <div class="col-xs-10">
                            {{ Form::select('type', 
                            [
                                1   => "Carte bleue via Stripe",
                                2   => "PayPal",
                                3   => "Administration",
                            ],
                            null, 
                            [
                                'class' => 'form-control',
                                'placeholder' => "Sélectionnez le moyen de paiement"
                            ]) }}
                            @if ($errors->has('type'))
                                <span class="help-block">{{ $errors->first('type') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
                <!-- ../Le moyen de paiement-->

                <!-- Identité unique du paiement -->
                <div class="form-horizontal">
                    <div class="form-group">
                        <div class="col-xs-2  control-label">
                            {!! Form::label('identiteunique', "Identité unique du paiement") !!}
                            <br/><small>Si vous en disposez d'une, sinon, laissez en blanc</small>
                        </div>
                        <div class="col-xs-10">
                            {!! Form::text('identiteunique', null,
                            [
                                'class' => 'form-control',
                                'placeholder' => "Une identité unique de paiement qui se présente par exemple sous cette forme : ch_1DjT5RI4AHR2nsDbhjdcdHQp"
                                ]) !!}
                        </div>
                    </div>
                </div>
                <!-- ../Identité unique du paiement -->

                <div class="form-horizontal">
                    <div class="form-group">
                        <div class="col-xs-2 control-label">
                        </div>
                        <div class="col-xs-10">
                            {!! Form::submit('Créer la facture', ['class' => 'btn btn-primary']) !!}
                        </div>
                    </div>
                </div>


                {!! Form::close() !!}

                </div>
                <!-- /.box-body -->
               <br/>
                <!-- /.box-footer-->
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>

@endsection