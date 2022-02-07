
@extends('layouts.app')
@section('section')



<div class="" id="modal-report" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
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
            <form action="{{route('user.update',$userinfo->id)}}" method="POST">
            @csrf


    {{-- @dd($userinfo); --}}
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="floating-label" for="Name" >الأسم بالكامل</label>
                            <input type="text" value ="{{$userinfo['name']}}" class="form-control" name = 'name' id="Name" placeholder="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group fill">
                            <label class="floating-label" for="Email">البريد الالكتروني</label>
                            <input type="email" value ="{{$userinfo['email']}}" class="form-control" name = 'email' id="Email" placeholder="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group fill">
                            <label class="floating-label" for="Password">اسم المستخدم *أحرف وارقام انجليزية فقط</label>
                            <input type="text" value ="{{$userinfo['username']}}" class="form-control" name = 'username' id="Password" placeholder="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="floating-label" for="Phone">رقم الهاتف</label>
                            <input type="text" value ="{{$userinfo['phone']}}" class="form-control" name = 'phone' id="Phone" placeholder="">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">

                            <label class="input-group-text" for="Text">صلاحيات المستخدم - إضغط CTR لتحديد اكثر من صلاحية</label>
                            <select class="js-example-rtl col-sm-12" multiple="multiple">
                                <select class="col-sm-12" multiple="multiple">

                                    {{-- @foreach ($perms as $perm )
                                    <option value="{{$perm->id}}">{{$perm->permission_type}}</option>

                                    @endforeach --}}

                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <h5 class="mt-3">إنشاء كلمة المرور الخاصة بالمستخدم</h5>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="floating-label" for="Facebook">ادخل كلمة مرور</label>
                            <input type="text" value ="" class="form-control" name = 'password' id="Facebook" placeholder="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="floating-label" for="Twitter">أعد كتابة كلمة المرور</label>
                            <input type="text" value ="{{$userinfo['confirmation_password']}}" class="form-control" name = 'confirmation_password' id="Twitter" placeholder="">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary">تعديل</button>

                    </div>
                </div>

            </form>
         </div>
        </div>
    </div>
</div>
<!-- [ Main Content ] end -->

@endsection


