<!-- L'éditeur de texte TINYMCE -->
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

@extends('admin.layouts.backend.main')

@section('title', 'Compléter sa fiche')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Complétez votre fiche</h1>
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="box box-danger">
                <div class="box-header">
                    <div class="col-xs-8">
                        <h4>
                            <span style="color: #dd4b39; font-weight: 600">{{ $vigneron->societe }} | </span>
                            Vérifiez et modifier/complétez votre fiche et validez vos options.
                        </h4>
                        <p style="font-size: 12px; margin-top: -10px;">Les champs marqués d'une astérisque rouge
                            (<i class="fa fa-fw fa-asterisk text-red"></i>) sont optionnels.
                        </p>
                    </div>
                </div>
                <div class="box-body">

                <!-- Si le reportage est vide, on affiche formulairesivigeronvide -->
                @if(empty($vigneron->reportage))
                    @include('admin.vignerons.partials.formulairevigneronvide')
                @endif
                <!-- ../Si le reportage est vide, on affiche formulairesivigeronvide -->

                <!-- Si le reportage est plein, on affiche formulairesivigeronplein -->
                @if(!empty($vigneron->reportage))
                    @include('admin.vignerons.partials.formulairevigneronplein')
                @endif
                <!-- ../Si le reportage est plein, on affiche formulairesivigeronplein -->

                </div>

            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>

    @include('admin.vignerons.partials.scriptvigneron')

@endsection
