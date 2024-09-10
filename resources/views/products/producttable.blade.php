
@extends('body.user_dashboard')
@section('admin')



<div class="page-content">

<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Advanced </a></li>
    <li class="breadcrumb-item active" aria-current="page">Products</li>
  </ol>
</nav>


<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title mb-3">All My Store Products</h6>
        <div class="d-flex gap- flex-wrap" id="grid-example">
          @foreach ($products as $product)

          <div class="w-25 rounded bg-secondary  d-flex align-items-center justify-content-center">

            <div class="card" style="width: 400px">
              <div class="item ">
                <img src="/images/{{$product->image}}" width="100%" height="200px">           
                
              </div>
              <div class="card-body">
                <p class="card-text">Name: {{ $product->name }}</p>
                <p class="card-text">Price: {{ $product->Sellingprice }} frs</p>
                <p class="card-text">Qty available: {{ $product->qtyavailable }} pieces</p>
                <p class="card-text">Description: {{ $product->detail }}</p>
              </div>

              
            </div>
          </div>

           @endforeach  
        </div>
      </div>
    </div>
  </div>
</div>

</div>

<!-- Plugin js for this page -->
<script src="{{asset('../../../assets/vendors/sortablejs/Sortable.min.js')}}"></script>
<!-- End plugin js for this page -->

@endsection