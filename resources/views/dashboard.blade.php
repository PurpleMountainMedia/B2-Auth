@extends('layouts.app')

@section('content')
    <div class="container">
        <b2-user-form :user='@json(Auth::User())' />
    </div>
@endsection
