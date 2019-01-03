@extends('admin.layouts.backend.main')

@section('title', 'Commande')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Commande</h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-danger">
            <div class="box-header">
                <div class="col-xs-8">

                    <!-- Fiche vidéo -->
                    <h4>
                        <span style="color: #dd4b39; font-weight: 600">
                            {{ $vigneron->societe }} | </span>Vous avez validé vos coordonnées et souhaitez commander.
                    </h4>
                    <br/>
                    <p>
                        Choisissez votre moyen de paiement : carte bancaire ou Paypal.
                        <br/>Vous serez mis en relation par l'un ou l'autre du service choisi sans quiter le site.
                    </p>
                        <br/>
                    <div class="row pub panier">
                        <table class="table table-responsive" id="panier">
                            <thead class="thead-default">
                                <tr>
                                    <th>Votre commande</th>
                                    <th>Quantité <small>(pour x années)</small></th>
                                    <th>Prix HT</th>
                                    <th>Prix total HT</th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td class="product_name">
                                        @if ( empty($vigneron->reportage) && empty($vigneron->video) )
                                            Option lisibilité et détail de votre activité à 25 € par an.
                                        @elseif( !empty($vigneron->reportage) && empty($vigneron->video) )
                                            Option lisibilité, détail de votre activité + reportage à 40 € par an.
                                        @endif
                                    </td>
                                    <td>
                                        <div>
                                            <span class="input-group-btn-sm subOne">
                                                <button class="btn btn-secondary"
                                                        type="button" data-input="1">-</button>
                                            </span>
                                            <input type="text" id="input-1" style="border: none"
                                                   aria-label="qte" value="1" readonly>
                                            <span class="input-group-btn-sm addOne">
                                              <button class="btn btn-secondary" style="margin-left: -120px;"
                                                      type="button" data-input="1">+</button>
                                            </span>
                                        </div>
                                    </td>
                                    <td style="padding-top: 10px;">22.68 €</td>
                                    <td style="padding-top: 10px;">22.68 €</td>
                                    <td>
                                        <a href="#" class="btn btn-icon" style="font-size: 18px; margin-top: -7px">
                                            <i class="fa fa-trash text-red"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>

                            <tbody>
                                <tr>
                                    <td colspan="4" class="text-right "> Total HT</td>
                                    <td  colspan="2"id="totalht"><span>59.16</span> €</td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="text-right "> T.V.A </td>
                                    <td colspan="2" id="tax"><span>11.83</span> €</td>
                                </tr>
                                <tr style="font-weight: bold">
                                    <td colspan="4" class="text-right"> Total</td>
                                    <td  colspan="2" id="total"><span>70.99</span> €</td>
                                </tr>
                            </tbody>
                        </table>

                        {!! Form::model($vigneron, [
                              'method'    => 'PUT',
                              'route'     => ['admin.vignerons.annulation', $id]
                        ]) !!}
                        <div class="form-horizontal">
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <a href="{{ route ('admin.vignerons.panier', ['id' => $vigneron->user_id]) }}"
                                       type="button" class="btn btn-primary">Validez la commande</a>
                                    &nbsp;
                                    {!! Form::submit("Annulez l'opération", ['class' => 'btn btn-default']) !!}
                                </div>
                            </div>
                        </div>
                        {!! Form::close() !!}

                    </div>
                <!-- Fiche vidéo -->

                </div>
            </div>


            <div class="box-body">

            </div>

        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
</div>

@endsection