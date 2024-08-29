
@extends('body.user_dashboard')
@section('admin')
<div class="page-content">

    <form method="post" action="{{ route('password.update') }}" >
        @csrf
        @method('put')
        <div class="row">
            <div class="col-xs-12 mb-3">
                <div class="form-group">
                    <input id="current_password" name="current_password" type="password" class="form-control" autocomplete="current-password" />
                    <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                </div>
            </div>
            <div class="col-xs-12 mb-3">
                <div class="form-group">
                    <strong>New Password:</strong>
                    <input id="password" name="password" type="password" class="form-control" autocomplete="new-password" />
                    <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                </div>
            </div>
            <div class="col-xs-12 mb-3">
                <div class="form-group">
                    <strong>Confirm Password:</strong>
                    <input id="password_confirmation" name="password_confirmation" type="password" class="form-control" autocomplete="new-password" />
                    <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                </div>
                </div>
            </div>
    
        
        
        <div class="col-xs-12 mb-3 text-center ">
            <x-primary-button class="btn btn-primary">{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</div>

@endsection