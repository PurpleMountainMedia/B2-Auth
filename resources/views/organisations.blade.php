@extends('layouts.app')

@section('header')
  @component('_partials.dash-header')
  @endcomponent
@endsection

@section('content')
    <div class="container">
        <b2-organisations-form :organisations='@json($user->organisations)' />
    </div>
@endsection

@section('products')

  @component('_partials.site-products')
  @endcomponent

@endsection
