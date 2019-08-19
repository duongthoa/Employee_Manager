@extends('layouts.staff')
@section('title','Thông tin cá nhân')
@section('content')
<div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="text-center"><h2>Chỉnh sửa thông tin cá nhân<hr/></h2><br/></div>
                <form class="form-horizontal" role="form" action="{{ url('/staff/update') }}" method="post">
                    <input type="hidden" name="id" value="">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="username" class="form-control" id="username" placeholder="Username" name="username" value="{{ Auth::user()->username }}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="{{ Auth::user()->email }}">
                    </div>
                    <div class="form-group">
                        <label for="HoTenNV">Tên nhân viên:</label>
                        <input type="HoTenNV" class="form-control" id="HoTenNV" placeholder="Tên nhân viên" name="HoTenNV" value="{{ Auth::user()->HoTenNV }}">
                    </div>
                    <div class="form-group">
                        <label for="Ngaysinh">Ngày sinh:</label>
                        <input type="date" class="form-control" id="NgaySinh" placeholder="DD-MM-YYYY" name="NgaySinh" value="{{ Auth::user()->NgaySinh }}">
                    </div>
                    <div class="form-group">
                        <label for="DiaChi">Địa chỉ:</label>
                        <input type="DiaChi" class="form-control" id="DiaChi" placeholder="Địa chỉ" name="DiaChi" value="{{ Auth::user()->DiaChi }}">
                    </div>
                    <div class="form-group">
                        <label for="SDT">Số điện thoại:</label>
                        <input type="SDT" class="form-control" id="SDT" placeholder="Số điện thoại" name="SDT" value="{{ Auth::user()->SDT }}">
                    </div>
                    <div class="form-group">
                        <label for="GioiTinh">Giới tính:  
							<select id="selectError3" name="GioiTinh">
								<option>Nam</option>
								<option>Nữ</option>
							</select> 
                        </label>
                    </div>
                    {!! csrf_field() !!}
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                </form>
            <div class="col-sm-2"></div>
    
        </div>
@endsection