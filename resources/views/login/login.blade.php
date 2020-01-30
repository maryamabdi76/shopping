@extends('layouts.mainlayout')

@section('content')
        <!--================Header Menu Area =================-->
            <div class="wrapper" style="background-image: url('images/bg-registration-form-1.jpg');">
                <div class="inner">
                    <div class="image-holder">
                        <img src="images/registration-form-1.jpg" alt="">
                    </div>
                    <form method="POST" action="/validateForm">
                        {{ csrf_field() }}
                            <h3>فرم  ورود</h3>
                            <div class="form-wrapper">
                                @if(\Session::has('success'))
                                <div class="alert alert-success">
                                    {{\Session::get('success')}}
                                </div>
                                @endif
                            </div>

                            @if($errors->has('username'))
                            <span class="text-danger">
                                {{$errors->first('username') }}
                            </span>
                            @endif
                            <div class="form-wrapper">
                                <input type="text" placeholder="نام کاربری" class="form-control" name="username">
                            <i class="fa fa-user"></i>
                        </div>

                        @if($errors->has('password'))
                            <span class="text-danger">
                                {{$errors->first('password') }}
                            </span>
                        @endif
                        <div class="form-wrapper">
                            <input type="password" placeholder="رمز عبور" class="form-control" name="password">
                            <i class="fa fa-lock"></i>
                        </div>

                        <button>ورود
                            <i class="fa fa-arrow-left"></i>
                        </button>

                        <h6 class="reg">هنوز ثبت نام نکرده اید؟ <a href="/register"> ثبت نام</a></h6>
                    </form>
                </div>
            </div>
@endsection
