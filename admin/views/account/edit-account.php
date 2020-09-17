<form action="" method="POST" onsubmit="return validition()" enctype="multipart/form-data">
	<legend>Cập nhật tài khoản</legend>
	<div class="form-group">
		<label for="">Họ tên <span id="error_name" style="color: red;">(*)</span></label>
		<input type="text" name="name" class="form-control" id="txt_name" placeholder="Nhập họ tên đầy đủ" onblur="checkName();" value="<?php if(isset($_SESSION['name'])){echo $_SESSION['name'];} ?>" />
	</div>

	<div class="form-group">
		<label for="">Loại tài khoản<span id="error_phone" style="color: red;">(*)</span></label>
		<select name="type" class="form-control">
		  	<option <?php if(isset($_SESSION['type']) && $_SESSION['type'] == 'Quản lý'){echo "selected";} ?> value="Quản lý">Quản lý</option>
		  	<option <?php if(isset($_SESSION['type']) && $_SESSION['type'] == 'Khách hàng'){echo "selected";} ?> value="Khách hàng">Khách hàng</option>
		</select>
	</div>

	<div class="form-group">
		<label for="">Tên đăng nhập	 <span id="error_user" style="color: red;">(*)</span></label>
		<input type="text" name="user" onblur="checkMail();" class="form-control" id="txt_user" placeholder="Nhập tên đăng nhập..." value="<?php if(isset($_SESSION['user'])){echo $_SESSION['user'];} ?>"/>
	</div>

	<div class="form-group">
		<label for="">Số điện thoại	 <span id="error_phone" style="color: red;">(*)</span></label>
		<input type="text" name="phone" onblur="checkMail();" class="form-control" id="txt_user" placeholder="Nhập số điện thoại..." value="<?php if(isset($_SESSION['phone'])){echo $_SESSION['phone'];} ?>"/>
	</div>

	<div class="form-group">
		<label for="">Email	 <span id="error_email" style="color: red;">(*)</span></label>
		<input type="text" name="email" onblur="checkMail();" class="form-control" id="txt_user" placeholder="Nhập tên email..." value="<?php if(isset($_SESSION['email'])){echo $_SESSION['email'];} ?>"/>
	</div>

	<div class="form-group">
		<label for="">Địa chỉ <span id="error_email" style="color: red;">(*)</span></label>
		<input type="text" name="addres" onblur="checkMail();" class="form-control" id="txt_user" placeholder="Nhập tên địa chỉ..." value="<?php if(isset($_SESSION['addres'])){echo $_SESSION['addres'];} ?>"/>
	</div>

	<div class="form-group">
		<label for="">Mật khẩu <span id="error_pass" style="color: red;">(*)</span></label>
		<input type="text" name="pass" onblur="checkPass();" class="form-control" id="txt_pass" placeholder="********" value="<?php if(isset($_SESSION['pass'])){echo $_SESSION['pass'];} ?>"/>
	</div>

	<div class="form-group">
		<label for="">Điểm <span id="" style="color: red;">(*)</span></label>
		<input onblur="" name="point"  class="form-control" id="txt_ponint" value="<?php if(isset($_SESSION['point'])){echo $_SESSION['point'];} ?>"/>
	</div>

	<div class="form-group">

		<label for="">Ảnh đại diện</label>
		<input style="width: 230px;" type="file" name="avatar" multiple="" class="form-control" id="" >
	</div>

	<button type="submit" name="sm_edit" class="btn btn-dark">
		Cập nhật
	</button>
</form>