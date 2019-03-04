@extends('layouts.app')

@section('content')
<div class="ks-logo">LEGISTANT</div>

<div class="card panel panel-default ks-light ks-panel ks-login">
    <div class="card-block">
        <form class="form-container" action="{{ route('login') }}" method="post">
            @csrf
            <h4 class="ks-header">Login</h4>
            <div class="form-group">
                <div class="input-icon icon-left icon-lg icon-color-primary">
                    <input id="email" type="email" name="email" type="text" class="form-control form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" autofocus placeholder="{{ __('E-Mail Address') }}">
                    <span class="icon-addon">
                        <span class="la la-at"></span>
                    </span>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <div class="input-icon icon-left icon-lg icon-color-primary">
                    <input id="password" name="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password">
                    <span class="icon-addon">
                        <span class="la la-key"></span>
                    </span>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12 ">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="custom-control-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12 ">
                    <button type="submit" class="btn btn-primary btn-block">
                        {{ __('Login') }}
                    </button>
                </div>
            </div>
            <div class="ks-text-center">
                Don't have an account. <a href="/signup">Sign Up</a>
            </div>
            <div class="ks-text-center">
                <a href="{{ route('password.request') }}">Forgot your password?</a>
            </div>

            <div class="ks-social">
                <div>or Log In with social</div>
                <div>
                    <a href="#" class="facebook la la-facebook"></a>
                    <a href="#" class="twitter la la-twitter"></a>
                    <a href="#" class="google la la-google"></a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
