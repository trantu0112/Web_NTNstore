<?php 
  $data = '<main class="ps-main">
              <div class="ps-content pt-80 pb-80">
                <div class="ps-container">
                  <div class="ps-cart-listing">
                    <h1>Chi tiết hóa đơn</h1>
                    <table class="table ps-cart__table">
                      <thead>
                        <tr>
                          <th style="width: 500px;">Tất cả sản phẩm</th>
                          <th>Size</th>
                          <th>Giá</th>
                          <th>Số lượng</th>
                          <th>Tổng tiền</th>
                        </tr>
                      </thead>
                      <tbody>';
      if (!isset($_SESSION['cart'])) {

      }else{

          foreach ($_SESSION['cart'] as $key => $size) {
            foreach ($size as $key => $value) {
            if ($value['percent'] <= 0) {
                $total = $value['qty'] * $value['price']; 
              }else{
                $total = $value['qty'] * ($value['price'] * (1 - ($value['percent']/100)));
              }
              $data .= '<tr>
                  <td><img style="width: 100px;height: 100px;" class="mr-15" src="admin/images/product/'.$value['cate_name'].'/'.$value['img'].'" >'.$value['product_name'].'</td>
                  
                  <td>'.$value['size'].'</td><td>'.$value['price'].'</td><td>'.$value['qty'].'</td><td>'.number_format($total).' đ'.'</td></tr>';  
          }
        }
      }                       

  $data .= '</tbody>
        </table>
        <div class="ps-cart__actions">
          <div class="ps-cart__promotion">
            <div class="form-group">
            </div>
          </div>
          <div class="ps-cart__total">
            <h3> <span style="color: red; font-weight: bold; font-size: 20px;"><?php echo number_format("$_SESSION[sum]"). "đ "?></span><span>Tổng tiền:</span></h3>
          </div>
        </div>
      </div>
      <div class="ps-cart-listing">
        <h5 style="color: #2AC37D; font-weight: bold;font-size: 25px;">Cảm ơn quý khách đã tin tưởng và chọn <strong>NTN STORE!</strong></h5>
        <h5>Tài khoản của quý khách sẽ được tạo khi lần đầu tiên mua hàng <br>tại <strong style="color: #2AC37D;">NTN STORE</strong> và được dùng để tích điểm trong các lần mua tiếp theo.</h5>
        <h5>Tài khoản và mật khẩu của quý khách là:<strong><br>- Tài khoản: <br>- Mật khẩu: ntnshop.com</strong></h5>
        

      <div>
    </div>
  </div>
</main>';
?>
