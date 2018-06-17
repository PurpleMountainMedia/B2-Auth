@extends('layouts.app')

@section('content')
    <div class="container">
        <b2-organisations-form :organisations='@json($user->organisations)' />
    </div>
@endsection
