{{-- On définit le nombre de commentaires --}}
@php
    $nombreCommentaires = $vin->comments->count();
@endphp


<div class="col-xs-12">

    @if($vin->email == NULL)
        <div  style="margin: 20px 0 0 0">
            <p style="color: #333"><i class="fa fa-comments" aria-hidden="true"></i>
                Ce vigneron n'a pas communiqué son email ou n'a pas d'adresse email. Vous ne pouvez pas lui laisser de commentaire pour le moment.</p>
        </div>
    @else
        @include ('layouts.partials.formulairedetail')

        <!-- LES MESSAGES -->
        @if ($nombreCommentaires === 0)
                <div  style="margin: 20px 0 0 0">
                    <p style="color: #333"><i class="fa fa-comments" aria-hidden="true"></i>
                        Soyez le premier à lui adresser un message.</p>
                </div>
        @endif
        <!-- ../LES MESSAGES -->

        {{-- SI IL N'Y A PAS DE COMMENTAIRES DÉJÀ ÉCRITS --}}
        @if (empty($commentaires))
        {{-- SI IL Y A DÉJÀ DES COMMENTAIRES DÉJÀ ÉCRITS --}}
        @else
            <!-- LES MESSAGES - LE FORMUMAIRE-->
                <br/><br/>
                
                <!-- LES MESSAGES -->
                @if ($nombreCommentaires === 1)
                    <div class="row">
                        <div class="text-center" style="margin: 0 0 50px 0">
                            <h3 style="color: #333"><i class="fa fa-comments" aria-hidden="true"></i>
                                {{ $nombreCommentaires }} message</h3>
                            @if (session('message'))
                                <div class="alert alert-info" style="margin-top:30px">
                                    {!! session('message') !!}
                                </div>
                            @endif
                        </div>
                    </div>
                @elseif ($nombreCommentaires > 1)
                    <div class="row">
                        <div class="text-center" style="margin: 0 0 50px 0">
                            <h3 style="color: #333"><i class="fa fa-comments" aria-hidden="true"></i>
                                {{ $nombreCommentaires }} messages</h3>
                            @if (session('message'))
                                <div class="alert alert-info" style="margin-top:30px">
                                    {!! session('message') !!}
                                </div>
                            @endif
                        </div>
                    </div>
                @endif

                @foreach ($commentaires as $c)
                    <div class="row">
                        @if ($c->reponse === NULL)
                            <div class="col-xs-1">
                                <div class="avatar">
                                    <img class="img-raised img-circle" src="{{ $cheminprofil.$c->imageprofil }}" alt="">
                                </div>
                            </div>
                            <div class="col-xs-11" style="margin-left: -40px;">
                                <span style="font-weight: 900">{{ $c->name }}</span> a posté un message {{ $c->created_at->diffForHumans() }}.
                                <p style="margin-top: 10px;">
                                    {!! $c->body_html !!}
                                </p>
                                <hr/>
                            </div>
                        @elseif ($c->reponse != NULL)
                            <div class="col-xs-1 col-xs-offset-1">
                                <div class="avatar">
                                    <img class="img-raised img-circle" src="{{ $cheminprofil.$c->imageprofil }}" alt="">
                                </div>
                            </div>
                            <div class="col-xs-10" style="margin-left: -40px;">
                                <span style="font-weight: 900">{{ ucfirst($c->updated_at->diffForHumans()) }}</span>, le vigneron 
                                <span style="font-weight: 900">{{ $c->vigneron->societe }}</span> 
                                a répondu au message de <span style="font-weight: 900">{{ $c->name }}</span>
                                posté {{ $c->created_at->diffForHumans() }}.
                                <p style="margin-top: 10px;">
                                    {!! $c->reponse_html !!}
                                </p>
                                <hr/>
                            </div>
                        @endif
                    </div>
                @endforeach
                <!-- ../LES MESSAGES -->
            </div>
            <!-- LES MESSAGES - LE FORMUMAIRE-->
        </div>
        @endif
    @endif

