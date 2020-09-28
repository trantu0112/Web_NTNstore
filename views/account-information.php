<div class="container">
  <div class="row" >
    <div class="col-md-3 col-left-menu" style="padding-top: 20px;">
      <ul class="nav side-menu">
        <li><i class="fa fa-home"></i> Tài khoản của tôi
          <ul class="nav child_menu">
            <li><a id="info_acc" href="">Hồ sơ</a></li>
            <li><a id="update_pass_acc" href="">Đổi mật khẩu</a></li>
          </ul>
        </li>
      </ul>
      <ul>
         <li><a href="index.php?page=view-order"><i class="fa fa-home"></i> Đơn hàng</a></li>
      </ul>
    </div>
    <div class="col-md-9 col-right-menu">
      <div id="load_update_account">
        <div id="view_data">
          <div id="load_alert_update">
            <?php if (isset($_SESSION['update']) && $_SESSION['update'] == 1) {
            ?>  
            <div style="width: 300px; position: fixed; right: 0px;z-index: 99999;" id="noti_update_account" class="alert alert-success" role="alert">Cập nhật KHÔNG thành công! Bạn hãy kiểm tra lại Email hoặc Số điện thoại đã được sử dụng.</div>
            <?php
            unset($_SESSION['update']);}else if (isset($_SESSION['update']) && $_SESSION['update'] == 2) {
            ?>  
            <div style="width: 190px; position: fixed; right: 0px;z-index: 99999;" id="noti_update_account" class="alert alert-success" role="alert">Cập nhật thành công!</div>
            <?php
            unset($_SESSION['update']);} ?>
          </div>
        <div style="border-bottom: 1px solid #efefef">
          <h3>Hồ sơ của tôi</h3>
          <h5 style="margin-bottom: 10px;">Quản lý thông tin hồ sơ để bảo mật tài khoản</h5>
        </div>
          <div class="row">
            <div class="col-md-9">
              <div style="padding: 40px 40px;">
                <div class="form-group">
                  <label for="">Tên đăng nhập</label>
                  <input type="name" class="form-control" readonly="" placeholder="" value="<?php echo $rs_acc['user_name']?>">
                </div>

                <div class="form-group">
                  <label for="">Tên hiển thị</label>
                  <input type="name" style="background: #fff" required="" class="form-control" id="name_update"  placeholder="" value="<?php echo $rs_acc['display_name']?>">
                </div>

                <div class="form-group">
                  <label for="">Email: </label>
                   <input type="name" class="form-control" style="background: #fff" required="" id="email_update" value="<?php echo $rs_acc['email']?>">
                </div>

                <div class="form-group">
                  <label for="">Số điện thoại: </label>
                   <input type="name" class="form-control" style="background: #fff" required="" id="phone_update" value="<?php echo $rs_acc['phone']?>">
                </div>

                <div class="form-group">
                  <label for="">Địa chỉ</label>
                  <input type="text" style="background: #fff" required="" id="addres_update" class="form-control" id=""  placeholder="" value="<?php echo $rs_acc['addres']?>">
                </div>

                <center><button style="margin-top: 20px;" id="sm_update_acc" class="btn btn-success">Lưu</button></center>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="load_update_pass">
        <div id="view_update_pass" <?php if (!isset($_SESSION['update_passw'])) {
          echo 'style="display: none;"';
        } ?>>
          <div id="load_alert_update_pass">
              <?php if (isset($_SESSION['update_passw']) && $_SESSION['update_passw'] == 1) {
              ?>  
              <div style="width: 300px; position: fixed; right: 0px;z-index: 99999;" id="noti_update_pass" class="alert alert-success" role="alert">Cập nhật KHÔNG thành công! Bạn hãy kiểm tra lại Mật Khẩu.</div>
              <?php
              unset($_SESSION['update_passw']);
              }else if (isset($_SESSION['update_passw']) && $_SESSION['update_passw'] == 2) {
              ?>  
              <div style="width: 190px; position: fixed; right: 0px;z-index: 99999;" id="noti_update_pass" class="alert alert-success" role="alert">Cập nhật thành công!</div>
              <?php
              unset($_SESSION['update_passw']);} ?>
          </div>
          <div style="border-bottom: 1px solid #efefef">
            <h3>Đổi mật khẩu</h3>
          </div>
          <div class="row">
            <div class="col-md-9">
              <div style="padding: 40px 40px;">
                <div class="form-group">
                  <span>Mật khẩu hiện tại</span>
                  <div id="load_check_passw">
                  <?php if(isset($_SESSION['check_pass']) && $_SESSION['check_pass'] == 1){
                  ?>
                  <span id="passw_err" style="color: #2AC37D;">Mật khẩu không đúng</span>
                  <?php 
                    unset($_SESSION['check_pass']);}
                  ?>
                  </div>
                  <input onblur="checkPass()" id="pass_check" type="password" class="form-control">
                </div>
                <div class="form-group">
                  <label>Mật khẩu</label>
                   <span id="error_pass_update" style="color: #2AC37D;"></span>
                  <input class="form-control" required="" onblur="checkPassUpdate()" id="pass_update" name="pass" type="password" placeholder="">
                </div>
                <div class="form-group">
                    <label>Xác nhận lại mật khẩu</label>
                    <span id="error_checkpass_update" style="color: #2AC37D;"></span>
                    <input class="form-control" required="" onblur="checkConPass()" id="check_pass_update" type="password" placeholder="">
                </div>

                <center><button style="margin-top: 20px;" id="sm_update_pass" class="btn btn-success">Lưu</button></center>
              </div>
            </div>
            <div class="col-md-3">
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>