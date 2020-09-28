<div class="ps-footer bg--cover" data-background="publics/images/background/parallax.jpg">
  <div class="ps-footer__content">
    <div class="ps-container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
          <aside class="ps-widget--footer ps-widget--info">
            <header><a class="ps-logo" href="index.php"><img src="publics/images/logo-white.png" alt=""></a>
              <h3 class="ps-widget__title">Địa chỉ cơ sở 1</h3>
            </header>
              <footer>
                  <p><strong>325 Kim Ngưu, Hai Bà Trưng, Hà Nội, Việt Nam</strong></p>
                  <p>Email: <a href='mailto:tranu01121999@gmail.com'>support@ntn.com</a></p>
                  <p>Phone: +034 717 3650</p>
                  <p>Fax: ++034 717 3650</p>
              </footer>
          </aside>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
          <aside class="ps-widget--footer ps-widget--info second">
            <header>
              <h3 class="ps-widget__title">Địa chỉ cơ sở 2</h3>
            </header>
              <footer>
                  <p><strong>276 Đại Từ, Hoàng Mai, Hà Nội, Việt Nam</strong></p>
                  <p>Email: <a href='mailto:namdaitu1@gmail.com'>support@ntn.com</a></p>
                  <p>Phone: +036 360 3868</p>
                  <p>Fax: ++036 360 3868</p>
              </footer>
          </aside>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 ">
          <aside class="ps-widget--footer ps-widget--link">
            <header>
              <h3 class="ps-widget__title">Trợ giúp</h3>
            </header>
            <footer>
              <ul class="ps-list--line">
                <li>
                  <?php if (!isset($_SESSION['id_account'])) {
                  ?>
                  <a href="login">Thông tin tài khoản</a>
                  <?php
                  }else{
                  ?>
                  <a href="account-information">Thông tin tài khoản</a>
                  <?php
                  } ?>
                </li>
                 <li>
                  <?php if (!isset($_SESSION['id_account'])) {
                  ?>
                  <a href="login">Thông tin tài khoản</a>
                  <?php
                  }else{
                  ?>
                   <li><a href="view-order">Trạng thái đơn hàng</a></li>
                  <?php
                  } ?>
                </li>
               
              </ul>
            </footer>
          </aside>
            <div style="margin-top: 15px;" class="fb-page" data-href="https://www.facebook.com/NTN-STORE-103288208184723" data-tabs="timeline" data-width="210" data-height="70" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true">
                <blockquote cite="https://www.facebook.com/NTN-STORE-103288208184723" class="fb-xfbml-parse-ignore">
                    <a href="https://www.facebook.com/NTN-STORE-103288208184723">NTN STORE
                    </a>
                </blockquote>
            </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 ">
          <aside class="ps-widget--footer ps-widget--link">
            <header>
              <h3 class="ps-widget__title">Sản phẩm</h3>
            </header>
            <footer>
              <ul class="ps-list--line">
                <li><a href="adidas/1">Adidas</a></li>
                <li><a href="nike/1">Nike</a></li>
                <li><a href="vans/1">Vans</a></li>
              </ul>
            </footer>
          </aside>
        </div>
      </div>
    </div>
  </div>
  <div class="ps-footer__copyright">
    <div class="ps-container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
          <p>&copy; <a href="index.php">NTN</a>, Inc. All rights Resevered. Design by <a href="home"> NTN</a></p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
          <ul class="ps-social">
            <li><a href="https://www.facebook.com/NTN-STORE-103288208184723" target="blank"><i class="fa fa-facebook"></i></a></li>
            <li><a><i class="fa fa-google-plus"></i></a></li>
            <li><a target="blank"><i class="fa fa-twitter"></i></a></li>
            <li><a target="blank"><i class="fa fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v8.0'
          });
        };
        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>
      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="103288208184723"
  theme_color="#ff7e29"
  logged_in_greeting="Hi! How can we help you?"
  logged_out_greeting="Hi! How can we help you?">
</div>