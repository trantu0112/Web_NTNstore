<?php
if (isset($_SESSION['id_account'])) {
  if ($rs_acc['addres'] != null && $rs_acc['phone'] != null) {
?>
<div class="modal fade" id="alert-check-out" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="margin-left: 245px;">
        <div class="modal-content" style="width: 630px;padding-right: 25px;padding-top: 25px;">  
            
            <div class="modal-body">
                    <h3><strong>Đặt hàng thành công!</strong> Đơn hàng đã được gửi vào Email của quý khách. Cảm ơn quý khách đã lựa chọn <strong style="color: #2AC37D">NTN STORE</strong></h3>
            </div>
            
        </div>
    </div>
</div>
<?php 
  }
}else{
?>
<div class="modal fade" id="alert-check-out" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="margin-left: 245px;">
        <div class="modal-content" style="width: 630px;padding-right: 25px;padding-top: 25px;">  
            
            <div class="modal-body">
                    <h3><strong>Đặt hàng thành công!</strong> Đơn hàng đã được gửi vào Email của quý khách. Cảm ơn quý khách đã lựa chọn <strong style="color: #2AC37D">NTN STORE</strong></h3>
            </div>
            
        </div>
    </div>
</div>
<?php
} 
?>
<?php if (isset($_SESSION['add_account'])) {
?>
<div style="width: 200px; position: fixed; right: 0px;z-index: 99999;" id="noti_add_account" class="alert alert-success alert_update" role="alert">
Thông tin đơn hàng không hợp lệ! Yêu cầu nhập lại.</div>
<?php
unset($_SESSION['add_account']);} ?>
<?php 
  if (!isset($_SESSION['cart'])) {
    header("Location: home");
  }else if($_SESSION['sum'] == 0){
    header("Location: home");
  }
