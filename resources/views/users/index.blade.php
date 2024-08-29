
{{-- @extends('layouts.master')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb mb-4">
        <div class="pull-left">
            <h2>Users Management                
        <div class="float-end">
          @can('create-user')
          <a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a>

          @endcan
        </div>
            </h2>
        </div>
    </div>
</div>


@if ($message = Session::get('success'))
<div class="alert alert-success my-2">
  <p>{{ $message }}</p>
</div>
@endif


<table class="table table-bordered table-hover table-striped">
 <tr>
   <th>Name</th>
   <th>Email</th>
   <th>Roles</th>
   <th width="280px">Action</th>
 </tr>
 @foreach ($data as $key => $user)
  <tr>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>
      @if(!empty($user->getRoleNames()))
        @foreach($user->getRoleNames() as $v)
           <label class="badge badge-secondary text-dark">{{ $v }}</label>
        @endforeach
      @endif
    </td>
    <td>
      <form action="{{ route('users.destroy',$user->id) }}" method="POST">
        @can('list-user')
        <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
        @endcan

        @can('edit-user')
        <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>

        @endcan

        @csrf
        @method('DELETE')  
        @can('delete-user')
        <button type="submit" class="btn btn-danger">Delete</button>

        @endcan
    </form>
    </td>
  </tr>
 @endforeach
</table>
@endsection  --}}


@extends('body.user_dashboard')
@section('admin')


<div class="page-content">
  @can('create-user')
  <nav class="page-breadcrumb">
      <ol class="breadcrumb">
      <a href="{{ route('users.create') }}" class="btn btn-inverse-info"> Add Workers</a>
  
      </ol>
  </nav>
  @endcan
  
  <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
  <div class="card">
  <div class="card-body">
  <h6 class="card-title">All Workers</h6>
  <div class="table-responsive">
    
<table class="table table-bordered table-hover table-striped" id="dataTableExample">
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Roles</th>
    <th width="280px">Action</th>
  </tr>
  @foreach ($data as $key => $user)
   <tr>
     <td>{{ $user->name }}</td>
     <td>{{ $user->email }}</td>
     <td>
       @if(!empty($user->getRoleNames()))
         @foreach($user->getRoleNames() as $v)
            <label class="badge badge-secondary ">{{ $v }}</label>
         @endforeach
       @endif
     </td>
     <td>
       <form action="{{ route('users.destroy',$user->id) }}" method="POST">
         @can('list-user')
         <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
         @endcan
 
         @can('edit-user')
         <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
 
         @endcan
 
         @csrf
         @method('DELETE')  
         @can('delete-user')
         <button type="submit" class="btn btn-danger">Delete</button>
 
         @endcan
     </form>
     </td>
   </tr>
  @endforeach
 </table>
  </div>
  </div>
  </div>
      </div>
  </div>
  
  </div>
  
  
@endsection