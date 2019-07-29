@extends('layouts.staff')
@section('title','Thông tin cấp dưới')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header text-center">
                <p class="card-text"><h2>Thông tin nhân viên</h2></p>
            </div>
            
            <div class="card-body text-center">
            <form class="form-horizontal" role="form" action="{{ url('/inforstaff/usersListPhpExcel') }}" method="get">
                <table class="table table-bordered bootstrap-datatable datatable">
					<thead class="thead-light">
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
                        @foreach ($Users as $user)
							<tr>
								<td class="center">{{ $user->id }}</td>
								<td class="center">{{ $user->HoTenNV }}</td>
								<td class="center">{{ $user->email }}</td>
								<td class="center">{{ $user->DiaChi }}</td>
								<td class="center">{{ $user->SDT }}</td>
								<td class="center">{{ $user->phongbans[0] ? $user->phongbans[0]->pivot->ChucVu : '' }}</td>
								<td class="center">{{ $user->phongbans[0] ? $user->phongbans[0]->TenPB : '' }}</td>
                            </tr>
                        @endforeach  
					</tbody>
				</table>
                {!! csrf_field() !!}
                    <button type="submit" class="btn btn-primary">Xuất danh sách nhân viên</button>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection