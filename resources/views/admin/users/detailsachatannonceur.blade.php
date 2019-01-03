@extends('admin.layouts.backend.main')

@section('title', 'Détails de votre achat')

@section('content')

    <div class="content-wrapper"><!-- content-wrapper -->
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Tous les achats d'un annonceur</h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Accueil</a></li>
                <li><a href="{{ route('admin.annonceurs') }}">Annonceurs</a></li>
                <li class="active">Tous les achats d'un annonceur</li>
            </ol>
        </section>
        
        <!-- Si pas d'achats -->
        @if($nombreachats == 0)
        <section class="content"><!-- Main content -->
            <!-- Default box -->
            <div class="box box-warning"><!-- box box-warning-->
                <div class="box-header"><!-- box-header -->
                    <div class="col-xs-12"><!-- col-xs-12 -->
                        <h4 style="margin-bottom:30px">
                            L'annonceur <span style="color: #f39c12; font-weight: 600">{{ $annonceur->societe }}</span> ne présente plus d'achats.
                        </h4>
                          <!-- Bouton de retour -->
                    <a href="{{ route('admin.annonceurs') }}" class="btn btn-default">
                            <i class="fa fa-fw fa-long-arrow-right"></i>Retour à la liste des annonceurs
                        </a>
                        <!-- /.Bouton de retour-->
                </div><!-- ../box-header -->
            </div><!-- ../box box-warning-->
            <!-- /.box -->
        </section><!-- ../Main content -->
        @endif
        <!-- ../Si pas d'achats -->

        <!-- Si achats -->
        @if($nombreachats >= 1)
        <section class="content"><!-- Main content -->
            <!-- Default box -->
            <div class="box box-warning"><!-- box box-warning-->
                <div class="box-header"><!-- box-header -->
                    <div class="col-xs-12"><!-- col-xs-12 -->
                        <h4 style="margin-bottom:30px"><span style="color: #f39c12; font-weight: 600">
                            {{ $annonceur->societe }} | </span>Tous les achats d'un annonceur du plus récent au plus ancient
                            <p style="font-size: 12px; margin-top: 10px;">
                                Pour éditer une facture ou la téléchargez en PDF, cliquez sur le bouton :
                                <a href="s#" class="btn btn-xs btn-warning">
                                    <i class="fa fa-money"></i>
                                </a>
                            </p>
                            <p style="font-size: 12px; margin-top: -10px;">
                                Pour prolonger une annonce d'un an, cliquez sur le bouton :
                                <a href="s#" class="btn btn-xs btn-warning">
                                    <i class="fa fa-credit-card"></i>
                                </a>
                            </p>
                            <p style="font-size: 12px; margin-top: -10px;">
                                Pour revenir eux annonceurs, cliquez sur le bouton :
                                <a href="s#" class="btn btn-xs btn-default">
                                    <i class="fa fa-arrow-right text-orange"></i>
                                </a>
                            </p>
                            <p style="font-size: 12px; margin-top: -10px;">
                                Pour supprimer une annonce et son achat associé, cliquez sur le bouton :
                                <a href="#" class="btn btn-xs btn-danger">
                                    <i class="fa fa-times"></i>
                                </a>
                            </p>
                        </h4>
                        @if (session('message'))
                            <div class="col-xs-12 alert alert-warning">
                                    {{ session('message') }}
                            </div>
                        @endif
                        @foreach ($achats as $achat)
                            <div class="row"><!-- row -->
                                <div class="col-xs-8" style="margin-bottom:20px">
                                    <table class="table table-striped"
                                            style="border-top: 0 solid #ffffff!important">
                                        <tr>
                                            <td style="width: 210px">Annonce N°</td>
                                            <td>{{ $achat->id }}</td>
                                        </tr>
                                        <tr>
                                            <td>Annonce choisie</td>
                                            <td>{{ $achat->produit }}</td>
                                        </tr>
                                        <tr>
                                            <td>Contractée le</td>
                                            <td>{{ $achat->created_at->format('j/m/Y') }}</td>
                                        </tr>
                                        <tr>
                                            <td>Pour une durée de</td>
                                            <td>
                                                @if ($achat->qte === 1)
                                                    {{ $achat->qte }} an
                                                @else
                                                    {{ $achat->qte }} ans
                                                @endempty
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Renouvelable à échéance du</td>
                                            <td>{{ $achat->updated_at->format('j/m/Y') }}</td>
                                        </tr>
                                        <tr>
                                            <td>Valable du</td>
                                            <td>{{ $achat->datefacture->format('j/m/Y') }} au {{ $achat->updated_at->format('j/m/Y') }}</td>
                                        </tr>
                                        <tr>
                                            <td>Payée avec</td>
                                            @if ($achat->type === 'Stripe')
                                                <td>
                                                    <img src="{{ asset('backend/img/logo-visa.svg') }}" alt="Visa" width="6%">
                                                    &nbsp;(via Stripe)
                                                </td>
                                            @endif
                                            @if ($achat->type === 'PayPal')
                                                <td>
                                                    <img src="{{ asset('backend/img/logo-paypal.svg') }}" alt="Paypal" width="8%">
                                                </td>
                                            @endif
                                            @if ($achat->type === "Administration")
                                                <td>
                                                    <strong>Administration</strong>
                                                </td>
                                            @endif
                                        </tr>
                                        <tr>
                                            <td>Pour un prix HT de</td>
                                            <td><abbr>
                                                    {{ number_format($achat->soustotalHT, 2, ',', ' ') }} €
                                                </abbr>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>avec une TVA de</td>
                                            <td><abbr>
                                                    {{ number_format($achat->tva, 2, ',', ' ') }} €
                                                </abbr>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>et un pour prix TTC de</td>
                                            <td><abbr>
                                                    {{ number_format($achat->totalTTC, 2, ',', ' ') }} €
                                                </abbr>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Actions</strong></td>
                                            <td>
                                                {!! Form::open([
                                                    'method' => 'POST',
                                                    'route' => ['admin.editdetailachatanonceur', $achat->id]
                                                    ]) !!}
                                                    <button type="submit" class="btn btn-xs btn-warning" data-toggle="tooltip" title="Facture et PDF de cet achat">
                                                        <i class="fa fa-money"></i>
                                                    </button>
                                                {{ Form::close() }}
                                                <div style="margin-top:-22px; margin-left:28px">
                                                    {!! Form::open([
                                                        'method' => 'POST',
                                                        'route' => ['admin.updateachatannonceur', $achat->id]
                                                        ]) !!}
                                                        {{ Form::hidden('pub', $achat->id) }}
                                                        {{ Form::hidden('annonce', $achat->produit) }}
                                                        <button type="submit" class="btn btn-xs btn-warning" data-toggle="tooltip" title="Prolonger l'annonce d'1 an">
                                                            <i class="fa fa-credit-card"></i>
                                                        </button>
                                                    {{ Form::close() }}
                                                </div>
                                                <div style="margin-top:-23px; margin-left:56px">
                                                    <a href="{{ route('admin.annonceurs') }}" class="btn btn-xs btn-default"
                                                        data-toggle="tooltip" title="Retour aux annonceurs">
                                                        <i class="fa fa-fw fa-arrow-right text-orange"></i>
                                                    </a>
                                                </div>
                                                <div style="margin-top:-23px; margin-left:84px">
                                                    {!! Form::open([
                                                        'method' => 'DELETE',
                                                        'route' => ['admin.annonceurs.destroyannonce', $achat->id]
                                                        ]) !!}
                                                    <button type="submit"
                                                            onclick="return confirm('Êtes-vous certain de vouloir suprimer cette annonce ansi que son achat associé ? ATTENTION, cette opération est définitive !!!')"
                                                            class="btn btn-xs btn-danger" data-toggle="tooltip" title="Supprimer l'annonce et l'achat associé">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    {{ Form::close() }}
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div><!-- ../row -->
                        @endforeach
                    </div><!-- ../col-xs-12 -->

                    <!-- Bouton de retour -->
                    <a href="{{ route('admin.annonceurs') }}" class="btn btn-default">
                        <i class="fa fa-fw fa-long-arrow-right"></i>Retour à la liste des annonceurs
                    </a>
                    <!-- /.Bouton de retour-->

                </div><!-- ../box-header -->
            </div><!-- ../box box-warning-->
            <!-- /.box -->
        </section><!-- ../Main content -->
        @endif
        <!-- ../Si achats -->
       
    </div><!-- ../content-wrapper -->

@endsection