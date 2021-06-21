@extends('layouts.app')

@section('content')
<b-container>
    <b-row>
        <b-col></b-col>
        <b-col cols="8">
            <b-card header="Inicio de Sesion" header-tag="header">
                <b-form method="POST" action="{{ route('register') }}">
                    @csrf
                    <b-form-group label="Nombre" label-for="name">

                        <b-form-input id="name" class="@error('name') is-invalid @enderror" type="text" name="name"
                            value="{{ old('name') }}" {{-- v-model="email" --}} placeholder="Nombre y Apellido"
                            autocomplete="name" autofocus>
                        </b-form-input>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </b-form-group>

                    <b-form-group label="Correo" label-for="email">
                        <b-form-input class="@error('email') is-invalid @enderror" id="email" type="email" name="email"
                            value="{{ old('email') }}" {{-- v-model="form.password" --}} placeholder="Ingresa tu correo"
                            autocomplete="email" autofocus>
                        </b-form-input>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </b-form-group>

                    <b-row>
                        <b-col cols="6">
                            <b-form-group label="Contraseña" label-for="password">
                                <b-form-input class="@error('password') is-invalid @enderror" id="password"
                                    type="password" name="password"
                                    {{-- v-model="form.password" --}} placeholder="Ingresa tu correo"
                                    autocomplete="password"></b-form-input>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </b-form-group>
                        </b-col>
                        <b-col cols="6">
                            <b-form-group label="Confirmar Contraseña" label-for="password">
                                <b-form-input id="password-confirm" type="password" name="password_confirmation"
                                    autocomplete="new-password" {{-- v-model="" --}} placeholder="Confirmar Contraseña">
                                </b-form-input>
                            </b-form-group>
                        </b-col>
                    </b-row>
                    <div class="text-center">
                        <b-button pill type="submit" variant="primary" class="col-12">Registrar</b-button>
                    </div>
                </b-form>
            </b-card>
        </b-col>
        <b-col></b-col>
    </b-row>
</b-container>
@endsection
