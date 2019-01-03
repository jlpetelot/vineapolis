@if ($vin->actif != NULL)
<div class="row"><!-- row -->
    <div class="col-xs-12"><!-- contenu -->
        <div class="cadreblanc3emeniveau2"><!-- cadreblanc3emeniveau2 -->

            <div class="container recherche"><!-- container recherche -->

                <div class="col-xs-6"><!-- col-xs-5 -->

                    <h3 style="margin: 20px 0; color: #333">
                        @if ($vin->sortevin === 'rouge')
                            <i class="fa fa-glass" style="color:#990033" aria-hidden="true"></i>
                        @elseif ($vin->sortevin === 'blanc')
                            <i class="fa fa-glass" style="color:#FFCE33" aria-hidden="true"></i>
                        @elseif ($vin->sortevin === 'rouge blanc')
                            <i class="fa fa-glass" style="color:#990033" aria-hidden="true"></i>
                            <i class="fa fa-glass" style="color:#FFCE33" aria-hidden="true"></i>
                        @elseif ($vin->sortevin === 'rouge rosé')
                            <i class="fa fa-glass" style="color:#990033" aria-hidden="true"></i>
                            <i class="fa fa-glass" style="color:#ff00aa" aria-hidden="true"></i>
                        @elseif ($vin->sortevin === 'blanc rosé')
                            <i class="fa fa-glass" style="color:#FFCE33" aria-hidden="true"></i>
                            <i class="fa fa-glass" style="color:#ff00aa" aria-hidden="true"></i>
                        @elseif ($vin->sortevin === 'rouge rosé blanc')
                            <i class="fa fa-glass" style="color:#990033" aria-hidden="true"></i>
                            <i class="fa fa-glass" style="color:#FFCE33" aria-hidden="true"></i>
                            <i class="fa fa-glass" style="color:#ff00aa" aria-hidden="true"></i>
                        @endif
                        {{ $vin->societe }}
                    </h3>
                    <p>
                        {{ $vin->adresse }}<br/>
                        Tél : {{ $vin->telephone }}<br/><br/>
                        @if ($vin->site != '')
                            Site internet :
                            <a href="{{ $vin->site }}" target="_blank">{{ $vin->site }}</a>
                        @endif<br/><br/>
                        Vin : {{ $vin->sortevin }}<br/>

                        <!-- Affichage des liens vers les parcelles -->
                        {!! $vin->indiceregion !!}
                        <!-- ../Affichage des liens vers les parcelles -->

                        @if ($vin->qualitevin != '')
                            <br/><br/>Spécialité : {{ $vin->qualitevin }}
                        @endif
                        <br/>
                        <br/>
                        <span>
                            @if(!Auth::user())
                                <a href="{{ route('logininternaute') }}"
                                    onclick="return confirm('Vous devez vous identifier ou créer '+
                                    'un compte pour adresser un message à {{$vin->societe}}.')">
                                <i class="fa fa-at fa-2x" data-toggle="tooltip" data-placement="top"
                                    title="Lui envoyer un message" aria-hidden="true" data-original-title="Lui envoyer un message"></i>
                                </a>
                            @else
                                <a href="#message">
                                <i class="fa fa-at fa-2x" data-toggle="tooltip" data-placement="top"
                                    title="Lui envoyer un message" aria-hidden="true" data-original-title="Lui envoyer un message"></i>
                                </a>
                            @endif

                            <a href="#modalgoogle">
                                <i class="fa fa-map-marker fa-2x" data-toggle="tooltip" data-placement="top"
                                    title="" aria-hidden="true" data-original-title="Le situer sur Google Map">
                                </i>
                            </a>
                            @if ($vin->reportage != '')
                                <a href="#modal">
                                    <i class="fa fa-camera fa-2x" data-toggle="tooltip" data-placement="top"
                                        title="Voir le reportage" aria-hidden="true" data-original-title="Voir le reportage"></i>
                                </a>
                            @endif
                            @if ($vin->video != '')
                            <a href="{{ route('oenologie') }}">
                                <i class="fa fa-video-camera fa-2x" data-toggle="tooltip" data-placement="top"
                                    title="Voir le reportage vidéo" aria-hidden="true" data-original-title="Voir le reportage vidéo"></i>
                            </a>
                            @endif
                        </span>
                    </p>
                </div><!-- ../col-xs-5 -->


                <div class="col-xs-6"><!-- col-xs-7 -->
                    <a href="{{ route('touslesvins.recherche') }}">
                        <span class="pull-right" style="margin-top: 20px;">
                            <img class="btndetail" src="{{ asset('img/detailrechercheverte.png') }}" alt="recherche">
                        </span>
                    </a>
                </div><!-- ../col-xs-7 -->

                <div class="col-xs-12" style="margin-top: 10px"><!-- col-xs-12 -->
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam blanditiis doloremque inventore minus
                        quia quibusdam tenetur. Commodi debitis esse facere, fuga incidunt iste iure laboriosam
                        laborum repellat suscipit totam voluptate.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam blanditiis doloremque inventore minus
                        quia quibusdam tenetur. Commodi debitis esse facere, fuga incidunt iste iure laboriosam
                        laborum repellat suscipit totam voluptate. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam blanditiis doloremque inventore minus
                        quia quibusdam tenetur. Commodi debitis esse facere, fuga incidunt iste iure laboriosam
                        laborum repellat suscipit totam voluptate.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam blanditiis doloremque inventore minus
                        quia quibusdam tenetur. Commodi debitis esse facere, fuga incidunt iste iure laboriosam
                        laborum repellat suscipit totam voluptate.
                    </p>
                </div><!-- ../col-xs-12 -->

                <div class="col-xs-12" id="detailgooglemap">
                    <a href="#modalgoogle" title="Le situer sur google Map">
                        <img src="{{ asset('img/fakeimg.jpg') }}">
                    </a>
                </div>

              @include ('layouts.partials.contenudetailformulaire')

            </div><!-- ../container recherche -->

        </div><!-- ../cadreblanc3emeniveau2 -->
    </div><!-- ../contenu -->
</div><!-- ../row -->

@else
    <div class="row"><!-- row -->
        <div class="col-lg-8"><!-- contenu -->
            <div class="cadreblanc3emeniveau2"><!-- cadreblanc3emeniveau2 -->

                <div class="container recherche"><!-- container recherche -->

                    <div class="col-xs-12" style="margin-top: 20px;"><!-- col-xs-12 -->

                        <div class="col-xs-5"><!-- col-xs-5 -->
                            <h3>Ce vigneron est inactif</h3>
                        </div><!-- ../col-xs-7 -->

                        <div class="col-xs-7"><!-- col-xs-7 -->
                            <a href="{{ route('touslesvins.recherche') }}">
                                <img class="btndetail" src="{{ asset('img/detailrechercheverte.png') }}" alt="">
                            </a>
                        </div><!-- ../col-xs-7 -->

                    </div>
            </div><!-- ../cadreblanc3emeniveau2 -->
        </div><!-- ../contenu -->
    </div><!-- ../row -->
@endif