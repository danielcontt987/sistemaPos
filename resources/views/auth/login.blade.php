@extends('layouts.app')

@section('content')
    <div class="ml-4 mr-4">
        <v-form method="POST" action="{{ route('login') }}">
            @csrf
            {{-- <v-row no-gutters>
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
            </v-row> --}}

            <v-card class="elevation-0 pa-3 mt-5 mx-auto rounded-lg" style="background-color: #f6fbff" max-width="500px">
                <v-card-title class="flex-column d-flex justify-center align-center">
                    <img src="img/logo.png" class="logo mb-4" width="200" alt="" />
                    <h2 class="text-center text-wine font-weight-bold">Bienvenido de nuevo</h2>
                    <p style="font-size:15px; font-weight: normal">Ingresa tus datos para acceder a nuestra plataforma</p>
                </v-card-title>

                <v-card-text>
                    {{-- <v-text-field rounded="0" variant="outlined" label="Correo electrónico" id="email" type="email"
              class="@error('email') is-invalid @enderror" name="email" />
              <v-text-field
                rounded="0"
                variant="outlined"
                label="Contraseña"
                type="password"
              ></v-text-field> --}}

                    <v-text-field label="Correo electrónico" rounded="0" variant="outlined" id="email" type="email"
                        class="@error('email') is-invalid @enderror" name="email" >
                    </v-text-field>
                        @error('email')
                            <span class="text-fail" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <v-text-field required rounded="0" label="Contraseña" variant="outlined" name="password"
                            class="rounded-lg" :append-inner-icon="show1 ? 'mdi-eye' : 'mdi-eye-off'"
                            :type="show1 ? 'text' : 'password'" @click:append-inner="show1 = !show1" variant="outlined">
                        </v-text-field>

                        <v-row>
                            <v-col cols="12" class="flex-column d-flex justify-center align-center">
                                {{-- <v-btn type="submit" color="wine" class="mb-3 elevation-0" block rounded="0" large>
                                    Iniciar Sesión
                                </v-btn> --}}
                                <v-btn type="submit" color="wine" class="bg-primary font-weitgh-bold elevation-0"  block rounded="0" large>
                                    {{ __('Iniciar sesión') }}
                                </v-btn>
                            </v-col>
                            <v-col cols="12">
                                <hr style="3px solid #000;" />
                            </v-col>
                            <v-col cols="12" class="text-center">
                                <a href="#" class="text-black">
                                    ¿Olvidaste tu contraseña?
                                </a>
                            </v-col>
                            <v-col cols="12" class="text-center">
                                <span class="text-black">
                                    ¿Aún no tienes cuenta? <a href="#" class="text-black"> ¿Olvidaste tu
                                        contraseña?</a>
                                </span>
                            </v-col>
                        </v-row>
                </v-card-text>
            </v-card>
        </v-form>
    </div>
@endsection
