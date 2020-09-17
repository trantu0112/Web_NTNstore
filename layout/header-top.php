<div class="header__top">
  <div class="container-fluid">
  	<div class="row">
      <div class="col-lg-6 col-md-8 col-sm-6 col-xs-12 ">
        <p>Số 1, Đường Lĩnh Nam, Hoàng Mai, Hà Nội  -  Hotline: 0347173650</p>
      </div>

      <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 ">
        <div class="header__actions">
          <?php 
            if (isset($_SESSION['name_acc_home'])) {
          ?>
            <a href="index.php?page=account-information"><?php if (isset($_SESSION['name_acc_home'])) {echo 'Xin chào: '.$_SESSION['name_acc_home'];} ?></a>
            <a href="index.php?page=logout">Đăng xuất</a>
          <?php
            }else if(isset($_SESSION['name_acc_admin'])){
          ?>
            <a href="admin/index.php">ADMIN</a>
          <?php
            }else{
          ?>
            <a href="index.php?page=login">Tài Khoản <i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
          <?php   
            }
           ?>
        </div>
      </div>
    </div>
  </div>
</div>