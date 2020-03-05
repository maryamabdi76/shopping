@extends('layouts.mainlayout')
{{-- @extends('layouts.app') --}}

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body"> --}}
                    <div class="wrapper" style="background-image: url('images/bg-registration-form-1.jpg');">
                        <div class="inner" >
                            {{-- <div class="image-holder">
                                <img src="images/registration-form-1.jpg" alt="">
                            </div> --}}
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-wrapper row">
                            <label for="email" class="col-md-3 col-form-label text-md-left">{{ __('ایمیل') }}</label>

                            <div class="col-md-7">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-wrapper row">
                            <label for="password" class="col-md-3 col-form-label text-md-left">{{ __('رمزعبور') }}</label>

                            <div class="col-md-7">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-wrapper row">
                            <div class="col-md-7 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('مرا به خاطر بسپار') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-wrapper row mb-0 mt-2">
                            <div class="col-md-8 offset-md-2">
                                <button type="submit" class="">
                                    {{ __('ورود') }}
                                </button>

                                @if (Route::has('password.request'))
                                <h6 class="reg">
                                    <a class="" href="{{ route('password.request') }}">
                                        {{ __('رمز عبور خود را فراموش کرده اید؟') }}
                                    </a>
                                </h6>
                                @endif
                                <h6 class="reg">هنوز ثبت نام نکرده اید؟ <a href="{{route('register')}}"> ثبت نام</a></h6>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        {{-- </div>
    </div>
</div> --}}
@endsection
