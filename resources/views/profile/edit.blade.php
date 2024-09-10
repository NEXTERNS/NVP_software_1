@extends('body.user_dashboard')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<div class="page-content">

<div class="row">
  <div class="col-12 grid-margin">
  
<div class="row profile-body">
  <!-- left wrapper start -->
  <div class="d-none d-md-block col-md-4 col-xl-4 left-wrapper">
    <div class="card rounded">
      <div class="card-body">

      <div>
            <img class="wd-70 rounded-circle" src="{{(!empty($user -> photo))? 
                url('upload/admin_image').'/'.$user->photo : url('upload/no_image.jpg') }}" >
            <span class="h4 ms-3 text-white">{{$user->name}}</span>
          </div>
        <div class="d-flex align-items-center justify-content-between mb-2">
            <br>
          <h4 class="card-title mb-0">About</h4>
          <div class="dropdown">
            <a type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>
              <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="git-branch" class="icon-sm me-2"></i> <span class="">Update</span></a>
              <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View all</span></a>
            </div>
          </div>
        </div>
        <p>Welcome {{$user->name}} To your profile </p>
        <div class="mt-3">
          <label class="tx-11 fw-bolder mb-0 text-uppercase">phone</label>
          <p class="text-muted">{{$user->phone}}</p>
        </div>
        <div class="mt-3">
          <label class="tx-11 fw-bolder mb-0 text-uppercase">Lives:</label>
          <p class="text-muted">{{$user->address}}</p>
        </div>
        <div class="mt-3">
          <label class="tx-11 fw-bolder mb-0 text-uppercase">Email:</label>
          <p class="text-muted">{{$user->email}}<</p>
        </div>
        <div class="mt-3">
          <label class="tx-11 fw-bolder mb-0 text-uppercase">Website:</label>
          <p class="text-muted">www.nobleui.com</p>
        </div>
        <div class="mt-3 d-flex social-links">
          <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
            <i data-feather="github"></i>
          </a>
          <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
            <i data-feather="twitter"></i>
          </a>
          <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
            <i data-feather="instagram"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
 

  <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">

								<h6 class="card-title">Update Your Information</h6>

								
                <form class="forms-sample" method="POST" action="{{route('profile.update')}}"  enctype="multipart/form-data">
                                @csrf
									<div class="mb-3">
										<label for="exampleInputUsername1" class="form-label">Username</label>
										<input type="text" class="form-control"  name="name" id="exampleInputname1" autocomplete="off" value="{{$user->name}}">
									</div>
									<div class="mb-3">
										<label for="exampleInputEmail1" class="form-label">Email address</label>
										<input type="email" class="form-control" name="email" id="exampleInputEmail1" value="{{$user->email}}">
									</div>
									
                                    <div class="mb-3">
										<label for="exampleInputPhone" class="form-label">Phone</label>
										<input type="text" class="form-control" id="exampleInputPhone" name="phone"
                                        autocomplete="off" value="{{$user->phone}}">
									</div>
                                    <div class="mb-3">
										<label for="exampleInputaddress" class="form-label">address</label>
										<input type="text" class="form-control" id="exampleInputtext" name="address"
                                        autocomplete="off" value="{{$user->address}}">
									</div>

                                    <div class="mb-3">
										<label class="form-label" for="formFile">File upload</label>
										<input class="form-control"  name="photo" type="file" id="image">
									</div>

                                   <div>
                                    <img id=showImage class="wd-70 rounded-circle" src="{{(!empty($user -> photo))? 
                                        url('upload/admin_image/').'/'.$user->photo : url('upload/no_image.jpg') }}">
                                </div>
                                                        
                                                    <br>
									<div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
										<label class="form-check-label" for="exampleCheck1">
											Remember me
										</label>
									</div>
									<button type="submit" class="btn btn-primary me-2">Save Changes</button>
									<button class="btn btn-secondary">Cancel</button>
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