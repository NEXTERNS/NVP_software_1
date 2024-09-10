@extends('body.user_dashboard')
@section('admin')



    <div class="page-content">

    <div class="row">
      <div class="col-xl-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h6 class="card-title">Sales Progress</h6>
            <div id="apexLine"></div>
          </div>
        </div>
      </div>
      <div class="col-xl-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h6 class="card-title">sales Over the Years</h6>
            <div id="apexBar"></div>
          </div>
        </div>
      </div>
    </div>


    <div class="row ">
      <div class="col-md-12 stretch-card pb-5">
        <div class="card">
          <div class="card-body">
            <h6 class="card-title">Search Sales Information </h6>
              <form>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="mb-3">
                      <label class="form-label"> Sales Date</label>
                      <input type="date" class="form-control" placeholder="Enter Date">
                    </div>
                  </div><!-- Col -->
                  <div class="col-sm-6">
                    <div class="mb-3">
                      <label class="form-label">Customers Name</label>
                      <select class="js-example-basic-single form-select" data-width="100%">
                        <option value="TX">Texas</option>
                        <option value="NY">New York</option>
                        <option value="FL">Florida</option>
                        <option value="KN">Kansas</option>
                        <option value="HW">Hawaii</option> 
                        <option value="NY">New York</option>
                        <option value="FL">Florida</option>
                        <option value="KN">Kansas</option>
                        <option value="HW">Hawaii</option>
                      </select>

                      
                   </div>


                  </div><!-- Col -->
                </div><!-- Row -->
                <div class="row">
                  <div class="col-sm-4">
                    <div class="mb-3">
                      <label class="form-label"> Item Price</label>
                      <input type="text" class="form-control" placeholder="Enter city">
                    </div>
                  </div><!-- Col -->
                  <div class="col-sm-4">
                    <div class="mb-3">
                      <label class="form-label">Items Name</label>
                      <input type="text" class="form-control" placeholder="Enter state">
                    </div>
                  </div><!-- Col -->
                  <div class="col-sm-4">
                    <div class="mb-3">
                      <label class="form-label">Item Code</label>
                      <input type="text" class="form-control" placeholder="Enter Item code">
                    </div>
                  </div><!-- Col -->
                </div><!-- Row -->
                
              </form>
              <button type="button" class="btn btn-primary submit">Search History  Now</button>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h6 class="card-title">ALl Sales History</h6>
            <p class="text-muted mb-3">This Table Shows A List Of all Past transactions(sales)</p>
            <div class="table-responsive">
              <table id="dataTableExample" class="table">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Quantity Sold</th>
                    <th>Price Sold At</th>
                    <th>Date And Time</th>
                    <th>Customer Name</th>
                    <th>Transaction Id</th>
                  </tr>
                  
                </thead>
                <tbody>
                  @foreach ($productsales as $value)
                  <tr>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->qtysold }} Pieces</td>
                    <td>{{ $value->sellingprice }} frs</td>
                    <td>{{ $value->date}}</td>
                    <td>{{ $value->customername }}</td>
                    <td>#1234df2424</td>
                  
                  </tr>
            
                @endforeach
        
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
   </div>
   @endsection
