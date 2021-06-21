@extends('layouts.app')

@section('content')
<b-container fliud>
    <b-row>
        <b-col cols="4">
            <b-form-input {{-- v-model="text" --}} type="text" placeholder="Buscar contacto..."></b-form-input>
        </b-col>
        <b-col cols="8"></b-col>
    </b-row>
</b-container>
@endsection
