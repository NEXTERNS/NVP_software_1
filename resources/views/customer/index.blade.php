@extends('body.user_dashboard')
@section('admin')



<div class="page-content">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 class="text-center mt-5">TK ELECTRONICS CUSTOMERS LIST</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success mt-3 mb-3" href="{{ route('customers.create') }}" style="float: right;"> Create New customer</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Image</th>
            <th>Name </th>
            <th>Target Product</th>
            <th>Portfolio</th>
            <th>Customer Transactions</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($customers as $customer)
        <tr>
            <td>{{ ++$i }}</td>
            <td><img src="/images/{{ $customer->image }}" width="100px" height="100px"></td>
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->targetproduct }}</td>
            <td>{{ $customer->portfolio }}</td>
            <td>{{ $customer->transactions }}</td>
            <td>{{ $customer->detail }}</td>
            <td>
                <form action="{{ route('customers.destroy',$customer->id) }}" method="POST">
   
                    <a class="btn btn-dark" href="{{ route('customers.show',$customer->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('customers.edit',$customer->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $customers->links() !!}
      
</div>
@endsection