@extends('layouts.app')

@section('header')
  @component('_partials.dash-header')
  @endcomponent
@endsection

@section('content')
    <div class="container">
<<<<<<< HEAD
      <a href="{{ $client->redirect_url }}" class="btn btn-primary">{{__('app.label-license-setup')}}</a>
=======
      {{-- <a href="{{ $client->redirect_url }}" class="btn btn-primary">Setup DD</a> --}}

      <b2-list-licences>
      </b2-list-licences>

>>>>>>> a90c655988fa5136324a0870e8b83e468044ff94
    </div>
@endsection

@section('products')

  @component('_partials.site-products')
  @endcomponent

@endsection
