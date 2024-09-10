@extends('body.user_dashboard')
@section('admin')



<div class="page-content">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 class="text-center mt-5">TK ELECTRONICS EXPENDITURES LIST</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success mt-3 mb-3" href="{{ route('expenditure.create') }}" style="float: right;"> Create New expenditure</a>
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
            <th>Amount</th>
            <th>Date</th>
            <th>Reason</th>
            <th>Category</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($expenditure as $expenditure)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $expenditure->amount }}</td>
            <td>{{ $expenditure->date }}</td>
            <td>{{ $expenditure->detail }}</td>
            <td>{{ $expenditure->category }}</td>
            <td>
                <form action="{{ route('expenditure.destroy',$expenditure->id) }}" method="POST">
   
                    <a class="btn btn-dark" href="{{ route('expenditure.show',$expenditure->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('expenditure.edit',$expenditure->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>
  
    
      
</div>
@endsection