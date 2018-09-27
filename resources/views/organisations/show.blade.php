@extends('layouts.app')

@section('header')
  @component('_partials.dash-header')
  @endcomponent
@endsection

@section('content')
  <div class="container">
    <b2-organisation-form
      organisation-id="{{ $organisation->id }}">
    </b2-organisation-form>
  </div>
@endsection
