@extends('admin.layouts.backend.main')

@section('title', 'Les vignerons')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Modération des commentaires et réponses des vignerons</h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
                <li><a href="{{ route('admin.all') }}"></i>Tous les vignerons</a></li>
                <li class="active">Commentaires</li>
            </ol>
        </section>
        
        <section class="content"><!-- content -->
            <div class="box box-danger"><!-- box box-danger -->
                <div class="box-header">
                    <div class="col-xs-8">
                        <h4>
                            Vignerons | <span style="color: #dd4b39">Modération et réponses des commentaires ordonnés du plus récent au plus ancient</span>
                            <p style="font-size: 12px; margin-top: 15px;">
                                Si le commentaire convient, ne rien faire. S'il ne convient pas, le supprimer avec le bouton
                                <button class="btn btn-xs btn-danger">
                                    <i class="fa fa-times"></i>
                                </button>
                            </p>
                            <p style="font-size: 12px; margin-top: 5px;">
                                Pour accéder à la réponse du vigneron (SI ELLE EXISTE), il suffit de cliquer sur le bouton bleu
                                <button class="btn btn-xs btn-primary">
                                    <i class="fa fa-edit"></i>
                                </button>
                            </p>
                        </h4>
                    </div>
                </div>
                @include('admin.vignerons.partials.commentairesvignerons')
            </div><!-- ../box box-danger -->
        </section><!-- ../content -->
    </div>

@endsection