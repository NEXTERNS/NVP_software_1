@extends('body.user_dashboard')
@section('admin')
<div class="page-content">
    <div class="row">
       
        <div class="col-lg-8 margin-tb mb-4">
            <div class="pull-left">
                <h2>Edit Workers </h2>
                    <div class="float-end">
                        <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
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


    <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="row">
            <div class="col-xs-12 mb-3">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $user->name }}"  required class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 mb-3">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="email" name="email" value="{{ $user->email }}" required class="form-control" placeholder="Email">
                </div>
            </div>

            <div class="col-xs-12 mb-3">
                <div class="form-group">
                    <strong>Age:</strong>
                    <input type="number" name="age" required value="{{ $user->age }}" class="form-control" placeholder="Age">
                </div>
            </div>

            <div class="col-xs-12 mb-3">
                <div class="form-group">
                    <strong>Salary:</strong>
                    <input type="number" name="salary" value="{{ $user->salary }}" required class="form-control" placeholder="Salary">
                </div>
            </div>

            <div class="col-xs-12 mb-3">
                <div class="form-group">
                    <strong>Password:</strong>
                    <input type="password" name="password" value="" required class="form-control" placeholder="Password">
                </div>
            </div>
            <div class="col-xs-12 mb-3">
                <div class="form-group">
                    <strong>Confirm Password:</strong>
                    <input type="password"  name="confirm-password" class="form-control" placeholder="Confirm Password" >
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong> workers Image:</strong>
                    <strong>Image:</strong>
                    <input type="file" name="image" class="form-control" placeholder="image">
                    <br>
                    <img src="/images/workers/{{ $user->image }}" width="300px">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Workers Documents:</strong>
                    <input type="file" name="document" class="form-control" placeholder="document">
                    <br>
                    <img src="/images/workers/{{ $user->document }}" width="300px">

                </div>
            </div>



            <div class="col-xs-12 mb-3">
                <div class="form-group">
                    <strong>Role:</strong>
                    <select class="form-control multiple" multiple name="roles[]">
                        @foreach ($roles as $role)
                            <option value="{{ $role }}">{{ $role }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 mb-3 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

@endsection
