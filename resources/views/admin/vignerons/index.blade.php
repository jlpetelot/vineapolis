@extends('admin.layouts.backend.main')

@section('title', 'Les vignerons')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Les vignerons</h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Accueil</a></li>
                <li class="active">Tous les vignerons</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="box box-danger">
                <div class="box-header">
                    <div class="col-xs-10">
                        <h4>
                            Vignerons | <span style="color: #dd4b39">Tous les vignerons</span>
                            <p style="font-size: 12px; margin-top: 10px;">
                                Pour assigner une identification unique au vigneron,
                                on vérifie d'abord son existence en le recherchant par son nom ou son email.
                                Si il est présent, on clique sur l'icône bleu
                                <a class="btn btn-xs btn-primary">
                                    <i class="fa fa-fw fa-user-plus"></i>
                                </a> de la liste. La colonne Actif passe au vert :
                                <span class="label label-success">Oui</span>
                            </p>
                            <p style="font-size: 12px; margin-top: -10px;">
                                Si le vigneron est absent, il faut le créer en cliquant sur le bouton vert :
                                <span class="label label-success">Créer un vigneron</span>
                            </p>
                            <p style="font-size: 12px; margin-top: -3px;">
                                Pour créer un vigneron ou l'aider dans sa démarche, on l'édite :
                                <span><i class="fa fa-edit fa-lg"></i></span>
                            </p>
                            <p style="font-size: 12px; margin-top: -3px;">
                                Une fois le vigneron créé, pour lui assigner un achat, cliquez sur le bouton :
                                <span><i class="fa fa-shopping-cart fa-lg"></i></span>.&nbsp;
                                Une fois l'achat créé, vous pouvez modifier les données enregistrées en cliquant sur le bouton :
                                <span><i class="fa fa-wrench fa-lg"></i></span>
                            </p>
                            <p style="font-size: 12px; margin-top: -3px;">
                                Pour lui envoyer un email, si le vigneron en possède, cliquez sur le bouton :
                                <span><i class="fa fa-envelope-o fa-lg"></i></span>
                            </p>
                            <p style="font-size: 12px; margin-top: -3px;">
                                Pour activer la vidéo du vigneron, cliquez sur le bouton :
                                <span><i class="fa fa-video-camera fa-lg"></i></span>
                            </p>
                            <p style="font-size: 12px; margin-top: -6px;">
                                Pour éditer la facture, la télécharger en PDF et prolonger la souscription du vigneron d'1 an, cliquez sur le bouton :
                                <a href="#" class="btn btn-xs btn-success">
                                    <i class="fa fa-shopping-basket"></i>
                                </a>
                            </p>
                            <p style="font-size: 12px; margin-top: -12px;">
                                Pour supprimer un vigneron, cliquez sur le bouton :
                                <a href="#" class="btn btn-xs btn-danger">
                                    <i class="fa fa-times"></i>
                                </a>
                            </p>
                        </h4>
                    </div>
                </div>
                <div style="margin-bottom: -10px"></div>
                @include('admin.vignerons.partials.touslesvignerons')

            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>

@endsection
