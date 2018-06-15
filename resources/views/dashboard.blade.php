@extends('layouts.app')

@section('content')
    <div class="container">
        <b2-user-form :user='@json($user)' />
    </div>
    <p class="mt-5">User ID: <strong>{{ $user->id }}</strong></p>
@endsection
