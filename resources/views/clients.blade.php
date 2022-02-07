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
                            <li class="breadcrumb-item">عرض العملاء</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

<!-- [ Main Content ] start -->

        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- customar project  start -->
            <div class="col-xl-12">
                <div class="card">
					<div class="card-header">
						<h5>عرض العملاء</h5>
					</div>
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-sm-6">
                            </div>
                            <div class="col-sm-6 text-right">
                                <button class="btn btn-success btn-sm  mb-3 btn-round"><i class="feather icon-download"></i></button>
                                <button class="btn btn-success btn-sm  mb-3 btn-round"><i class="feather icon-printer"></i></button>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="report-table" class="table table-bordered table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>م</th>
                                        <th> السجل التجاري</th>
                                        <th> السجل الضريبي</th>
                                        <th>الاسم القانوني </th>
                                        <th>الاسم التجاري </th>
                                        <th>رقم الفاكس</th>
                                        <th>رقم الهاتف</th>
                                        <th>البريد الالكتروني</th>
                                        <th>الشعار </th>
                                        <th>نوع الشركة</th>
                                        <th> الشخص المسئول</th>
                                        <th>المندوب</th>
                                        <th>حالة العميل</th>
                                        <th>نوع العميل</th>
                                        <th>المحافظة</th>
                                        <th>المدينة</th>
                                        <th>المنطقة</th>
                                        <th>نوع النشاط</th>
                                        <th>خط التيفون</th>
                                        <th>رقم الواتس اب</th>
                                        <th>العنوان</th>
                                        <th>الموقع الجغرافي</th>
                                        <th>المنشأ</th>
                                        <th>التطبيق</th>
                                        <th>أنواع الغازات</th>
                                        <th>أنواع العبوات</th>
                                        <th>عرض، تعديل وحذف</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clients as $client )


                                    <tr>
                                        <td>22222222</td>
                                        <td>{{$client->commercial_record}}</td>
                                        <td>{{$client->tax_record}}</td>
                                        <td>{{$client->lawer_name}}</td>
                                        <td>{{$client->commercial_name}}</td>
                                        <td>{{$client->fax}}</td>
                                        <td class="text-wrap">
											<span class="badge badge-primary inline-block">{{$client->first_phone}}</span>
											<span class="badge badge-primary inline-block">{{$client->second_phone}}</span>
										</td>
                                        <td>{{$client->email}}</td>
										<td><img src="{{url("/images/client_images/$client->logo")}}" class="img-radius" width="30px" height="30px"></td>
										<td>قطاع خاص</td>
                                        <td class="text-wrap">
											<span class="badge badge-primary inline-block">{{$client->worker_name}}</span>
											<span class="badge badge-primary inline-block">{{$client->worker_name}}</span>
										</td>
										<td>{{$client->delegator}}</td>
										<td>{{$client->client_case}}</td>
										<td>{{$client->client_type}}</td>
										<td>{{$client->gover}}</td>
										<td>{{$client->city}}</td>
										<td>{{$client->area}}</td>
										<td>{{$client->active_type}}</td>
										<td>{{$client->line_number_type}}</td>
										<td>{{$client->whats_number}}</td>
										<td>{{$client->address}}</td>
										<td>
											<a href="#!" class="btn btn-info btn-sm"><i class="feather icon-map-pin"></i> {{$client->location}} </a>
										</td>
                                        <td class="text-wrap">
											<span class="badge badge-primary inline-block">{{$client->source}}</span>
											<span class="badge badge-primary inline-block">{{$client->source}}</span>
										</td>
                                        <td class="text-wrap">
											<span class="badge badge-primary inline-block">{{$client->app}}</span>
										</td>
                                        <td class="text-wrap">
											<span class="badge badge-primary inline-block">{{$client->gas_type}}</span>
											<span class="badge badge-primary inline-block">{{$client->gas_type}}</span>
										</td>
                                        <td class="text-wrap">
											<span class="badge badge-primary inline-block">{{$client->container_type}}</span>
											<span class="badge badge-primary inline-block">{{$client->container_type}}</span>
										</td>
                                        <td>
                                            <a href="#!" class="btn btn-info btn-sm"><i class="feather icon-list"></i></a>
                                            <a href="{{route('clients.edit',$client->id)}}" class="btn btn-info btn-sm"><i class="feather icon-edit"></i></a>
                                            <a href="#!" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i></a>
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
<!-- [ Main Content ] end -->

@endsection
