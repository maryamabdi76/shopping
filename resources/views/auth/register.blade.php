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
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-wrapper row">
                            <label for="name" class="col-md-3 col-form-label text-md-left">{{ __('نام') }}</label>

                            <div class="col-md-7">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-wrapper row">
                            <label for="username" class="col-md-3 col-form-label text-md-left">{{ __('نام کاربری') }}</label>

                            <div class="col-md-7">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-wrapper row">
                            <label for="email" class="col-md-3 col-form-label text-md-left">{{ __('ایمیل') }}</label>

                            <div class="col-md-7">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-wrapper row">
                            <label for="gender" class="col-md-3 col-form-label text-md-left">{{ __('جنسیت') }}</label>

                            <div class="col-md-7">
                                <select id="gender" name="gender" class="form-control @error('gender') is-invalid @enderror" name="gender" value="{{ old('gender') }}" required autocomplete="gender">
                                    <option value="" disabled selected>جنسیت</option>
                                    <option value="2">آقا</option>
                                    <option value="1">خانم</option>
                                </select>

                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-wrapper row">
                            <label for="mobile" class="col-md-3 col-form-label text-md-left">{{ __('موبایل') }}</label>

                            <div class="col-md-7">
                                <input id="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile" autofocus>

                                @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-wrapper row">
                            <label for="password" class="col-md-3 col-form-label text-md-left">{{ __('رمز عبور') }}</label>

                            <div class="col-md-7">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-wrapper row">
                            <label for="password-confirm" class="col-md-3 col-form-label text-md-left">{{ __('تکرار رمز عبور') }}</label>

                            <div class="col-md-7">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-2">
                                <button type="submit" class="">
                                    {{ __('ثبت نام') }}
                                </button>
                            </div>
                        </div>
                        <h6 class="reg"> ثبت نام کرده اید؟ <a href="{{ route('login') }}"> ورود </a></h6>
                    </form>
                </div>
            </div>
        {{-- </div>
    </div>
</div> --}}
@endsection
