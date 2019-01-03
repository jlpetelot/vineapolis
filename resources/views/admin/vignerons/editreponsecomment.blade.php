@extends('admin.layouts.backend.main')

@section('title', 'Utilisateurs')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Réponse au commentaire</h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
                <li><a href="{{ route('admin.all') }}"></i>Tous les vignerons</a></li>
                <li><a href="{{ route('admin.comments') }}"></i>Commentaires</a></li>
                <li class="active">Réponse du vigneron</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
                <!-- Default box -->
                <div class="box box-primary"><!-- box box-primary -->
                    <div class="box-header">
                        <h4>Détail de la réponse | Réponse du vigneron
                            <span class="text-blue">{{ $commentaire->vigneron->societe }}</span>
                            à <span class="text-blue">{{ $commentaire->name }}</span>
                        </h4>
                        <p style="font-size: 12px; margin: 15px 0 40px 0;">
                            Si la réponse au commentaire convient, ne rien faire. Si elle ne convient pas, supprimez-la.
                        </p>
                        @if(session('success'))
                            <div class="alert alert-info">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-xs-12"><!-- col-xs-12 -->
                                <div class="box-body">
                                    <div class="col-xs-8">
                                        <table class="table table-striped"
                                               style="border-top: 0 solid #ffffff!important">
                                            <tr>
                                                <td style="width: 200px">Id :</td>
                                                <td>{{ $commentaire->id }}</td>
                                            </tr>
                                            <tr>
                                                <td><br/></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Commentaire de :</td>
                                                <td>{{ $commentaire->name }}</td>
                                            </tr>
                                            <tr>
                                                <td>Posté :</td>
                                                <td><abbr>
                                                        {{ $commentaire->created_at->diffForHumans() }}
                                                    </abbr>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Contenu du commentaire :</td>
                                                <td>{!! $commentaire->body_html !!}</td>
                                            </tr>
                                            <tr>
                                                <td><br/><br/></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Adressé au vigneron :</td>
                                                <td><strong>{{ $commentaire->vigneron->societe }}</strong></td>
                                            </tr>
                                            <tr>
                                                <td>Qui a répondu :</td>
                                                <td><abbr>
                                                        {{ $commentaire->updated_at->diffForHumans() }}
                                                    </abbr>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Contenu de la réponse :</td>
                                                <td><strong>{!! $commentaire->reponse_html !!}</strong></td>
                                            </tr>
                                        </table>
                                        <br/>
                                       <div class="row">
                                            <div class="col-xs-8">
                                                <!-- Le bouton supprimer -->
                                                <div style="display: inline-block">
                                                    {!! Form::open([
                                                    'method' => 'DELETE',
                                                    'route' => ['admin.destroyreponsecomment', $commentaire->id]
                                                    ]) !!}
                                                    <button type="submit"
                                                        onclick="return confirm('En supprimant la réponse du vigneron à ce commentaire, vous lui envoyez un email pour l\'informer de votre action.')"
                                                        class="btn btn-danger" data-toggle="tooltip" title="Supprimez">Supprimez la réponse
                                                    </button>
                                                    {{ Form::close() }}
                                                </div>
                                                <!-- Le bouton supprimer -->
                                                &nbsp;
                                                <a href="{{ route('admin.comments') }}" type="button" class="btn btn-default">Retour aux commentaires</a>
                                            </div>
                                       </div>
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