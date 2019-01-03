@extends('auth.layouts.main')

@section('title', 'Connexion')

@section('content')
<div class="login-box">
    <div class="login-logo">
        <span style="font-weight: 700; color: #860043">Vineapolis</span>
        <span style="color: #a5ad44"> | connexion</span>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Veuillez renseigner vos email et mot de passe</p>

        <form method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
                <input type="email" class="form-control" placeholder="email" name="email" value="{{ old('email') }}" autofocus>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <input type="password" class="form-control" name="password" placeholder="mot de passe">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox" name="remember"> Se souvenir de moi
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block">Connexion</button>
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
        <!-- /.social-auth-links -->

    </div>
    <!-- /.login-box-body -->
</div>
@endsection