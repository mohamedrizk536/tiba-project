@extends('layouts.app')
@section('section')


<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">نظام قاعدة بيانات العملاء</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"> إدارة المستخدمين</li>
                            <li class="breadcrumb-item">عرض المستخدمين</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- customar project  start -->
            <div class="col-xl-12">
                <div class="card">
					<div class="card-header">
						<h5>عرض المستخدمين</h5>
					</div>
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-sm-6">
                            </div>
                            <div class="col-sm-6 text-right">
                                <button class="btn btn-success btn-sm  mb-3 btn-round" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i> أضف جديد</button>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="report-table" class="table table-bordered table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>الاسم</th>
                                        <th>رقم الهاتف</th>
                                        <th>البريد الالكتروني</th>
                                        <th>اسم المستخدم</th>
                                        <th>صلاحيات المستخدم</th>
                                        <th>تعديل وحذف</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($userss as $user )


                                    <tr>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->phone}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->username}}</td>
                                        <td class="text-wrap">
											<span class="badge badge-primary inline-block">إضافة عميل جديد</span>
											<span class="badge badge-primary inline-block">إدارة قواعد العملاء</span>
											<span class="badge badge-primary inline-block">إدارة المستخدمين</span>
											<span class="badge badge-primary inline-block">إدارة القوائم المندسلة</span>
										</td>
                                        <td>
                                            <a href="{{route('users.edit',$user->id)}}" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
                                            <a href="{{route('users.destory',['userid'=>$user->id])}}" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- customar project  end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<div class="modal fade" id="modal-report" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">أضف جديد</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            @if($errors->any())
<h4>{{$errors->first()}}</h4>
@endif
                <form action="{{route('users.store')}}" method="POST">
                @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="Name" >الأسم بالكامل</label>
                                <input type="text" class="form-control" name = 'name' id="Name" placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group fill">
                                <label class="floating-label" for="Email">البريد الالكتروني</label>
                                <input type="email" class="form-control" name = 'email' id="Email" placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group fill">
                                <label class="floating-label" for="Password">اسم المستخدم *أحرف وارقام انجليزية فقط</label>
                                <input type="password" class="form-control" name = 'username' id="Password" placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="Phone">رقم الهاتف</label>
                                <input type="text" class="form-control" name = 'phone' id="Phone" placeholder="">
                            </div>
                        </div>
						<div class="col-md-12">
							<div class="form-group">

								<label class="input-group-text" for="Text">صلاحيات المستخدم - إضغط CTR لتحديد اكثر من صلاحية</label>
								<select class="js-example-rtl col-sm-12" multiple="multiple">
                                    {{-- <select class="col-sm-12" multiple="multiple"> --}}

                                        @foreach ($perms as $perm )
                                        <option value="{{$perm->id}}">{{$perm->permission_type}}</option>

                                        @endforeach

								</select>
							</div>
						</div>
                        <div class="col-sm-12">
                            <h5 class="mt-3">إنشاء كلمة المرور الخاصة بالمستخدم</h5>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="Facebook">ادخل كلمة مرور</label>
                                <input type="text" class="form-control" name = 'password' id="Facebook" placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="Twitter">أعد كتابة كلمة المرور</label>
                                <input type="text" class="form-control" name = 'confirmation_password' id="Twitter" placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary">تسجيل</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- [ Main Content ] end -->

@endsection
