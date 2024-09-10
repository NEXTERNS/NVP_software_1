@extends('body.user_dashboard')
@section('admin')
<div class="page-content">
<div class="row">
    <div class="col-lg-12 margin-tb mb-4">
        <div class="pull-left">
            <h2>Show User</h2>
            <div>
                <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-xs-12 mb-3">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $user->name }}
        </div>
    </div>
    <div class="col-xs-12 mb-3">
        <div class="form-group">
            <strong>Email:</strong>
            {{ $user->email }}
        </div>
    </div>

    <div class="col-xs-12 mb-3">
        <div class="form-group">
            <strong>Age:</strong>
            {{ $user->age }}
        </div>
    </div>

    <div class="col-xs-12 mb-3">
        <div class="form-group">
            <strong>Salary:</strong>
            {{ $user->salary }}
        </div>
    </div>
    
    <div class="col-xs-12 mb-3">
        <div class="form-group">
            <strong>Number Of attendance:</strong>
            {{ $user->attendance }}
        </div>
    </div>
    

    <div class="col-xs-12 mb-3">
        <div class="form-group">
            <strong>Roles:</strong>
            @if(!empty($user->getRoleNames()))
                @foreach($user->getRoleNames() as $v)
                    {{ $v }}
                @endforeach
            @endif
        </div>
    </div>

    <div class="col-xs-12 mb-3">
        <div class="form-group">
            <strong>Workers Photo:</strong>
            <img src="/images/workers/{{ $user->image }}" width="300px">
        </div>
    </div>

    
    <div class="col-xs-12 mb-3">
        <div class="form-group">
            <strong>Worker Personal Document:</strong>
            <img src="/images/workers/{{ $user->document }}" width="300px">
        </div>
    </div>
</div>
@endsection 