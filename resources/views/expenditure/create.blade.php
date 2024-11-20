@extends('body.user_dashboard')
<link rel="stylesheet" href="{{asset('../../../assets/vendors/dropify/dist/dropify.min.css')}}">

@section('admin')

<div class="page-content">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Create New Expenditure</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('expenditure.index') }}"> Back</a>
            </div>
        </div>
    </div>
       
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
       
    <form action="{{ route('expenditure.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
      

        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Amount Spent:</strong>
                <input type="number" name="amount" class="form-control" >
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">What did you Spend On?</label>
            <select class="js-example-basic-single form-select" data-width="100%">
                <option value="Food">Food</option>
                <option value="Drinks">Drinks</option>
                <option value="School fees">School fees</option>
                <option value="House Rent">House Rent</option>
                <option value="Store Rent">Store Rent</option>
                <option value="Fuel">Fuel</option>
                <option value="Business">Business</option>
                <option value="Clothing">Clothing</option>
                <option value="Fun">Fun</option>
                <option value="Food">Food</option>
                <option value="Hospital">Hospital</option>
                <option value="Loan">Loan</option>
                <option value="Shoping">Shoping</option>
                <option value="Personal">Personal</option>
                <option value="Transport">Transport</option>
                <option value="Others">Others</option>
            </select>
        </div>

            
           
            <div class="col-md-12 grid-margin mt-4 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Date </h6>
        <div class="input-group flatpickr" id="flatpickr-date">
          <input type="text" name="date" class="form-control" placeholder="Select date" data-input>
          <span class="input-group-text input-group-addon" data-toggle><i data-feather="calendar"></i></span>
        </div>
                    </div>
                </div>
            </div>
            <br>


            <div class="row">

                <div class="modal fade" id="varyingModal" tabindex="-1" aria-labelledby="varyingModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="varyingModalLabel">Automate Your Expenditures</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                        </div>
                        <div class="modal-body">
                          <form>
                            <div class="mb-3">
                              <label for="recipient-name" class="form-label">Create This Expence Every After:</label>
                              <select class="form-select" data-width="100%"  name="minute">
                                <option value="" disabled selected>Expence Per Minute</option>
                                @foreach (range(1, 60) as $minute)
                                    <option value="{{ $minute }}">{{ $minute }} minute{{ $minute > 1 ? 's' : '' }}</option>
                                @endforeach
                            
                            </select>
                            <br>
                              <select class="form-select" data-width="100%"  name="hour">
                                <option value="" disabled selected>Expence Per Hour</option>
                                @foreach (range(1, 24) as $hour)
                                    <option value="{{ $hour }}">{{ $hour }} hour{{ $hour > 1 ? 's' : '' }}</option>
                                @endforeach
                            
                            </select>
                <br>
                            <select class="form-select" data-width="100%"  name="day">
                                <option value="" disabled selected>Expence daily</option>
                                @foreach (range(1, 7) as $day)
                                    <option value="{{ $day }}">{{ $day }} day{{ $day > 1 ? 's' : '' }}</option>
                                @endforeach
                            </select>
                <br>
                            <select class="form-select" data-width="100%"  name="week">
                                <option value="" disabled selected>Expence Weekly</option>
                                @foreach (range(1, 4) as $week)
                                    <option value="{{ $week }}">{{ $week }} Week{{ $week > 1 ? 's' : '' }}</option>
                                @endforeach
                                
                            </select>
                <br>
                            <select class="form-select" data-width="100%"  name="month">
                                <option value="" disabled selected>Expence Monthly</option>
                                @foreach (range(1, 12) as $month)
                                    <option value="{{ $month }}">{{ $month }} month{{ $month > 1 ? 's' : '' }}</option>
                                @endforeach
                                
                            </select>

                                            <br>
                            <select class="form-select" data-width="100%"  name="year">
                                <option value="" disabled selected>Expence Yearly</option>
                                @foreach (range(1, 5) as $year)
                                    <option value="{{ $year }}">{{ $year }} year{{ $year > 1 ? 's' : '' }}</option>
                                @endforeach
                                
                            </select>

                            </div>
                            
                          </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save </button>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Take a shot Note expenditure:</strong>
                        <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea>
                    </div>
                </div>

<div class="row">

    <div class="col-md-12 stretch-card mt-5">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">You can Upload any relevant Document here(Optional)</h6>
                <input type="file" id="myDropify" name="image"/>
            </div>
        </div>
    </div>
</div>

             <div class="mt-4">
        <button type="button" class="btn btn-primary me-2 w-25" data-bs-toggle="modal" data-bs-target="#varyingModal">Create This Expence Automatically</button>
        <button class="btn btn-secondary w-25">Cancel</button>
        <button type="submit" class="btn btn-primary w-25" data-bs-toggle="modal" >Save Changes</button>

</div>
        </div>
       
    </form>
    
    </div>
@endsection