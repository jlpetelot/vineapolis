<!-- Classe Laravel pour raccourcir les mots -->
@php
    use Illuminate\Support\Str;
@endphp
<!-- Classe Laravel pour raccourcir les mots -->

<div class="box-body">
    @if (!$vignerons->count())
        <div class="alert alert-danger">
            Il n'existe aucun vigneron pour l'instant
        </div>
    @else
    <div class="col-xs-12">

        <form action="{{ route('admin.all') }}">
            <div class="col-xs-4 pull-right clearfix">
                <div class="input-group">
                    <input type="text" class="form-control input-lg"
                           name="term" value="{{ request('term') }}"
                           placeholder="Recherchez par nom de société ou par email.">
                <span class="input-group-btn">
                    <button class="btn btn-lg btn-default" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
                </div>
            </div>
        </form>

        <div class="box-header">
            <div class="pull-left">
                <a href="{{ route('admin.create') }}" class="btn btn-success">
                    Créer un vigneron
                </a>
            </div>
        </div>

        @if (session('message'))
            <div class="col-xs-10">
                <div class="alert alert-info">{{ session('message') }}</div>
            </div>
        @endif


        <!-- /.box-header -->
        <div class="box-body ">
            <table class="table table-striped">
                <thead>
                <tr>
                    <td>Société</td>
                    <td>Adresse</td>
                    <td>Email</td>
                    <td>Région</td>
                    <td>Fiche</td>
                    <td>Reportage</td>
                    <td>Vidéo</td>
                    <td>Créé le</td>
                    <td>Mise à jour</td>
                    <td>Actif</td>
                    <td>Payé</td>
                    <td width="160px">Actions</td>
                </tr>
                </thead>
                <tbody>
                @foreach($vignerons as $vigneron)
                    <tr>
                        <td>
                            <a href="{{ route('admin.edit', $vigneron->id) }}" style="color:#333">
                                {{ $vigneron->societe }}
                            </a>
                        </td>
                        <td><?php if($vigneron->adresse) echo "Oui" ?></td>
                        @if ($vigneron->email ==  NULL)
                            <td><span class="label label-default">Non</span></td>
                        @else
                            <td><span class="label label-success">Oui</span></td>
                        @endif
                        @if ($vigneron->region)
                            <td>{{ $vigneron->localitevinicole }}</td>
                        @endif
                        @if ($vigneron->fiche ==  NULL)
                        <td><span class="label label-default">Non</span></td>
                        @else
                            <td><span class="label label-success">Oui</span></td>
                        @endif
                        @if ($vigneron->reportage ==  NULL)
                            <td><span class="label label-default">Non</span></td>
                        @else
                            <td><span class="label label-success">Oui</span></td>
                        @endif
                        @if ($vigneron->video == NULL)
                            <td><span class="label label-default">Non</span></td>
                        @else
                            <td><span class="label label-success">Oui</span></td>
                        @endif
                        <td>
                            <abbr title="{{ $vigneron->dateFormattedCreate() }}">
                                {{ $vigneron->dateFormattedCreate() }}
                            </abbr>
                            <!-- Utilisation de diffForHumans() de Carbon pour les dates -->
                            {{--<abbr title="{{ $vigneron->created_at->diffForHumans() }}">--}}
                                {{--{{ $vigneron->created_at->diffForHumans() }}--}}
                            {{--</abbr>--}}
                        </td>
                        <td>
                            <abbr title="{{ $vigneron->dateFormattedUpdate() }}">
                                {{ $vigneron->dateFormattedUpdate() }}
                            </abbr>
                        </td>
                        <td>{!! $vigneron->active() !!}</td>
                        @if ($vigneron->paye === 0 || $vigneron->paye == NULL)
                            <td><span class="label label-default">Non</span></td>
                        @elseif ($vigneron->paye === 1)
                            <td><span class="label label-success">Oui</span></td>
                        @endif
                        <td>
                            <!-- Les boutons éditer, identifiant, email, activation vidéo et payé -->
                            <a href="{{ route('admin.edit', $vigneron->id) }}" class="btn btn-xs btn-default"
                                data-toggle="tooltip" title="Editer/Mise à jour">
                                <i class="fa fa-edit"></i>
                            </a>
                            @if($vigneron->user_id == NULL)
                                <a href="{{ route('admin.create.identifiant', $vigneron->id) }}" class="btn btn-xs btn-primary"
                                    data-toggle="tooltip" title="Créer identifiant unique">
                                    <i class="fa fa-fw fa-user-plus"></i>
                                </a>
                            @endif
                           @if($vigneron->email)
                                <a href="{{ route('admin.vignerons.message', $vigneron->id) }}" class="btn btn-xs btn-default"
                                   data-toggle="tooltip" title="Lui envoyer un email">
                                    <i class="fa fa-fw fa-envelope-o"></i>
                                </a>
                           @endif
                           @if ($vigneron->video == NULL)
                                <a href="{{ route('admin.vignerons.activervideo', $vigneron->id) }}" class="btn btn-xs btn-default"
                                   data-toggle="tooltip" title="Activer sa vidéo">
                                    <i class="fa fa-video-camera"></i>
                                </a>
                           @endif
                          
                            @if ($vigneron->paye === 1)
                                <a href="{{ route('admin.detailsachatvigneron', $vigneron->id) }}" class="btn btn-xs btn-success"
                                    data-toggle="tooltip" title="Détails paiements / Factures / Prolonger annonce d'un an">
                                    <i class="fa fa-credit-card-alt"></i>
                                </a>
                            @endif
                            <!-- ../Les boutons éditer, identifiant, email, activation vidéo et payé -->

                            <!-- Le bouton supprimer -->
                            <div style="display: inline-block">
                                {!! Form::open([
                                'method' => 'DELETE',
                                'route' => ['admin.destroy', $vigneron->id]
                                ]) !!}
                                <button type="submit"
                                    onclick="return confirm('Êtes-vous certain de vouloir suprimer le vigneron <?= $vigneron->societe ?> ? ATTENTION, cette opération est définitive !!!')"
                                    class="btn btn-xs btn-danger" data-toggle="tooltip" title="Supprimer">
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
        </div>
        <!-- /.box-body -->

        <div class="box-footer clearfix">
            <div class="pull-left" style="margin-top: -15px; font-size: 10px;">
                <!-- Afficher des articles en les paginant, c'est aussi simple que ça -->
                {{--{{ $vignerons->appends(Request::query())->render() }}--}}
                <!-- Dans cette version de pagination, on tient compte de la recherche -->
                {{ $vignerons->appends(request()->only(['term']))->links() }}
            </div>
            <div class="pull-right">
                <?php $vigneronUnePage = $vignerons->count() ?>
                <small>{{ $vigneronUnePage }} {{ str_plural('vignerons', $compteVignerons) }} sur {{ $compteVignerons }}</small>
            </div>
        </div>

    </div>
    @endif
</div>
</div>