?> 
<div class="ps-checkout pt-80 pb-80">
  <div class="ps-container">
    <form class="ps-checkout__form" action="" method="post">
      <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 ">
              <?php if (isset($_SESSION['id_account'])) {
                ?>
              <div class="ps-checkout__billing">
                <h3>Chi tiết hóa đơn</h3>
                      <div class="form-group form-group--inline">
                        <label>Họ và tên<span>*</span>
                        </label>
                        <input class="form-control" type="text" name="name" value="<?php echo $rs_acc['display_name'] ?>" readonly="">
                      </div>
                      <div class="form-group form-group--inline">
                        <label>Email<span>*</span>
                        </label>
                        <input class="form-control" type="email" name="email" value="<?php echo $rs_acc['email'] ?>" readonly="">
                      </div>
                      <?php if ($rs_acc['phone'] != null) {
                      ?>
                      <div class="form-group form-group--inline">
                        <label>Số điện thoại<span>*</span>
                        </label>
                        <input class="form-control" type="text" name="phone" value="<?php echo $rs_acc['phone'] ?>" readonly="">
                      </div>
                      <?php
                      } ?>
                      <?php if ($rs_acc['addres'] != null) {
                      ?>
                      <div class="form-group form-group--inline">
                        <label>Địa chỉ<span>*</span>
                        </label>
                        <input class="form-control" type="text" name="addres" value="<?php echo $rs_acc['addres'] ?>" readonly="">
                      </div>
                      <?php
                      }else{
                      ?>
                      <label style="font-size: 16px;line-height: 1.3em;color: #2AC37D;font-weight: 400;">Số điện thoại và địa chỉ của bạn chưa có hãy vào cập nhật ngay => </label><a href="account-information"> <strong>Cập nhật</strong></a>
                      <?php
                      } ?>
                      
                       <div class="form-group form-group--inline">
                        <label>Điểm<span>*</span>
                        </label>
                        <input class="form-control" type="text" name="points" value="<?php echo $rs_acc['points'] ?>" readonly="">
                      </div>
                <div class="form-group">
                  <label style="font-size: 16px;line-height: 1.3em;color: #2AC37D;font-weight: 400;">Nếu bạn đổi địa chỉ hãy ghi vào ghi chú nhé!</label>
                </div>
                <div class="form-group form-group--inline textarea">
                  <label>Ghi chú đặt hàng<span>*</span></label>
                  <textarea class="form-control" name="note" rows="5" placeholder="Hãy viết ghi chú của bạn..."></textarea>
                </div>
              </div>
              <?php
              }else{
              ?>
              <div class="ps-checkout__billing">
                <h3>Chi tiết hóa đơn</h3>
                      <div class="form-group form-group--inline">
                        <label>Họ và tên<span>*</span>
                        </label>
                        <span id="error_name" style="color: #2AC37D;"></span>
                        <input class="form-control" required="" onblur="checkName_ckout()" type="text" name="name" id='name_checkout' value="<?php if(isset($_SESSION['name'])){echo $_SESSION['name'];} ?>">
                      </div>
                      <div class="form-group form-group--inline">
                        <label>Email<span>*</span>
                        </label>
                        <div id="load_email">
                        <?php if(isset($_SESSION['email']) && $_SESSION['email'] == 1){
                        ?>
                        <span id="email_erck" style="color: #2AC37D;">Email của bạn đã tồn tại</span>
                        <?php 
                          }else if (isset($_SESSION['email']) && $_SESSION['email'] == 2) {
                        ?>
                        <span id="email_erck" style="color: #2AC37D;">Email không được để trống</span>
                        <?php 
                          }else if (isset($_SESSION['email']) && $_SESSION['email'] == 3) {
                        ?>
                        <span id="email_erck" style="color: #2AC37D;">Email không hợp lệ</span>
                        <?php 
                          }
                        ?>
                        </div>
                        <input class="form-control" required="" onkeyup="checkEmail_ckout()" type="email" name="email" id="email_checkout" value="">
                      </div>
                      <div class="form-group form-group--inline">
                        <label>Phone<span>*</span>
                        </label>
                        <div id="load_phone">
                        <?php if(isset($_SESSION['phone']) && $_SESSION['phone'] == 1){
                        ?>
                        <span id="phone_erck" style="color: #2AC37D;">Số điện thoại của bạn đã tồn tại</span>
                        <?php 
                          }else if (isset($_SESSION['phone']) && $_SESSION['phone'] == 2) {
                        ?>
                        <span id="phone_erck" style="color: #2AC37D;">Số điện thoại không được để trống</span>
                        <?php 
                          }else if (isset($_SESSION['phone']) && $_SESSION['phone'] == 3) {
                        ?>
                        <span id="phone_erck" style="color: #2AC37D;">Số điện thoại không hợp lệ</span>
                        <?php 
                          }
                        ?>
                        </div>
                        <input class="form-control" required="" onkeyup="checkPhone_ckout()" type="text" name="phone" id="phone_checkout" value="">
                      </div>
                     
                      <div class="form-group form-group--inline">
                        <label>Địa chỉ<span>*</span>
                        </label>
                        <span id="error_addres" style="color: #2AC37D;"></span>
                        <input class="form-control" required="" onblur="checkAddres_ckout()" type="text" name="addres" id="addres_checkout" value="<?php if(isset($_SESSION['addres'])){echo $_SESSION['addres'];} ?>">
                      </div>
                <div class="form-group form-group--inline textarea">
                  <label>Ghi chú đặt hàng<span>*</span></label>
                  <span id="error_note" style="color: #2AC37D;"></span>
                  <textarea class="form-control" name="note" id="note_checkout" rows="5" placeholder="Hãy viết ghi chú của bạn..."></textarea>
                </div>
                <div class="form-group">
                  <label style="font-size: 16px;line-height: 1.3em;color: #2AC37D;font-weight: 400;">Nếu Email hoặc Số điện thoại của bạn đã tồn tại hãy đăng nhập ngay nhé!</label>
                </div>
              </div>
              <?php
              } ?>
            </div>
            <div id="load_point">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 " id="poin">
              <div class="ps-checkout__order">
                <header>
                  <h3>Đơn hàng của bạn</h3>
                </header>
                <div class="content">
                  <table class="table ps-checkout__products">
                    <tbody>
                    <?php 
                        if (isset($_SESSION['cart'])) {
                            foreach ($_SESSION['cart'] as $key => $size) {
                              foreach ($size as $key => $value) {
                        ?>
                    <div class="ps-cart-item">
                      <div class="ps-cart-item__thumbnail"><a href="product-detail/<?php echo $value['id_product'].'/'.makeUrl($value['product_name']) ?>"></a><img src="admin/images/product/<?php echo $value['cate_name'].'/'.$value['img'] ?>" alt=""></div>
                      <div class="ps-cart-item__content"><a class="ps-cart-item__title" href="product-detail/<?php echo $value['id_product'].'/'.makeUrl($value['product_name']) ?>"><span><?php echo $value['product_name'] ?></span></a>
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
                      <tr>
                        <td>
                          Giảm giá
                        </td>
                        <td>
                          <?php if (isset($_SESSION['percent'])) {
                            echo $_SESSION['percent'].' %';
                          }else{echo "0 %";} ?>
                        </td>
                      </tr>
                      <?php if (isset($_SESSION['id_account'])) {
                      ?>
                      <tr>
                        <td>Bạn có dùng điểm không?</td>
                        <td>
                          <div class="form-check" style="float: right;">
                          <label class="form-check-label" for="exampleRadios1">Có </label> <input <?php if (isset($_SESSION['points'])) {echo "checked";} ?> class="form-check-input" type="radio" name="exampleRadios" id="points1" value="<?php 
                          if (isset($_SESSION['id_account'])) {
                            echo $rs_acc['points'];
                          }else{
                            echo "0";
                          }
                         ?>" >
                          
                          </div>
                          <div class="form-check" style="float: right;">
                          <label class="form-check-label" for="exampleRadios2">Không </label> <input  <?php if (!isset($_SESSION['points'])) {echo "checked";} ?> class="form-check-input" type="radio" name="exampleRadios" id="points2" value="0">
                          </div>
                        </td>
                      </tr>
                      <?php
                      } ?>
                      <tr>
                        <td>Tổng hóa đơn</td>
                        <td>
                          <?php 
                          if (isset($_SESSION['percent'])) {
                            if (isset($_SESSION['points'])) {
                              $percent = $_SESSION['percent'];
                              $sum_tt = ($_SESSION['sum'] * (1 - $percent/100)) - $_SESSION['points'];
                              if ($sum_tt < 0) {
                                $_SESSION['sum_tt'] = 0;
                                $sum_tt = 0;
                              }else{
                                $_SESSION['sum_tt'] = $sum_tt;
                              }
                              echo number_format($sum_tt).' đ';
                            }else{
                              $percent = $_SESSION['percent'];
                              $sum_tt = $_SESSION['sum'] * (1 - $percent/100);
                              $_SESSION['sum_tt'] = $sum_tt;
                              echo number_format($sum_tt).' đ';
                            }
                            
                          }else{
                            if (isset($_SESSION['points'])) {
                              $sum_tt = $_SESSION['sum'] - $_SESSION['points'];
                              if ($sum_tt < 0) {
                                $_SESSION['sum_tt'] = 0;
                                $sum_tt = 0;
                              }else{
                                $_SESSION['sum_tt'] = $sum_tt;
                              }
                              echo number_format($sum_tt).' đ';  
                            }else{
                              echo number_format($_SESSION['sum']).' đ';
                            }
                            
                          }
                          ?>
                        </td>
                      </tr>
                    </tbody>
                    
                  </table>
                </div>
                <footer>
                  <h3>Phương Thức Thanh Toán</h3>
                  <div class="form-group cheque">
                    <div class="ps-radio">
                      <input class="form-control" type="radio" id="rdo01" name="payment" checked>
                      <label for="rdo01">Thanh toán khi nhận hàng</label>
                    </div>
                  </div>
                  <div class="form-group paypal">
                    <!-- <div class="ps-radio ps-radio--inline">
                      <input class="form-control" type="radio" name="payment" id="rdo02">
                      <label for="rdo02">Paypal</label>
                    </div>
                    <ul class="ps-payment-method">
                      <li><a href="#"><img src="publics/images/payment/1.png" alt=""></a></li>
                      <li><a href="#"><img src="publics/images/payment/2.png" alt=""></a></li>
                      <li><a href="#"><img src="publics/images/payment/3.png" alt=""></a></li>
                    </ul> -->
                    <button type="submit" name="sm_order" <?php if(!isset($_SESSION['add_account'])){echo 'data-toggle="modal" data-target="#alert-check-out"';} ?>  class="ps-btn ps-btn--fullwidth">Đặt hàng<i class="ps-icon-next"></i></button>
                  </div>
                </footer>
              </div>
            </div>
            </div>
      </div>
    </form>
  </div>
</div>
