<?php if (isset($_SESSION['email']) && $_SESSION['email'] == 4) {
?>
<div style="width: 300px; position: fixed; right: 0px;z-index: 99999;" id="noti_check_acc" class="alert alert-success alert_update" role="alert">Đăng ký không thành công! Bạn hãy kiểm tra thông tin vừa nhập</div>
<?php
} ?>
<div class="ps-section__header mb-50">        
    <form class="ps-contact__form" action="" method="post">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 "></div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ">
                <h2 class="ps-section__title">- Đăng ký tài khoản</h2>
                <div class="form-group">
                    <label>Họ và tên <sub>*</sub></label>
                    <span id="error_name_acc" style="color: #2AC37D;"></span>
                    <input class="form-control" required="" onblur="checkName_acc()" id="name_acc" name="name" type="text" placeholder="" value="<?php if(isset($_SESSION['name'])){echo $_SESSION['name'];} ?>">
                </div>
                <div class="form-group">
                    <label>Tài khoản (Email) <sub>*</sub></label>
                    <div id="load_email_acc">
                    <?php if(isset($_SESSION['email']) && $_SESSION['email'] == 1){
                    ?>
                    <span id="email_eracc" style="color: #2AC37D;">Email đã được sử dụng</span>
                    <?php 
                      }else if (isset($_SESSION['email']) && $_SESSION['email'] == 2) {
                    ?>
                    <span id="email_eracc" style="color: #2AC37D;">Email không được để trống</span>
                    <?php 
                      }else if (isset($_SESSION['email']) && $_SESSION['email'] == 3) {
                    ?>
                    <span id="email_eracc" style="color: #2AC37D;">Email không hợp lệ</span>
                    <?php 
                      }
                    ?>
                    </div>
                    <input class="form-control" required="" onkeyup="checkEmail_acc()" id="email_acc" name="email" type="email" placeholder="" value="<?php if(isset($_SESSION['email_up'])){echo $_SESSION['email_up'];} ?>">
                </div>
                <div class="form-group">
                    <label>Mật khẩu <sub>*</sub></label>
                     <span id="error_pass_acc" style="color: #2AC37D;"></span>
                    <input class="form-control" required="" onblur="checkPass_acc()" id="pass_acc" name="pass" type="password" placeholder="">
                </div>
                <div class="form-group">
                    <label>Xác nhận lại mật khẩu <sub>*</sub></label>
                    <span id="error_checkpass_acc" style="color: #2AC37D;"></span>
                    <input class="form-control" required="" onblur="check_conPass()" id="check_pass_acc" type="password" placeholder="">
                </div>                                                                       
                <div class="form-group">
                    <button type="submit" name="sm_add" class="ps-btn">Đăng ký<i class="ps-icon-next"></i></button>
                    <h4>Bạn đã có tài khoản <a href="login" style="color: red;">Đăng nhập</a></h4>                   
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 "></div>
        </div>
    </form>
</div>
