@extends('admin.layouts.backend.main')

@section('title', 'Créer un identifiant unique')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Accréditation d'un annonceur</h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Accueil</a></li>
                <li><a href="{{ route('admin.annonceurs') }}"> Tous les annonceurs</a></li>
                <li class="active">Conversion de l'annonceur réussie</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- L'annonceur utilisateur -->
            <div class="box box-warning">
                <div class="box-header">
                    <h4>
                        Accréditation | <span style="color: #f39c12"> Conversion de l'annonceur réussie</span>
                    </h4>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Minimiser/Etendre">
                            <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Retirer">
                            <i class="fa fa-times"></i></button>
                    </div>
                </div>

                <div class="box-body"><!-- box-body -->
                   <p>
                       L'annonceur <strong>{{ $annonceur->societe }}</strong>
                       <br/>dont l'email est : <strong>{{ $annonceur->email }}</strong>
                       <br/>est dorénavant accrédité et possède l'identifiant unique : <strong>{{ $annonceur->user_id }}</strong>
                   </p>
                    <p>
                        Un email de bienvenue muni des identifants a été envoyé à l'annonceur par email.
                        <br/>Un double de cet email nous est parvenu.
                        <br/>Cette accréditation est inscrite dans la base de données dans la table des messages.
                        <br/>N'oubliez pas de supprimer ce message dans l'accueil de l'administration
                        à la rubrique : Vignerons et annonceurs à accréditer<i class="fa fa-fw fa-arrow-right"></i>
                        <a href="{{ route('admin') }}#vigneron">
                            <i class="fa fa-dashboard"></i>
                        </a>
                    </p>


                </div><!-- /.box-body -->

                <br/>
                <!-- /.box-footer-->
            </div>
            <!-- ../L'annonceur utilisateur -->



        </section>
        <!-- /.content -->
    </div>

@endsection

