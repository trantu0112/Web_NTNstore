<?php 
  date_default_timezone_set('Asia/Ho_Chi_Minh');
  ob_start();
  session_start();

  //session_destroy();
  if (!isset($_SESSION['name_acc_admin'])) {
    header('Location: ../index.php?page=home');
  }

 ?>
<!DOCTYPE html>
<html lang="en">

  <?php include_once 'layout/head.php'; ?>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <!-- list col left -->
          <?php include_once 'layout/list-col-left.php'; ?>
          <!-- endlist -->
        </div>

        <!-- top navigation -->
        <?php include_once 'layout/top-nav.php'; ?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main" style="height: 1470px;">
        <?php 
            if (isset($_GET['page'])) {
              $page = $_GET['page'];
            }else{
              $page = 'home';
            }

            switch ($page) {
              case 'list-cate':
                include_once 'controller/Cate_c.php';
                $cate = new Cate_c();
                $cate->cate();
                break;
              case 'list-blog':
                include_once 'controller/Blog_c.php';
                $blog = new Blog_c();
                $blog->product();
                break;
              case 'list-account':
                include_once 'controller/Account_c.php';
                $acc = new Account_c();
                $acc->account();
                break;
              case 'list-product':
                include_once 'controller/Pro_c.php';
                $pro = new Pro_c();
                $pro->product();
                break;
              case 'list-customer':
                include_once 'controller/Customer_c.php';
                $cust = new Customer_c();
                $cust->customer();
                break;
              case 'list-order':
                include_once 'controller/Order_c.php';
                $order = new Order_c();
                $order->order();
                break;
              case 'list-img':
                include_once 'controller/Img_pro_c.php';
                $img = new Img_pro_c();
                $img->img_pro();
                break;
              case 'list-discount':
                include_once 'controller/Discount_c.php';
                $discount = new Discount_c();
                $discount->discount();
                break;
              default:
                include_once 'controller/Home_c.php';
                $home = new Home_c();
                $home->home();
                break;
            }


         ?>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <?php include_once 'layout/footer.php'; ?>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="ckd/ckeditor.js"></script>
    <script src="ckf/ckfinder.js"></script>
    <script src="js/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="js/fastclick.js"></script>
    <!-- NProgress -->
    <script src="js/nprogress.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="js/custom.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <!-- file myjava -->
    <script src="js/myJava.js"></script>

  </body>
</html>