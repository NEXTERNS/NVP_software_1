


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
    <th>No</th>
    <th>Photo</th>
    <th>Name</th>
    <th>Email</th>
    <th>Age</th>
    <th>attendance</th>
    <th>Register Date</th>
    <th>salary</th>
    <th>Roles</th>
 
    <th width="280px">Action</th>
  </tr>
  @foreach ($data as $key => $user)
   <tr>
    <td>{{ ++$i }}</td>
    <td><img src="/images/workers/{{ $user->image }}" width="100px" height="100px"></td>
     <td>{{ $user->name }}</td>
     <td>{{ $user->email }}</td>
     <td>{{ $user->age }}</td>
     <td>{{ $user->attendance }}</td>
     <td>{{ $user->created_at }}</td>

     <td>{{ $user->salary }}</td>

     <td>
       @if(!empty($user->getRoleNames()))
         @foreach($user->getRoleNames() as $v)
            <label>{{ $v }}</label>
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