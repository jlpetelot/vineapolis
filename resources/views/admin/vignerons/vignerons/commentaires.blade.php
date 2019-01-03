@extends('admin.layouts.backend.main')

@section('title', 'Compléter sa fiche')

@section('content')
    
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Gérez vos commentaires</h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Accueil</a></li>
                <li class="active">Commentaires postés</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            @if ($compteCommentaires === 0)
            <!-- Default box -->
            <div class="box box-danger">
                <div class="box-header">
                    <div class="col-xs-12"><!-- col-xs-12 -->
                        <h4><span style="color: #dd4b39; font-weight: 600">
                        {{ Auth::user()->name }} | </span>Pour l'instant, vous n'avez pas de commentaire posté.
                        </h4>
                    </div>
                </div>
            </div>
            @else
            <!-- Default box -->
            <div class="box box-danger">
                <div class="box-header">
                    <div class="col-xs-12"><!-- col-xs-12 -->
                        <h4><span style="color: #dd4b39; font-weight: 600">
                        {{ Auth::user()->name }} | </span>Voici vos commentaires postés par les internautes ordonnés du plus récent au plus ancient.
                        </h4>
                    </div>

                    <div class="col-xs-12">
                        <div style="font-size: 12px">
                            <p>
                                Pour répondre à un commentaire, ciquez sur :&nbsp;
                                <a href="#" class="btn btn-xs btn-primary">
                                    <i class="fa fa-fw fa-mail-forward"></i>
                                </a>
                                &nbsp;Nous nous réservons 24 heures pour définitivement l'accréditer.
                            </p>
                        </div>

                        <div class="box-header"><!-- box-header -->
                            <div class="col-xs-12" style="margin-left: -15px">
                                @if (session('message'))
                                    <div class="alert alert-info">{{ session('message') }}</div>
                                @endif
                            </div>
                        </div>
                        <!-- /.box-header -->
                        
                        <div class="box-body ">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <td>Id</td>
                                    <td width="150px">Commentaire de</td>
                                    <td width="120px">Créé</td>
                                    <td width="800px">Contenu du commentaire</td>
                                    <td width="150px">Vous avez répondu</td>
                                    <td width="400px">Contenu de votre réponse</td>
                                    <td width="150px" style="text-align:center">Répondre</td>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($commentaires as $c)
                                    <tr>
                                        <td>{{ $c->id }}</td>
                                        <td>{{ $c->name }}</td>
                                        <td><?php if($c->reponse == NULL) echo $c->created_at->diffForHumans(); else echo "-" ?></td>
                                        <td>{!! $c->body_html !!}</td>
                                        <td><?php if($c->updated_at != NULL) echo $c->updated_at->diffForHumans(); else echo "Non" ?></td>
                                        <td><?php if($c->reponse != NULL) echo $c->reponse_html; else echo "-" ?></td>
                                        @if ($c->reponse == NULL)
                                            <td style="text-align:center">
                                                <a href="{{ route('admin.vignerons.commentaire.repondre', $c->id) }}"
                                                    class="btn btn-xs btn-primary" data-toggle="tooltip" title="Répondre à <?= $c->name ?>">
                                                <i class="fa fa-fw fa-mail-forward"></i>
                                                </a>
                                            </td>
                                        @else
                                            <td>
                                            </td>
                                        @endif
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
                        
                        <div class="box-footer clearfix">
                            <div class="pull-left" style="margin-top: -15px; font-size: 10px;">
                                {{ $commentaires->links() }}
                            </div>
                            <div class="pull-right">
                                @php 
                                    $commentaireUnePage = $commentaires->count();
                                @endphp
                                <small>{{ $commentaireUnePage }} {{ str_plural('commentaires', $compteCommentaires) }} sur {{ $compteCommentaires }}</small>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            @endif
        </section>
        <!-- /.content -->
    </div><!-- ../content-wrapper -->
    
@endsection