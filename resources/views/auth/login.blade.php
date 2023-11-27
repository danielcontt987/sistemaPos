@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <v-btn type="submit" class="bg-primary">
                                    {{ __('Login') }}
                                </v-btn>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<v-card class="elevation-0 pa-3 mt-5 mx-auto rounded-lg" max-width="500px">
    <v-card-title class="flex-column d-flex justify-center align-center">
        <img src="/img/img3.png" class="logo mb-4" height="60">
    </v-card-title>
    <v-card-text>
        <v-form method="POST" action="{{ route('login') }}">
            @csrf
            <v-row>
                <v-col cols="12">
                    <v-text-field variant="outlined" id="email" type="email" class="@error('email') is-invalid @enderror" name="email">
                </v-col>
                @error('email')
                    <span class="text-fail" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <v-col cols="12">
                    <v-text-field required variant="outlined" name="password" class="rounded-lg"
                        :append-inner-icon="show1 ? 'mdi-eye' : 'mdi-eye-off'"
                        :type="show1 ? 'text' : 'password'" @click:append-inner="show1 = !show1" variant="outlined">
                    </v-text-field>
                </v-col>
                <v-col cols="12">
                    <v-btn type="submit" class="bg-purple_primary font-weitgh-bold" block  size="large">
                        {{ __('Iniciar sesión') }}
                    </v-btn>
                </v-col>
                <br>
                <br>
                <br>
                <v-col cols="12">
                    @if (Route::has('password.request'))
                    <v-btn text class="mb-3 elevation-0 text-purple_primary" block size="large" href="{{ route('password.request') }}">
                        {{ __('¿Olvidaste tu contraseña?') }}
                    </v-btn>
                @endif
                        
                </v-col>
            </v-row>
        </v-form>
    </v-card-text>
</v-card>
@endsection
