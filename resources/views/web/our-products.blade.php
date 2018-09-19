@extends('layouts.full')

@section('content')
  <div class="container-fluid h-100 text-center ">
    <div class="row h-100">
      <div class="col-md-4 bg-eams h-100 py-5 screen_full_height d-flex align-items-center">
        <div class="w-100">
          <h1 class="text-dark">Inventory</h1>
          <a class="btn btn-dark" href="{{ route('inventory') }}">Find Out More</a>
        </div>
      </div>
      <div class="col-md-4 bg-finance h-100 py-5 screen_full_height d-flex align-items-center">
        <div class="w-100">
          <h1 class="text-dark">Finance <span class="badge badge-danger">Coming Soon!</span></h1>
          <button disabled class="btn btn-dark" href="#">Find Out More</button>
        </div>
      </div>
      <div class="col-md-4 bg-people h-100 py-5 screen_full_height d-flex align-items-center">
        <div class="w-100">
          <h1 class="text-dark">People <span class="badge badge-danger">Coming Soon!</span></h1>
          <button disabled class="btn btn-dark" href="#">Find Out More</button>
        </div>
      </div>
    </div>
  </div>
@endsection
