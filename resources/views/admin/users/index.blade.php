@extends('layouts.adminlayout')

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Users</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Users</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12">
{{-- <div class="container">
    <div class="row justify-content-center">
            <div class="col-md-12"> --}}
                <div class="card">
                    {{-- <div class="card-header">Users</div> --}}
                        <div class="card-body">
                            <div class="table-responsive">
                            {{-- <p data-placement="top" data-toggle="tooltip" title="Add">
                                    <a href="/register" class="btn btn-primary " >
                                    <span class="glyphicon glyphicon-pencil"></span>Add
                                    </a>
                                </p> --}}
                                <table id="laravel_datatable" class="table text-center table-bordred table-striped  table-hover" >
                                    <thead>
                                        <th><input type="checkbox" class="checkthis" /></th>
                                        <th>آیدی</th>
                                        <th>نام و نام خانوادگی</th>
                                        <th>نام کاربری</th>
                                        <th>تلفن همراه</th>
                                        <th>ایمیل</th>
                                        {{-- <th>نقش</th> --}}
                                        <th>جنسیت</th>
                                        {{-- <th>تاریخ عضویت</th>
                                        <th>آخرین تغییر</th> --}}
                                        <th>Action</th>
                                        {{-- <th>Edit</th>
                                        <th>Delete</th> --}}
                                    </thead>
                                    <tbody>
                                        @foreach($users as $k=>$v)
                                        <tr>
                                        <td><input type="checkbox" class="checkthis" /></td>
                                        <td>{{$v['id']}}</td>
                                        <td>{{$v['name']}}</td>
                                        <td>{{$v['username']}}</td>
                                        <td>{{$v['mobile']}}</td>
                                        <td>{{$v['email']}}</td>
                                        <td>{{$v->genders->name}}</td>
                                        {{-- <td>{{$v['created_at']}}</td>
                                        <td>{{$v['updated_at']}}</td> --}}
                                        <td>
                                            <a href="/edit/{{$v["id"]}}" class="btn btn-primary btn-xs" data-toggle="tooltip" title="Edit">
                                                <span class="fa fa-edit"></span>
                                            </a>
                                            <a href="/delete/{{$v["id"]}}" class="btn btn-danger btn-xs" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');" >
                                                <span class="fa fa-trash"></span>
                                            </a>
                                        </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                            <div class="clearfix"></div>
                            {{-- <ul class="pagination pull-right">
                                <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
                            </ul> --}}
                        </div>
                    </div>
	            </div>
            </div>
    </div>
</div>
</section>

@endsection
