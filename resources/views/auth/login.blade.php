@extends('layouts.app')

@section('content')
    <div class="ml-4 mr-4">
        <v-form method="POST" action="{{ route('login') }}">
            @csrf
            <v-row no-gutters>
                <v-col cols="12">
                    <div class="font-weight-bold pb-2 text-lightText">Correo eléctronico</div>
                    <v-text-field density="compact" variant="outlined" id="email" type="email"
                        class="@error('email') is-invalid @enderror" name="email">
                </v-col>
                @error('email')
                    <span class="text-fail" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <v-col cols="12">
                    <div class="font-weight-bold pb-2 text-lightText">Contraseña</div>
                    <v-text-field required  density="compact" variant="outlined" name="password" class="rounded-lg"
                        :append-inner-icon="show1 ? 'mdi-eye' : 'mdi-eye-off'" :type="show1 ? 'text' : 'password'"
                        @click:append-inner="show1 = !show1" variant="outlined">
                    </v-text-field>
                </v-col>
                <v-col cols="12">
                    <v-btn type="submit" class="bg-primary font-weitgh-bold" block size="large">
                        {{ __('Iniciar sesión') }}
                    </v-btn>
                </v-col>
                <br>
                <br>
                <br>
                <v-col cols="12">
                    @if (Route::has('password.request'))
                        <v-btn text class="mb-3 elevation-0 text-primary" block size="large"
                            href="{{ route('password.request') }}">
                            {{ __('¿Olvidaste tu contraseña?') }}
                        </v-btn>
                    @endif
                </v-col>
            </v-row>
        </v-form>
    </div>
@endsection
