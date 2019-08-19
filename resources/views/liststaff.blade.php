@extends('layouts.admin')
@section('title','Quản lý nhân viên')
@section('content')
    <ul class="breadcrumb">
		<li>
			<i class="icon-home"></i>
			<a href="/root">Trang quản trị</a>
			<i class="icon-angle-right"></i> 
		</li>
		<li>
			<i class="icon-user"></i>
			<a href="#">Quản lý nhân viên</a>
		</li>
	</ul>
    <div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white user"></i><span class="break"></span>Danh sách nhân viên</h2>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						    <thead>
							  <tr>
								  <th>Mã nhân viên</th>
								  <th>Tên nhân viên</th>
								  <th>Chức vụ</th>
								  <th>Phòng ban</th>
								  <th>Thao tác</th>
							  </tr>
						    </thead>   
						    <tbody>
							@foreach ($users as $user)
							<tr>
								<td class="center">{{ $user->id }}</td>
								<td class="center">{{ $user->HoTenNV }}</td>
								<td class="center">{{ $user->phongbans[0] ? $user->phongbans[0]->pivot->ChucVu : '' }}</td>
								<td class="center">{{ $user->phongbans[0] ? $user->phongbans[0]->TenPB : '' }}</td>
								<td class="center" style="text-align: center; vertical-align: middle;">
									<a class="btn btn-info" href="edituser/{{ $user->id }}/edit">
										<i class="halflings-icon white edit"></i>  
									</a>
								</td>
                            </tr>
                            @endforeach
						    </tbody>
					    </table>            
					</div>
				</div><!--/span-->
			
	</div><!--/row-->
			
@endsection