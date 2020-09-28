<div class="header__top">
  <div class="container-fluid">
  	<div class="row">
      <div class="col-lg-6 col-md-8 col-sm-6 col-xs-12 ">
        <p>Số 3 ngõ 325 Kim Ngưu, Hai Bà Trưng, Hà Nội, Việt Nam  -  Hotline: 0935709669</p>
      </div>

      <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 ">
        <div class="header__actions">
          <?php 
            if (isset($_SESSION['name_acc_home'])) {
          ?>
            <a href="account-information"><?php if (isset($_SESSION['name_acc_home'])) {echo 'Xin chào: '.$_SESSION['name_acc_home'];} ?></a>
            <a href="index.php?page=logout">Đăng xuất</a>
          <?php
            }else if(isset($_SESSION['name_acc_admin'])){
          ?>
            <a href="admin">ADMIN</a>
          <?php
            }else{
          ?>
            <a href="login">Tài Khoản <i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
          <?php   
            }
           ?>
        </div>
      </div>
    </div>
  </div>
</div>