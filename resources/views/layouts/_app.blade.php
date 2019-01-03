<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- csrf token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ env('app_name', 'Vineapolis') }}</title>

    <!-- styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    @yield('styles')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ env('APP_NAME', 'Vineapolis') }}
                    </a>
                </div>
            </div>
        </nav>


            <div class="container">
                <ais-index app-id="{{ config('scout.algolia.id') }}"
                           api-key="{{ env('ALGOLIA_SEARCH') }}"
                           index-name="vignerons">
                <h1>Recherche de vignerons</h1>
                <ais-input placeholder="Recherche de vignerons" class="form-control input-lg"></ais-input>

                <hr/>
                <ais-results>

                    <template scope="{result}">
                        
                        <div class="row">
                            <div class="col-md-8">
                                <p>
                                    @{{ result.societe }}
                                </p>
                            </div>
                        </div>
                    </template>

                </ais-results>



                </ais-index>

            </div>

    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>
