@extends('layouts.app')

@section('content')
<div class="container limiter">
    <div class="row justify-content-center container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                    <img src="{{ asset('iniciologin/images/hotelLog1.jpg')}}" class="rounded-4" alt="IMG">
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header login100-form-title" aria-hidden="true">{{ __('Inicio de Sesión') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
							<label for="email" class="col-md-4 col-form-label text-md-end"><i class="fa fa-envelope"></i>{{ __(' Correo Electronico') }}</label>

                                <div class="col-md-6 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                                    <input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end "><i class="fa fa-lock"></i>{{ __(' Contraseña') }}</label>

                                <div class="col-md-6 validate-input" data-validate="Password is required">
                                    <input id="password" type="password" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    
                                    @error('Contraseña')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check btn-posicion">
                                         <input class="form-check-input colors" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                         <label class="form-check-label" for="remember">
                                            {{ __('Recuérdame') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="btn-posicion">
                                        <button type="submit" class="login100-form-btn">
                                        {{ __('Iniciar Sesión') }}
                                        </button>
                                    
                                        @if (Route::has('password.request'))
                                            <span class="txt1">Recuperar contraseña</span>
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __(' ¿Olvidaste tu contraseña?') }}
                                                </a>
                                            
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>    
    </div>
</div> 
@endsection
  