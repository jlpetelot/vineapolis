@extends('admin.layouts.backend.main')

@section('title', 'Les annonceurs')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Les annonceurs</h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Accueil</a></li>
                <li class="active">Tous les annonceurs</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="box box-warning">
                <div class="box-header">
                    <div class="col-xs-10">
                        <h4>
                            Annonceurs | <span style="color: #f39c12">Tous les annonceurs</span>
                            <p style="font-size: 12px; margin-top: 10px;">
                                Pour assigner une identification unique à l'annonceur,
                                on vérifie d'abord son existence en le recherchant par son nom ou son email.
                                Si il est présent, on clique sur l'icône bleu
                                <a class="btn btn-xs btn-info">
                                    <i class="fa fa-fw fa-user-plus"></i>
                                </a> de la liste. La colonne Actif passe à l'orange :
                                <span class="label label-warning">Oui</span>
                            </p>
                            <p style="font-size: 12px; margin-top: -10px;">
                                Pour aider l'annonceur dans sa démarche, on le met à jour, on lui assigne ou créé une annonce :
                                <span><i class="fa fa-pencil-square fa-lg"></i></span>
                            </p>
                            <p style="font-size: 12px; margin-top: -3px;">
                                Pour le détail des paiements, les factures, prolonger une annonce d'un an, ou sa suppression, cliquez sur le bouton :
                                <span><i class="fa fa-credit-card-alt"></i></span>
                            </p>
                            <p style="font-size: 12px; margin-top: -3px;">
                                Pour lui envoyer un email, on clique sur le bouton :
                                <span><i class="fa fa-envelope-o fa-lg"></i></span>
                            </p>
                            <p style="font-size: 12px; margin-top: -7px;">
                                Pour supprimer un annonceur, cliquez sur le bouton :
                                <a href="#" class="btn btn-xs btn-danger">
                                    <i class="fa fa-times"></i>
                                </a>
                            </p>
                        </h4>
                    </div>
                </div>
                <div style="margin-bottom: -10px"></div>
                @include('admin.annonceurs.partials.touslesannonceurs')

            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>

@endsection
