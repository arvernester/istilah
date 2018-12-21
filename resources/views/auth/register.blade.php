@extends('layouts.auth')

@section('content')
<form action="{{ route('register') }}" method="post">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="name">@lang('Name')</label>
    <div class="input-group">
      <input name="name" type="text" class="form-control">
      <div class="input-group-append">
        <span class="input-group-text"><i class="icon-check"></i></span>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label for="name">@lang('Email address')</label>
    <div class="input-group">
      <input name="email" type="text" class="form-control" placeholder="mail@example.com">
      <div class="input-group-append">
        <span class="input-group-text"><i class="icon-check"></i></span>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label for="password">@lang('Password')</label>
    <div class="input-group">
      <input name="password" type="password" class="form-control" placeholder="">
      <div class="input-group-append">
        <span class="input-group-text"><i class="icon-check"></i></span>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label for="password_confirmation">@lang('Password confirmation')</label>
    <div class="input-group">
      <input name="password_confirmation" type="password" class="form-control" placeholder="">
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
    <button class="btn btn-primary submit-btn btn-block" type="submit">@lang('Register')</button>
  </div>
  <div class="text-block text-center my-3">
    <span class="text-small font-weight-semibold">@lang('Already have and account?')</span>
    <a href="{{ route('login') }}" class="text-black text-small">@lang('Login')</a>
  </div>
</form>
@endsection

