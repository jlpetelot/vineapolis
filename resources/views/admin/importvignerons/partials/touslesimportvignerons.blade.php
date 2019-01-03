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

        <form action="{{ route('admin.importvignerons.index') }}">
            <div class="col-xs-4 pull-right clearfix">
                <div class="input-group">
                    <input type="text" class="form-control input-lg"
                           name="term" value="{{ request('term') }}"
                           placeholder="Recherchez par le nom de société ou par l'email...">
                <span class="input-group-btn">
                    <button class="btn btn-lg btn-default" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
                </div>
            </div>
        </form>


        @if (session('message'))
            <div class="col-xs-10">
                <div class="alert alert-info">{{ session('message') }}</div>
            </div>
        @endif
        @if (session('error'))
            <div class="col-xs-10">
                <div class="alert alert-danger">{{ session('error') }}</div>
            </div>
        @endif


        <!-- /.box-header -->
        <div class="box-body ">
            <table class="table table-striped">
                <thead>
                <tr>
                    <td>ID</td>
                    <td width="300px">URL</td>
                    <td>Société</td>
                    <td>Adresse</td>
                    <td width="120px">Téléphone</td>
                    <td>LatLong</td>
                    <td>Sorte de vin</td>
                    <td width="150px">Créé le</td>
                    <td>Statut</td>
                    <td width="70px">Action</td>
                </tr>
                </thead>
                <tbody>
                @foreach($vignerons as $vigneron)
                    <tr>
                        <td>{{ $vigneron->id }}</td>
                        <td>{{ $vigneron->url }}</td>
                        <td>{{ $vigneron->societe }}</td>
                        <td>{{ $vigneron->adresse }}</td>
                        <td>{{ $vigneron->telephone }}</td>
                        <td>{{ $vigneron->latlong }}</td>
                        <td>{{ $vigneron->sortevin }}</td>
                        <td>{{ $vigneron->creation }}</td>
                        <td>{!! $vigneron->statut () !!}</td>
                        <td>
                            <!-- Le bouton éditer -->
                            <a href="{{ route('admin.importvignerons.edit', $vigneron->id) }}" class="btn btn-xs btn-default"
                               data-toggle="tooltip" title="Editer/Mise à jour">
                                <i class="fa fa-edit"></i>
                            </a>
                            <!-- ../Le bouton éditer -->
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