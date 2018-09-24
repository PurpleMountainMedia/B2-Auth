@extends('layouts.auth')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <b2-create-organisation-form create-organisation-route="{{ route('organisations.store') }}"
                                   :hide-default-organisation="{{ (Auth::user()->organisations->count() < 1) ? 'true' : 'false' }}">
      </b2-create-organisation-form>
    </div>
  </div>
</div>
@endsection
