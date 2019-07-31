<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Trang quản trị</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- start: CSS -->
	<link id="bootstrap-style" href="{{ URL::asset('admin/css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
	<link href="{{ URL::asset('admin/css/bootstrap-responsive.min.css') }}" rel="stylesheet" media="screen">
	<link id="base-style" href="{{ URL::asset('admin/css/style.css') }}" rel="stylesheet" media="screen">
    <link id="base-style-responsive" href="{{ URL::asset('admin/css/style-responsive.css') }}" rel="stylesheet" media="screen">
    
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	
</head>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				
				<a class="brand" href="#"><span><h2>Trang quản trị</h2></span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i> Quản trị viên: {{ Auth::user()->HoTenNV }}
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Cài đặt</span>
								</li>
								<li><a href="home"><i class="halflings-icon home"></i> Trang chủ</a></li>
								<li><a href="staff"><i class="halflings-icon user"></i> Thông tin cá nhân</a></li>
								<li><a href="{{url('logout')}}"><i class="halflings-icon off"></i> Đăng xuất</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>
	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="/"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Thống kê</span></a></li>	
                        <li>
                            <a class="dropmenu" href="#"><i class="icon-user"></i><span class="hidden-tablet"> Quản lý nhân viên</span></a>
                            <ul>
								<li><a class="submenu" href="addaccount"><i class="icon-edit"></i><span class="hidden-tablet"> Thêm tài khoản</span></a></li>
								<li><a class="submenu" href="user"><i class="icon-list"></i><span class="hidden-tablet"> Thông tin nhân viên</span></a></li>
								<li><a class="submenu" href="edituser"><i class="icon-tasks"></i><span class="hidden-tablet"> Điều chỉnh phòng ban</span></a></li>
								<li><a class="submenu" href="user/pass"><i class="icon-lock"></i><span class="hidden-tablet"> Thay đổi mật khẩu</span></a></li>
							</ul>
                        </li>
						<li>
							<a class="dropmenu" href="#"><i class="icon-list-alt"></i><span class="hidden-tablet"> Quản lý phòng ban</span></a>
							<ul>
								<li><a class="submenu" href="adddepartment"><i class="icon-edit"></i><span class="hidden-tablet"> Thêm phòng ban</span></a></li>
								<li><a class="submenu" href="department"><i class="icon-list"></i><span class="hidden-tablet"> Thông tin phòng ban</span></a></li>
							</ul>	
						</li>
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->
			
			<!-- start: Content -->
			<div id="content" class="span10">
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="/">Trang quản trị</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="/">Thống kê</a></li>
			</ul>

			<div class="row-fluid">
				<div class="span3 statbox purple" onTablet="span6" onDesktop="span3">
					<div class="icon"><i class="icon-group"></i></div>
					<div class="number">300<i class="icon-arrow-up"></i></div>
					<div class="title"><h1>Nhân viên</h1></div>
				</div>
				<div class="span3 statbox green" onTablet="span6" onDesktop="span3">
					<div class="icon"><i class="icon-tasks"></i></div>
					<div class="number">8<i class="icon-arrow-up"></i></div>
					<div class="title"><h1>Phòng ban</h1></div>
					</div>
				</div>
			</div>	
			
	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
	
	<div class="clearfix"></div>

	<!-- start: JavaScript-->

    <script src="{{ URL::asset('admin/js/jquery-1.9.1.min.js') }}"></script>
	<script src="{{ URL::asset('admin/js/jquery-migrate-1.0.0.min.js') }}"></script>
	
		<script src="{{ URL::asset('admin/js/jquery-ui-1.10.0.custom.min.js') }}"></script>
	
		<script src="{{ URL::asset('admin/js/jquery.ui.touch-punch.js') }}"></script>
	
		<script src="{{ URL::asset('admin/js/modernizr.js') }}"></script>
	
		<script src="{{ URL::asset('admin/js/bootstrap.min.js') }}"></script>
	
		<script src="{{ URL::asset('admin/js/jquery.cookie.js') }}"></script>
	
		<script src="{{ URL::asset('admin/js/fullcalendar.min.js') }}"></script>
	
		<script src="{{ URL::asset('admin/js/jquery.dataTables.min.js') }}"></script>

		<script src="{{ URL::asset('admin/js/excanvas.js') }}"></script>
	<script src="{{ URL::asset('admin/js/jquery.flot.js') }}"></script>
	<script src="{{ URL::asset('admin/js/jquery.flot.pie.js') }}"></script>
	<script src="{{ URL::asset('admin/js/jquery.flot.stack.js') }}"></script>
	<script src="{{ URL::asset('admin/js/jquery.flot.resize.min.js') }}"></script>
	
		<script src="{{ URL::asset('admin/js/jquery.chosen.min.js') }}"></script>
	
		<script src="{{ URL::asset('admin/js/jquery.uniform.min.js') }}"></script>
		
		<script src="{{ URL::asset('admin/js/jquery.cleditor.min.js') }}"></script>
	
		<script src="{{ URL::asset('admin/js/jquery.noty.js') }}"></script>
	
		<script src="{{ URL::asset('admin/js/jquery.elfinder.min.js') }}"></script>
	
		<script src="{{ URL::asset('admin/js/jquery.raty.min.js') }}"></script>
	
		<script src="{{ URL::asset('admin/js/jquery.iphone.toggle.js') }}"></script>
	
		<script src="{{ URL::asset('admin/js/jquery.uploadify-3.1.min.js') }}"></script>
	
		<script src="{{ URL::asset('admin/js/jquery.gritter.min.js') }}"></script>
	
		<script src="{{ URL::asset('admin/js/jquery.imagesloaded.js') }}"></script>
	
		<script src="{{ URL::asset('admin/js/jquery.masonry.min.js') }}"></script>
	
		<script src="{{ URL::asset('admin/js/jquery.knob.modified.js') }}"></script>
	
		<script src="{{ URL::asset('admin/js/jquery.sparkline.min.js') }}"></script>
	
		<script src="{{ URL::asset('admin/js/counter.js') }}"></script>
	
		<script src="{{ URL::asset('admin/js/retina.js') }}"></script>

		<script src="{{ URL::asset('admin/js/custom.js') }}"></script>
	<!-- end: JavaScript-->
	
	
</body>
</html>
