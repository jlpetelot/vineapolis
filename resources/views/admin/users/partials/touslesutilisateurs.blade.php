<!-- Classe Laravel pour raccourcir les mots -->
@php
    use Illuminate\Support\Str;
@endphp
<!-- Classe Laravel pour raccourcir les mots -->

<div class="box-body">
    @if (!$users->count())
        <div class="alert alert-danger">
            Il n'existe aucun administrateur pour l'instant
        </div>
    @else
    <div class="col-xs-12">

        <div class="box-header clearfix">
            <div class="col-xs-9">
                @if (session('message'))
                    <div class="alert alert-info">{{ session('message') }}</div>
                @endif
                @if (session('error-message'))
                        <div class="alert alert-danger">{{ session('error-message') }}</div>
                @endif
            </div>

            <div class="pull-right">
                <a href="{{ route('admin.utilisateur.create') }}" class="btn btn-primary">
                    Créer un administrateur
                </a>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body ">
            <table class="table table-striped">
                <thead>
                <tr>
                    <td>Id</td>
                    <td>Nom</td>
                    <td>Email</td>
                    <td>Rôle</td>
                    <td>Créé le</td>
                    <td>Mise à jour</td>
                    <td width="70px">Action</td>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>
                            <a href="{{ route('admin.utilisateur.edit', $user->id) }}" style="color:#333">
                                    {{ $user->name }}
                            </a>
                        </td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role }}</td>
                        <td>
                            <abbr>
                                {{ $user->dateFormattedCreate() }}
                            </abbr>
                        </td>
                        <td>
                            <abbr>
                                {{ $user->dateFormattedUpdate() }}
                            </abbr>
                        </td>
                        <td>

                            {!! Form::open([
                                'method' => 'DELETE',
                                'route' => ['admin.utilisateur.destroy', $user->id]
                            ]) !!}
                            @if($user->id === 1)
                                <a href="{{ route('admin.utilisateur.edit', $user->id) }}" class="btn btn-xs btn-default"
                                   onclick="return false" disabled>
                                    <i class="fa fa-edit"></i>
                                </a>
                                <button type="submit"
                                        onclick="return confirm('Êtes-vous certain de vouloir suprimer l\'utilisateur <?= $user->name?> ? ATTENTION, cette opération est définitive !!!')"
                                        class="btn btn-xs btn-danger" data-toggle="tooltip" title="Supprimer" disabled>
                                    <i class="fa fa-times"></i>
                                </button>
                            @else
                                <a href="{{ route('admin.utilisateur.edit', $user->id) }}" class="btn btn-xs btn-default"
                                        data-toggle="tooltip" title="Editer/Mise à jour">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <button type="submit"
                                        onclick="return confirm('Êtes-vous certain de vouloir suprimer l\'utilisateur <?= $user->name?> ? ATTENTION, cette opération est définitive !!!')"
                                        class="btn btn-xs btn-danger" data-toggle="tooltip" title="Supprimer">
                                    <i class="fa fa-times"></i>
                                </button>
                            @endif

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
                {{ $users->appends(Request::query())->render() }}
            </div>
            <div class="pull-right">
                <?php $userUnePage = $users->count() ?>
                <small>{{ $userUnePage }} {{ str_plural('utilisateurs', $compteUsers) }} sur {{ $compteUsers }}</small>
            </div>
        </div>

    </div>
    @endif
</div>
