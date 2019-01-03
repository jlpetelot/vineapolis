<div class="content-wrapper">
    <!-- Content Header (Page header) -->

        <section class="content-header">
            <h1>Gestionnaires d'images</h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Accueil</a></li>
                <li class="active">Gestionnaires d'images</li>
            </ol>
        </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Téléversez ici vos images</h3>
            </div>
            <div class="box-body">
                <textarea name="content" class="form-control my-editor" style="width: 20%;">
                    Cliquez sur l'icône ci-dessus, une popup s'ouvrira pour vous permettre de gérer et téléverser vos images.
                </textarea>
            </div>

            <style>
                .mce-ico.mce-i-image {
                    color: #0073b7;
                    font-size: 24px;
                }
            </style>
            <!-- /.box-body -->
            <!-- /.box-footer-->
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
</div>