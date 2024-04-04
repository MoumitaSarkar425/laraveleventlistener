@extends('admin.layouts.master')
@section('content')

<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
  <div class="row">
    <div class="col-12 d-flex no-block align-items-center">
      <h4 class="page-title">Order Update</h4>
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
        <form class="form-horizontal" action="" method="post">
          {{ csrf_field() }}
          <div class="card-body">
            <h4 class="card-title">Order Update</h4>
            <div class="form-group row">
              <label
                for="fname"
                class="col-sm-3 text-end control-label col-form-label"
                >Order Id</label
              >
              <div class="col-sm-9">
                <input
                  type="test"
                  class="form-control"
                  name="orderId"
                  value="{{$order->orderId}}"
                  required
                  placeholder=""
                  readonly
                />
              </div>
            </div>
            <div class="form-group row">
              <label
                class="col-sm-3 text-end control-label col-form-label"
                >Order Status</label		
              >
              <div class="col-sm-9">
               
                <Select 
                  class="form-control"
                  name="orderStatus"
                  required
                  placeholder="Product Title">
                  <option value="0" {{ $order->orderStatus == 0 ?'selected':''}}>Pending</option>
                  <option value="1" {{ $order->orderStatus == 1 ?'selected':''}}>Complete</option>
                </Select>
              </div>
            </div>
            
            
          </div>
          <div class="border-top">
            <div class="card-body">
              <button type="submit" class="btn btn-primary">
                Update Order
              </button>
            </div>
          </div>
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