@extends('admin.layouts.backend.main')

@section('title', 'Profil')

@section('content')

<!-- Contenu -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Profil de {{ Auth::user()->name }}
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Accueil</a></li>
            <li><a href="{{ route('admin.profil', [Auth::user()->id]) }}"><i class="fa fa-dashboard"></i> Profil</a></li>
            <li class="active">{{ Auth::user()->name }}</li>
        </ol>
    </section>

    @if (!empty($profil))
    {!! $profil->contenu !!}
    @else
    Il n'existe pas de profil pour ce Monsieur
    @endif

</div>
@endsection
