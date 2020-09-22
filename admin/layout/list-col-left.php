<div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="index.php" class="site_title"><img style="width: 45px; height: 45px;" src="https://cdn.iconscout.com/icon/free/png-256/shoes-97-160935.png"> <span>SHOP SHOES</span></a>
    </div>

    <div class="clearfix"></div>
    <!-- menu profile quick info -->
    <div class="profile clearfix">
      <div class="profile_pic">
        <img src="images/account/<?php if (isset($_SESSION['img_avarta'])) {echo $_SESSION['img_avarta'];} ?>" alt="..." class="img-circle profile_img">
      </div>
      <div class="profile_info">
        <span>Welcome,</span>
        <h2><?php if (isset($_SESSION['name_acc_admin'])) {echo $_SESSION['name_acc_admin'];} ?></h2>
      </div>
    </div>
    <!-- /menu profile quick info -->

    <br />

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">

        <ul class="nav side-menu">
          <li><a href="index.php?page=home"><i class="fa fa-home"></i> Home</a>
          </li>

          <li><a href="index.php?page=list-cate&method=list"><i class="fa fa-edit"></i> Quản lý danh mục</a>
          </li>

          <li><a><i class="fa fa-edit"></i> Quản lý sản phẩm <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="index.php?page=list-product&method=list">Danh sách sản phẩm</a></li>
              <?php if (!isset($_SESSION['nv'])) {
              ?>
              <li><a href="index.php?page=list-product&method=add">Thêm sản phẩm</a></li>
              <?php
              } ?>
            </ul>
          </li>

          <li><a><i class="fa fa-edit"></i> Quản lý chi tiết ảnh SP<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <?php if (!isset($_SESSION['nv'])) {
              ?>
              <li><a href="index.php?page=list-img&method=add">Thêm ảnh</a></li>
              <?php
              } ?>
            </ul>
          </li>

          <li><a><i class="fa fa-edit"></i> Quản lý tài khoản <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="index.php?page=list-account&method=list">Danh sách tài khoản</a></li>
              <?php if (!isset($_SESSION['nv'])) {
              ?>
              <li><a href="index.php?page=list-account&method=add">Thêm mới tài khoản</a></li>
              <?php
              } ?>
            </ul>
          </li>

          <li><a><i class="fa fa-edit"></i> Quản lý đơn hàng <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="index.php?page=list-order&method=list">Danh sách đơn hàng</a></li>
            </ul>
          </li>

          <li><a><i class="fa fa-edit"></i> Quản lý bài viết <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="index.php?page=list-blog&method=list">Danh sách bài viết</a></li>
                    <?php if (!isset($_SESSION['nv'])) {
                     ?>
                    <li><a href="index.php?page=list-blog&method=add">Thêm bài viết</a></li>
                    <?php
                    } ?>
                </ul>
            </li>
          <li><a><i class="fa fa-edit"></i> Quản lý giảm giá <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="index.php?page=list-discount&method=list">Danh sách mã giảm giá</a></li>
                    <?php if (!isset($_SESSION['nv'])) {
                     ?>
                    <li><a href="index.php?page=list-discount&method=add">Thêm mã giảm giá</a></li>
                    <?php
                    } ?>
                </ul>
            </li>
          
        </ul>
      </div>

    </div>
    <!-- /sidebar menu -->

</div>


