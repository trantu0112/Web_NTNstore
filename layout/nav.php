<nav class="navigation">
  <div class="container-fluid">
    <div class="navigation__column left">
      <div class="header__logo"><a class="ps-logo" href="home"><img src="publics/images/logo.png" alt=""></a></div>
    </div>

    <div class="navigation__column center">
      <ul class="main-menu menu">
        <li class="menu-item menu-item-has-children dropdown">
          <a href="home">Trang chủ</a>
        </li>

        <li class="menu-item">
          <a href="adidas/1">Adidas</a>
        </li>

        <li class="menu-item">
          <a href="nike/1">Nike</a>
        </li>
f
        <li class="menu-item">
          <a href="vans/1">Vans</a>
        </li>

        <li class="menu-item">
          <a href="blog/1">Blog</a>
        </li>
      </ul>
    </div>

    <div class="navigation__column right">
      <!-- form tìm kiếm -->
      <form  role="search" action="search-product/1" method="post">
        <input class="search" required="" name="keys" class="form-control" type="text" placeholder="Tìm kiếm sản phẩm">
        <button class="icon_sr" type="submit" name="sb_search"></button>
      </form>
      <!-- bắt đầu giỏ hàng -->
      <?php 
          if (!isset($_SESSION['cart'])) {
            $qty = 0;
          }else{
            $qty = 0;
            foreach ($_SESSION['cart'] as $key => $size) {
                foreach ($size as $key => $value) {
                  $qty += $value['qty'];
              }
            }
          }  
       ?>
       <div id="qty">
      <div class="ps-cart" id="load_qty"><a class="ps-cart__toggle" href="cart"><span><i><?php echo $qty; ?></i></span><i class="ps-icon-shopping-cart"></i></a>
        <div class="ps-cart__listing">
          <!-- nội dung trong giỏ hàng -->
          <div id="cart_mini">
            <div class="ps-cart__content" id="load_cart_mini">
              <?php 
              if (!isset($_SESSION['cart'])) {

              }else{
                  $_SESSION['sum'] = 0;
                  foreach ($_SESSION['cart'] as $key => $size) {
                    foreach ($size as $key => $value) {
                      if ($value['percent'] <= 0) {
                        $_SESSION['sum'] += $value['qty'] * $value['price'];
                      }else{
                        $_SESSION['sum'] += $value['qty'] * ($value['price'] * (1 - ($value['percent']/100)));
                      }
              ?>
              <div class="ps-cart-item">
                <div class="ps-cart-item__thumbnail"><a href="product-detail/<?php echo $value['id_product'].'/'.makeUrl($value['product_name']) ?>"></a><img src="admin/images/product/<?php echo $value['cate_name'].'/'.$value['img'] ?>" alt=""></div>
                <div class="ps-cart-item__content"><a class="ps-cart-item__title" href="product-detail/<?php echo $value['id_product'].'/'.makeUrl($value['product_name']) ?>"><span style="padding-right: 5px;"><?php echo $value['product_name'] ?></span></a>
                  <p>Số lượng:<i><?php echo $value['qty'] ?></i></p><p>Giá:<i><?php  
                    if ($value['percent'] <= 0) {
                        $total = $value['qty'] * $value['price']; 
                        echo number_format($total).' đ';
                      }else{
                        $total = $value['qty'] * ($value['price'] * (1 - ($value['percent']/100)));
                        echo number_format($total).' đ';
                      }?></i></p>
                </div>
              </div>
              <?php
                    }
                  }
                }
              ?>
            <!-- tổng tiền giỏ hàng -->
            <div class="ps-cart__total">
              <p>Tổng tiền:<span style="padding-left: 5px;"> <?php if(!isset($_SESSION['cart'])){echo "0 đ";}else{if (isset($_SESSION['sum'])) {echo number_format($_SESSION['sum']).' đ';}}?></span></p>
            </div>
          </div>
        </div>
          <div class="ps-cart__footer"><a class="ps-btn" href="check-out">Mua hàng<i class="ps-icon-arrow-left"></i></a></div>
        </div>
      </div>
      </div>
      <!-- hết giỏ hàng -->
      <div class="menu-toggle"><span></span></div>
    </div>
  </div>
</nav>
