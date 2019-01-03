@extends('admin.layouts.backend.main')

@section('title', "Détails des achats d'un vigneron")

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Détails des achats d'un vigneron</h1>
            <ol class="breadcrumb">
               <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Accueil</a></li>
                <li><a href="{{ route('admin.all') }}"> Tous les vignerons</a></li>
                <li class="active">Détails des achats d'un vigneron</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="box box-danger">
                <div class="box-header">
                    <div class="col-xs-8">
                        <h4>
                            Vignerons | Détails des achats du vigneron <span style="color: #dd4b39">{{ $user->name }}</span>
                            <p style="font-size: 12px; margin-top: 5px;">
                                Pour assigner une identification unique au vigneron,
                                on vérifie d'abord son existence en le recherchant par son nom ou son email.
                                Si il est présent, on clique sur l'icône bleu
                                <a href="#" class="btn btn-xs btn-primary">
                                    <i class="fa fa-fw fa-user-plus"></i>
                                </a> de la liste
                                <br/>Si le vigneron est absent, il faut d'abord le créer en cliquant sur le bouton vert :
                                <a href="#" class="btn btn-success" style="font-size: 9px; padding: 2px">Créer un vigneron</a>
                                <br/>Pour aider un vigneron dans sa démarche, on l'édite :
                                <a href="#" class="btn btn-xs btn-default">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <br/>Pour lui envoyer un email :
                                <a href="#" class="btn btn-xs btn-default">
                                    <i class="fa fa-fw fa-envelope-o"></i>
                                </a>
                            </p>
                        </h4>
                    </div>
                </div>
                <div class="box-body">
                    <div class="col-xs-12">
                        {{ $user->name }}

                        @foreach ($line as $achat)
                            <p>{{ $achat->product_id }}</p>
                            <p>{{ $achat->prix }}</p>
                            <p>{{ $achat->qte }}</p>
                            <p>Payé par {{ $achat->type }}</p>
                        @endforeach

                    </div>
                </div>

            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>

@endsection
