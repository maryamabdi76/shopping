@extends('layouts.mainlayout')

@section('content')
		<div class="wrapper" style="background-image: url('images/bg-registration-form-1.jpg');">
			<div class="inner" style="display:block;max-width:90vw">
                <h3>فهرست کاربران</h3>
                <a href="/register" class="btn btn-add">اضافه کردن</a>
            <br>
            <table class="table table-striped text-center" style="">
                <thead>
                    <tr >
                        <th>آیدی</th>
                        <th>نام و نام خانوادگی</th>
                        <th>نام کاربری</th>
                        <th>تلفن همراه</th>
                        <th>ایمیل</th>
                        {{-- <th>نقش</th> --}}
                        <th>جنسیت</th>
                        <th>تاریخ عضویت</th>
                        <th>آخرین ورود</th>
                        <th>ویرایش</th>
                    </tr>
                </thead>
                <tbody id="header" class="tbody">
                    @foreach ($all as $value)
                        <tr>
                        <td>{{$value->id}}</td>
                        <td>{{$value->name}}</td>
                        <td>{{$value->username}}</td>
                        <td>{{$value->mobile}}</td>
                        <td>{{$value->email}}</td>
                        {{-- <td>{{$value->role==1? 'ادمین':'کاربر'}}</td> --}}
                        <td>{{$value->genders->name}}</td>
                        <td>{{$value->created_at}}</td>
                        <td>{{$value->updated_at}}</td>

                        <td>
                            {{-- <a class="updatelink" href="{{ URL::route('users.update',array('id'=>$value)) }}"><i class="zmdi zmdi-edit"></i> بروزرسانی</a> --}}
                            <a class="updatelink" href="{{url('updateusers/'.$value->id)}}"><i class="zmdi zmdi-edit"></i> بروزرسانی</a>
                            <a onclick="return confirm('Are you sure you want to delete this item?');" class="deletelink" href="{{url('deleteusers/'.$value->id)}}"><i class="zmdi zmdi-delete"></i> حذف</a>
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
