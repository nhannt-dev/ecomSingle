@extends('admin.layouts.template')
@section('page_title')
    All Products - Single Ecom
@endsection
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Page/</span> 
        All Products
    </h4>
    @if (session()-> has('message'))
      <div class="alert alert-success">
        {{ session()->get('message') }}
      </div>
    @endif
    <div class="card">
      <h5 class="card-header">Products Information</h5>
      <div class="table-responsive text-nowrap">
        <table class="table">
          <thead class="table-light">
            <tr>
              <th>Id</th>
              <th>Product Name</th>
              <th>Image</th>
              <th>Price</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
          @foreach ($products as $product)
            <tr>
              <td>{{ $product->id }}</td>
              <td>{{ $product->product_name }}</td>
              <td>
                <a href="{{ route('editproductimg', $product->id) }}">
                  <img style="height: 100px;" src="{{ asset($product->product_img) }}" alt="{{ $product->product_name }}">
                </a>
              </td>
              <td>{{ $product->price }}</td>
              <td>
                  <a href="{{ route('editproduct', $product->id) }}" class="btn btn-warning">Edit</a>
                  <a href="{{ route('deleteproduct', $product->id) }}" class="btn btn-danger">Delete</a>
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>
</div>
@endsection