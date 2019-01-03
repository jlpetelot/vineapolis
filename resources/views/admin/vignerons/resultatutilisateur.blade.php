@extends('admin.layouts.backend.main')

@section('title', 'Créer un identifiant unique')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Accréditation d'un vigneron</h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Accueil</a></li>
                <li><a href="{{ route('admin.all') }}"> Tous les vignerons</a></li>
                <li class="active">Conversion du vigneron réussie</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Le vigneron utilisateur -->
            <div class="box box-danger">
                <div class="box-header">
                    <h4>
                        Accréditation | <span style="color: #dd4b39"> Conversion du vigneron réussie</span>
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
                       Le vigneron <strong>{{ $vigneron->societe }}</strong>
                       <br/>dont l'email est : <strong>{{ $vigneron->email }}</strong>
                       <br/>est dorénavant accrédité et possède l'identifiant unique : <strong>{{ $vigneron->user_id }}</strong>
                   </p>
                    <p>
                        Un email de bienvenue muni des identifants a été envoyé au vigneron par email.
                        <br/>Un double de cet email nous est parvenu.
                        <br/>Cette accréditation est inscrite dans la base de données dans la table des messages.
                        <br/>N'oubliez pas de supprimer ce message dans l'accueil de l'administration
                        à la rubrique : Vigneron à accréditer<i class="fa fa-fw fa-arrow-right"></i>
                        <a href="{{ route('admin') }}#vigneron">
                            <i class="fa fa-dashboard"></i>
                        </a>
                    </p>


                </div><!-- /.box-body -->

                <br/>
                <!-- /.box-footer-->
            </div>
            <!-- ../Le vigneron utilisateur -->



        </section>
        <!-- /.content -->
    </div>

@endsection

