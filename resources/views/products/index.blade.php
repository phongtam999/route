@extends('master')
@section('content')
<table class="table table-hover">
  <thead>
    <h1> Danh sách </h1>
    <a class="btn btn-info" href="{{ route ('product.create') }}">Thêm</a>
  </thead>
  <tbody>
    <tr>
      <th>ID</th>
      <th>Tên</th>
      <th>Tuổi</th>
      <th>Tuỳ chỉnh</th>
    </tr>

    @foreach ($products as $key => $product)
    <tr>
      <th scope="row">{{ ++$key }}</th>
      <td>{{ $product->name }}</td>
      <td>{{ $product->age }}</td>
      <td>
        <form action="{{route('product.destroy',[$product->id])}}" method="post">
          @csrf
          @method('DELETE')
          <a href="{{ route ('product.edit', $product->id ) }}" class="btn btn-primary">Sửa</a>
          <button type="submit" class="btn btn-danger">Xoá</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection