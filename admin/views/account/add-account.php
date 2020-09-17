<form action="" method="POST" onsubmit="return validition()" enctype="multipart/form-data">
	<legend>Thêm mới tài khoản</legend>
	<div class="form-group">
		<label for="">Tên hiển thị <span id="error_name" style="color: red;">(*)</span></label>
		<input type="text" name="name" class="form-control" id="txt_name" placeholder="Nhập tên bạn muốn hiển thị..." onblur="checkName();" />
	</div>

	<div class="form-group">
		<label for="">Loại tài khoản<span id="error_phone" style="color: red;">(*)</span></label>
		<select name="type" class="form-control">
		  	<option value="Quản lý">Quản lý</option>
		  	<option value="Khách hàng">Khách hàng</option>
		  	<option value="Nhân viên">Nhân viên</option>
		</select>
	</div>

	<div class="form-group">
		<label for="">Tên đăng nhập	 <span id="error_email" style="color: red;">(*)</span></label>
		<input type="text" name="user" onblur="checkMail();" class="form-control" id="txt_user" placeholder="Nhập tên đăng nhập..."/>
	</div>

	<div class="form-group">
		<label for="">Mật khẩu <span id="error_pass" style="color: red;">(*)</span></label>
		<input type="password" name="pass" onblur="checkPass();" class="form-control" id="txt_pass" placeholder="********"/>
	</div>

	<div class="form-group">
		<label for="">Xác nhận mật khẩu <span id="error_conpass" style="color: red;">(*)</span></label>
		<input onblur="check_conPass();" name="check_pass" type="password" class="form-control" id="txt_conpass" placeholder="********"/>
	</div>

	<div class="form-group">

		<label for="">Ảnh đại diện</label>
		<input style="width: 230px;" type="file" name="avatar" multiple="" class="form-control" id="">
	</div>

	<button type="submit" name="sm_add" class="btn btn-dark">
		Thêm mới
	</button>
	<button type="reset" class="btn btn-dark">
		Nhập lại
	</button>

</form>