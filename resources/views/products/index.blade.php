
{{-- @extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb mb-4">
            <div class="pull-left">
                <h2>Products                  
            <div class="float-end">
              @can('product-create')
              <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
              @endcan
          </div>
                </h2>
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-striped table-hover">
        <tr>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
	    @foreach ($products as $product)
	    <tr>
	        <td>{{ $product->name }}</td>
	        <td>{{ $product->detail }}</td>
	        <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
                    @can('product-edit')
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
                    @endcan


                    @csrf
                    @method('DELETE')
                    @can('product-delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    @endcan
                </form>
	        </td>
	    </tr>
	    @endforeach
    </table>

@endsection 
 --}}

@extends('body.user_dashboard')
@section('admin')



<div class="page-content">

    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title">Items In Stuck</h6>
          <div class="owl-carousel owl-theme owl-auto-play">

            @foreach ($products as $value)

            <div class="item">
              <img src="/images/{{$value->image}}" width="400px" height="200px">           
              
            </div>
            @endforeach
            
          </div>
        </div>
      </div>
    </div>

    
<div class=" grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <div class="row w-100">
        
        <div class="col-md-4 align-content-lg-center">
          <h1 class="text-center ">Search Items</h1>
          <select class="js-example-basic-single form-select" data-width="100%">
            @foreach ($products as $value)
            <option value="{{ $value->id }}">{{ $value->name }}</option>
      
          @endforeach
        </select>
        </div>


      
        
        <div class="col-md-8 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="item">
                <img src="../../../assets/images/others/products/IMG-20240525-WA0010.jpeg" class="w-100 h-100" alt="item-image">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title text-center">Products</h4>
        <div class="table-responsive">
         <table id="dataTableExample" class="table">
            <thead>  
                  <tr>
                      <th>#</th>
                      <th>image</th>
                      <th>Name</th>
                      <th>details</th>
                      <th>QTY Available</th>
                      <th>Sales Progress</th>
                      <th>price</th>
                      <th>Action</th>
                  </tr>
            </thead>
                      {{$i = 0}}
                      <tbody>
                    @foreach ($products as $product)
                      
                          <tr>
                            <td>{{ $i++ }}</td>
                            <td><img src="/images/{{$product->image}}" width="100px" height="100px"></td>
                              <td>{{ $product->name }}</td>
                              <td>{{ $product->detail }}</td>
                              <td>{{ $product->qtyavailable }}</td>
                            
                              <td>
                                  <div class="progress">
                                      <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width:{{$product->Sellingprogress}}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                              </td>
                              
                              <td>{{ $product->Sellingprice }} frs</td>
                              <td>
                                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
                                    @can('product-edit')
                                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
                                    @endcan
                        
                        
                                    @csrf
                                    @method('DELETE')
                                    @can('product-delete')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                    @endcan
                                </form>
                            </td>
                            
                          </tr>
                                
                                 
                                    
                                
                  
                    @endforeach
            </tbody>
         </table>
        </div>
      </div>
    </div>
  </div>
</div>


      @endsection