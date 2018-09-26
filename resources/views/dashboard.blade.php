@extends('layouts.app')

@section('header')
  <div id="site_product_header" class="bg-app">
    <div class="container py-3">
      <div class="row">
        <div class="col-lg-8 col-12 mx-auto">
          <div class="product_header justify-between">
            <img src="{{ getB2Config('logo') }}" class="site_logo" alt="B2 Systems">
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('content')
  <div class="container">
      <b2-user-form :user='@json($user)' dusk="user-form-component"/>

      <authorized-clients></authorized-clients>
      <clients></clients>
      <personal-access-tokens></personal-access-tokens>
  </div>
  <p class="mt-5">User ID: <strong>{{ $user->id }}</strong></p>
@endsection

@section('products')
  @component('_partials.site-products')
  @endcomponent
@endsection
