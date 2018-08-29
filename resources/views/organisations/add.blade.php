@extends('layouts.auth')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <b2-create-organisation-form create-organisation-route="{{ route('organisations.store') }}">
      </b2-create-organisation-form>
    </div>
  </div>
</div>
@endsection
