<?php 
    ob_start();
    session_start();
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    //session_destroy();
    function makeUrl($string)
    {
        $string = trim($string);
        $string = str_replace(' ', '-', $string);
        $string = strtolower($string);
        $string = preg_replace('/(á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ|Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ)/', 'a', $string);
        $string = preg_replace('/(đ|Đ)/', 'd', $string);
        $string = preg_replace('/(é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ|É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ)/', 'e', $string);
        $string = preg_replace('/(í|ì|ỉ|ĩ|ị|Í|Ì|Ỉ|Ĩ|Ị)/', 'i', $string);
        $string = preg_replace('/(ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ|Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ)/', 'o', $string);
        $string = preg_replace('/(ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự|Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự)/', 'u', $string);
        $string = preg_replace('/(ý|ỳ|ỷ|ỹ|ỵ|Ý|Ỳ|Ỷ|Ỹ|Ỵ)/', 'u', $string);
        return $string;
    }
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="http://localhost/MyProject/NTNstore/ntnshop/">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="https://cdn.iconscout.com/icon/free/png-256/shoes-97-160935.png" rel="icon">
    <meta name="keywords" content="Default Description">
    <meta name="description" content="Default keyword">
    <title>NTN STORE</title>
    <!-- Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow:300,400,700%7CMontserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="plugins/ps-icon/style.css">
    <!-- CSS Library-->
    <link rel="stylesheet" href="plugins/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/owl-carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css">
    <link rel="stylesheet" href="plugins/slick/slick/slick.css">
    <link rel="stylesheet" href="plugins/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="plugins/Magnific-Popup/dist/magnific-popup.css">
    <link rel="stylesheet" href="plugins/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="plugins/revolution/css/settings.css">
    <link rel="stylesheet" href="plugins/revolution/css/layers.css">
    <link rel="stylesheet" href="plugins/revolution/css/navigation.css">    
    <!-- Custom-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="publics/css/style.css">
    <link rel="stylesheet" href="publics/css/myCss.css">
  </head>
  <body class="ps-loading">
    <div class="header--sidebar"></div>
    <header class="header">
          <?php include_once 'layout/header-top.php'; ?>
   
          <?php include_once 'layout/nav.php'; ?>
    </header>
          <?php include_once 'layout/header-services.php'; ?>
    <main class="ps-main">
     
        <?php 

            if (isset($_GET['page'])) {
              $page = $_GET['page'];
            }else {
              $page = 'home';
            }

            switch ($page) {
                case 'error':
                    include_once 'views/error.php';
                    break;
                case 'reset':
                    include_once 'controller/Account_c.php';
                    $pro = new Account_c();
                    $pro->account();
                    break;
                case 'logout':
                    include_once 'controller/Account_c.php';
                    $pro = new Account_c();
                    $pro->account();
                    break;
                case 'register':
                    include_once 'controller/Account_c.php';
                    $pro = new Account_c();
                    $pro->account();
                    break;
                case 'login':
                    include_once 'controller/Account_c.php';
                    $pro = new Account_c();
                    $pro->account();
                    break;
                case 'account-information':
                    include_once 'controller/Account_c.php';
                    $pro = new Account_c();
                    $pro->account();
                    break;
                case 'view-detail-order':
                    include_once 'controller/Pro_c.php';
                    $pro = new Pro_c();
                    $pro->product();
                    break;
                case 'view-order':
                    include_once 'controller/Pro_c.php';
                    $pro = new Pro_c();
                    $pro->product();
                    break;
                case 'adidas':
                    include_once 'controller/Pro_c.php';
                    $pro = new Pro_c();
                    $pro->product();
                    break;
                case 'nike':
                    include_once 'controller/Pro_c.php';
                    $pro = new Pro_c();
                    $pro->product();
                    break;
                case 'vans':
                    include_once 'controller/Pro_c.php';
                    $pro = new Pro_c();
                    $pro->product();
                    break;
                case 'search-product':
                    include_once 'controller/Pro_c.php';
                    $pro = new Pro_c();
                    $pro->product();
                    break;
                case 'product-detail':
                    include_once 'controller/Pro_c.php';
                    $pro = new Pro_c();
                    $pro->product();
                    break;
                case 'cart':
                    include_once 'controller/Pro_c.php';
                    $pro = new Pro_c();
                    $pro->product();
                    break;
                case 'check-out':
                    include_once 'controller/Pro_c.php';
                    $pro = new Pro_c();
                    $pro->product();
                    break;
                case 'blog':
                    include_once 'controller/Blog_c.php';
                    $Blog = new Blog_c();
                    $Blog->blog();
                    break;
                case 'blog-detail':
                    include_once 'controller/Blog_c.php';
                    $Blog = new Blog_c();
                    $Blog->blog();
                    break;
                
                default:
                    include_once 'layout/banner.php';
                    include_once 'controller/Pro_c.php';
                    $pro = new Pro_c();
                    $pro->product();
                    break;
            }

         ?>

        <?php include_once 'layout/footer.php'; ?>

    </main>
    <!-- JS Library-->
    <script type="text/javascript" src="plugins/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="plugins/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
    <script type="text/javascript" src="plugins/owl-carousel/owl.carousel.min.js"></script>
    <script type="text/javascript" src="plugins/gmap3.min.js"></script>
    <script type="text/javascript" src="plugins/imagesloaded.pkgd.js"></script>
    <script type="text/javascript" src="plugins/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="plugins/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="plugins/jquery.matchHeight-min.js"></script>
    <script type="text/javascript" src="plugins/slick/slick/slick.min.js"></script>
    <script type="text/javascript" src="plugins/elevatezoom/jquery.elevatezoom.js"></script>
    <script type="text/javascript" src="plugins/Magnific-Popup/dist/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAx39JFH5nhxze1ZydH-Kl8xXM3OK4fvcg&amp;region=GB"></script>
    <script type="text/javascript" src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <!-- Custom scripts-->
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v8.0&appId=949994222136767&autoLogAppEvents=1" nonce="T6MHeMd9"></script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v8.0&appId=949994222136767&autoLogAppEvents=1" nonce="Qd47rcO7"></script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v8.0&appId=949994222136767&autoLogAppEvents=1" nonce="jMUZYLrf"></script>
    <script src="https://sp.zalo.me/plugins/sdk.js"></script>
    <script type="text/javascript" src="publics/js/main.js"></script>
    <script type="text/javascript" src="publics/js/myJava.js"></script>
  </body>
</html>