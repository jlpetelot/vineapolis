@extends('admin.layouts.backend.main')

@section('title', 'Compléter sa fiche')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Validez vos options</h1>
            {{--<ol class="breadcrumb">--}}
                {{--<li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Accueil</a></li>--}}
                {{--<li class="active">{{ Auth::user()->name }}</li>--}}
            {{--</ol>--}}
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="box box-danger">
                <div class="box-header">
                    <div class="col-xs-8">
                        <!-- Fiche seule -->
                        @if ( empty($vigneron->reportage) && empty($vigneron->video) )
                        <h4>
                            <span style="color: #dd4b39; font-weight: 600">{{ $vigneron->societe }} | </span>
                            Vous avez choisi l'option lisibilité et détail de votre activité à 25 € par an.
                            <br/>Veuillez vérifier l'exactitude de ces données :
                        </h4>
                        <br/>
                        <p>
                            Nom : <strong>{{ $vigneron->societe }}</strong>
                            <br/>Adresse : <strong>{{ $vigneron->adresse }}</strong>
                            <?php if($vigneron->telephone) echo '<br/>Téléphone : <strong>'.$vigneron->telephone.'</strong>';?>
                            <?php if($vigneron->site) echo '<br/>Site : <strong>'.$vigneron->site.'</strong>';?>
                            <?php if($vigneron->email) echo '<br/>Email : <strong>'.$vigneron->email.'</strong>';;?>
                            <?php if($vigneron->latlong) echo '<br/> Situation GPS : <strong>'.$vigneron->latlong.'</strong>';?>
                            <?php if($vigneron->sortevin) echo '<br/> Vin : <strong>'.$vigneron->sortevin.'</strong>';?>
                            <?php if($vigneron->departement) echo '<br/> Département : <strong>'.$vigneron->departement.'</strong>';?>
                            <?php if($vigneron->region) echo '<br/> Région vinicole : <strong>'.$vigneron->localitevinicole.'</strong>';?>
                            <?php if(!empty($vigneron->fiche)) echo '<br/> Fiche individuelle : <strong>Oui</strong>';
                            else echo '<br/> Fiche individuelle : Non'; ?>
                            <?php if($vigneron->reportage) echo '<br/> Reportage : <strong>Oui</strong>';?>
                            <?php if($vigneron->video) echo '<br/> Vidéo : <strong>Oui</strong>';?>
                        </p>
                        <br/>
                        <h4>Si elles sont exactes, cliquez sur validez.</h4>
                        {!! Form::model($vigneron, [
                              'method'    => 'PUT',
                              'route'     => ['admin.vignerons.annulation', $id]
                        ]) !!}
                        <div class="form-horizontal">
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <a href="{{ route ('admin.vignerons.recapitulatif', ['id' => $vigneron->user_id]) }}" type="button" class="btn btn-primary">Validez</a>
                                    &nbsp;
                                    <a href="{{ route ('admin.vignerons.fiche', ['id' => $id]) }}" type="button" class="btn btn-warning">Modifiez</a>
                                    &nbsp;
                                    {!! Form::submit("Annulez l'opération", ['class' => 'btn btn-danger']) !!}
                                </div>
                            </div>
                        </div>
                        {!! Form::close() !!}
                        @endif
                        <!-- Fiche seule -->

                        <!-- Fiche et reportage -->
                        @if ( !empty($vigneron->reportage) && empty($vigneron->video) )
                        <h4>
                            <span style="color: #dd4b39; font-weight: 600">{{ $vigneron->societe }} | </span>
                            Vous avez choisi l'option lisibilité, détail de votre activité + reportage à 40 € par an.
                            <br/>Veuillez vérifier l'exactitude de vos données :
                        </h4>
                        <br/>
                        <p>
                            Nom : <strong>{{ $vigneron->societe }}</strong>
                            <br/>Adresse : <strong>{{ $vigneron->adresse }}</strong>
                            <?php if($vigneron->telephone) echo '<br/>Téléphone : <strong>'.$vigneron->telephone.'</strong>';?>
                            <?php if($vigneron->site) echo '<br/>Site : <strong>'.$vigneron->site.'</strong>';?>
                            <?php if($vigneron->email) echo '<br/>Email : <strong>'.$vigneron->email.'</strong>';;?>
                            <?php if($vigneron->latlong) echo '<br/> Situation GPS : <strong>'.$vigneron->latlong.'</strong>';?>
                            <?php if($vigneron->sortevin) echo '<br/> Vin : <strong>'.$vigneron->sortevin.'</strong>';?>
                            <?php if($vigneron->departement) echo '<br/> Département : <strong>'.$vigneron->departement.'</strong>';?>
                            <?php if($vigneron->region) echo '<br/> Région vinicole : <strong>'.$vigneron->localitevinicole.'</strong>';?>
                            <?php if(!empty($vigneron->fiche)) echo '<br/> Fiche individuelle : <strong>Oui</strong>';
                            else echo '<br/> Fiche individuelle : Non'; ?>
                            <?php if($vigneron->reportage) echo '<br/> Reportage : <strong>Oui</strong>';?>
                            <?php if($vigneron->video) echo '<br/> Vidéo : <strong>Oui</strong>';?>
                        </p>
                        <br/>
                        <h4>Si elles sont exactes, cliquez sur validez.</h4>
                        {!! Form::model($vigneron, [
                              'method'    => 'PUT',
                              'route'     => ['admin.vignerons.annulation', $id]
                        ]) !!}
                        <div class="form-horizontal">
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <a href="{{ route ('admin.vignerons.recapitulatif', ['id' => $id]) }}" type="button" class="btn btn-primary">Validez</a>
                                    &nbsp;
                                    <a href="{{ route ('admin.vignerons.fiche', ['id' => $id]) }}" type="button" class="btn btn-warning">Modifiez</a>
                                    &nbsp;
                                    {!! Form::submit("Annulez l'opération", ['class' => 'btn btn-danger']) !!}
                                </div>
                            </div>
                        </div>
                        {!! Form::close() !!}
                        @endif
                        <!-- ../Fiche et reportage -->

                        <!-- Fiche vidéo -->
                        @if ( !empty($vigneron->video) )
                            <h4>
                                <span style="color: #dd4b39; font-weight: 600">{{ $vigneron->societe }} | </span>
                                Vous avez choisi l'option lisibilité, détail de votre activité + reportage vidéo.
                                Le reportage classique est offert.
                                <br/>Envoyez-nous votre demande de devis, nous y répondrons dans les 48 heures.
                            </h4>
                            {{--<h4>--}}
                                {{--Si vous n'avez pas complété la fiche précédente, cliquez sur le bouton&nbsp;&laquo;&nbsp;Modifiez.&nbsp;&raquo;--}}
                                {{--Renseignez la fiche (3 rubriques :&nbsp;&laquo;&nbsp;Votre activité en 2 paragraphes,&nbsp;&raquo;--}}
                                {{--&laquo;&nbsp;L'image de votre reportage,&nbsp;&raquo;--}}
                                {{--&laquo;&nbsp;Votre reportage&nbsp;&raquo),--}}
                                {{--laissez&nbsp;&laquo;&nbsp;Établissement d'un devis à part&nbsp;&raquo; coché,--}}
                                {{--<br/>puis cliquez sur &nbsp;&laquo;&nbsp;Validez&nbsp;&raquo; de nouveau.--}}
                            {{--</h4>--}}
                            <br/>
                            <p>
                                Nom : <strong>{{ $vigneron->societe }}</strong>
                                <br/>Adresse : <strong>{{ $vigneron->adresse }}</strong>
                                <?php if($vigneron->telephone) echo '<br/>Téléphone : <strong>'.$vigneron->telephone.'</strong>';?>
                                <?php if($vigneron->site) echo '<br/>Site : <strong>'.$vigneron->site.'</strong>';?>
                                <?php if($vigneron->email) echo '<br/>Email : <strong>'.$vigneron->email.'</strong>';;?>
                                <?php if($vigneron->latlong) echo '<br/> Situation GPS : <strong>'.$vigneron->latlong.'</strong>';?>
                                <?php if($vigneron->sortevin) echo '<br/> Vin : <strong>'.$vigneron->sortevin.'</strong>';?>
                                <?php if($vigneron->departement) echo '<br/> Département : <strong>'.$vigneron->departement.'</strong>';?>
                                <?php if($vigneron->region) echo '<br/> Région vinicole : <strong>'.$vigneron->localitevinicole.'</strong>';?>
                                <?php if(!empty($vigneron->fiche)) echo '<br/> Fiche individuelle : <strong>Oui</strong>';
                                else echo '<br/> Fiche individuelle : Non'; ?>
                                <?php if($vigneron->reportage) echo '<br/> Reportage : <strong>Oui</strong>';?>
                                <?php if($vigneron->video) echo '<br/> Vidéo : <strong>Oui</strong>';?>
                            </p>
                            <br/>
                            <h4>Si ces données sont exactes, cliquez sur&nbsp;&laquo;&nbsp;Envoyez la demande.&nbsp;&raquo;</h4>
                            {!! Form::model($vigneron, [
                                  'method'    => 'PUT',
                                  'route'     => ['admin.vignerons.annulation', $id]
                            ]) !!}


                            <div class="form-horizontal">
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <a href="{{ route('admin.vignerons.devisreportage', [Request::segment(4)]) }}" type="button" class="btn btn-primary">Envoyez la demande</a>
                                        &nbsp;
                                        <a href="{{ route ('admin.vignerons.fiche', ['id' => $id]) }}" type="button" class="btn btn-warning">Modifiez</a>
                                        &nbsp;
                                        {!! Form::submit("Annulez l'opération", ['class' => 'btn btn-danger']) !!}
                                    </div>
                                </div>
                            </div>
                        {!! Form::close() !!}
                        @endif
                        <!-- Fiche vidéo -->

                    </div>
                </div>
                <div class="box-body">

                </div>

            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>

@endsection
