{{-- @extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb mb-4">
            <div class="pull-left">
                <h2>Create New Product
                    <div class="float-end">
                        <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
                    </div>
                </h2>
            </div>
        </div>
    </div>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-xs-12 mb-3">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 mb-3">
                <div class="form-group">
                    <strong>Detail:</strong>
                    <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea>
                </div>
            </div>
            <div class="col-xs-12 mb-3 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection --}}


@extends('body.user_dashboard')
@section('admin')



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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
   

<div class="row">
  <div class="col-12 grid-margin">
  
<div class="row profile-body">


  <div class="grid-margin stretch-card">
            <div class="card">
              <div class="card-body">

								<h6 class="card-title">Add Products to the Store</h6>

                                <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
									<div class="mb-3">
										<label for="exampleInputUsername1" class="form-label">Item Name</label>
										<input type="text" class="form-control"  name="name" id="exampleInputUsername1" autocomplete="off" required value="{{--$profileData->username--}}">
									</div>
									<div class="mb-3">
										<label for="exampleInputEmail1" class="form-label">Item Details</label>
										<input type="text" class="form-control" name="detail" id="exampleInputEmail1" required value="{{--$profileData->email--}}">
									</div>
									
                                    <div class="mb-3">
										<label for="exampleInputPhone" class="form-label">QTy Available</label>
										<input type="number" class="form-control"  name="qtyavailable"
                                        autocomplete="off" required value="{{--$profileData->phone--}}">
									</div>
                                    <div class="mb-3">
										<label for="exampleInputaddress" class="form-label">Buying Price</label>
										<input type="number" class="form-control" id="exampleInputtext" name="unitprice"
                                        autocomplete="off" required value="{{--$profileData->address--}}">
									</div>

                                    <div class="mb-3">
										<label for="exampleInputaddress" class="form-label">Selling  Price</label>
										<input type="number" class="form-control" id="exampleInputtext" name="Sellingprice"
                                        autocomplete="off" required value="{{--$profileData->address--}}">
									</div>

                                    <div class="mb-3">
										<label class="form-label" for="formFile">Upload Item Image</label>
										<input class="form-control"  name="image" required type="file" id="image">
									</div>

                                   <div>
                                    <img id=showImage class="wd-70 rounded-circle" src="!empty($profileData -> photo))? 
                                        url('upload/admin_image/').'/'.$profileData->photo : url('upload/no_image.jpg') ">
                                
                                   </div>                   
                                 
									<button type="submit" class="btn btn-primary me-2 w-25">Save Changes</button>
									<button class="btn btn-secondary w-25">Cancel</button>
								</form>

              </div>
            </div>
					</div>
</div>

</div>


<script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage ').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0'])
        })
    })

</script>



@endsection