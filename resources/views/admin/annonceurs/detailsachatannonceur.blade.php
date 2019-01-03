@extends('admin.layouts.backend.main')

@section('title', 'Détails de votre achat')

@section('content')


    <div class="content-wrapper"><!-- content-wrapper -->
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Détails de votre achat</h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Accueil</a></li>
                <li class="active">Détails de votre achat</li>
            </ol>
        </section>

        <section class="content"><!-- Main content -->
            <!-- Default box -->
            <div class="box box-warning"><!-- box box-warning-->
                <div class="box-header"><!-- box-header -->
                    <div class="col-xs-12"><!-- col-xs-12 -->
                        <h4 style="margin-bottom:30px"><span style="color: #f39c12; font-weight: 600">
                            {{ $user->name }} | </span>Votre achat de l'annonce N° {{ $facture->id }}
                        </h4>
                        @if (session('message'))
                            <div class="col-xs-8 alert alert-warning">
                                    {{ session('message') }}
                            </div>
                        @endif
                            <div class="row"><!-- row -->
                                <div class="col-xs-8" style="margin-bottom:20px">
                                    <table class="table table-striped"
                                            style="border-top: 0 solid #ffffff!important">
                                        <tr>
                                            <td style="width: 210px">Annonce</td>
                                            <td>N° {{ $facture->id }}</td>
                                        </tr>
                                        <tr>
                                            <td>Annonce choisie</td>
                                            <td>{{ ucfirst($facture->produit) }}</td>
                                        </tr>
                                        <tr>
                                            <td>Contractée le</td>
                                            <td>{{ $facture->created_at->format('j/m/Y') }}</td>
                                        </tr>
                                        <tr>
                                            <td>Pour une durée de</td>
                                            <td>
                                                @if ($facture->qte === 1)
                                                    {{ $facture->qte }} an
                                                @else
                                                     {{ $facture->qte }} ans
                                                @endempty
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Renouvelable à échéance du</td>
                                            <td>{{ $facture->updated_at->format('j/m/Y') }}</td>
                                        </tr>
                                        <tr>
                                            <td>Valable du</td>
                                            <td>{{ $facture->datefacture->format('j/m/Y') }} au {{ $facture->updated_at->format('j/m/Y') }}</td>
                                        </tr>
                                        <tr>
                                            <td>Payée avec</td>
                                            @if ($facture->type === 'Stripe')
                                                <td>
                                                    <img src="{{ asset('backend/img/logo-visa.svg') }}" alt="Visa" width="6%">
                                                    &nbsp;(via Stripe)
                                                </td>
                                            @endif
                                            @if ($facture->type === 'PayPal')
                                                <td>
                                                    <img src="{{ asset('backend/img/logo-paypal.svg') }}" alt="Paypal" width="8%">
                                                </td>
                                            @endif
                                            @if ($facture->type === "Administration")
                                            <td>
                                                Administration
                                            </td>
                                        @endif
                                        </tr>
                                        <tr>
                                            <td>Pour un prix HT de</td>
                                            <td><abbr>
                                                    {{ number_format($facture->soustotalHT, 2, ',', ' ') }} €
                                                </abbr>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>avec une TVA de</td>
                                            <td><abbr>
                                                    {{ number_format($facture->tva, 2, ',', ' ') }} €
                                                </abbr>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>et un pour prix TTC de</td>
                                            <td><abbr>
                                                    {{ number_format($facture->totalTTC, 2, ',', ' ') }} €
                                                </abbr>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>
                                            {!! Form::open([
                                                'method' => 'POST',
                                                'route' => ['admin.telechargerPDF', $facture->id]
                                            ]) !!}
                                            <button type="submit" class="btn btn-xs btn-danger"
                                                data-toggle="tooltip" title="Votre facture en PDF">
                                                <i class="fa fa-file-pdf-o"></i>&nbsp;&nbsp;Votre facture en PDF
                                            </button>
                                            
                                            {!! Form::close() !!}
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div><!-- ../row -->
                    </div><!-- ../col-xs-12 -->

                    <!-- Bouton de retour -->
                    <a href="{{ route('admin.achatsannonceur', $user->id) }}" class="btn btn-default">
                        <i class="fa fa-fw fa-long-arrow-right"></i>Retour à vos achats
                    </a>
                    <!-- /.Bouton de retour-->

                </div><!-- ../box-header -->
            </div><!-- ../box box-warning-->
            <!-- /.box -->
        </section><!-- ../Main content -->
    </div><!-- ../content-wrapper -->
@endsection