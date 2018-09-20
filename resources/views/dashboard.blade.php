@extends('layouts.app')

@section('header')
  <div class="product-header bg-app">
    <div class="container">
      <div class="col-md-8 m-auto">
        <div class="py-3 justify-between">
          <h3 class="mb-0 text-white">Education Inventory</h3>
          <el-button type="success" size="mini" plain href="">Return to product</el-button>
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
