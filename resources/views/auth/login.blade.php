@extends('layouts.app')

@section('content')
    <v-card class="elevation-0 pa-3 mt-5 mx-auto rounded-lg" max-width="500px">
        <v-card-title class="flex-column d-flex justify-center align-center">
            <img src="/img/img3.png" class="logo mb-4" height="60">
        </v-card-title>
        <v-card-text>
            <v-form method="POST" action="{{ route('login') }}">
                @csrf
                <v-row>
                    <v-col cols="12">
                        <v-text-field label="Correo electronico" variant="outlined" id="email" type="email"
                            class="@error('email') is-invalid @enderror" name="email">
                    </v-col>
                    @error('email')
                        <span class="text-fail" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <v-col cols="12">
                        <v-text-field label="Contraseña" required variant="outlined" name="password" class="rounded-lg"
                            :append-inner-icon="show1 ? 'mdi-eye' : 'mdi-eye-off'" :type="show1 ? 'text' : 'password'"
                            @click:append-inner="show1 = !show1" variant="outlined">
                        </v-text-field>
                    </v-col>
                    <v-col cols="12">
                        <v-btn type="submit" class="bg-purple_primary font-weitgh-bold" block size="large">
                            {{ __('Iniciar sesión') }}
                        </v-btn>
                    </v-col>
                    <br>
                    <br>
                    <br>
                    <v-col cols="12">
                        @if (Route::has('password.request'))
                            <v-btn text class="mb-3 elevation-0 text-purple_primary" block size="large"
                                href="{{ route('password.request') }}">
                                {{ __('¿Olvidaste tu contraseña?') }}
                            </v-btn>
                        @endif
                    </v-col>
                </v-row>
            </v-form>
        </v-card-text>
    </v-card>
@endsection
