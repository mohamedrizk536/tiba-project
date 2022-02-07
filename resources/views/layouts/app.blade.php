<!DOCTYPE html>
<html lang="en">

<head>
    <title>TIBA - نظام قاعدة بيانات العملاء</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
    	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    	<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="egydesigner.com" />
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="assets/css/plugins/dataTables.bootstrap4.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="{{url('/')}}/assets/css/style.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/plugins/select2.min.css">
	<link rel="stylesheet" href="{{url('/')}}/assets/css/layout-rtl.css">


</head>
<body class="">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->
	<!-- [ navigation menu ] start -->
	<nav class="pcoded-navbar menupos-fixed ">
		<div class="navbar-wrapper  ">
			<div class="navbar-content scroll-div " >

				<div class="">
					<div class="main-menu-header">
						<img class="img-radius" src="assets/images/user/avatar.png" alt="User-Profile-Image">
						<div class="user-details">
							<span class="mb-0 font-weight-bold">مرحبا</span>
							<span class="mb-0 font-weight-bold">محمود على</span>
							<div id="more-details"><small>الاعدادات<i class="fa fa-chevron-down m-l-5"></i></small></div>
						</div>
					</div>
					<div class="collapse" id="nav-user-link">
						<ul class="list-inline">
							<li class="list-inline-item"><a href="user-profile.html" data-toggle="tooltip" title="الملف الشخصي"><i class="feather icon-user"></i></a></li>
							<li class="list-inline-item"><a href="auth-signin.html" data-toggle="tooltip" title="تسجيل خروج" class="text-danger"><i class="feather icon-power"></i></a></li>
						</ul>
					</div>
				</div>

				<ul class="nav pcoded-inner-navbar ">
					<li class="nav-item pcoded-menu-caption">
						<label>القائمة الرئيسية</label>
					</li>
					<li class="nav-item"><a href="animation.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-pie-chart"></i></span><span class="pcoded-mtext">رسوم بيانية</span></a></li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">قواعد البيانات</span></a>
						<ul class="pcoded-submenu">
							<li><a href="new_client.html">اضافة عميل</a></li>
							<li><a href="clients.html">عرض العملاء</a></li>
							<li><a href="search.html">بحث مخصص</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-menu-caption">
						<label>قائمة مدير النظام</label>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-users"></i></span><span class="pcoded-mtext">إدارة المستخدمين</span></a>
						<ul class="pcoded-submenu">
							<li><a href="user.html">عرض المستخدمين</a></li>
							<li><a href="users_roles.html">صلاحيات المستخدمين</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">إدارة القوائم المنسدلة </span></a>
						<ul class="pcoded-submenu">
							<li><a href="layout-horizontal.html" target="_blank">المسميات الوظيفية</a></li>
							<li><a href="layout-horizontal.html" target="_blank">النشاطات</a></li>
							<li><a href="layout-horizontal.html" target="_blank">المناديب</a></li>
							<li><a href="layout-horizontal.html" target="_blank">الغازات</a></li>
							<li><a href="layout-horizontal-2.html" target="_blank">العبوات</a></li>
							<li class="nav-item pcoded-hasmenu">
								<a href="#!" class="nav-link "><span class="pcoded-mtext">التقسيم الجغرافي</span></a>
								<ul class="pcoded-submenu">
									<li><a href="layout-horizontal.html" target="_blank">المحافظة</a></li>
									<li><a href="layout-horizontal-2.html" target="_blank">المدينة</a></li>
									<li><a href="layout-horizontal-rtl.html" target="_blank">المنطقة</a></li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>

				<div class="card text-center">
					<div class="card-block">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<i class="feather icon-sunset f-40"></i>
						<h6 class="mt-3">مساعدة !</h6>
						<p>برجاء تواصل معنا في حالة طلب اي دعم فني</p>
						<a href="#!" target="_blank" class="btn btn-primary btn-sm text-white m-0">تواصل الآن</a>
					</div>
				</div>

			</div>
		</div>
	</nav>
	<!-- [ navigation menu ] end -->
	<!-- [ Header ] start -->
	<header class="navbar pcoded-header navbar-expand-lg navbar-light headerpos-fixed">


				<div class="m-header">
					<a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
					<a href="#!" class="b-brand">
						<!-- ========   change your logo hear   ============ -->
						<!-- ========   change your logo hear   ============ -->
						<img src="assets/images/logo.png" alt="logo" class="logo">
					</a>
				</div>


	</header>
	<!-- [ Header ] end -->



<!-- [ Main Content ] start -->


        @yield('section')

        <script src="{{url('/')}}/assets/js/vendor-all.min.js"></script>
    <script src="{{url('/')}}/assets/js/plugins/bootstrap.min.js"></script>
    <script src="{{url('/')}}/assets/js/pcoded.min.js"></script>

<script src="{{url('/')}}/assets/js/plugins/jquery.dataTables.min.js"></script>
<script src="{{url('/')}}/assets/js/plugins/dataTables.bootstrap4.min.js"></script>
<!-- Apex Chart -->
<script src="{{url('/')}}/assets/js/plugins/apexcharts.min.js"></script>
<script src="{{url('/')}}/assets/js/plugins/select2.full.min.js"></script>
<script src="{{url('/')}}/assets/js/pages/form-select-custom.js"></script><script>
    // DataTable start
    $('#report-table').DataTable();
    // DataTable end
</script>
</body>

</html>
