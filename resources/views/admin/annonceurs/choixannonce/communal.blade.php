@extends('admin.layouts.backend.main')

@section('title', 'Les annonceurs')

@section('content')
    <style>
        .box.box-default {
            border-top-color: #f39c12;
        }
        .box-header.with-border {
            border-bottom: 1px solid #f39c12!important;
        }
    </style>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Espace annonceurs</h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Accueil</a></li>
                <li class="active">Niveau communal</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="box box-default" style="color: #990033">
                <div class="box-header with-border">
                    <h4>{{ $annonceur->societe }} | <span style="color: #f39c12">Vous avez choisi le niveau communal</span></h4>
                    <br/>
                    <div class="col-xs-12">
                        C'est-à-dire une présence au chœur même des vignobles.
                        <p> 1 seul format, 1 seul tarif. Choisissez parmi les régions ou communes proposées et confirmez votre choix, si vous le voulez bien.
                        </p>
                        <p style="padding-top:15px"> &bull; format de (198px) x (238px) à 790€ HT (*)</p>
                        <p style="font-size:10px">(*)
                            Nos tarifs s'entendent 12 mois consécutifs, hors TVA.
                            Le paiement s'effectue sur notre site grâce à nos comptes sécurisés Visa Carte Bleue et Paypal.
                            Un justificatif de paiement vous est adressé dès sa confirmation.
                        </p>
                        
                         <!-- le formulaire -->
                         {!! Form::open([
                            'method'    => 'POST',
                            'route'     => ['admin.annonceurs.choixannonce.communalchoix', $annonceur->id],
                        ]) !!}
                        <!-- Les erreurs -->
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        <!-- ../Les erreurs -->

                        <!-- 1 -->
                        <div class="row">
                            <!-- Alsace -->
                            <div class="col-xs-3">
                                {{ Form::radio('choix', 1, false) }}
                                &nbsp;{!! Form::label('choix', 'Alsace') !!}
                                <br/>
                                <img src="{{ asset('backend/img/Alsace_admin.jpg') }}" width="50%" height="auto">
                            </div>
                            <!-- ../Alsace -->
                        </div>
                        <br/>
                     
                        <!-- 2 -->
                        <div class="row">
                            <!-- Armagnac -->
                            <div class="col-xs-3">
                                {{ Form::radio('choix', 2, false) }}
                                &nbsp;{!! Form::label('choix', 'Armagnac') !!}
                                <br/>
                                <img src="{{ asset('backend/img/Armagnac_admin.jpg') }}" width="81%" height="auto">
                            </div>
                            <!-- ../Armagnac -->
                        </div>
                        <br/>
                        <!-- ../2 -->

                        <!-- 3 -->
                        <div class="row">
                            <!-- Auvergne -->
                            <div class="col-xs-3">
                                {{ Form::radio('choix', 3, false) }}
                                &nbsp;{!! Form::label('choix', 'Auvergne') !!}
                                <br/>
                                <img src="{{ asset('backend/img/Auvergne_admin.jpg') }}" width="81%" height="auto">
                            </div>
                            <!-- ../Alsace -->
                        </div>
                        <br/>
                        <!-- ../3 -->

                        <!-- 4 -->
                        <div class="row">
                            <!-- Beaujolais -->
                            <div class="col-xs-3">
                                {{ Form::radio('choix', 4, false) }}
                                &nbsp;{!! Form::label('choix', 'Beaujolais') !!}
                                <br/>
                                <img src="{{ asset('backend/img/Beaujolais_admin.jpg') }}" width="81%" height="auto">
                            </div>
                            <!-- ../Beaujolais -->
                        </div>
                        <br/>
                        <!-- ../4 -->

                        <h3>Bordeaux</h3>
                        <!-- 5 -->
                        <div class="row">
                            <!-- Margaux -->
                            <div class="col-xs-3">
                                {{ Form::radio('choix', 5, false) }}
                                &nbsp;{!! Form::label('choix', 'Margaux') !!}
                                <br/>
                                <img src="{{ asset('backend/img/Margaux_admin.jpg') }}" width="81%" height="auto">
                            </div>
                            <!-- ../Margaux -->
                            <!-- Moulis-Listrac -->
                            <div class="col-xs-3">
                                {{ Form::radio('choix', 6, false) }}
                                &nbsp;{!! Form::label('choix', 'Moulis-Listrac') !!}
                                <br/>
                                <img src="{{ asset('backend/img/Moulis-Listrac_admin.jpg') }}" width="81%" height="auto">
                            </div>
                            <!-- ../Moulis-Listrac -->
                            <!-- Pauillac -->
                            <div class="col-xs-3">
                                {{ Form::radio('choix', 7, false) }}
                                &nbsp;{!! Form::label('choix', 'Pauillac') !!}
                                <br/>
                                <img src="{{ asset('backend/img/Pauillac_admin.jpg') }}" width="81%" height="auto">
                            </div>
                            <!-- ../Pauillac -->
                            <!-- Saint-Estèphe -->
                            <div class="col-xs-3">
                                {{ Form::radio('choix', 8, false) }}
                                &nbsp;{!! Form::label('choix', 'Saint-Estèphe') !!}
                                <br/>
                                <img src="{{ asset('backend/img/Saint-Estèphe_admin.jpg') }}" width="81%" height="auto">
                            </div>
                            <!-- ../Saint-Estèphe -->
                            <!-- Saint-Julien -->
                            <div class="col-xs-3">
                                <br/>
                                {{ Form::radio('choix', 9, false) }}
                                &nbsp;{!! Form::label('choix', 'Saint-Julien') !!}
                                <br/>
                                <img src="{{ asset('backend/img/Saint-Julien_admin.jpg') }}" width="81%" height="auto">
                            </div>
                            <!-- ../Saint-Julien -->
                            <!-- Pessac-Léognan-->
                            <div class="col-xs-3">
                                <br/>
                                {{ Form::radio('choix', 10, false) }}
                                &nbsp;{!! Form::label('choix', 'Pessac-Léognan') !!}
                                <br/>
                                <img src="{{ asset('backend/img/Pessac-Léognan_admin.jpg') }}" width="81%" height="auto">
                            </div>
                            <!-- ../Pessac-Léognan-->
                            <!-- Pomerol -->
                            <div class="col-xs-3">
                                <br/>
                                {{ Form::radio('choix', 11, false) }}
                                &nbsp;{!! Form::label('choix', 'Pomerol') !!}
                                <br/>
                                <img src="{{ asset('backend/img/Pomerol_admin.jpg') }}" width="81%" height="auto">
                            </div>
                            <!-- ../Pomerol -->
                            <!-- Saint-Emilion -->
                            <div class="col-xs-3">
                                <br/>
                                {{ Form::radio('choix', 12, false) }}
                                &nbsp;{!! Form::label('choix', 'Saint-Emilion') !!}
                                <br/>
                                <img src="{{ asset('backend/img/Saint-Emilion_admin.jpg') }}" width="81%" height="auto">
                            </div>
                            <!-- ../Saint-Emilion -->
                            <br/><br/>
                            <!-- Sauternes-Barsac -->
                            <div class="col-xs-3">
                                <br/>
                                {{ Form::radio('choix', 13, false) }}
                                &nbsp;{!! Form::label('choix', 'Sauternes-Barsac') !!}
                                <br/>
                                <img src="{{ asset('backend/img/Sauternes-Barsac_admin.jpg') }}" width="81%" height="auto">
                            </div>
                            <!-- ../Sauternes-Barsac -->
                        </div>
                        <br/>
                        <!-- ../5 -->

                        <h3>Bourgogne</h3>
                        <!-- 6 -->
                        <div class="row">
                            <!-- Grands-Crus-de-Chablis-->
                            <div class="col-xs-3">
                                {{ Form::radio('choix', 14, false) }}
                                &nbsp;{!! Form::label('choix', 'Grands-Crus-de-Chablis') !!}
                                <br/>
                                <img src="{{ asset('backend/img/Grands-Crus-de-Chablis_admin.jpg') }}" width="81%" height="auto">
                            </div>
                            <!-- ../Grands-Crus-de-Chablis-->
                            <!-- Chambolle-Musigny-Morey-Saint-Denis-->
                            <div class="col-xs-3">
                                {{ Form::radio('choix', 15, false) }}
                                &nbsp;{!! Form::label('choix', 'Chambolle-Musigny-Morey-Saint-Denis') !!}
                                <br/>
                                <img src="{{ asset('backend/img/Chambolle-Musigny-Morey-Saint-Denis_admin.jpg') }}" width="81%" height="auto">
                            </div>
                            <!-- ../Chambolle-Musigny-Morey-Saint-Denis-->
                            <!-- Gevrey-Chambertin -->
                            <div class="col-xs-3">
                                {{ Form::radio('choix', 16, false) }}
                                &nbsp;{!! Form::label('choix', 'Gevrey-Chambertin') !!}
                                <br/>
                                <img src="{{ asset('backend/img/Gevrey-Chambertin_admin.jpg') }}" width="81%" height="auto">
                            </div>
                            <!-- ../Gevrey-Chambertin -->
                            <!-- Nuits-Saint-Georges -->
                            <div class="col-xs-3">
                                {{ Form::radio('choix', 17, false) }}
                                &nbsp;{!! Form::label('choix', 'Nuits-Saint-Georges') !!}
                                <br/>
                                <img src="{{ asset('backend/img/Nuits-Saint-Georges_admin.jpg') }}" width="81%" height="auto">
                            </div>
                            <!-- ../Nuits-Saint-Georges -->
                            <!-- Vosne-Romanée-->
                            <div class="col-xs-3">
                                <br/>
                                {{ Form::radio('choix', 18, false) }}
                                &nbsp;{!! Form::label('choix', 'Vosne-Romanée') !!}
                                <br/>
                                <img src="{{ asset('backend/img/Vosne-Romanée_admin.jpg') }}" width="81%" height="auto">
                            </div>
                            <!-- ../Vosne-Romanée -->
                            <!-- Vougeot -->
                            <div class="col-xs-3">
                                <br/>
                                {{ Form::radio('choix', 19, false) }}
                                &nbsp;{!! Form::label('choix', 'Vougeot') !!}
                                <br/>
                                <img src="{{ asset('backend/img/Vougeot_admin.jpg') }}" width="81%" height="auto">
                            </div>
                            <!-- ../Vougeot -->
                            <!-- 1ers crus et Grands Crus de Beaune -->
                            <div class="col-xs-3">
                                <br/>
                                {{ Form::radio('choix', 20, false) }}
                                &nbsp;{!! Form::label('choix', '1ers crus et Grands Crus de Beaune') !!}
                                <br/>
                                <img src="{{ asset('backend/img/1ers-crus-et-Grands-Crus-de-Beaune_admin.jpg') }}" width="81%" height="auto">
                            </div>
                            <!-- ../1ers crus et Grands Crus de Beaune -->
                            <!-- Aloxe-Corton -->
                            <div class="col-xs-3">
                                <br/>
                                {{ Form::radio('choix', 21, false) }}
                                &nbsp;{!! Form::label('choix', 'Aloxe-Corton') !!}
                                <br/>
                                <img src="{{ asset('backend/img/Aloxe-Corton_admin.jpg') }}" width="81%" height="auto">
                            </div>
                            <!-- ../Aloxe-Corton -->
                            <!-- Chassagne-Montrachet -->
                            <div class="col-xs-3">
                                <br/>
                                {{ Form::radio('choix', 22, false) }}
                                &nbsp;{!! Form::label('choix', 'Chassagne-Montrachet') !!}
                                <br/>
                                <img src="{{ asset('backend/img/Chassagne-Montrachet_admin.jpg') }}" width="81%" height="auto">
                            </div>
                            <!-- ../Chassagne-Montrachet -->
                            <!-- Pommard -->
                            <div class="col-xs-3">
                                <br/>
                                {{ Form::radio('choix', 23, false) }}
                                &nbsp;{!! Form::label('choix', 'Pommard') !!}
                                <br/>
                                <img src="{{ asset('backend/img/Pommard_admin.jpg') }}" width="81%" height="auto">
                            </div>
                            <!-- ../Pommard -->
                            <!-- Puligny-Montrachet -->
                            <div class="col-xs-3">
                                <br/>
                                {{ Form::radio('choix', 24, false) }}
                                &nbsp;{!! Form::label('choix', 'Puligny-Montrachet') !!}
                                <br/>
                                <img src="{{ asset('backend/img/Puligny-Montrachet_admin.jpg') }}" width="81%" height="auto">
                            </div>
                            <!-- ../Puligny-Montrachet -->
                            <!-- Volnay -->
                            <div class="col-xs-3">
                                <br/>
                                {{ Form::radio('choix', 25, false) }}
                                &nbsp;{!! Form::label('choix', 'Volnay') !!}
                                <br/>
                                <img src="{{ asset('backend/img/Volnay_admin.jpg') }}" width="81%" height="auto">
                            </div>
                            <!-- ../Volnay -->
                            <!-- Côte Chalonnaise et Couchoise-->
                            <div class="col-xs-3">
                                <br/>
                                {{ Form::radio('choix', 26, false) }}
                                &nbsp;{!! Form::label('choix', 'Côte Chalonnaise et Couchoise') !!}
                                <br/>
                                <img src="{{ asset('backend/img/Côte-Chalonnaise-et-Couchoise_admin.jpg') }}" width="81%" height="auto">
                            </div>
                            <!-- ../Côte Chalonnaise et Couchoise-->
                            <!-- Mâcon -->
                            <div class="col-xs-3">
                                <br/>
                                {{ Form::radio('choix', 27, false) }}
                                &nbsp;{!! Form::label('choix', 'Mâcon') !!}
                                <br/>
                                <img src="{{ asset('backend/img/Mâcon_admin.jpg') }}" width="81%" height="auto">
                            </div>
                            <!-- ../Mâcon -->
                        </div>
                        <br/>
                        <!-- ../6 -->

                        <h3> </h3>
                        <!-- 7 -->
                        <div class="row">
                            <!-- Bugey -->
                            <div class="col-xs-3">
                                {{ Form::radio('choix', 28, false) }}
                                &nbsp;{!! Form::label('choix', 'Bugey') !!}
                                <br/>
                                <img src="{{ asset('backend/img/Bugey_admin.jpg') }}" width="81%" height="auto">
                            </div>
                            <!-- ../Bugey -->
                        </div>
                        <br/>
                        <!-- ../7 -->

                        <h3>Champagne</h3>
                        <!-- 8 -->
                        <div class="row">
                            <!-- Vallée de la Marne -->
                            <div class="col-xs-3">
                                {{ Form::radio('choix', 29, false) }}
                                &nbsp;{!! Form::label('choix', 'Vallée de la Marne') !!}
                                <br/>
                                <img src="{{ asset('backend/img/De-la-Vallée-de-la-Marne_admin.jpg') }}" width="81%" height="auto">
                            </div>
                            <!-- ../Vallée de la Marne -->
                             <!-- Montagne de Reims et Côte des Blancs -->
                             <div class="col-xs-3">
                                    {{ Form::radio('choix', 30, false) }}
                                    &nbsp;{!! Form::label('choix', 'Montagne de Reims et Côte des Blancs') !!}
                                    <br/>
                                    <img src="{{ asset('backend/img/De-la-Montagne-de-Reims-et-de-la-Côte-des-Blancs_admin.jpg') }}" width="81%" height="auto">
                                </div>
                                <!-- ../Montagne de Reims et Côte des Blancs -->
                        </div>
                        <br/>
                        <!-- ../8 -->

                        <!-- 8 -->
                        <div class="row">
                            <!-- Cognac -->
                            <div class="col-xs-3">
                                {{ Form::radio('choix', 31, false) }}
                                &nbsp;{!! Form::label('choix', 'Cognac') !!}
                                <br/>
                                <img src="{{ asset('backend/img/Cognac_admin.jpg') }}" width="81%" height="auto">
                            </div>
                            <!-- ../Cognac -->
                        </div>
                        <br/>
                        <!-- ../8 -->
                        
                        <!-- 9 -->
                        <div class="row">
                            <!-- Corse -->
                            <div class="col-xs-3">
                                {{ Form::radio('choix', 32, false) }}
                                &nbsp;{!! Form::label('choix', 'Corse') !!}
                                <br/>
                                <img src="{{ asset('backend/img/Corse_admin.jpg') }}" width="81%" height="auto">
                            </div>
                            <!-- ../Corse -->
                        </div>
                        <br/>
                        <!-- ../9 -->

                        <!-- 10 -->
                        <div class="row">
                            <!-- Côtes du Rhône Méridional -->
                            <div class="col-xs-3">
                                {{ Form::radio('choix', 33, false) }}
                                &nbsp;{!! Form::label('choix', 'Côtes du Rhône Méridional') !!}
                                <br/>
                                <img src="{{ asset('backend/img/Côtes-du-Rhône-Méridional_admin.jpg') }}" width="81%" height="auto">
                            </div>
                            <!-- ../Côtes du Rhône Méridional -->
                        </div>
                        <br/>
                        <!-- ../10 -->
                        
                        <h3>Côtes du Rhône Septentrional</h3>
                        <!-- 11 -->
                        <div class="row">
                            <!-- Saint-Peray et Cornas -->
                            <div class="col-xs-3">
                                {{ Form::radio('choix', 34, false) }}
                                &nbsp;{!! Form::label('choix', 'Saint-Peray et Cornas') !!}
                                <br/>
                                <img src="{{ asset('backend/img/Saint-Peray-et-Cornas_admin.jpg') }}" width="81%" height="auto">
                            </div>
                            <!-- ../Saint-Peray et Cornas -->
                        </div>
                        <br/>
                        <!-- ../11 -->

                        <h3> </h3>
                        <!-- 12 -->
                        <div class="row">
                            <!-- Jura -->
                            <div class="col-xs-3">
                                {{ Form::radio('choix', 35, false) }}
                                &nbsp;{!! Form::label('choix', 'Jura') !!}
                                <br/>
                                <img src="{{ asset('backend/img/Jura_admin.jpg') }}" width="81%" height="auto">
                            </div>
                            <!-- ../Jura -->
                        </div>
                        <br/>
                        <!-- ../12 -->

                        <!-- 13 -->
                        <div class="row">
                            <!-- Languedoc-Roussillon -->
                            <div class="col-xs-3">
                                {{ Form::radio('choix', 36, false) }}
                                &nbsp;{!! Form::label('choix', 'Languedoc-Roussillon') !!}
                                <br/>
                                <img src="{{ asset('backend/img/Languedoc-Roussillon_admin.jpg') }}" width="81%" height="auto">
                            </div>
                            <!-- ../Languedoc-Roussillon -->
                        </div>
                        <br/>
                        <!-- ../13 -->

                        <h3>Loire</h3>
                        <!-- 14 -->
                        <div class="row">
                            <!-- Pouilly -->
                            <div class="col-xs-3">
                                {{ Form::radio('choix', 37, false) }}
                                &nbsp;{!! Form::label('choix', 'Pouilly') !!}
                                <br/>
                                <img src="{{ asset('backend/img/Pouilly_admin.jpg') }}" width="81%" height="auto">
                            </div>
                            <!-- ../Pouilly -->
                            <!-- Quincy-Reuilly -->
                            <div class="col-xs-3">
                                {{ Form::radio('choix', 38, false) }}
                                &nbsp;{!! Form::label('choix', 'Quincy-Reuilly') !!}
                                <br/>
                                <img src="{{ asset('backend/img/Quincy-Reuilly_admin.jpg') }}" width="81%" height="auto">
                            </div>
                            <!-- ../Quincy-Reuilly -->
                            <!-- Sancerre -->
                            <div class="col-xs-3">
                                {{ Form::radio('choix', 39, false) }}
                                &nbsp;{!! Form::label('choix', 'Sancerre') !!}
                                <br/>
                                <img src="{{ asset('backend/img/Sancerre_admin.jpg') }}" width="81%" height="auto">
                            </div>
                            <!-- ../Sancerre -->
                            <!-- Saumur-Champigny -->
                            <div class="col-xs-3">
                                {{ Form::radio('choix', 40, false) }}
                                &nbsp;{!! Form::label('choix', 'Saumur-Champigny') !!}
                                <br/>
                                <img src="{{ asset('backend/img/Saumur-Champigny_admin.jpg') }}" width="81%" height="auto">
                            </div>
                            <!-- ../Saumur-Champigny -->
                        </div>
                        <br/>
                        <!-- ../14 -->

                        <h3> </h3>
                        <!-- 15 -->
                        <div class="row">
                            <!-- Lorraine -->
                            <div class="col-xs-3">
                                {{ Form::radio('choix', 41, false) }}
                                &nbsp;{!! Form::label('choix', 'Lorraine') !!}
                                <br/>
                                <img src="{{ asset('backend/img/Lorraine_admin.jpg') }}" width="81%" height="auto">
                            </div>
                            <!-- ../Lorraine -->
                        </div>
                        <br/>
                        <!-- ../15 -->

                        <!-- 16 -->
                        <div class="row">
                            <!-- Provence -->
                            <div class="col-xs-3">
                                {{ Form::radio('choix', 42, false) }}
                                &nbsp;{!! Form::label('choix', 'Provence') !!}
                                <br/>
                                <img src="{{ asset('backend/img/Provence_admin.jpg') }}" width="81%" height="auto">
                            </div>
                            <!-- ../Provence -->
                        </div>
                        <br/>
                        <!-- ../16 -->

                        <!-- 17 -->
                        <div class="row">
                            <!-- Savoie -->
                            <div class="col-xs-3">
                                {{ Form::radio('choix', 43, false) }}
                                &nbsp;{!! Form::label('choix', 'Savoie') !!}
                                <br/>
                                <img src="{{ asset('backend/img/Savoie_admin.jpg') }}" width="81%" height="auto">
                            </div>
                            <!-- ../Savoie -->
                        </div>
                        <br/>
                        <!-- ../17 -->

                        <h3>Sud-Ouest</h3>
                        <!-- 18 -->
                        <div class="row">
                            <!-- Aveyron -->
                            <div class="col-xs-3">
                                {{ Form::radio('choix', 44, false) }}
                                &nbsp;{!! Form::label('choix', 'Aveyron') !!}
                                <br/>
                                <img src="{{ asset('backend/img/Aveyron_admin.jpg') }}" width="81%" height="auto">
                            </div>
                            <!-- ../Aveyron -->
                        </div>
                        <br/>
                        <!-- ../18 -->

                        <div class="row" style="margin-top:20px; margin-bottom:40px">
                            <div class="col-xs-6">
                                <input class="btn btn-warning" type="submit" value="Cochez et confirmez votre choix">
                                &nbsp;<a href="{{ route('admin') }}" type="button" class="btn btn-default">Annulez</a>
                            </div>
                        </div>
                        {{ Form::close() }}
                        <!-- ../le formulaire -->
                    </div>
                </div>
            </div>
            <!-- /.box -->
        </section>
        <!-- /.content -->
    </div>
@endsection
