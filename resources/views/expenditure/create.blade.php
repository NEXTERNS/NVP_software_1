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

            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-4">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
       
    </form>
    
    </div>
@endsection