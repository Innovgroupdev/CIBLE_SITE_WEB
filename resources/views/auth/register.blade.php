@extends('layouts.auth')

@section('content')
    <!-- ============================================================= Content Start ============================================================= -->
    <div class="limiter">
        <div class="container-login100" style="background-image: url('{!! asset(Setting()->HomePicture) !!}');">
            <div class="wrap-login100">
                <!-- ========================== Content form =============================== -->
                <form method="POST" action="{{ route('register') }}" class="login100-form">
                    @csrf
                    <span class="login100-form-logo">

                        <a class="zmdi zmdi-landscape" href="{!! url('/') !!}"><img
                                src="{{ asset(Setting()->LogoPicture) }}" style="border-radius: 50%;" alt="logo-image" height="96px" width="96px"></a>
                    </span>

                    <span class="login100-form-title p-b-34 p-t-27">
                        Portail d'inscription
                    </span>

                    <div class="wrap-input100">
                        <input id="name" type="text" class="input100{{ $errors->has('name') ? ' is-invalid' : '' }}"
                            name="name" value="{{ old('name') }}" required autofocus placeholder="Pseudo">
                        <span class="focus-input100"></span>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>


                    <div class="wrap-input100 validate-input" data-validate="Adresse email">
                        <input id="email" type="email" class="input100{{ $errors->has('email') ? ' is-invalid' : '' }}"
                            name="email" value="{{ old('email') }}" required placeholder="Adresse email">
                        <span class="focus-input100"></span>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Mot de passe">
                        <input id="password" type="password"
                            class="input100{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required
                            placeholder="Mot de passe">
                        <span class="focus-input100"></span>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password">
                        <input id="password-confirm" type="password" name="Confirmer le mot de passe" required
                            placeholder="Confirmer le mot de passe" class="input100">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit">
                            S'inscrire
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <!-- ============================================================= Content Start ============================================================= -->
@endsection
