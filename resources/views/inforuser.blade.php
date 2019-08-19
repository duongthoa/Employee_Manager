@extends('layouts.staff')
@section('title','Thông tin cá nhân')
@section('content')
<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <div class="card">
            <div class="card-header text-center">
                <p class="card-text"><h2>Thông tin cá nhân</h2></p>
            </div>
            <div class="card-header">
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <h5>Username: </h5>
                        </div>
                        <div class="form-group">
                            <h5>Họ và tên: </h5>
                        </div>
                        <div class="form-group">
                            <h5>Email: </h5>
                        </div>
                        <div class="form-group">
                            <h5>Ngày sinh: </h5>
                        </div>
                        <div class="form-group">
                            <h5>Địa chỉ: </h5>
                        </div>
                        <div class="form-group">
                            <h5>Giới tính: </h5>
                        </div>
                        <div class="form-group">
                            <h5>Số điện thoại: </h5>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                           <h5>{{ Auth::user()->username }}</h5>
                        </div>
                        <div class="form-group">
                            <h5>{{ Auth::user()->HoTenNV }}</h5>
                        </div>
                        <div class="form-group">
                            <h5>{{ Auth::user()->email }}</h5>
                        </div>
                        <div class="form-group">
                            <h5>{{ Auth::user()->NgaySinh }}</h5>
                        </div>
                        <div class="form-group">
                            <h5>{{ Auth::user()->DiaChi }}</h5>
                        </div>
                        <div class="form-group">
                            <h5>{{ Auth::user()->GioiTinh }}</h5>
                        </div>
                        <div class="form-group">
                            <h5>{{ Auth::user()->SDT }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="col-sm-2"></div>
</div>
@endsection