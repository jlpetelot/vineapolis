@extends('auth.layouts.main')

@section('title', 'Inscription')

@section('content')
<div class="register-box">
    <div class="register-logo">
        <span style="font-weight: 700; color: #860043">Vignerons</span>
        <span style="color: #a5ad44"> | inscription</span>
    </div>

    <div class="register-box-body">
        <p class="login-box-msg">Veuillez renseigner les champs ci-dessous</p>

        <form action="{{ route('registervigneronpost') }}" method="post">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} has-feedback">
                <input id="name" type="text" class="form-control" placeholder="prénom nom"
                       name="name" value="{{ old('name') }}" required autofocus>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
                <input type="email" class="form-control" placeholder="email"
                       name="email" value="{{ old('email') }}" required>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
                <input type="password" class="form-control" placeholder="mot de passe"
                       name="password" required>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="confirmation du mot de passe"
                       name="password_confirmation" required>
                <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
            </div>

            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox"><a href="#"> Se souvenir de moi </a>
                        </label>
                    </div>
                </div>

                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary">S'inscrire</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <div class="social-auth-links text-center">
            <p>- ou -</p>
            <a href="#" class="btn btn-block btn-social btn-twitter">
                <i class="fa fa-twitter"></i>
                Se connecter avec Twitter</a>
            <a href="#" class="btn btn-block btn-social btn-google"><i class="fa fa-google-plus"></i>
                Se connecter avec Google+
            </a>
        </div>

        <a href="{{ route('loginvigneron') }}" class="text-center">Je suis déjà inscrit</a>
    </div>
    <!-- /.form-box -->
</div>
<!-- /.register-box -->
@endsection