@extends('master')
@section('content')

<form action="{{route('product.store')}}" method="post">
  @csrf
  <div class="mb-3">
    <label  class="form-label">name</label>
    <input type="text" name="name" value="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label  class="form-label">age</label>
    <input type="number" name="age" value="" class="form-control" id="exampleInputPassword1">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection
