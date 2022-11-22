<div class="card-header login100-form-title" aria-hidden="true">{{ __('Registro') }}</div>

<div class="card-body">
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="row mb-3">
            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nombre')
                }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="input100 @error('name') is-invalid @enderror" name="name"
                    value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo
                Electronico') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="password" class="col-md-4 col-form-label text-md-end">{{
                __('Contraseña') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="input100 @error('password') is-invalid @enderror"
                    name="password" required autocomplete="new-password">
                <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                @error('Contraseña')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{
                __('Confirmación Contraseña') }}</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="input100" name="password_confirmation" required
                    autocomplete="new-password">
            </div>
        </div>
        <div class="row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="login100-form-btn">
                    {{ __('Registrar') }}
                </button>
            </div>
        </div>
    </form>
</div>