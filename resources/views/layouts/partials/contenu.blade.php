<div class="row"><!-- row -->
    <div class="col-lg-8"><!-- contenu -->
        <div class="cadreblanc3emeniveau2"><!-- cadreblanc3emeniveau2 -->

            <div id="app"><!-- app -->
                <div class="container recherche"><!-- container recherche -->
                    <div class="col-xs-12"><!-- col-xs-12 -->
                        <ais-index app-id="{{ config('scout.algolia.id') }}"
                                   api-key="{{ env('ALGOLIA_SEARCH') }}"
                                   index-name="vignerons"><!-- ais-index -->
                            <h3 style="margin-top: 20px; color: #333">Recherchez tous les vins <small>(et les spiritueux)</small></h3>
                            <p style="margin-bottom: 20px; font-size: 12px;">
                                (par nom, région, département, rouge, blanc, rosé, pétillant, mirabelle, champagne,
                                Roussette du Bugey, Chablis, Meursault, Vosne Romanée, Pomerol, Saint-Julien,
                                Saint-Estèphe, Vin jaune, Châteauneuf-du-Pape, Bordeaux,
                                Bourgogne, Cognac, Armagnac, 1er Cru, Grand Cru, Grand Cru Classé, etc.)
                            </p>
                            <div class="input-group"><!-- input-group -->
                                <ais-input placeholder="Recherchez tous les vins" class="form-control input-lg"></ais-input>
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-default btn-lg">
                                        Recherchez
                                    </button>
                                </span>
                            </div><!-- ../input-group -->

                            <ais-results><!-- ais-results -->
                                <template slot-scope="{result}"><!-- template -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <span v-if="result.actif === 1">
                                                <p style="font-size: 14px; line-height: 1.8; color: #666">
                                                    <span v-if="result.sortevin === 'rouge'">
                                                        <i class="fa fa-glass fa-lg" style="color:#990033" aria-hidden="true"></i>
                                                    </span>
                                                    <span v-if="result.sortevin === 'blanc'">
                                                        <i class="fa fa-glass fa-lg" style="color:#FFCE33" aria-hidden="true"></i>
                                                    </span>
                                                    <span v-if="result.sortevin === 'rouge blanc'">
                                                        <i class="fa fa-glass fa-lg" style="color:#990033" aria-hidden="true"></i>
                                                        <i class="fa fa-glass fa-lg" style="color:#FFCE33" aria-hidden="true"></i>
                                                    </span>
                                                    <span v-if="result.sortevin === 'rosé'">
                                                        <i class="fa fa-glass" style="color:#ff00aa" aria-hidden="true"></i>
                                                    </span>
                                                     <span v-if="result.sortevin === 'rouge rosé'">
                                                        <i class="fa fa-glass fa-lg" style="color:#990033" aria-hidden="true"></i>
                                                        <i class="fa fa-glass fa-lg" style="color:#ff00aa" aria-hidden="true"></i>
                                                    </span>
                                                                                                       <span v-if="result.sortevin === 'blanc rosé'">
                                                        <i class="fa fa-glass fa-lg" style="color:#FFCE33" aria-hidden="true"></i>
                                                        <i class="fa fa-glass fa-lg" style="color:#ff00aa" aria-hidden="true"></i>
                                                    </span>

                                                    <span v-if="result.sortevin === 'rouge rosé blanc'">
                                                        <i class="fa fa-glass fa-lg" style="color:#990033" aria-hidden="true"></i>
                                                        <i class="fa fa-glass fa-lg" style="color:#FFCE33" aria-hidden="true"></i>
                                                        <i class="fa fa-glass fa-lg" style="color:#ff00aa" aria-hidden="true"></i>
                                                    </span>
                                                    <span v-if="result.sortevin === 'rouge rosé blanc pétillant'">
                                                        <i class="fa fa-glass fa-lg" style="color:#990033" aria-hidden="true"></i>
                                                        <i class="fa fa-glass fa-lg" style="color:#FFCE33" aria-hidden="true"></i>
                                                        <i class="fa fa-glass fa-lg" style="color:#ff00aa" aria-hidden="true"></i>
                                                    </span>
                                                    <a :href="('/detail-du-vin/'+result.aliassociete)" title="Voir le vigneron en détail">
                                                        <span style="font-weight: 700">
                                                            @{{ result.societe }}
                                                        </span>
                                                    </a>
                                                    - @{{ result.adresse }}
                                                    - Tél : @{{ result.telephone }}
                                                    <span v-if="result.site != ''">
                                                        - Site : <a :href="result.site" target="_blank">@{{ result.site }}</a>
                                                    </span>
                                                    <span class="reportage">
                                                         <a :href="('/detail-du-vin/'+result.aliassociete)" title="Voir le vigneron en détail">
                                                             <i class="fa fa-info-circle fa-lg" aria-hidden="true"></i>
                                                         </a>
                                                    </span>
                                                </p>
                                            </span>

                                            <!-- Dans le cas où le vigneron est inactif et l'email rempli -->
                                            <span v-if="result.actif === 0">
                                                <p style="font-size: 14px; line-height: 1.8; color: #999">
                                                    @{{ result.societe }}
                                                    - @{{ result.adresse }}
                                                    <a :href="('/contact/vigneron/'+result.aliassociete)" style="color: #999" class="pull-right">
                                                        <i class="fa fa-arrow-circle-right fa-lg" data-toggle="tooltip" data-placement="top"
                                                           title="Cliquez ici pour vous démarquez-vous des autres !" aria-hidden="true" data-original-title="Cliquez pour vous démarquer des autres !">
                                                        </i>
                                                        Cliquez pour vous démarquer des autres !
                                                    </a>
                                                </p>
                                            </span>
                                        </div>
                                    </div>
                                </template><!-- ../template -->
                            </ais-results><!-- ../ais-results -->
                        </ais-index><!-- ../ais-index -->
                    </div><!-- col-xs-12 -->
                </div><!-- ../container recherche -->
            </div><!-- ../app -->
        </div><!-- ../cadreblanc3emeniveau2 -->
    </div><!-- ../contenu -->
</div><!-- ../row -->