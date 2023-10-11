@extends('auth.layout')
@section('heading','Sign in your account')
@section('formRoute')
    {{ route('login') }}
@endsection
@section('content')
<div class="form-group">
    <label class="mb-1 text-white"><strong>Email</strong></label>
    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label class="mb-1 text-white"><strong>Password</strong></label>
    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
    @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="row d-flex justify-content-between mt-4 mb-2">
    <div class="form-group">
       <div class="form-check custom-checkbox ms-1 text-white">
            <input type="checkbox" name="remember" id="remember" class="form-check-input" id="basic_checkbox_1" {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label" for="basic_checkbox_1">Remember me</label>
        </div>
    </div>
    @if (Route::has('password.request'))
    <div class="form-group">
        <a class="text-white" href="{{ route('password.request') }}">Forgot Password?</a>
    </div>
    @endif
</div>
<div class="text-center">
    <button type="submit" class="btn bg-white text-primary btn-block">Sign Me In</button>
</div>
@endsection
