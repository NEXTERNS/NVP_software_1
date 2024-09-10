
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

								<h6 class="card-title">Edit Products to the Store</h6>

                                <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT') <!-- This indicates that the form should be treated as a PUT request -->
									<div class="mb-3">
										<label for="exampleInputUsername1" class="form-label">Item Name</label>
										<input type="text" class="form-control"  name="name" id="exampleInputUsername1" autocomplete="off" value="{{ $product->name }}" required>
									</div>
									<div class="mb-3">
										<label for="exampleInputEmail1" class="form-label">Item Details</label>
										<input type="text" class="form-control" name="detail" id="exampleInputEmail1" value="{{ $product->detail }}" required>
									</div>
									
                                    <div class="mb-3">
										<label for="exampleInputPhone" class="form-label">QTy Available</label>
										<input type="number" class="form-control"  name="qtyavailable"
                                        autocomplete="off" value="{{ $product->qtyavailable }}" required>
									</div>
                                    <div class="mb-3">
										<label for="exampleInputaddress" class="form-label">Buying Price</label>
										<input type="number" class="form-control" id="exampleInputtext" name="unitprice" required
                                        autocomplete="off" value="{{ $product->Unitprice }}">
									</div>

                                    <div class="mb-3">
										<label for="exampleInputaddress" class="form-label">Selling  Price</label>
										<input type="number" class="form-control" id="exampleInputtext" name="Sellingprice"
                                        autocomplete="off" value="{{$product->Sellingprice }}" required>
									</div>

                                    <div class="mb-3">
										<label class="form-label" for="formFile"> Item Image</label>
										<input class="form-control"  name="image" type="file" id="image" required value="{{ $product->image }}" >
                                        <img src="/images/{{ $product->image }}" width="100px">

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