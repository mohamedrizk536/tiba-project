@extends('layouts.app')
@section('section')



<section class="pcoded-main-container">
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
                            <li class="breadcrumb-item"><i class="feather icon-home"></i></li>
                            <li class="breadcrumb-item">قواعد البيانات</li>
                            <li class="breadcrumb-item">اضافة عميل</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ Form Validation ] start -->
{{-- {{route('client.edit',$client->id)}} --}}
            <div class="col-sm-12">
				<form  id="validation-form123" action="" Method="POST" enctype="multipart/form-data">
                    @csrf

					<div class="card">
						<div class="card-header">
							<h5>إضافة عميل جديد</h5>
						</div>
						<div class="card-body">
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="form-group">
											<label class="input-group-text">السجل التجارى</label>
                                        <input type="text" value="{{$clientinfo['commercial_record']}}" class="form-control" id="Text" placeholder="123" name="	commercial_record">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label class="input-group-text" for="Text">السجل الضريبى</label>
                                        <input type="text" value="{{$clientinfo['tax_record']}}" name="tax_record" class="form-control" id="Text" placeholder="123" >
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="input-group-text" for="Text">الاسم القانوني للعميل</label>
                                        <input type="text" value="{{$clientinfo['lawer_name']}}" class="form-control" id="Text" placeholder="" name="lawer_name">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="input-group-text" for="Text">الاسم التجاري للعميل</label>
                                        <input type="text" value="{{$clientinfo['commercial_name']}}" class="form-control" id="Text" placeholder="" name="commercial_name">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label class="input-group-text" for="Text">رقم الفاكس </label>
                                        <input type="text" value="{{$clientinfo['fax']}}" class="form-control" id="Text" placeholder="123" name="fax">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label class="floating-label" for="Text">رقم الهاتف</label>
                                        <input type="text" value="{{$clientinfo['first_phone']}}" class="form-control" name="first_phone" id="Text" placeholder="123">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label class="floating-label" for="Text">رقم هاتف اضافي</label>
                                        <input type="text" value="{{$clientinfo['second_phone']}}" class="form-control" id="Text" placeholder="123" name="second_phone">
                                    </div>
                                </div>
								<div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="floating-label" for="Email">البريد الالكتروني</label>
                                        <input type="email" value="{{$clientinfo['email']}}" class="form-control" id="Email" name="email" aria-describedby="emailHelp" value="">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="floating-label">شعار الشركة</label>
                                        <div>
                                            <input type="file" value="{{$clientinfo['logo']}}" class="validation-file" name="logo">
                                        </div>
                                    </div>
                                </div>
								<div class="col-sm-2">
                                    <div class="form-group">
										<div class="custom-control custom-radio">
											<input type="radio" class="custom-control-input" id="customControlValidation2" name="sector_type" >
											<label class="custom-control-label" for="customControlValidation2">قطاع عام</label>
										</div>
										<div class="custom-control custom-radio">
											<input type="radio"  class="custom-control-input" id="customControlValidation3" name="sector_type" >
											<label class="custom-control-label" for="customControlValidation3">قطاع خاص</label>
										</div>
									</div>
								</div>
								<div class="col-md-2">
									<div class="input-group mb-3">
									<a class="input-group-text" href="#!"><i class="fas fa-plus-circle"></i></a>
										<input type="text" value="{{$clientinfo['worker_name']}}" name="worker_name" class="form-control" id="Text" placeholder="اسم الشخص المسئول">
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<input type="text" value="{{$clientinfo['job_title']}}" name="job_title" class="form-control" id="Text" placeholder="المسمى الوظيفي">
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<select class="form-control" name ="management_type">
											<option value ="" >{{$clientinfo['management_type']}}</option>
											<optgroup label="إدارة">
												<option value="pitons">المشتريات</option>
												<option value="cams">المخاذن</option>
												<option value="nuts">الانتاج</option>
											</optgroup>
										</select>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group input-group-prepend">
										<input type="text" name="" class="form-control" id="Text" placeholder="رقم الهاتف">
										<input type="text" value="{{$clientinfo['enternal_phone']}}" name="enternal_phone" class="form-control" id="Text" placeholder="داخلي">
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<input type="text" value="{{$clientinfo['worker_phone']}}" name="worker_phone" class="form-control" id="Text" placeholder="رقم المحمول">
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<input type="text" value="{{$clientinfo['worker_email']}}" name="worker_email" class="form-control" id="Text" placeholder="البريد الالكتروني">
									</div>
								</div>


								<div class="col-md-2">
									<div class="form-group">
										<select  class="form-control" name="delegator" >
											<option value="">{{$clientinfo['delegator']}}</option>
											<optgroup label="إختر ..">
											<option value="1">محمد محمود سالم</option>
											<option value="2">علي عبد الرحمن سمير</option>
											<option value="3">سيد علي عادل</option>
											</optgroup>
										</select>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<select class="form-control" name="client_case">
											<option value="">{{$clientinfo['client_case']}}</option>
											<optgroup label="إختر ..">
												<option value="pitons">يعمل</option>
												<option value="cams">لا يعمل</option>
												<option value="nuts">تحت المتابعة</option>
											</optgroup>
										</select>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<select class="form-control" name="client_type">
											<option  value="">{{$clientinfo['client_type']}}</option>
											<optgroup label="إختر ..">
												<option value="pitons">شركة</option>
												<option value="cams">تاجر</option>
												<option value="nuts">فني</option>
											</optgroup>
										</select>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<select class="form-control" name="gover">
											<option value="">{{$clientinfo['gover']}}</option>
											<optgroup label="إختر ..">
											<option value="1">القاهرة</option>
											<option value="2">الجيزة</option>
											<option value="3">الاسكندرية</option>
											</optgroup>
										</select>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<select class="form-control" name="city">
											<option value="">{{$clientinfo['city']}}</option>
											<optgroup label="إختر ..">
											<option value="1">المعادي</option>
											<option value="2">مصر القديمة</option>
											<option value="3">حلوان</option>
											</optgroup>
										</select>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<select class="form-control" name = 'area'>
											<option value= ''>{{$clientinfo['area']}}</option>
											<optgroup label="إختر ..">
											<option value="1">المنيل</option>
											<option value="2">الهرم</option>
											<option value="3">فيصل</option>
											</optgroup>
										</select>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<select class="form-control" name="active_type">
											<option value="">{{$clientinfo['active_type']}}</option>
											<optgroup label="إختر ..">
											<option value="1">محل تجارى</option>
											<option value="2">ورشة فنية</option>
											<option value="3">شركة بترول</option>
											</optgroup>
										</select>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<select class="form-control" name="line_number_type">
											<option value="">{{$clientinfo['line_number_type']}}</option>
											<optgroup label="إختر ..">
											<option value="1" @if($clientinfo['line_number_type'] == 1) selected @endif>موبينيل</option>
											<option value="2">فودافون</option>
											<option value="3">اتصالات</option>
											<option value="4">وي</option>
											</optgroup>
										</select>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-group">
										<input type="text" value="{{$clientinfo['whats_number']}}" name="whats_number" class="form-control" id="Text" placeholder="رقم الواتس اب<">
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<input type="text" value="{{$clientinfo['address']}}" name="address" class="form-control" id="Text" placeholder="العنوان">
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-group">
										<input type="text" value="{{$clientinfo['location']}}" name="location" class="form-control" id="Text" placeholder="الموقغ الجغرافي">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="input-group-text" for="Text">المنشأ</label>
										<select class="js-example-rtl col-sm-12" multiple="multiple" name="source">
											<option value="AL">XXXX1</option>
											<option value="WY">XXXX2</option>
											<option value="WY">XXXX3</option>
											<option value="WY">XXXX4</option>
											<option value="WY">XXXX5</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="input-group-text" for="Text">التطبيق</label>
										<select class="js-example-rtl col-sm-12" multiple="multiple" name="app">
											<option value="AL">XXXX1</option>
											<option value="WY">XXXX2</option>
											<option value="WY">XXXX3</option>
											<option value="WY">XXXX4</option>
											<option value="WY">XXXX5</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="input-group-text" for="Text">آنواع الغازات </label>
										<select class="js-example-rtl col-sm-12" multiple="multiple" name="gas_type">
											<option value="AL">XXXX1</option>
											<option value="WY">XXXX2</option>
											<option value="WY">XXXX3</option>
											<option value="WY">XXXX4</option>
											<option value="WY">XXXX5</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="input-group-text" for="Text">آنواع العبوات </label>
										<select class="js-example-rtl col-sm-12" multiple="multiple" name="container_type">
											<option value="AL">XXXX1</option>
											<option value="WY">XXXX2</option>
											<option value="WY">XXXX3</option>
											<option value="WY">XXXX4</option>
											<option value="WY">XXXX5</option>
										</select>
									</div>
								</div>
							</div>
                            <button type="submit" class="btn btn-primary">تسجيل</button>
						</div>
					</div>
				</form>
            </div>
            <!-- [ Form Validation ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>

@endsection
