@extends('auth.layout')
@section('heading','Password Reset')
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
<div class="text-center">
    <button type="submit" class="btn bg-white text-primary btn-block">Send</button>
</div>
@endsection

