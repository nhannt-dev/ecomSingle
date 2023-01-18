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
            <tr>
              <td>1</td>
              <td>Samsung Galaxy A13</td>
              <td></td>
              <td>100</td>
              <td>
                  <a href="" class="btn btn-warning">Edit</a>
                  <a href="" class="btn btn-danger">Delete</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
</div>
@endsection