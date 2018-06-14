@extends('layouts.app')

@section('content')
    <div class="container">
        <b2-organisations-form :organisations='@json(Auth::User()->organisations)' />
    </div>
@endsection
