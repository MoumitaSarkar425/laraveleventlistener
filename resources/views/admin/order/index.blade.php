@extends('admin.layouts.master')
@section('content')

<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
  <div class="row">
    <div class="col-12 d-flex no-block align-items-center">
      <h4 class="page-title">Order List</h4>
      <div class="ms-auto text-end">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">
              Order
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
  <!-- ============================================================== -->
  <!-- Start Page Content -->
  <!-- ============================================================== -->
  <div class="row">
    <div class="col-12">
      <div class="card">
        <form class="form-horizontal">
          <div class="card-body">
            <h4 class="card-title">Order List</h4>
            <table class="table table-striped table-bordered">
              <thead>
                  <tr>
                      <td>ID</td>
                      <td>Customer name</td>
                      <td>Email</td>
                      <td>Order ID</td>
                      <td>Product name</td>
                      <td>Subtotal</td>
                      <td>Order Status</td>
                      <td>Actions</td>
                  </tr>
              </thead>
              <tbody>
              @foreach($orders as $key => $value)
                <tr>
                      <td>{{ $value->id }}</td>
                      <td>{{ $value->customerName }}</td>
                      <td>{{ $value->customerEmail }}</td>
                      <td>{{ $value->orderId }}</td>
                      <td>{{ $value->productID }}</td>
                      <td>{{ $value->total }}</td>
                      @if($value->orderStatus == 1)
                      <td>Complete</td>
                      @else
                      <td>Pending</td>
                      @endif
                    <td>
                      <a class="btn btn-small btn-info" href="{{ URL::to('order/edit/'. $value->id ) }}">Update Order</a>
                    </td>
                </tr>
                @endforeach
              </tbody>
          </table>
        </form>
      </div>
    </div>
  </div>
  <!-- editor -->
 
  <!-- ============================================================== -->
  <!-- End PAge Content -->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
  <!-- Right sidebar -->
  <!-- ============================================================== -->
  <!-- .right-sidebar -->
  <!-- ============================================================== -->
  <!-- End Right sidebar -->
  <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
@endsection