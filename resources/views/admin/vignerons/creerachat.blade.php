<!-- L'éditeur de texte TINYMCE -->
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>


@extends('admin.layouts.backend.main')

@section('title', 'Vigneron mise à jour')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Achat d'une option pour un vigneron</h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Accueil</a></li>
                <li><a href="{{ route('admin.all') }}"> Tous les vignerons</a></li>
                <li class="active">Achat d'une option pour un vigneron</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="box box-success">
                <div class="box-header">
                    <h4>Vignerons | <span style="color: #00a65a">Achat d'une option pour le vigneron : </span>{{ $vigneron->societe }}</h4>
                    <p style="font-size: 12px; margin-top: -5px;">
                        Pour l'otion 1 : {{ ucfirst($option1->name) }} à {{ number_format($option1->prix, 2, '.', ' ') }} € HT/an, 
                        complétez les champs activité du vigneron, date de création et durée de l'option et laissez les champs image du reportage, reportage et Youtube vierges.
                    </p>
                    <p style="font-size: 12px; margin-top: -5px;">
                        Pour l'otion 2 : {{ ucfirst($option2->name) }} à {{ number_format($option2->prix, 2, '.', ' ') }} € HT/an, 
                        complétez les champs fiche, date de création, durée de l'option, reportage et image du reportage et laissez le champ Youtube vierge.
                    </p>
                    <p style="font-size: 12px; margin-top: -5px;">
                        Pour l'otion 3 : Option lisibilité, détail de votre activité, reportage et <strong>Vidéo Youtube</strong>, 
                        dont le prix est fonction de l'éloignement du lieu de tournage, on coche vidéo et on envoie par mail un devis au vigneron.
                    </p>
                    <p style="font-size: 12px; margin-top: -5px;">(Les champs marqués d'une astérisque
                        <i class="fa fa-fw fa-asterisk text-red"></i>
                        sont obligatoires)
                    </p>
                </div>

                <div class="box-body">
                    @include('admin.vignerons.partialsadmin.achatvigneron')
                </div>

            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>

    @include('admin.vignerons.partials.script')

@endsection
