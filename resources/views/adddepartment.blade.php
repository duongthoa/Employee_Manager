@extends('layouts.admin')
@section('title','Quản lý phòng ban')
@section('content')
    <ul class="breadcrumb">
		<li>
			<i class="icon-home"></i>
			<a href="/">Trang chủ</a>
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
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Thêm phòng ban</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" role="form" action="{{ url('/adddepartment') }}" method="post">
							<fieldset>
							    <div class="control-group">
								    <label class="control-label" for="focusedInput">Tên phòng ban:</label>
								    <div class="controls">
                                        <input class="form-control" id="TenPB" placeholder="Tên phòng ban" name="TenPB" type="TenPB" value=""> 
                                    </div>
                                    <div class="controls"><p style="color:red">{{$errors->first('TenPB')}}</p></div>
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