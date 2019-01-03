@extends('admin.layouts.backend.main')

@if(Auth::user()->role === 'administrateur')
    @section('title', 'Administration')
@elseif(Auth::user()->role === 'annonceur')
    @section('title', 'Accueil annonceur')
@elseif(Auth::user()->role === 'vigneron')
    @section('title', 'Accueil Vigneron')
@elseif(Auth::user()->role === 'internaute')
    @section('title', 'Accueil internaute')
@endif

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Accueil</h1>
            @if(Auth::user()->role === "administrateur")
                <ol class="breadcrumb">
                    <li><i class="fa fa-dashboard"></i> Accueil</li>
                </ol>
            @endif
        </section>

        <section class="content"><!-- Content -->

            @if(Auth::user()->role === "administrateur")
                @include('admin.includes.administrateur')
            @endif

            @if(Auth::user()->role === "annonceur")
                @include('admin.includes.annonceur')
            @endif

            @if(Auth::user()->role === "vigneron")
                @include('admin.includes.vigneron')
            @endif

            @if(Auth::user()->role === "internaute")
                @include('admin.includes.internaute')
            @endif

        </section>

        <!-- /.content -->
    </div>

@endsection
