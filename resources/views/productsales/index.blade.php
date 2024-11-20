@extends('body.user_dashboard')
@section('admin')



<div class="page-content">
    

    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Error!</strong> <br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
    <form action="{{ route('productsales.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class=" grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="row w-100">

                <div class="col-md-6 align-content-lg-center">
                  <h1 class="text-center ">Search Items Name</h1>
                  <select class="js-example-basic-single form-select" data-width="100%" name="name">
                    @foreach ($products as $value)
                    <option value="{{ $value->name }}">{{ $value->name }}</option>
              
                  @endforeach
                </select>
                </div>
                
                <div class="col-md-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="item">
                        <img src="../../../assets/images/others/products/lexus-es-350-car.jpg" class="w-100 h-100"
                          alt="item-image">
                      </div>
                      <table class="table table-content ">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Item Price</th>
                            <th scope="col">Qty Available</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>1300000$</td>
                            <td>20</td>
                          </tr>


                        </tbody>
                      </table>



                    </div>
                  </div>
                </div>

              </div>

                <div class="col-md-12 align-content-lg-center ">
                    <label for="exampleInputPhone" class="form-label">QTy SOld</label>
                    <input type="number" class="form-control"  name="qtysold"
                                        autocomplete="off" required >
                  </div>



              <div class="col-md-12 align-content-lg-center mt-4" >
                <h5>Price Sold</h5>
                <select class="js-example-basic-single form-select" data-width="100%" name="sellingprice">
                    @foreach ($products as $value)
                    <option value="{{ $value->Sellingprice }}">{{ $value->Sellingprice }}frs</option>
              
                  @endforeach
                </select>
              </div>

              
              <div class="col-md-12 align-content-lg-center mt-4">
                <h5>Customer</h5>
                <select class="js-example-basic-single form-select" data-width="100%" name="customername">
                    @foreach ($customers as $value)
                    <option value="{{ $value->name }}">{{ $value->name }}</option>
              
                  @endforeach
                </select>
              </div>


              <br>
              <button type="submit" class="btn btn-primary me-2 w-25">Save Changes</button>
              <a href="{{route('reciepe')}}" class="btn btn-info w-25 me-2">Generate Reciept</a>
              <button class="btn btn-secondary w-25">Cancel</button>

              </form>

              
            </div>
          </div>
        </div>





        

          
         
          
          
       
     
</div>





    @endsection