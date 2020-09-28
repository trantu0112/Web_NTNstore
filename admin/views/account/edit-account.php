<?php if (isset($_SESSION['nv'])) {
    header("Location: index.php?page=home");
} ?>
<form action="" method="POST" onsubmit="return validitionEditAcc()" enctype="multipart/form-data">
    <legend>Cập nhật tài khoản</legend>
    <div class="form-group">
        <label for="">Họ tên <span id="error_name" style="color: red;">(*)</span></label>
        <input name="name" class="form-control" id="txt_name" placeholder="Nhập họ tên đầy đủ" onblur="checkName();" value="<?php if(isset($_SESSION['name'])){echo $_SESSION['name'];} ?>" />
    </div>

    <div class="form-group">
        <label for="">Loại tài khoản<span style="color: red;">(*)</span></label>
        <select name="type" class="form-control">
            <option <?php if(isset($_SESSION['type']) && $_SESSION['type'] == 'Quản lý'){echo "selected";} ?> value="Quản lý">Quản lý</option>
            <option <?php if(isset($_SESSION['type']) && $_SESSION['type'] == 'Khách hàng'){echo "selected";} ?> value="Khách hàng">Khách hàng</option>
        </select>
    </div>

    <div class="form-group">
        <label for="">Tên đăng nhập	 <span id="error_user" style="color: red;">(*)</span></label>
        <input name="user" onblur="checkUser();" class="form-control" id="txt_user" placeholder="Nhập tên đăng nhập..." value="<?php if(isset($_SESSION['user'])){echo $_SESSION['user'];} ?>"/>
    </div>

    <div class="form-group">
        <label for="">Số điện thoại	 <span id="error_phone" style="color: red;">(*)</span></label>
        <input name="phone" onblur="checkPhone();" class="form-control" id="txt_phone" placeholder="Nhập số điện thoại..." value="<?php if(isset($_SESSION['phone'])){echo $_SESSION['phone'];} ?>"/>
    </div>

    <div class="form-group">
        <label for="">Email	 <span id="error_email" style="color: red;">(*)</span></label>
        <input name="email" onblur="checkMail();" class="form-control" id="txt_email" placeholder="Nhập tên email..." value="<?php if(isset($_SESSION['email'])){echo $_SESSION['email'];} ?>"/>
    </div>

    <div class="form-group">
        <label for="">Địa chỉ <span id="error_address" style="color: red;">(*)</span></label>
        <input name="addres" onblur="checkAddress();" class="form-control" id="txt_address" placeholder="Nhập tên địa chỉ..." value="<?php if(isset($_SESSION['addres'])){echo $_SESSION['addres'];} ?>"/>
    </div>

    <div class="form-group">
        <label for="">Điểm <span id="error_point" style="color: red;">(*)</span></label>
        <input onblur="checkPoint();" name="point"  class="form-control" id="txt_point" value="<?php if(isset($_SESSION['point'])){echo $_SESSION['point'];} ?>"/>
    </div>

    <div class="form-group">

        <label for="">Ảnh đại diện</label>
        <input style="width: 230px;" type="file" required name="avatar" multiple="" class="form-control" id="" >
    </div>

    <button type="submit" name="sm_edit" class="btn btn-dark">
        Cập nhật
    </button>
    <a href="index.php?page=list-account&method=list" class="btn btn-dark">
        Quay lại
    </a>
</form>