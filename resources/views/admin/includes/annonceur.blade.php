<div class="box box-warning"><!-- box box-warning -->
    <div class="box-header"><!-- box-header -->
    
        <div class="box-body"><!-- box-body -->
            <br/>
            <ul>
                <h2 style="margin-bottom: 20px; font-size:24px">Bonjour <span style="color:#f39c12">{{ Auth::user()->name }}</span>.
                    Vous vous êtes inscrit sur Vineapolis car vous souhaitez être plus en vue dans le monde du vin.</h2>
                <p>
                    &bull;&nbsp;Vous souhaitez bénéficier de notre système de référencement qui vous permettra d'être visible sur les moteurs de recherche,
                    notamment sur Google.
                    <br/>&bull;&nbsp;Vous souhaitez faire partie de l'aventure Vineapolis qui, dans un futur proche, nous en sommes certains, deviendra le guide incontournable du vin.
                    <br/>&bull;&nbsp;Enfin, vous souhaitez que nombre d'internautes cliquent sur votre annonce. Annonce qui leur permettra de visiter votre site ;
                    s'informer de la qualité de vos produits et, certainement, acheter.
                </p>
                <p>
                    À cette fin, vous souhaitez acquérir une de nos offres. 
                    Et en choisir une parmi celles proposées :
                    @php
                        // On récupère l'id du user
                        $user = Auth::user()->id;
                        // Puis l'id de l'annonceur
                        $annonceur = App\Annonceur::where('user_id', $user)->first();
                    @endphp
                    {!! Form::open([
                        'method' => 'PUT',
                        'route' => ['admin.annonceurs.choixannonce', $annonceur->id],
                    ]) !!}
                        <!-- Offre nationale -->
                        <div class="radio">
                            <label><input type="radio" name="optradio" value="1">L'offre au niveau national 
                                <span style="font-size:12px">(les prix vont de 3 990€ HT €/an à 7 990,00 HT €/an)</span> 
                            </label>
                        </div>
                        <!-- ../Offre nationale -->
                        <!-- Offre régionale -->
                        <div class="radio">
                            <label><input type="radio" name="optradio" value="2">L'offre au niveau régional 
                                <span style="font-size:12px">(les prix vont de 2 990€ HT €/an à 3 990,00 HT €/an)</span> 
                            </label>
                        </div>
                        <!-- ../Offre régionale -->
                        <!-- Offre locale -->
                        <div class="radio">
                            <label><input type="radio" name="optradio" value="3">L'offre au niveau local
                                <span style="font-size:12px">(les prix vont de 990€ HT €/an à 2 990,00 HT €/an)</span> 
                            </label>
                        </div>
                        <!-- ../Offre locale -->
                        <!-- Offre communale -->
                        <div class="radio">
                            <label><input type="radio" name="optradio" value="4">L'offre au niveau communal
                                <span style="font-size:12px">(les prix sont de 790,00 HT €/an)</span> 
                            </label>
                        </div>
                        <!-- ../Offre communale -->

                        <!-- Chemin direct -->
                        <div style="margin-top:15px">
                            Vous pouvez également sélectionner directement votre annonce dans votre région vinicole préférée.
                        </div>
                        <div class="form-horizontal" style="margin-top:10px">
                            <div class="form-group {{ $errors->has('region') ? 'has-error': '' }}">
                                <div class="col-xs-12">
                                    {{ Form::select('region', 
                                    [
                                        'france' 								=> 'France',
                                        'separateur1' 						    => '============================================================',
                                        'alsace' 								=> 'Alsace',
                                        'separateur2' 						    => '============================================================',
                                        'armagnac' 								=> 'Armagnac',
                                        'separateur3' 						    => '============================================================',
                                        'auvergne' 								=> 'Auvergne',
                                        'separateur4' 						    => '============================================================',
                                        'beaujolais' 							=> 'Beaujolais',
                                        'separateur5' 						    => '============================================================',
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
                                        'separateur6' 						    => '============================================================',
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
                                        'separateur7' 						    => '============================================================',
                                        'bugey' 								=> 'Bugey',
                                        'separateur8' 						    => '============================================================',
                                        'champagne' 							=> 'Champagne',
                                        'vallee-de-la-marne' 					=> 'Champagne -> De la Vallée de la Marne',
                                        'montagne-de-reims-et-cote-des-blancs' 	=> 'Champagne -> De la Montagne de Reims et de la Côte des Blancs',
                                        'separateur9' 						    => '============================================================',
                                        'cognac' 								=> 'Cognac',
                                        'separateur10' 						    => '============================================================',
                                        'corse' 								=> 'Corse',
                                        'separateur11' 						    => '============================================================',
                                        'cotes-du-rhone-meridional' 			=> 'Côtes du Rhône Méridional',
                                        'separateur12' 						    => '============================================================',
                                        'cotes-du-rhone-septentrional' 			=> 'Côtes du Rhône Septentrional',
                                        'saint-peray-et-cornas' 			    => 'Côtes du Rhône Septentrional -> Saint-Peray et Cornas',
                                        'separateur13' 						    => '============================================================',
                                        'jura' 									=> 'Jura',
                                        'separateur14' 						    => '============================================================',
                                        'languedoc-roussillon' 					=> 'Languedoc-Roussillon',
                                        'separateur15' 						    => '============================================================',
                                        'loire' 								=> 'Loire',
                                        'pouilly' 								=> 'Loire -> Pouilly',            	
                                        'quincy-et-reuilly' 					=> 'Loire -> Quincy et Reuilly',
                                        'sancerre-et-menetou-salon' 			=> 'Loire -> Sancerre et Menetou-Salon',
                                        'saumur-champigny' 						=> 'Loire -> Saumur-Champigny',
                                        'separateur16' 						    => '============================================================',
                                        'lorraine' 								=> 'Lorraine',
                                        'separateur17' 						    => '============================================================',
                                        'provence' 								=> 'Provence',
                                        'separateur18' 						    => '============================================================',
                                        'savoie' 								=> 'Savoie',
                                        'separateur19' 						    => '============================================================',
                                        'sud-ouest' 							=> 'Sud-Ouest',
                                        'aveyron' 								=> 'Sud-Ouest -> Aveyron',
                                        'separateur20' 						    => '============================================================',
                                        'touslesvins' 						    => 'Tous les vins',
                                        'separateur21' 						    => '============================================================',
                                        'personnalisee' 						=> 'Offre personnalisée',
                                    ],
                                    null, 
                                    [
                                        'class' => 'form-control',
                                        'placeholder' => 'Sélectionnez votre région'
                                    ]) }}
                                        @if ($errors->has('region'))
                                        <span class="help-block">{{ $errors->first('region') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!-- Chemin direct -->

                        <!-- Offre personnalisée -->
                        <div class="radio">
                            <label><input type="radio" name="optradio" value="5">Enfin, choisir une offre personnalisée</label>
                        </div>
                        <!-- Offre personnalisée -->
                        
                        <!-- Bouton d'envoi -->
                        <div style="margin-top:20px">
                        {!! Form::submit('Validez', ['class' => 'btn btn-sm btn-warning']) !!}
                        </div>
                        <!-- ../Bouton d'envoi -->
                        {{ Form::close( )}}
                </p>

                @if(session('error'))
                    <div class="row">
                        <div class="col-xs-10">
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        </div>
                    </div>
                @endif
                <br/>

                <li style="list-style-type: none">
                    <a href="{{ route('admin.profil', ['id' => Auth::user()->id]) }}">
                        <i class="fa fa-user text-yellow"></i>
                        <span style="color: #444;">Vous pouvez aussi gérer votre profil</span>
                    </a>
                </li>
            </ul>
        </div><!-- ../box-body -->
    </div><!-- ../box-header -->
</div><!-- ../box box-warning -->