@extends('admin.layouts.backend.main')

@section('title', 'Utilisateurs')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Messages</h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
                <li class="active">Messages</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="box box-primary">
                <div class="box-header">
                    <h4>Messages | <span style="color: #0073b7">Tous les échanges par email</span></h4>
                        @if(!$messages->count())
                            Il n'existe pas de message pour l'instant.
                        @else
                        <div class="col-xs-12"><!-- col-xs-12 -->
                            <div style="font-size: 12px">
                                <p>
                                    <br/>Pour éditer un message, ciquez sur  :
                                    <a href="#" class="btn btn-xs btn-default">
                                        <i class="fa fa-fw fa-envelope-o"></i>
                                    </a>
                                    <br/>Pour répondre à un message, cliquez sur l'icône bleu dans la liste, quand celui-ci est présent :
                                    <a href="#" class="btn btn-xs btn-primary">
                                        <i class="fa fa-fw fa-envelope"></i>
                                    </a>
                                    <br/>Pour réenvoyer l'accréditation à un vigneron, cliquez sur l'icône bleu dans la liste, quand celui-ci est présent :
                                    <a class="btn btn-xs btn-default">
                                        <i class="fa fa-fw fa-mail-forward text-blue"></i>
                                    </a>
                                    <br/>Pour accéder aux commentaires des vignerons, cliquez sur l'icône œil dans la liste, quand celui-ci est présent :
                                    <a class="btn btn-xs btn-default">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <br/>Pour supprimer un message :
                                    <a class="btn btn-xs btn-danger">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </p>
                            </div>

                            @if (session('success'))
                                <div class="alert alert-info">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <!-- Le formulaire de recherche -->
                                <form action="{{ route('admin.messages') }}">
                                    <div class="col-xs-4 pull-right clearfix">
                                        <div class="input-group">
                                            <input type="text" class="form-control input-lg"
                                                   name="term" value="{{ request('term') }}"
                                                   placeholder="Recherchez par nom, par email, par id ou par statut...">
                                            <span class="input-group-btn">
                                            <button class="btn btn-lg btn-default" type="submit">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </span>
                                        </div>
                                    </div>
                                </form>

                            <!-- ../Le formulaire de recherche -->

                            <div class="box-body"><!-- box-body -->
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <td>N°</td>
                                        <td>Nom</td>
                                        <td>Email</td>
                                        <td>Sujet</td>
                                        <td>Qualité</td>
                                        <td>Mot de passe (crypté)</td>
                                        <td>Contenu</td>
                                        <td>Identifiant unique</td>
                                        <td>Réponse à l'id</td>
                                        <td>Commentaire</td>
                                        <td>Créé le</td>
                                        <td width="160px">Actions</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($messages as $message)
                                        <tr>
                                            <td>{{ $message->id }}</td>
                                            <td>{{ $message->name }}</td>
                                            <td>{{ $message->email }}</td>
                                            <td>{{ $message->sujet }}</td>
                                            <td>{{ $message->role }}</td>
                                            <td>{{ $message->motdepasse ? str_limit($message->motdepasse, 20) : "Non concerné" }}</td>
                                            <td>{{ $message->contenu }}</td>
                                            <td>{{ $message->user_id ? $message->user_id : "Non concerné" }}</td>
                                            <td>{{ $message->reponse_id ? $message->reponse_id : "Pas de réponse" }}</td>
                                            <td>{{ $message->user_id || $message->commentaire === 1 ? "oui" : "Non concerné" }}</td>
                                            <td>
                                                <abbr>
                                                    {{ $message->dateFormattedCreate() }}
                                                </abbr>
                                            </td>
                                            <td>
                                                @if($message->commentaire === 0)
                                                    <!-- Le bouton éditer le message -->
                                                    <a href="{{ route('admin.message.detail', $message->id) }}" class="btn btn-xs btn-default"
                                                    data-toggle="tooltip" title="Editer le message">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                @endif
                                                <!-- ../Le bouton éditer le message -->
                                                <!-- Le bouton email -->
                                                @if(!empty($message->email) && $message->commentaire === 0)
                                                    <a href="{{ route('admin.message.email', $message->id) }}" class="btn btn-xs btn-primary"
                                                       data-toggle="tooltip" title="Répondre au message">
                                                        <i class="fa fa-fw fa-envelope"></i>
                                                    </a>
                                                @endif
                                                <!-- ../Le bouton email -->
                                                <!-- Le bouton réenvoyer l'accréditation -->
                                                @if($message->user_id && $message->role == 'vigneron' && $message->commentaire === 0)
                                                    <a href="{{ route('admin.renvoi.identifiant', $message->id) }}" class="btn btn-xs btn-default"
                                                       data-toggle="tooltip" title="Réenvoyer accréditation">
                                                        <i class="fa fa-fw fa-mail-forward text-blue"></i>
                                                    </a>
                                                @endif
                                                <!-- ../Le bouton réenvoyer l'accréditation -->
                                                <!-- Le bouton accès aux commentaires des vignerons -->
                                                @if($message->commentaire === 1)
                                                    <a href="{{ route('admin.comments') }}" class="btn btn-xs btn-default"
                                                        data-toggle="tooltip" title="Modération commentaires vignerons">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                @endif
                                                <!-- ../Le bouton accès aux commentaires des vignerons -->
                                                <!-- Le bouton décrypte le mot de passe -->
                                                @if($message->motdepasse)
                                                    <a href="#" 
                                                    onclick="return confirm('Le mot de passe de cet utilisateur est : {{ Crypt::decrypt($message->motdepasse) }}')"
                                                    class="btn btn-xs btn-default"
                                                        data-toggle="tooltip" title="Mot de passe en clair">
                                                        <i class="fa fa-key"></i>
                                                    </a>
                                                @endif
                                                <!-- ../Le bouton décrypte le mot de passe -->
                                                <!-- Le bouton supprimer -->
                                                <div style="display: inline-block">
                                                    {!! Form::open([
                                                        'method' => 'DELETE',
                                                        'route' => ['destroy.message', $message->id]
                                                    ]) !!}
                                                    <button type="submit"
                                                            onclick="return confirm('Êtes-vous certain de vouloir suprimer ce message ? ATTENTION, cette opération est définitive !!!')"
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
                            </div><!-- /.box-body -->

                            <div class="box-footer clearfix">
                                <div class="pull-left" style="margin-top: -15px; font-size: 10px;">
                                    <!-- Afficher des articles en les paginant, c'est aussi simple que ça -->
                                    {{ $messages->appends(Request::query())->render() }}
                                </div>
                                <div class="pull-right">
                                    <?php $messageUnePage = $messages->count() ?>
                                    <small>{{ $messageUnePage }} {{ str_plural('messages', $compteMessages) }} sur {{ $compteMessages }}</small>
                                </div>
                            </div>

                        </div><!-- ../col-xs-12 -->
                        @endif
                </div>
            </div>
            <!-- /.box -->
        </section>
        <!-- /.content -->

    </div>

@endsection