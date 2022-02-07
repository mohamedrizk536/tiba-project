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
                            <li class="breadcrumb-item">صلاحيات المستخدمين</li>
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
						<h5>صلاحيات المستخدمين</h5>
					</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>الصلاحية</th>
                                        <th>وصف الصلاحية</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>إضافة عميل جديد</td>
                                        <td>يتمكن الحساب صاحب هذة الصلاحية من اضافة عملاء جدد فقط من خلال النظام  </td>
                                    </tr>
                                    <tr>
                                        <td>إدارة قواعد العملاء</td>
                                        <td>تمكن هذة الصلاحية صاحب الحساب من اضافة عملاء، عرض العملاء وعمل بحث مخصص</td>   
                                    </tr>
                                    <tr>
                                        <td>إدارة المستخدمين</td>
                                        <td>تمكن هذة الصلاحية صاحب الحساب من اضافة إضافة مستخدمين وتعديل صلاحيات المستخدمين الحاليين للنظام</td>   
                                    </tr>
                                    <tr>
                                        <td>إدارة القوائم المندسلة</td>
                                        <td>تمكن هذة الصلاحية صاحب الحساب من اضافة، تعديل وحذف جميع البيانات في القوائم المنسدلة بالاضفاة الى قوائم التقسيم الجغرافي</td>   
                                    </tr>
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


@endsection