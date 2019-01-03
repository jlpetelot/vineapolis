@extends('admin.layouts.backend.main')

@section('title', 'Compléter sa fiche')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Gestion du profil de
                @if(Auth::user()->role === 'administrateur')
                    <span style="color: #0073b7">
                @elseif(Auth::user()->role === 'annonceur')
                     <span style="color: #f39c12 ">
                @elseif(Auth::user()->role === 'vigneron')
                     <span style="color: #dd4b39 ">
                @elseif(Auth::user()->role === 'internaute')
                     <span style="color: #00a65a ">
                @endif
                {{ Auth::user()->name }}</h1></span>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- administrateur -->
            @if(Auth::user()->role === 'administrateur')
                @include('admin.users.partials.profil')
            @endif
            <!-- ../administrateur -->

            <!-- annonceur -->
            @if(Auth::user()->role === 'annonceur')
               @include('admin.users.partials.profil')
            @endif
            <!-- ../annonceur -->

            <!-- vigneron -->
            @if(Auth::user()->role === 'vigneron')
               @include('admin.users.partials.profil')
            @endif
            <!-- ../vigneron -->

            <!-- internaute -->
            @if(Auth::user()->role === 'internaute')
               @include('admin.users.partials.profil')
            @endif
            <!-- ../internaute -->

        </section>
        <!-- /.content -->
    </div>

@endsection