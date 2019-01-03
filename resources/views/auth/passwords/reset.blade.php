@extends('auth.layouts.main')

@section('title', 'Réinitialisation')

@section('content')
    <div class="login-box">
        <div class="login-logo">
            <span style="font-weight: 700; color: #860043">Vineapolis</span>
            <span style="color: #a5ad44"> | réinitialisation</span>
        </div>

        <div class="register-box-body">
            <p class="login-box-msg">Veuillez renseigner les champs ci-dessous</p>

            <form method="POST" action="{{ route('password.request') }}">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" name="password_confirmation" required>

                        @if ($errors->has('password_confirmation'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Reset Password') }}
                        </button>
                    </div>
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

            <a href="{{ route('login') }}" class="text-center">Je suis déjà inscrit</a>
        </div>
        <!-- /.form-box -->
    </div>
    <!-- /.register-box -->
@endsection