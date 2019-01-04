@extends('admin.layouts.backend.main')

@section('title', 'Détails de votre achat')

@section('content')

    <div class="content-wrapper"><!-- content-wrapper -->
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Tous les achats d'un vigneron</h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Accueil</a></li>
                <li><a href="{{ route('admin.annonceurs') }}">vignerons</a></li>
                <li class="active">Tous les achats d'un vigneron</li>
            </ol>
        </section>
        
        <!-- Si pas d'achats -->
        @if($nombreachats == 0)
        <section class="content"><!-- Main content -->
            <!-- Default box -->
            <div class="box box-danger"><!-- box box-warning-->
                <div class="box-header"><!-- box-header -->
                    <div class="col-xs-12"><!-- col-xs-12 -->
                        <h4 style="margin-bottom:30px">
                            Le vigneron <span style="color: #dd4b39; font-weight: 600">{{ $annonceur->societe }}</span> ne présente plus d'achats.
                        </h4>
                          <!-- Bouton de retour -->
                    <a href="{{ route('admin.annonceurs') }}" class="btn btn-default">
                            <i class="fa fa-fw fa-long-arrow-right"></i>Retour à la liste des vignerons
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
            <div class="box box-danger"><!-- box box-warning-->
                <div class="box-header"><!-- box-header -->
                    <div class="col-xs-12"><!-- col-xs-12 -->
                        <h4 style="margin-bottom:30px"><span style="color: #dd4b39; font-weight: 600">
                            {{ $vigneron->societe }} | </span>Tous les achats d'un vigneron du plus récent au plus ancient
                            <p style="font-size: 12px; margin-top: 10px;">
                                Pour éditer une facture ou la téléchargez en PDF, cliquez sur le bouton :
                                <a href="s#" class="btn btn-xs btn-success">
                                    <i class="fa fa-money"></i>
                                </a>
                            </p>
                            <p style="font-size: 12px; margin-top: -10px;">
                                Pour prolonger une annonce d'un an, cliquez sur le bouton :
                                <a href="s#" class="btn btn-xs btn-success">
                                    <i class="fa fa-credit-card"></i>
                                </a>
                            </p>
                            <p style="font-size: 12px; margin-top: -10px;">
                                Pour revenir aux vignerons, cliquez sur le bouton :
                                <a href="s#" class="btn btn-xs btn-default">
                                    <i class="fa fa-arrow-right text-green"></i>
                                </a>
                            </p>
                        </h4>
                        @if (session('message'))
                            <div class="col-xs-12 alert alert-success">
                                    {{ session('message') }}
                            </div>
                        @endif
                        @foreach ($achats as $achat)
                            <div class="row"><!-- row -->
                                <div class="col-xs-8" style="margin-bottom:20px">
                                    <table class="table table-striped"
                                            style="border-top: 0 solid #ffffff!important">
                                        <tr>
                                            <td style="width: 210px">Achat N°</td>
                                            <td>{{ $achat->id }}</td>
                                        </tr>
                                        <tr>
                                            <td>Option choisie</td>
                                            <td>{{ ucfirst($achat->produit) }}</td>
                                        </tr>
                                        <tr>
                                            <td>Contracté le</td>
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
                                            <td>Payé avec</td>
                                            @if ($achat->type === 'Stripe')
                                                <td>
                                                    <img src="{{ asset('backend/img/logo-visa.svg') }}" alt="Visa" width="6%">
                                                    &nbsp;(via Stripe)
                                                </td>
                                            @endif
                                            @if ($achat->type === 'paypal')
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
                                                    'route' => ['admin.editdetailachatvigneron', $achat->id]
                                                    ]) !!}
                                                    <button type="submit" class="btn btn-xs btn-success" data-toggle="tooltip" title="Facture et PDF de cet achat">
                                                        <i class="fa fa-money"></i>
                                                    </button>
                                                {{ Form::close() }}
                                                <div style="margin-top:-22px; margin-left:28px">
                                                    {!! Form::open([
                                                        'method' => 'POST',
                                                        'route' => ['admin.updateachatvigneron', $achat->id]
                                                        ]) !!}
                                                        {{ Form::hidden('pub', $achat->id) }}
                                                        {{ Form::hidden('annonce', $achat->produit) }}
                                                        <button type="submit" class="btn btn-xs btn-success" data-toggle="tooltip" title="Prolonger l'annonce d'1 an">
                                                            <i class="fa fa-credit-card"></i>
                                                        </button>
                                                    {{ Form::close() }}
                                                </div>
                                                <div style="margin-top:-23px; margin-left:56px">
                                                    <a href="{{ route('admin.all') }}" class="btn btn-xs btn-default"
                                                        data-toggle="tooltip" title="Retour aux vignerons">
                                                        <i class="fa fa-fw fa-arrow-right text-green"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div><!-- ../row -->
                        @endforeach
                    </div><!-- ../col-xs-12 -->

                    <!-- Bouton de retour -->
                    <a href="{{ route('admin.all') }}" class="btn btn-default">
                        <i class="fa fa-fw fa-long-arrow-right"></i>Retour à la liste des vignerons
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