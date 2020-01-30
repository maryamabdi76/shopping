@extends('layouts.mainlayout')

@section('content')
		<div class="wrapper section_gap" style="background-image: url({{asset('images/bg-registration-form-1.jpg')}});">
			<div class="inner" style="margin:100px auto">
				<div class="image-holder">
					<img src="{{asset('images/registration-form-1.jpg')}}" alt="">
				</div>
				<form method="POST" action="/validateUpdate">
                    @csrf
                        <h3>ویرایش اطلاعات کاربر</h3>
                        <div class="form-wrapper">
                            @if(\Session::has('success'))
                            <div class="alert alert-success">
                                {{\Session::get('success')}}
                            </div>
                            @endif
                        </div>

                        <input id="id" type="hidden" class="form-control " name="id" value="{{ $userinfo->id}}" >

                        @if($errors->has('name'))
                        <span class="text-danger">
                            {{$errors->first('name') }}
                        </span>
                        @endif

                        <div class="form-wrapper">
                            <label for="name">نام و نام خانوادگی</label>
                            <input type="text" placeholder="نام و نام خانوادگی" class="form-control" id="name" name="name" value="{{$userinfo->name}}">
                            <i class="fa fa-user"></i>
                        </div>

                        @if($errors->has('username'))
                        <span class="text-danger">
                            {{$errors->first('username') }}
                        </span>
                        @endif
                        <div class="form-wrapper">
                            <label for="username">نام کاربری</label>
                            <input type="text" placeholder="نام کاربری" class="form-control" id="username" name="username" value="{{$userinfo->username}}">
                            <i class="fa fa-user"></i>
                        </div>

                    @if($errors->has('mobile'))
                        <span class="text-danger">
                            {{$errors->first('mobile') }}
                        </span>
                    @endif
					<div class="form-wrapper">
                            <label for="mobile">تلفن همراه</label>
						<input type="number" placeholder="تلفن همراه" class="form-control" id="mobile" name="mobile" value="{{$userinfo->mobile}}">
						<i class="fa fa-phone"></i>
                    </div>

                    @if($errors->has('email'))
                        <span class="text-danger">
                            {{$errors->first('email') }}
                        </span>
                    @endif
					<div class="form-wrapper">
                        <label for="mail">ایمیل</label>
						<input type="email" placeholder="ایمیل" class="form-control" id="email" name="email" value="{{$userinfo->email}}">
						<i class="fa fa-envelope"></i>
                    </div>

                    {{-- @if($errors->has('role'))
                        <span class="text-danger">
                            {{$errors->first('role') }}
                        </span>
                    @endif
					<div class="form-wrapper">
                        <label for="role">نقش</label>
						<select name="role" id="role" class="form-control">
							<option value="" disabled @if(empty($userinfo->role)) selected @endif>نقش</option>
							<option value="1" @if($userinfo->role==1) selected @endif>ادمین</option>
							<option value="2" @if($userinfo->role==2) selected @endif>کاربر</option>
							<option value="3" @if($userinfo->role==3) selected @endif>مهمان</option>
						</select>
                    </div> --}}

                    @if($errors->has('gender'))
                        <span class="text-danger">
                            {{$errors->first('gender') }}
                        </span>
                    @endif
					<div class="form-wrapper">
                        <label for="gender">جنسیت</label>
						<select name="gender" id="gender" class="form-control">
							<option value="" disabled @if(empty($userinfo->gender)) selected @endif>جنسیت</option>
							<option value="2" @if($userinfo->gender==2) selected @endif>آقا</option>
							<option value="1" @if($userinfo->gender==1) selected @endif>خانم</option>
						</select>
                    </div>
                    <div class="buttons">
                        <button type="submit">ویرایش
                            <i class="fa fa-arrow-left"></i>
                        </button>
                        {{-- <a href="/allusers" class="btn-danger">انصراف</a> --}}
                    </div>
				</form>
			</div>
		</div>
@endsection
