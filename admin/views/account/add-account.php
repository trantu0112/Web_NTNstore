<?php if (isset($_SESSION['nv'])) {
    header("Location: index.php?page=home");
} ?>
<form action="" method="POST" onsubmit="return validitionAddAcc()" enctype="multipart/form-data">
    <legend>Thêm mới tài khoản</legend>
    <div class="form-group">
        <label for="">Tên hiển thị <span id="error_name" style="color: red;">(*)</span></label>
        <input name="name" class="form-control" id="txt_name" placeholder="Nhập tên bạn muốn hiển thị..." onblur="checkName();" />
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
        <label for="">Tên đăng nhập	 <span id="error_user" style="color: red;">(*)</span></label>
        <input name="user" class="form-control" id="txt_user" placeholder="Nhập tên đăng nhập..." onblur="checkUser();"/>
    </div>

    <div class="form-group">
        <label for="">Mật khẩu <span id="error_pass" style="color: red;">(*)</span></label>
        <input name="pass" class="form-control" id="txt_pass" placeholder="********" onblur="checkPass();"/>
    </div>

    <div class="form-group">
        <label for="">Xác nhận mật khẩu <span id="error_conpass" style="color: red;">(*)</span></label>
        <input name="check_pass" class="form-control" id="txt_conpass" placeholder="********" onblur="check_conPass();"/>
    </div>

    <div class="form-group">

        <label for="">Ảnh đại diện</label>
        <input style="width: 230px;" required type="file" name="avatar" multiple="" class="form-control" id="">
    </div>

    <button type="submit" name="sm_add" class="btn btn-dark">
        Thêm mới
    </button>
    <button type="reset" class="btn btn-dark">
        Nhập lại
    </button>
    <a href="index.php?page=list-account&method=list" class="btn btn-dark">
        Quay lại
    </a>

</form>