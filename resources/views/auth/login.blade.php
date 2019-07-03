<!DOCTYPE html>
<html>
    @include('user.layouts.head')
    @section('title', 'User|Login')

<body>
<div class="login-page">
    <h1 class='text-center' style='margin-bottom: 30px;'>User Login</h1>
    <div class="form">
        <form class="login-form" method="POST" action="{{ route('login') }}">
            @csrf
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

            <label class="form-check-label" for="remember">
                {{ __('Remember Me') }}
            </label>
        </div>

        <button type="submit" class="btn btn-primary">
                {{ __('Login') }}
        </button>

    <p class="message">Not registered? <a href="{{route('register')}}">Create an account</a></p>
        </form>
    </div>
</div>

@include('user.layouts.script')
</body>
</html>
