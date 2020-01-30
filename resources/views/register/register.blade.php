@extends('layouts.mainlayout')

@section('content')
		<div class="wrapper" style="background-image: url('images/bg-registration-form-1.jpg');">
			<div class="inner" >
				<div class="image-holder">
					<img src="images/registration-form-1.jpg" alt="">
				</div>
				<form method="POST" action="/validateForm">
                    {{ csrf_field() }}
                        <h3>فرم ثبت نام</h3>
                        {{-- <div class="form-wrapper">
                            @if($errors->any())
                            <div class="alert alert-danger danger">
                                <ul>
                                @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                                @endforeach
                                </ul>
                            </div>
                            @endif
                        </div> --}}
                        <div class="form-wrapper">
                            @if(\Session::has('success'))
                            <div class="alert alert-success">
                                {{\Session::get('success')}}
                            </div>
                            @endif
                        </div>

                        @if($errors->has('fullname'))
                        <span class="text-danger">
                            {{$errors->first('fullname') }}
                        </span>
                        @endif
                        <div class="form-wrapper">
                            <input type="text" placeholder="نام و نام خانوادگی" class="form-control" name="fullname">
                            <i class="fa fa-user"></i>
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

                    @if($errors->has('mobile'))
                        <span class="text-danger">
                            {{$errors->first('mobile') }}
                        </span>
                    @endif
					<div class="form-wrapper">
						<input type="text" placeholder="تلفن همراه" class="form-control" name="mobile">
						<i class="fa fa-phone"></i>
                    </div>

                    @if($errors->has('mail'))
                        <span class="text-danger">
                            {{$errors->first('mail') }}
                        </span>
                    @endif
					<div class="form-wrapper">
						<input type="text" placeholder="ایمیل" class="form-control" name="mail">
						<i class="fa fa-envelope"></i>
                    </div>

                    @if($errors->has('gender'))
                        <span class="text-danger">
                            {{$errors->first('gender') }}
                        </span>
                    @endif
					{{-- <div class="form-wrapper">
						<select name="gender" id="" class="form-control">
							<option value="" disabled selected>جنسیت</option>
							<option value="2">آقا</option>
							<option value="1">خانم</option>
						</select>
                        <i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>

                    </div> --}}
                    <div class="form-group" style="margin-bottom:0">
                            <select id="gender" name="gender" class=" form-control">
                                <option value="" disabled selected>جنسیت</option>
                                <option value="2">آقا</option>
                                <option value="1">خانم</option>
                            </select>
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

                    @if($errors->has('confirmpassword'))
                        <span class="text-danger">
                            {{$errors->first('confirmpassword') }}
                        </span>
                    @endif
					<div class="form-wrapper">
						<input type="password" placeholder="تکرار رمز عبور" class="form-control" name="confirmpassword">
                            <i class="fa fa-lock"></i>
					</div>
					<button>ثبت نام
						<i class="fa fa-arrow-left"></i>
					</button>
                        <h6 class="reg"> ثبت نام کرده اید؟ <a href="/login"> ورود </a></h6>
				</form>
			</div>
		</div>

        @endsection
