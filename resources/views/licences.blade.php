@extends('layouts.app')

@section('header')
  @component('_partials.dash-header')
  @endcomponent
@endsection

@section('content')
    <div class="container">
      <a href="{{ $client->redirect_url }}" class="btn btn-primary">{{__('app.label-license-setup')}}</a>
    </div>
@endsection

@section('products')

  @component('_partials.site-products')
  @endcomponent

@endsection
