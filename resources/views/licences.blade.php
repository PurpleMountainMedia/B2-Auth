@extends('layouts.app')

@section('header')
  <div id="site_product_header" class="bg-app">
    <div class="container py-3">
        <div class="product_header justify-between">
          <img src="{{ getB2Config('logo') }}" class="site_logo" alt="B2 Systems">
          <h3 class="ml-2 mb-0 text-white site_product">Education Inventory Platform</h3>
        </div>
    </div>
  </div>
@endsection

@section('content')
    <div class="container">
      <a href="{{ $client->redirect_url }}" class="btn btn-primary">Setup DD</a>
    </div>
@endsection

@section('products')

  @component('_partials.site-products')
  @endcomponent

@endsection
