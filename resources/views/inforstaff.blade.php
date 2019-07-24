@extends('layouts.staff')
@section('title','Thông tin nhân viên')
@section('content')
<div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
        <div class="card">
            <div class="card-header text-center">
                <p class="card-text"><h2>Thông tin nhân viên</h2></p>
            </div>
            <div class="card-header">
                <table class="table table-striped table-bordered bootstrap-datatable datatable">
					<thead>
						<tr>
							<th>Mã nhân viên</th>
							<th>Tên nhân viên</th>
                            <th>Email</th>
                            <th>Địa chỉ</th>
                            <th>Số điện thoại</th>
							<th>Chức vụ</th>
							<th>Phòng ban</th>
						</tr>
					</thead>   
					<tbody>
						@foreach ($users as $user)
						<tr>
							<td class="center">{{ $user->id }}</td>
							<td class="center">{{ $user->HoTenNV }}</td>
                            <td class="center">{{ $user->email }}</td>
                            <td class="center">{{ $user->DiaChi }}</td>
                            <td class="center">{{ $user->SDT }}</td>
							<td class="center">{{ $user->phongbans[0]->pivot->ChucVu }}</td>
							<td class="center">{{ $user->phongbans[0] ? $user->phongbans[0]->TenPB : '' }}</td>
                        </tr>
                        @endforeach
					</tbody>
				</table>
            </div>
        </div>
    <div class="col-sm-1"></div>
</div>
@endsection