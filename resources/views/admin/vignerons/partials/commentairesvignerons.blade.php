<div class="box-body">
    @if (!$commentaires->count())
        <div class="alert alert-danger">
            Il n'existe aucun commentaire pour l'instant
        </div>
    @else
    <div class="col-xs-12">

        @if (session('message'))
            <div class="col-xs-10">
                <div class="alert alert-info">{{ session('message') }}</div>
            </div>
        @endif

        <div>
            <!-- LES COMMENTAIRES -->
            <h4 class="text-center">LES COMMENTAIRES</h4>
            <table class="table table-striped">
                <thead>
                <tr>
                    <td>ID</td>
                    <td style="width: 150px">Emisssaire</td>
                    <td>Contenu du commentaire</td>
                    <td style="width: 200px">Vigneron concerné</td>
                    <td style="width: 120px">Créé le</td>
                    <td width="50">Action</td>
                </tr>
                </thead>
                <tbody>
                    @foreach($commentaires as $c)
                        <tr>
                            <td>{{ $c->id }}</td>
                            <td>{{ $c->name }}</td>
                            <td><?php if($c->body != NULL) echo $c->body_html; else echo '-'; ?></td>
                            <td>{{ $c->vigneron->societe }}</td>
                            <td>{{ $c->created_at->diffForHumans() }}</td>
                            <td>
                                <!-- Le bouton supprimer -->
                                <div style="display: inline-block">
                                {!! Form::open([
                                'method' => 'DELETE',
                                'route' => ['admin.destroycomment', $c->id]
                                ]) !!}
                                <button type="submit"
                                    onclick="return confirm('Êtes-vous certain de vouloir supprimer le commentaire de <?= $c->name ?> adressé au vigneron <?= $c->vigneron->societe ?> ? ATTENTION, cette opération est définitive !!!')"
                                    class="btn btn-xs btn-danger" data-toggle="tooltip" title="Supprimer le commentaire">
                                    <i class="fa fa-times"></i>
                                </button>
                                {{ Form::close() }}
                                </div>
                                <!-- ../Le bouton supprimer -->
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- ../LES COMMENTAIRES -->

            <!-- LES RÉPONSES -->
            @if($compteReponses)
            <h4 class="text-center">LES RÉPONSES</h4>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <td>ID</td>
                        <td style="width: 200px">Réponse au commentaire de</td>
                        <td>Contenu de la réponse</td>
                        <td style="width: 200px">Vigneron concerné</td>
                        <td style="width: 150px">Répondu</td>
                        <td width="50">Action</td>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($reponses as $r)
                            <tr>
                                <td>{{ $r->id }}</td>
                                <td>{{ $r->name }}</td>
                                <td>{{ $r->reponse }}</td>
                                <td>{{ $r->vigneron->societe }}</td>
                                <td><strong><?php if($r->reponse != NULL) echo $r->updated_at->diffForHumans(); else echo "-"?></strong></td>
                                <td>
                                    <!-- Le bouton répondre -->
                                    @if ($r->reponse != NULL)
                                    <a href="{{ route('admin.editreponsecomment', $r->id) }}" class="btn btn-xs btn-primary"
                                        data-toggle="tooltip" title="Accéder à la réponse">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                    @endif
                                    <!-- ../Le bouton répondre -->
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
            <!-- ../LES RÉPONSES -->
        </div>
        <!-- /.box-body -->

        <div class="box-footer clearfix">
            <div class="pull-left" style="margin-top: -15px; font-size: 10px;">
                <!-- Afficher des articles en les paginant, c'est aussi simple que ça -->
                {{--{{ $vignerons->appends(Request::query())->render() }}--}}
                <!-- Dans cette version de pagination, on tient compte de la recherche -->
                {{ $commentaires->links() }}
            </div>
            <div class="pull-right">
                @php 
                    $commentaireUnePage = $commentaires->count();
                @endphp
                <small>{{ $commentaireUnePage }} {{ str_plural('commentaires', $compteCommentaires) }} sur {{ $compteCommentaires }}</small>
            </div>
        </div>
        
    </div>
    @endif
</div>
</div>