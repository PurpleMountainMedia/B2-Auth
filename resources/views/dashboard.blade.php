@extends('layouts.app')

@section('header')
  @component('_partials.dash-header')
  @endcomponent
@endsection

@section('content')
  <div class="container">
      <b2-user-form :user='@json($user)' dusk="user-form-component"/>

      <authorized-clients></authorized-clients>
      <clients></clients>
      <personal-access-tokens></personal-access-tokens>
  </div>
  <p class="mt-5">{{__('app.label-userid')}}: <strong>{{ $user->id }}</strong></p>
@endsection

@section('products')
  @component('_partials.site-products')
  @endcomponent
@endsection
