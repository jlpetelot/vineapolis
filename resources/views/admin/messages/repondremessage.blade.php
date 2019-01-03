@extends('admin.layouts.backend.main')

@section('title', 'Répondre à un message')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Répondre à un message</h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Accueil</a></li>
                <li><a href="{{ route('admin.messages') }}"> Messages</a></li>
                <li class="active">Répondre à un message</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="box box-primary">
                <div class="box-header">
                    <h4>
                        Messages | <i class="fa fa-fw fa-envelope-o"></i>
                        Répondre au message de <span style="color: #0073b7"> {{ $message->name }}</span>
                    </h4>
                    <p style="font-size: 12px; margin-top: -10px;">(Le champ de la réponse au message est obligatoire <i class="fa fa-fw fa-asterisk text-red"></i>)
                    </p>
                </div>

                <div class="box-body">

                    @include('admin.messages.partial.repondremessage')

                </div>
                <br/><br/>

                <!-- /.box-body -->
                <br/>
                <!-- /.box-footer-->
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>

@endsection