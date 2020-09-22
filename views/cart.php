<div style="display: none;width: 200px; position: fixed; right: 0px;z-index: 99999;" id="noti_cart_updates" class="alert alert-success alert_update" role="alert">
Cập nhật thành công!</div>
<div class="ps-content pt-80 pb-80">
  <div class="ps-container">
    <div class="ps-cart-listing">
      <div id="cart_sh">
        <table class="table ps-cart__table" id="cart_tb">
          <thead>
            <tr>
              <th>Tất cả sản phẩm</th>
              <th>Size</th>
              <th>Giá</th>
              <th>Số lượng</th>
              <th>Tổng tiền</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
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
            <tr>
              <td><a class="ps-product__preview" href="product-detail/<?php echo $value['id_product'].'/'.makeUrl($value['product_name']) ?>"><img style="width: 50px;height: 50px;" class="mr-15" src="admin/images/product/<?php echo $value['cate_name'].'/'.$value['img'] ?>" alt=""> <?php echo $value['product_name']; ?></a></td>
              <td><input style="width: 25px;" readonly="" type="text" name="" value="<?php echo $value['size'] ?>"></td>
              <td><?php 
                if ($value['percent'] <= 0) {
                    echo number_format($value['price']).' đ';
                  }else{
                    $price = $value['price'] * (1 - ($value['percent']/100));
                    echo number_format($price).' đ';
                  }  ?>
              </td>
              <td>
                <div class="form-group--number">
                  <button class="minus" onclick="update_cart_minus(<?php echo $value['id_product'].','.$value['size'] ?>)"><span>-</span></button>
                  <input readonly="" id="<?php echo $value['id_product'].'_'.$value['size'] ?>" class="form-control" type="text" value="<?php echo $value['qty'] ?>">
                  <button class="plus" onclick="update_cart_plus(<?php echo $value['id_product'].','.$value['size'] ?>)"><span>+</span></button>
                </div>
              </td>
              <td><?php  
                if ($value['percent'] <= 0) {
                    $total = $value['qty'] * $value['price']; 
                    echo number_format($total).' đ';
                  }else{
                    $total = $value['qty'] * ($value['price'] * (1 - ($value['percent']/100)));
                    echo number_format($total).' đ';
                  }?>
              </td>
              <td>
                <button style="border:0px;" class="ps-remove btn btn-danger" id="del_<?php echo $value['id_product'].'_'.$value['size'] ?>" onclick="delCart(<?php echo $value['id_product'].','.$value['size'] ?>)" value="<?php echo $value['id_product'] ?>"></button>
              </td>
            </tr>
          
          <?php
                  }
                }
              }
           ?>

           <tr>
              <td colspan="4">
                <div class="ps-cart__total">
                  <h3>Tổng Tiền: <span style="color: red; font-weight: bold; font-size: 30px;"> 
                  <?php 
                    if (isset($_SESSION['percent'])) {
                        $percent = $_SESSION['percent'];
                        $sum_tt = $_SESSION['sum'] * (1 - $percent/100);
                        $_SESSION['sum_tt'] = $sum_tt;
                        if (isset($_SESSION['sum_tt'])) {
                          echo number_format($_SESSION['sum_tt']).' đ';  
                        }else{
                          echo '0 đ';
                        } 
                    }else{
                      if(!isset($_SESSION['cart'])){
                        echo "0 đ";
                      }else{
                        if (isset($_SESSION['sum'])) {
                          echo number_format($_SESSION['sum']).' đ';
                        }
                      }       
                    }
                    ?>
                  </span></h3>
                </div>
              </td>
            </tr>
            </tbody>
        </table>
      </div>
      <div class="ps-cart__actions">
        <div class="ps-cart__promotion">
          <div class="form-group">
            <div id="load_noti_discount">
            <?php if(isset($_SESSION['discount']) && $_SESSION['discount'] == 1) {
            ?>
              <div class="alert alert-success" id="alert_disc" style="width: 260px;">
                <strong>Mã khuyến mãi không tồn lại!
              </div>  
            <?php 
              }else if(isset($_SESSION['discount']) && $_SESSION['discount'] == 2) {
            ?>
              <div class="alert alert-success" id="alert_disc" style="width: 260px;">
                <strong>Mã khuyến đã hết hạn!
              </div>  
            <?php 
              }
            ?>
            </div>
            <div class="ps-form--icon"><i class="fa fa-angle-right"></i>
              <input  id='discount' onkeyup="unsetSSdiscount()" class="form-control" type="text" placeholder="Nhập mã giảm giá..." value="">
            </div>
          </div>
          <div class="form-group">
            <button onclick="discount()" class="ps-btn ps-btn--gray">Áp dụng</button>
          </div>
            
        </div>
        <div id="load_btn_total">
        <div id="btn_total">
          <a class="ps-btn btn-checkout" onclick="<?php 
          if(!isset($total)){
            echo "alert('Không tồn tại sản phẩm trong giỏ hàng!')";
          }?> "
          <?php if (isset($total) && $total > 0) {
            echo "href='check-out'";
          } ?>>Mua hàng<i class="ps-icon-next"></i></a>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>