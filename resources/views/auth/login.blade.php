@extends('layouts.auth')

@section('content')
    <form action="{{ route('login') }}" method="post">
        {{ csrf_field() }}

        <div class="form-group">
            <label class="label">@lang('Email address')</label>
            <div class="input-group">
            <input name="email" type="text" class="form-control" placeholder="username@example.com">
            <div class="input-group-append">
                <span class="input-group-text"><i class="icon-check"></i></span>
            </div>
            </div>
        </div>
        <div class="form-group">
            <label class="label">@lang('Password')</label>
            <div class="input-group">
            <input type="password" class="form-control" />
            <div class="input-group-append">
                <span class="input-group-text"><i class="icon-check"></i></span>
            </div>
            </div>
        </div>
        <div class="form-group">
            <button class="btn btn-primary submit-btn btn-block">Login</button>
        </div>
        <div class="form-group d-flex justify-content-between">
            <div class="form-check form-check-flat mt-0">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input" checked>
                Keep me signed in
            </label>
            </div>
            <a href="#" class="text-small forgot-password text-black">@lang('Forgot Password')</a>
        </div>
        <div class="form-group">
            <button class="btn btn-block g-login"><img class="mr-3" src="../../images/file-icons/icon-google.svg" alt="">Log in with Google</button>
        </div>
        <div class="text-block text-center my-3">
            <span class="text-small font-weight-semibold">@lang('Not a member?')</span>
            <a href="{{ route('register') }}" class="text-black text-small">@lang('Create new account')</a>
        </div>
    </form>
@endsection
