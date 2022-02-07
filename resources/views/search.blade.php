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
                            <li class="breadcrumb-item"> قواعد البيانات</li>
                            <li class="breadcrumb-item">بحث مخصص</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


<div class="row">
            <div class="col-sm-12">
				<form id="validation-form123" action="#!">
					<div class="card">
						<div class="card-header">
							<h5>بحث مخصص</h5>
						</div>
						<div class="card-body">
                            <div class="row">
								<div class="col-md-2">
									<div class="form-group">
										<label class="input-group-text" for="Text">نوع الشركة</label>
										<select class="js-example-rtl col-sm-12" multiple="multiple">
											<option value="AL">All</option>
											<option value="WY">قطاع عام</option>
											<option value="WY">قطاع خاص</option>
										</select>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<label class="input-group-text" for="Text">حالة العميل</label>
										<select class="js-example-rtl col-sm-12" multiple="multiple">
											<option value="AL">All</option>
											<option value="pitons">يعمل</option>
											<option value="cams">لا يعمل</option>
											<option value="nuts">تحت المتابعة</option>
										</select>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<label class="input-group-text" for="Text">نوع العميل</label>
										<select class="js-example-rtl col-sm-12" multiple="multiple">
											<option value="AL">All</option>
											<option value="pitons">شركة</option>
											<option value="cams">تاجر</option>
											<option value="nuts">فني</option>
										</select>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label class="input-group-text" for="Text">نوع النشاط</label>
										<select class="js-example-rtl col-sm-12" multiple="multiple">
											<option value="AL">All</option>
											<option value="1">محل تجارى</option>
											<option value="2">ورشة فنية</option>
											<option value="3">شركة بترول</option>
										</select>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label class="input-group-text" for="Text">الإدارة المختصة</label>
										<select class="js-example-rtl col-sm-12" multiple="multiple">
											<option value="AL">All</option>
											<option value="pitons">المشتريات</option>
											<option value="cams">المخاذن</option>
											<option value="nuts">الانتاج</option>
										</select>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label class="input-group-text" for="Text">المندوب</label>
										<select class="js-example-rtl col-sm-12" multiple="multiple">
											<option value="AL">All</option>
											<option value="1">محمد محمود سالم</option>
											<option value="2">علي عبد الرحمن سمير</option>
											<option value="3">سيد علي عادل</option>
										</select>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label class="input-group-text" for="Text">المحافظة</label>
										<select class="js-example-rtl col-sm-12" multiple="multiple">
											<option value="AL">All</option>
											<option value="1">القاهرة</option>
											<option value="2">الجيزة</option>
											<option value="3">الاسكندرية</option>
										</select>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label class="input-group-text" for="Text">المدينة</label>
										<select class="js-example-rtl col-sm-12" multiple="multiple">
											<option value="AL">All</option>
											<option value="1">القاهرة</option>
											<option value="2">الجيزة</option>
											<option value="3">الاسكندرية</option>
										</select>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label class="input-group-text" for="Text">المنطقة</label>
										<select class="js-example-rtl col-sm-12" multiple="multiple">
											<option value="AL">All</option>
											<option value="1">القاهرة</option>
											<option value="2">الجيزة</option>
											<option value="3">الاسكندرية</option>
											<option value="4">مرسى مطروح</option>
											<option value="5">بور سعيد</option>
										</select>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label class="input-group-text" for="Text">المنشأ</label>
										<select class="js-example-rtl col-sm-12" multiple="multiple">
											<option value="AL">XXXX1</option>
											<option value="WY">XXXX2</option>
											<option value="WY">XXXX3</option>
											<option value="WY">XXXX4</option>
											<option value="WY">XXXX5</option>
										</select>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label class="input-group-text" for="Text">التطبيق</label>
										<select class="js-example-rtl col-sm-12" multiple="multiple">
											<option value="AL">XXXX1</option>
											<option value="WY">XXXX2</option>
											<option value="WY">XXXX3</option>
											<option value="WY">XXXX4</option>
											<option value="WY">XXXX5</option>
										</select>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label class="input-group-text" for="Text">آنواع الغازات </label>
										<select class="js-example-rtl col-sm-12" multiple="multiple">
											<option value="AL">XXXX1</option>
											<option value="WY">XXXX2</option>
											<option value="WY">XXXX3</option>
											<option value="WY">XXXX4</option>
											<option value="WY">XXXX5</option>
										</select>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label class="input-group-text" for="Text">آنواع العبوات </label>
										<select class="js-example-rtl col-sm-12" multiple="multiple">
											<option value="AL">XXXX1</option>
											<option value="WY">XXXX2</option>
											<option value="WY">XXXX3</option>
											<option value="WY">XXXX4</option>
											<option value="WY">XXXX5</option>
										</select>
									</div>
								</div>
							</div>
                            <button type="submit" class="btn btn-primary">بحث</button>
						</div>
					</div>
				</form>
            </div>
			
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<div class="modal fade" id="modal-report" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">بحث مخصص</h5>
                <p>لتحديد أكثر من متغير يجب الضغط على زر CTR</p>
                <p>في حالة إختيار اكثر من متغير من قائمة، سيشمل البحث جميع القائم الفرعية لهذة المتغيرات</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label class="input-group-text" for="Text">/label>
								<select class="js-example-rtl col-sm-12" multiple="multiple">
									<option value="AL">إضافة عميل جديد</option>
									<option value="WY">إدارة قواعد العملاء</option>
									<option value="WY">إدارة المستخدمين</option>
									<option value="WY">إدارة القوائم المندسلة</option>
								</select>
							</div>
						</div>
                        <div class="col-sm-12">
                            <h5 class="mt-3">إنشاء كلمة المرور الخاصة بالمستخدم</h5>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="Facebook">ادخل كلمة مرور</label>
                                <input type="text" class="form-control" id="Facebook" placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="Twitter">أعد كتابة كلمة المرور</label>
                                <input type="text" class="form-control" id="Twitter" placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <button class="btn btn-primary">تسجيل</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection