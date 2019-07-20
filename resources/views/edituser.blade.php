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
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Chỉnh sửa thông tin nhân viên</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" role="form" action="{{ url('/user/update') }}" method="post">
							<fieldset>
                                <input type="hidden" name="id" value="{{ old('id', $getUser['id'])}}">
							    <div class="control-group">
								    <label class="control-label" for="focusedInput">Tên nhân viên:</label>
								    <div class="controls">
                                        <input class="form-control" id="HoTenNV" placeholder="Tên nhân viên" name="HoTenNV" type="HoTenNV" value="{{ old('HoTenNV', $getUser['HoTenNV']) }}"> 
                                    </div>
                                </div>
                                
                                <div class="control-group">
								    <label class="control-label" for="focusedInput">Chức vụ:</label>
								    <div class="controls">
										<select id="selectError3" name="ChucVu">
											<option>Nhân viên</option>
											<option>Trưởng phòng</option>
								  		</select> 
                                    </div>
                                </div>
                                <div class="control-group">
								    <label class="control-label" for="focusedInput">Phòng ban:</label>
								    <div class="controls">
										<select id="selectError3" name="TenPB">
											<option>Bộ phận kỹ thuật</option>
											<option>Bộ phận quản lý</option>
								  		</select> 
                                    </div>
                                </div>
                                <div class="control-group">
								    <label class="control-label" for="focusedInput">Level:</label>
								    <div class="controls">
										<select id="selectError3" name="level">
											<option>0</option>
											<option>1</option>
								  		</select> 
                                    </div>
                                </div>
                                {!! csrf_field() !!}
							  <div class="form-actions">
								<button type="submit" class="btn btn-primary">Cập nhật</button>
							  </div>
							</fieldset>
						  </form>
					</div>
				</div><!--/span-->
			
	</div><!--/row-->	
@endsection