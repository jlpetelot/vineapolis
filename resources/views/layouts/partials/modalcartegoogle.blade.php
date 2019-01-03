<div id="modalgoogle"><!-- Bloccarte Google -->
    <div class="modalgoogle-content-3emeniveau">
        <div class="row">
            <div class="col-md-12" id="modalentetegoogle"><!-- col-md-12 -->
                <div class="col-md-6">
                    <ul class="tlvs">
                        <li><h3 class="vert gras">{{ $vin->societe }}</h3></li>
                        <li>
                            <p>{{ $vin->adresse }}&nbsp;-&nbsp;{{ $vin->telephone }}&nbsp;-&nbsp;
                                @if (!empty($vin->site))
                                    <a href="{{ $vin->site }}" target="_blank">{{ $vin->site }}</a>
                                @endif
                            </p>
                        </li>
                        <div style="margin-top: -10px; color: #999; font-size: 12px">
                            Si la carte n'apparait pas,
                            rafraîchissez votre navigateur
                            avec votre clavier :
                            Ctrl + r sur Windows et Cmd + r sur Mac.
                        </div>
                    </ul>
                </div>

                <div class="col-md-offset-5 col-md-1 margehaute10px">
                    <a class="modalggogle-close" href="#" title="Fermer la fenêtre">
                        <i class="fa fa-times-circle fa-3x" aria-hidden="true"></i>
                    </a>
                </div>
            </div><!-- ../col-md-12 -->
            <div class="col-md-12"><!-- col-md-12 -->
                <div id="cartegoogle"></div>
            </div><!-- ../col-md-12 -->
        </div>
    </div>
</div><!-- ../Bloccarte Google