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

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('backend/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('backend/css/AdminLTE.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/custom.css') }}">
    <!-- AdminLTE Skins. Choose a skin from the css/skinsfolder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('backend/css/skins/_all-skins.css') }}">

</head>
<body>

    <!-- Le contenu -->
    @yield('content')
    <!-- Le contenu -->


</body>
</html>
