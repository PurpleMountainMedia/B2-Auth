@extends('layouts.app')

@section('header')
  <div id="site_product_header" class="bg-app">
    <div class="container">
      <div class="col-md-8 m-auto">
        <div class="py-3 justify-between">
          <div class="product_header">
            <img src="{{ getB2Config('logo') }}" class="site_logo" alt="B2 Systems">
            <h3 class="ml-2 mb-0 text-white site_product">Education Inventory</h3>
          </div>

          <el-button type="primary" size="mini" href="">Return to product</el-button>
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
