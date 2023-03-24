@extends('master')
@section('content')

<form action="{{route('product.update',[$product->id]) }}" method="POST">
@method('put')
@csrf
  <div class="mb-3">
    <label  class="form-label">name</label>
    <input type="text" value="{{ $product->name }}" name="name" class="form-control">
  </div>
  <div class="mb-3">
    <label  class="form-label">age</label>
    <input type="number"  value="{{ $product->age }}" name="age" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
