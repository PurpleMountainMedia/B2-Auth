@extends('layouts.app')

@section('content')
    <div class="container">
        <b2-user-form :user='@json($user)' dusk="user-form-component"/>

        <authorized-clients></authorized-clients>
        <clients></clients>
        <personal-access-tokens></personal-access-tokens>
    </div>
    <p class="mt-5">User ID: <strong>{{ $user->id }}</strong></p>
@endsection
