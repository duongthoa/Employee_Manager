@extends('layouts.admin')
@section('title','Quản lý phòng ban')
@section('content')
    <ul class="breadcrumb">
		<li>
			<i class="icon-home"></i>
			<a href="/">Trang quản trị</a>
			<i class="icon-angle-right"></i> 
		</li>
		<li>
			<i class="icon-list-alt"></i>
			<a href="#">Quản lý phòng ban</a>
		</li>
	</ul>
    <div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white user"></i><span class="break"></span>Danh sách phòng ban</h2>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						    <thead>
							  <tr>
								  <th>Mã phòng ban</th>
								  <th>Tên phòng ban</th>
								  <th>Thao tác</th>
							  </tr>
						    </thead>   
						    <tbody>
                            @foreach ($phongbans as $phongban)
							<tr>
								<td>{{ $phongban->id }}</td>
								<td class="center">{{ $phongban->TenPB }}</td>
								<td class="center">
									<a class="btn btn-info" href="department/{{ $phongban->id }}/edit">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="department/{{ $phongban->id }}/delete">
										<i class="halflings-icon white trash"></i> 
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