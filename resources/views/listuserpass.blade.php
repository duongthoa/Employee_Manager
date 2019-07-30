@extends('layouts.admin')
@section('title','Quản lý nhân viên')
@section('content')
    <ul class="breadcrumb">
		<li>
			<i class="icon-home"></i>
			<a href="/">Trang quản trị</a>
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
					<div class="box-content" >
						<table class="table table-striped table-bordered bootstrap-datatable datatable" >
						    <thead>
                                <tr>
								  <th >Mã nhân viên</th>
								  <th>Tên nhân viên</th>
								  <th>Tên đăng nhập</th>
								  <th>Email</th>
								  <th>Thao tác</th>
							    </tr>
						    </thead>   
						    <tbody>
							@foreach ($users as $user)
							<tr>
								<td class="center">{{ $user->id }}</td>
								<td class="center">{{ $user->HoTenNV }}</td>
								<td class="center">{{ $user->username }}</td>
								<td class="center">{{ $user->email }}</td>
								<td class="center" style="text-align: center; vertical-align: middle;">
									<a class="btn btn-info" href="user/reset">
										<i class="halflings-icon white repeat"></i> 
									</a>
								</td>
                            </tr>
                            @endforeach
						    </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="4" style="text-align: center; vertical-align: middle;"></td>
                                    <td colspan="1" style="text-align: center; vertical-align: middle;">
                                        <a class="btn btn-info" href="user/reset">Reset all</a>
                                    </td>
                                </tr>
                            </tfoot>
					    </table>            
					</div>
				</div><!--/span-->
			
	</div><!--/row-->
			
@endsection