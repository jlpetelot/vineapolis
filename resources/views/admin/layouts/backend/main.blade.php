<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @if (Auth::user()->role === "administrateur")
    <title>Vineapolis | Administration</title>
    @elseif (Auth::user()->role === "vigneron")
        <title>Vineapolis | Vigneron</title>
    @elseif (Auth::user()->role === "annonceur")
        <title>Vineapolis | Annonceur</title>
    @elseif (Auth::user()->role === "internaute")
        <title>Vineapolis | Internaute</title>
    @endif

    <!-- Le favicon -->
    @if (Auth::user()->role === "administrateur")
        <link rel="icon" href="{{ asset('img/faviconbleu.ico') }}">
    @endif
    @if (Auth::user()->role === "annonceur")
        <link rel="icon" href="{{ asset('img/faviconjaune.ico') }}">
    @endif
    @if (Auth::user()->role === "vigneron")
        <link rel="icon" href="{{ asset('img/faviconrouge.ico') }}">
    @endif
    @if (Auth::user()->role === "internaute")
        <link rel="icon" href="{{ asset('img/faviconvert.ico') }}">
    @endif
    <!-- ../Le favicon -->

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('backend/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('backend/bower_components/font-awesome/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('backend/bower_components/Ionicons/css/ionicons.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('backend/css/AdminLTE.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/custom.css') }}">
    <!-- AdminLTE Skins. Choose a skin from the css/skinsfolder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('backend/css/skins/_all-skins.css') }}">

    <!-- Les différents skins suivant les logs -->
    @if(Auth::user()->role === "vigneron")
        <link rel="stylesheet" href="{{ asset('backend/css/customvigneron.css') }}">
    @endif
    @if(Auth::user()->role === "annonceur")
        <link rel="stylesheet" href="{{ asset('backend/css/customannonceur.css') }}">
    @endif
    @if(Auth::user()->role === "internaute")
        <link rel="stylesheet" href="{{ asset('backend/css/custominternaute.css') }}">
    @endif

    <!-- Morris chart -->
    <link rel="stylesheet" href="{{ asset('backend/bower_components/morris.js/morris.css') }}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{ asset('backend/bower_components/jvectormap/jquery-jvectormap.css') }}">

    <!-- Date Picker -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/datepicker/css/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/plugins/datepicker/js/bootstrap-datepicker.js') }}">
    <link rel="stylesheet" href="{{ asset('backend/plugins/datepicker/locales/bootstrap-datepicker.fr-CH.min.js') }}">

    <!-- Moment JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment-with-locales.min.js"></script>

    <!-- Jasny Bootstrap -->
    <script src="{{ asset('backend/plugins/jasny-bootstrap/css/jasny-bootstrap.css') }}"></script>

    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('backend/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">

    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <!-- Editeur de texte TinyMCE -->
    {{--@include('admin.layouts.backend.partials.script')--}}
    <!-- Editeur de texte TinyMCE -->

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <!-- La navigation -->
    @include('admin.layouts.backend.navbar')
    <!-- ../La navigation -->

    <!-- La sidebar -->
    @include('admin.layouts.backend.sidebar')
    <!-- ../La sidebar -->

    <!-- Le contenu -->
    @yield('content')
    <!-- Le contenu -->

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; 2018
            <a href="https://www.madinici.org" target="_blank">
                Madinici.org
            </a></strong> Tous droits réservés.
    </footer>

    <!-- La dark sidebar -->
    {{--@include('layouts.backend.darksidebar')--}}
    <!-- ../La dark sidebar -->

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{ asset('backend/bower_components/jquery/dist/jquery.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('backend/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('backend/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- Morris.js charts -->
<script src="{{ asset('backend/bower_components/raphael/raphael.js') }}"></script>
<script src="{{ asset('backend/bower_components/morris.js/morris.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('backend/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap -->
<script src="{{ asset('backend/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('backend/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('backend/bower_components/jquery-knob/dist/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('backend/bower_components/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('backend/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<!-- datepicker -->
<script src="{{ asset('backend/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<!-- Slimscroll -->
<script src="{{ asset('backend/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('backend/bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('backend/js/adminlte.min.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('backend/js/pages/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('backend/js/demo.js') }}"></script>
<!-- Jasny Bootstrap -->
<script src="{{ asset('backend/plugins/jasny-bootstrap/js/jasny-bootstrap.js') }}"></script>

<script src="{{ asset('backend/plugins/iCheck/icheck.min.js') }}"></script>

<script src="{{ asset('backend/js/chart.min.js') }}"></script>

<!-- ChartJS -->
<script src=//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js charset=utf-8></script>
<script src="{{ asset('backend/js/script.js') }}"></script>


</body>
</html>
