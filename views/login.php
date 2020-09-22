<?php if (isset($_SESSION['check_acc']) && $_SESSION['check_acc'] == 1) {
?>
<div style="width: 300px; position: fixed; right: 0px;z-index: 99999;" id="noti_check_acc" class="alert alert-success alert_update" role="alert">Bạn đã nhập sai Tài Khoản hoặc Mật Khẩu vui lòng thử lại!</div>
<?php
} ?>
<div class="ps-section__header mb-50">        
    <form class="ps-contact__form" action="" method="POST">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 "></div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ">
                <h2 class="ps-section__title">- Đăng nhập hệ thống</h2>
                <div class="form-group">
                    <label>Tài khoản <sub>*</sub></label>
                    <input class="form-control" type="text" placeholder="" name="user" value="<?php if(isset($_SESSION['user'])){echo $_SESSION['user'];} ?>">
                </div>
                <div class="form-group">
                    <label>Mật khẩu <sub>*</sub></label>
                    <input class="form-control" type="password" placeholder="" name="password">
                </div>
                <div class="form-group">
                    <button type="submit" name="sm_login" class="ps-btn">Đăng nhập<i class="ps-icon-next"></i></button>
                    <span><a href="index.php?page=reset" style="color: red; float: right; padding-top: 15px;font-size: 18px;">Quên mật khẩu</a></span>  
                    <h4>Nếu bạn chưa có tài khoản? <a href="register" style="color: red;">Đăng ký</a></h4>     
                       
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 "></div>

        </div>
    </form>
</div>

