@extends('body.user_dashboard')
@section('admin')



<div class="page-content">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit customer</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('customers.index') }}"> Back</a>
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
    <form action="{{ route('customers.update', $customer->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT') <!-- This indicates that the form should be treated as a PUT request -->

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $customer->name }}" class="form-control" placeholder="Name">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Customers Target product:</strong>
                    <input type="text" name="targetproduct" class="form-control" placeholder="Target product" value="{{ $customer->targetproduct}}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Customers Portfolio:</strong>
                    <input type="text" name="portfolio" class="form-control" placeholder="portfolio" value="{{ $customer->portfolio}}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Transactions:</strong>
                    <input type="number" name="transactions" class="form-control" placeholder="transaction" value="{{ $customer->transactions}}">
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Detail:</strong>
                    <textarea class="form-control" style="height:150px;" name="detail" placeholder="Detail">{{ $customer->detail }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Image:</strong>
                    <input type="file" name="image" class="form-control" placeholder="image">
                    <img src="/images/{{ $customer->image }}" width="300px">
                </div>
            </div>
            <br>
            <br>
            <br>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
</div>
@endsection