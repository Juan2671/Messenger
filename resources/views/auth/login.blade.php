@extends('layouts.app')

@section('content')
    <b-container>
        <b-row>
            <b-col></b-col>
            <b-col cols="8">
                <b-card header="Inicio de Sesion" header-tag="header">
                    <b-form method="POST" action="{{ route('login') }}">
                        @csrf
                        <b-form-group label="Correo" label-for="email">
                            <b-form-input id="email" class="@error('email') ? is-invalid @enderror"
                                type="email" name="email" value="{{ old('email') }}" autofocus {{-- v-model="email" --}}
                                placeholder="Ingresa tu correo"></b-form-input>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </b-form-group>

                        <b-form-group label="Contraseña" label-for="password">
                            <b-form-input class="@error('password') is-invalid @enderror" id="password" type="password"
                                name="password" value="{{ old('password') }}" autofocus
                                {{-- v-model="form.password" --}} placeholder="Ingresa tu correo"></b-form-input>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </b-form-group>

                        @if (Route::has('password.request'))
                        <b-button type="reset" href="{{ route('password.request') }}" variant="link">Olvide mi
                            contraseña?
                        </b-button>
                        @endif

                        <div class="text-center">
                            <b-button pill type="submit" variant="primary" class="col-12">Iniciar</b-button>
                        </div>
                    </b-form>
                </b-card>
            </b-col>
            <b-col></b-col>
        </b-row>
    </b-container>
@endsection
