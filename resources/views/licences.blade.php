@extends('layouts.app')

@section('header')
  @component('_partials.dash-header')
  @endcomponent
@endsection

@section('content')
    <div class="container">
      {{-- <a href="{{ $client->redirect_url }}" class="btn btn-primary">Setup DD</a> --}}

      <b2-list-licences>
      </b2-list-licences>

    </div>
@endsection

@section('products')

  @component('_partials.site-products')
  @endcomponent

@endsection
