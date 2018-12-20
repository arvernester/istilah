@extends('layouts.auth')

@section('content')
    <form action="#">
        <div class="form-group">
            <div class="input-group">
            <input type="text" class="form-control" placeholder="Username">
            <div class="input-group-append">
                <span class="input-group-text"><i class="icon-check"></i></span>
            </div>
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
            <input type="password" class="form-control" placeholder="Password">
            <div class="input-group-append">
                <span class="input-group-text"><i class="icon-check"></i></span>
            </div>
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
            <input type="password" class="form-control" placeholder="Confirm Password">
            <div class="input-group-append">
                <span class="input-group-text"><i class="icon-check"></i></span>
            </div>
            </div>
        </div>
        <div class="form-group d-flex justify-content-center">
            <div class="form-check form-check-flat mt-0">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input" checked>
                @lang('I agree to the terms')
            </label>
            </div>
        </div>
        <div class="form-group">
            <button class="btn btn-primary submit-btn btn-block">@lang('Register')</button>
        </div>
        <div class="text-block text-center my-3">
            <span class="text-small font-weight-semibold">@lang('Already have and account?')</span>
            <a href="{{ route('login') }}" class="text-black text-small">@lang('Login')</a>
        </div>
    </form>
@endsection
