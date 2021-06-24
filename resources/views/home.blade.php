@extends('layouts.app')

@section('content')
<b-container fliud style="height: calc(100vh - 56xp); max-width: 2000px;">
    <b-row no-gutters>
        <b-col cols="4">
            <buscador-component></buscador-component>

            <b-list-group>
                <example-component variant="dark"></example-component>
                <example-component variant="dark"></example-component>

                <example-component variant="dark"></example-component>

                <example-component variant=""></example-component>

                <example-component variant="success"></example-component>

            </b-list-group>
        </b-col>
        <b-col cols="8">
            <conversacion-component></conversacion-component>
        </b-col>
    </b-row>
</b-container>

@endsection
