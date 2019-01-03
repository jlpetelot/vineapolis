@extends('admin.layouts.backend.main')

@section('title', 'Utilisateurs')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Message</h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
                <li><a href="{{ route('admin.messages') }}"><i class="fa fa-dashboard"></i> Messages</a></li>
                <li class="active">Détail du message</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="box box-primary"><!-- box box-primary -->
                <div class="box-header">
                    <h4>Message | Détail du message de
                        <span class="text-blue">{{ $message->name }}</span>
                    </h4>
                    @if(session('success'))
                        <div class="alert alert-info">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-xs-12"><!-- col-xs-12 -->
                            <div class="box-body">
                                <div class="col-xs-5">
                                    <table class="table table-striped"
                                           style="border-top: 0 solid #ffffff!important">
                                        <tr>
                                            <td style="width: 160px">Id :</td>
                                            <td><strong>{{ $message->id }}</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Nom :</td>
                                            <td><strong>{{ $message->name }}</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Email :</td>
                                            <td><strong>{{ $message->email }}</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Sujet :</td>
                                            <td><strong>{{ $message->sujet }}</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Statut :</td>
                                            <td><strong>{{ $message->role }}</strong></td>
                                        </tr>
                                        @if(!empty($message->motdepasse))
                                            <tr>
                                                <td>Mot de passe (crypté) :</td>
                                                <td><strong>{{ str_limit($message->motdepasse, 40) }}</strong></td>
                                            </tr>
                                        @endif
                                        <tr>
                                            <td>Contenu :</td>
                                            <td><strong>{{ $message->contenu }}</strong></td>
                                        </tr>
                                        @if(!empty($message->user_id))
                                            <tr>
                                                <td>Identifiant unique :</td>
                                                <td><strong>{{ $message->user_id }}</strong></td>
                                            </tr>
                                        @endif
                                        <tr>
                                            <td>Créé le :</td>
                                            <td><abbr>
                                                    <strong>{{ $message->dateFormattedCreate(true) }}</strong>
                                                </abbr>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Actions :</td>
                                            <td>
                                                @if($message->user_id)
                                                    <a href="{{ route('admin.renvoi.identifiant', $message->id) }}" class="btn btn-xs btn-default"
                                                       data-toggle="tooltip" title="Lui réenvoyer l'accréditation">
                                                        <i class="fa fa-fw fa-mail-forward text-blue"></i>
                                                    </a>
                                                @endif
                                                <a href="{{ route('admin.message.email', $message->id) }}" class="btn btn-xs btn-primary"
                                                   data-toggle="tooltip" title="Répondre au message">
                                                    <i class="fa fa-fw fa-envelope"></i>
                                                </a>
                                                @if($message->motdepasse)
                                                    <a href="#" 
                                                    onclick="return confirm('Le mot de passe de cet utilisateur est : {{ Crypt::decrypt($message->motdepasse) }}')"
                                                    class="btn btn-xs btn-default"
                                                        data-toggle="tooltip" title="Mot de passe en clair">
                                                        <i class="fa fa-key"></i>
                                                    </a>
                                                @endif
                                                <a href="{{ route('admin.messages') }}" class="btn btn-xs btn-default"
                                                   data-toggle="tooltip" title="Retour aux messages">
                                                    <i class="fa fa-fw fa-arrow-right text-blue"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div><!-- ../col-xs-12 -->
                    </div>
                </div>
            </div>
            <!-- /.box -->
        </section>
        <!-- /.content -->
    </div>

@endsection