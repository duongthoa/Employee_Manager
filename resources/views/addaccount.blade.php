@extends('layouts.admin')
@section('title','Quản lý nhân viên')
@section('content')
    <ul class="breadcrumb">
		<li>
			<i class="icon-home"></i>
			<a href="/">Trang chủ</a>
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
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Thêm tài khoản nhân viên</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" role="form" action="{{ url('/addaccount') }}" method="post">
							<fieldset>
							<div class="control-group">
								    <label class="control-label" for="focusedInput">Tên nhân viên:</label>
								    <div class="controls">
                                        <input class="form-control" id="HoTenNV" placeholder="Tên nhân viên" name="HoTenNV" type="HoTenNV" value=""> 
                                    </div>
                                    <div class="controls"><p style="color:red">{{$errors->first('HoTenNV')}}</p></div>
                                </div>
							    <div class="control-group">
								    <label class="control-label" for="focusedInput">Username:</label>
								    <div class="controls">
                                        <input class="form-control" id="username" placeholder="Username" name="username" type="username" value=""> 
                                    </div>
                                    <div class="controls"><p style="color:red">{{$errors->first('username')}}</p></div>
                                </div>
                                <div class="control-group">
								    <label class="control-label" for="focusedInput">Email:</label>
								    <div class="controls">
                                        <input class="form-control" id="email" placeholder="Email" name="email" type="email" value="">   
                                    </div>
                                    <div class="controls"><p style="color:red">{{$errors->first('email')}}</p></div>
                                </div>
                                <div class="control-group">
								    <label class="control-label" for="focusedInput">Password:</label>
								    <div class="controls">
                                        <input class="form-control" id="password" placeholder="Password" name="password" type="password" value="">  
                                    </div>
                                    <div class="controls"><p style="color:red">{{$errors->first('password')}}</p></div>
                                </div>
                                <div class="control-group">
								    <label class="control-label" for="selectError3">Level:</label>
								    <div class="controls">
										<select id="selectError3" name="level">
											<option>0</option>
											<option>1</option>
								  		</select> 
                                    </div>
									<div class="controls"><p style="color:red">{{$errors->first('level')}}</p></div>
                                </div>
                                {!! csrf_field() !!}
							  <div class="form-actions">
								<button type="submit" class="btn btn-primary">Thêm</button>
							  </div>
							</fieldset>
						  </form>
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
			
@endsection