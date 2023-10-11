@extends('auth.layout')
@section('heading','Password confirm')
@section('formRoute')
    {{ route('password.confirm') }}
@endsection
@section('content')
<div class="form-group">
    <label class="mb-1 text-white"><strong>Password</strong></label>
    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
    @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="row d-flex justify-content-srart mt-4 mb-2">
    @if (Route::has('password.request'))
    <div class="form-group">
        <a class="text-white" href="{{ route('password.request') }}">Forgot Password?</a>
    </div>
    @endif
</div>
<div class="text-center">
    <button type="submit" class="btn bg-white text-primary btn-block">Confirm</button>
</div>
@endsection

