<!-- Classe Laravel pour raccourcir les mots -->
@php
    use Illuminate\Support\Str;
@endphp
<!-- Classe Laravel pour raccourcir les mots -->

<!-- Style pour les liens des statuts -->
{{--<style>--}}
    {{--.liens { font-weight: 700; }--}}
    {{--a { color: #00a157; }--}}
    {{--a:hover { text-decoration: underline;  color: #00a157; }--}}
{{--</style>--}}
<!-- Style pour les liens des statuts -->

<div class="box-body"><!-- box-body -->
    @if (!$annonceurs->count())
        <div class="col-xs-12">
            <div class="alert alert-danger">
                Il n'existe aucun annonceur pour l'instant.
            </div>
        </div>
    @else
    <div class="row"><!-- row -->
        <div class="col-xs-12"><!-- col-xs-12 -->
            <form action="{{ route('admin.annonceurs') }}">
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
                    <a href="{{ route('admin.annonceurs.create') }}" class="btn btn-warning">
                        Créer un annonceur
                    </a>
                </div>
            </div>

            @if (session('message'))
                <div class="col-xs-12">
                    <div class="alert alert-info">{{ session('message') }}</div>
                </div>
            @endif

            <!-- /.box-header -->
            <div class="box-body ">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <td>Société</td>
                        <td>Email</td>
                        <td>Adresse</td>
                        <td>Téléphone</td>
                        <td>Adresse site Web</td>
                        <td>Créé le</td>
                        <td>Mise à jour</td>
                        <td>Actif</td>
                        <td>Payé</td>
                        <td width="180px">Actions</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($annonceurs as $annonceur)
                        <tr>
                            <td><a href="{{ route('admin.annonceurs.edit', $annonceur->id) }}">{{ $annonceur->societe }}</a></td>
                            <td>{{ $annonceur->email }}</td>
                            <td>
                                @if (!@empty($annonceur->adresse))
                                    {{ $annonceur->adresse }}
                                @else
                                    Non
                                @endempty
                            </td>
                            <td>
                                @if (!@empty($annonceur->telephone))
                                    {{ $annonceur->telephone }}
                                @else
                                    Non
                                @endempty
                            </td>
                            <td>
                                @if (!@empty($annonceur->urlsite))
                                    {{ $annonceur->urlsite }}
                                @else
                                    Non
                                @endempty
                            </td>
                            <td>
                                <abbr title="{{ $annonceur->dateFormattedCreate() }}">
                                    {{ $annonceur->dateFormattedCreate() }}
                                </abbr>
                            </td>
                            <td>
                                <abbr title="{{ $annonceur->dateFormattedUpdate() }}">
                                    {{ $annonceur->dateFormattedUpdate() }}
                                </abbr>
                            </td>
                            <td>{!! $annonceur->active() !!}</td>
                            @if ($annonceur->paye === 0 || $annonceur->paye == NULL)
                                <td><span class="label label-default">Non</span></td>
                            @elseif ($annonceur->paye === 1)
                                <td><span class="label label-warning">Oui</span></td>
                            @endif
                            <td>
                                {!! Form::open([
                                'method' => 'DELETE',
                                'route' => ['admin.annonceurs.destroy', $annonceur->id]
                                ]) !!}
                                 @if($annonceur->user_id == NULL)
                                    <a href="{{ route('admin.annonceurs.create.identifiant', $annonceur->id) }}" class="btn btn-xs btn-info"
                                        data-toggle="tooltip" title="Créer identifiant unique">
                                        <i class="fa fa-fw fa-user-plus"></i>
                                    </a>
                                @endif
                                @if($annonceur->actif == 1)
                                    <a href="{{ route('admin.annonceurs.edit', $annonceur->id) }}" class="btn btn-xs btn-default"
                                    data-toggle="tooltip" title="Mise à jour annonceur / Assigner / Créer annonce">
                                        <i class="fa fa-pencil-square fa-lg"></i>
                                    </a>
                                @endif
                                @if($annonceur->annonce == NULL && $annonceur->annonce != 0)
                                    <a href="{{ route('admin.annonceurs.createannonce', $annonceur->id) }}" class="btn btn-xs btn-default"
                                        data-toggle="tooltip" title="Création d'une annonce">
                                        <i class="fa fa-calendar-plus-o"></i>
                                    </a>
                                @endif
                                <!-- On regarde sil il y a une facture -->
                                @php
                                    $facture = App\Facture::where('user_id', $annonceur->user_id)->first();
                                    if (empty($facture)) $facture = NULL;
                                @endphp
                                @if ($annonceur->paye == 1 && $facture != NULL)
                                    <a href="{{ route('admin.detailsachatannonceur', $annonceur->id) }}" class="btn btn-xs btn-default"
                                        data-toggle="tooltip" title="Détails paiements / Factures / Prolonger durée annonce / Supprimer annonce">
                                        <i class="fa fa-credit-card-alt"></i>
                                    </a>
                                @endif
                                @if($annonceur->actif == 1)
                                <a href="{{ route('admin.annonceurs.message', $annonceur->id) }}" class="btn btn-xs btn-default"
                                    data-toggle="tooltip" title="Lui envoyer un email">
                                    <i class="fa fa-envelope-o"></i>
                                </a>
                                @endif
                                <button type="submit"
                                        onclick="return confirm('Êtes-vous certain de vouloir suprimer l\'annonceur <?= $annonceur->societe ?> ? ATTENTION, cette opération est définitive !!!')"
                                        class="btn btn-xs btn-danger" data-toggle="tooltip" title="Supprimer {{ $annonceur->societe }}">
                                    <i class="fa fa-times"></i>
                                </button>

                                {{ Form::close() }}
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
                    {{ $annonceurs->appends(Request::query())->render() }}
                </div>
                <div class="pull-right">
                    <?php $annonceurUnePage = $annonceurs->count() ?>
                    <small>{{ $annonceurUnePage }} annonceur(s) sur {{ $compteannonceurs }}</small>
                </div>
            </div>
        </div><!-- ../col-xs-12 -->
        @endif
    </div><!-- row -->
</div><!-- ../box-body -->