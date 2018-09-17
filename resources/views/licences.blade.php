@extends('layouts.app')

@section('content')
    <div class="container">
      <a href="{{ $client->redirect_url }}" class="btn btn-primary">Setup DD</a>
    </div>
@endsection
