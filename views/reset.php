<div class="modal fade" id="md_get_email" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="background: #fff;border: solid #fff; width: 500px;height: 285px;margin-left: 55px;">
        
            <div class="modal-header">
                <button type="button"  class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <div class="modal-body">
                <label style="padding-bottom: 15px;" for="">Mã đã được gửi đến email của bạn!</label>
                <input style="width: 340px;background: #fff;" id="pass-reset" type="text" class="form-control"  placeholder="Nhập mã...">
                <div id="load-noti-rand">
                <?php if(isset($_SESSION['noti-rand']) && $_SESSION['noti-rand'] == 1){
                ?>
                <span id="noti-rand" style="color: #2AC37D;font-size: 14px;">Mã không hợp lệ</span>
                <?php 
                  unset($_SESSION['noti-rand']);}
                ?>
                </div>             
                <button style="margin-top: 25px;" id="sm-reset" type="button" class="ps-btn">Xác nhận</button>
            </div>
            
        </div>
    </div>
</div>
<div class="ps-section__header mb-50">        
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 "></div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ">
                <h2 class="ps-section__title">- Đặt Lại Mật Khẩu</h2>
                <input style="width: 340px;background: #fff;" type="text" class="form-control" id="email_reset" placeholder="Nhập email của bạn">
                <div id="load_email_reset">
                <?php if(isset($_SESSION['email-reset']) && $_SESSION['email-reset'] == 1){
                ?>
                <span id="ld_email_reset" style="color: #2AC37D;font-size: 14px;">Email không tồn tại</span>
                <?php 
                  unset($_SESSION['email-reset']);}
                ?>
                </div>
                <div id="load-btn-get-email">             
                <button style="margin-top: 25px;" <?php if(isset($_SESSION['get-email'])){
                ?>
                data-toggle="modal" data-target="#md_get_email" id="btn-next"
                <?php
                } ?>type="button" class="ps-btn">Tiếp theo</button>
                <a href="login"><span style="color: #2AC37D;font-size: 20px;margin-left: 90px;">- Quay lại</span></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 "></div>

        </div>
</div>