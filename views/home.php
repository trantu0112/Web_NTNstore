<!-- modal thông báo  thêm vào giỏ hàng-->
<div class="modal fade" id="md_addcart" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="background: #fff;border: solid #fff;">
        
            <div class="modal-header">
                <button type="button"  class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <div class="modal-body" id="noti-add">
                Đã thêm vào giỏ hàng!<a href="cart"><img title="click vào để đến giỏ hàng!" style="width: 30.16px;height: 30.16px; padding-left: 5px;" src="https://media.istockphoto.com/vectors/shopping-cart-icon-silhouette-2-vector-id898295684?k=6&m=898295684&s=170667a&w=0&h=onBaadKObDlxDfDkefq0qFQv6hdKzp4EPGzol8DX8U8="></a>
            </div>
            
        </div>
    </div>
</div>
<?php 
    if (!isset($_SESSION['id_account'])) {
?>
  <!-- modal thông báo chưa đăng nhập -->
<div class="modal fade" id="dialog3" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        
            <div class="modal-header">
                <button type="button"  class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <div class="modal-body">
                    <h3 style="padding-bottom: 30px;">Bạn chưa đăng nhập. Hãy Đăng nhập để đánh giá!</h3>
                    <button class="btn btn_sm"><a href="login">Đăng nhập</a></button>
            </div>
            
        </div>
    </div>
</div>
<?php
    }
?>
<!-- end -->
<!-- features product -->
<div class="ps-section--features-product ps-section masonry-root pt-50 pb-80">
  <div class="ps-container">
    <div class="ps-section__header mb-50">
      <h3 class="ps-section__title" data-mask="NEW PRODUCT" style="font-size: 40px; color: #2AC37D;">- SẢN PHẨM MỚI</h3>
      <ul class="ps-masonry__filter">
        <?php 
          $qty = 0;
          $Adidas = 0;
          $Nike = 0;
          $Vans = 0;
          foreach ($rs_pro_new as $key => $value) {
            $qty ++;
            if (isset($value['cate_name']) && $value['cate_name'] == 'ADIDAS') {
              $Adidas ++; 
            }else if(isset($value['cate_name']) && $value['cate_name'] == 'NIKE'){
              $Nike ++;
            }else if(isset($value['cate_name']) && $value['cate_name'] == 'VANS'){
              $Vans ++;
            }
          }
         ?>
        <li class="current"><a href="#" data-filter="*">All <sup><?php echo $qty ?></sup></a></li>
        <li><a href="#" data-filter=".ADIDAS">Adidas <sup><?php echo $Adidas ?></sup></a></li>
        <li><a href="#" data-filter=".NIKE">Nike <sup><?php echo $Nike ?></sup></a></li>
        <li><a href="#" data-filter=".VANS">Vans <sup><?php echo $Vans ?></sup></a></li>
      </ul>
    </div>

    <div class="ps-section__content pb-50">
      <div class="masonry-wrapper" data-col-md="4" data-col-sm="2" data-col-xs="1" data-gap="30" data-radio="100%">

        <div class="ps-masonry">
          <!-- Sản phẩm -->
          <?php 
              foreach ($rs_pro_new as $key => $value) { 
          ?>
          <div class="grid-sizer"></div>
          <div class="grid-item <?php echo $value['cate_name'] ?>">
            <div class="grid-item__content-wrapper">
              <div class="ps-shoe mb-30">
                <div class="ps-shoe__thumbnail">
                  <div class="ps-badge"><span>New</span></div>
                  <div class="ps-badge ps-badge--sale ps-badge--2nd" <?php if ($value['percent'] <= 0) { echo "style='opacity: 0;'";; } ?>><span><?php echo $value['percent'] ?>%</span></div>
                  <!-- Ảnh sản phẩm -->
                <img src="admin/images/product/<?= $value['cate_name'].'/'.$value['img'] ?>" alt=""><a class="ps-shoe__overlay" href="product-detail/<?php echo $value['id_product'].'/'.makeUrl($value['product_name']) ?>"></a>
                </div>
                <div class="ps-shoe__content">
                  <div class="ps-shoe__variants">

                      <div class="form-group">
                        <label for="size_home">Size:</label>
                        <select class="form-control size_home" id="size_<?php echo $value['id_product'] ?>" name="size_home" onclick="getSize(<?php echo $value['id_product'] ?>)">
                          <option value="37">37</option>
                          <option value="38">38</option>
                          <option value="39">39</option>
                          <option value="40">40</option>
                          <option value="41">41</option>
                          <option value="42">42</option>
                          <option value="43">43</option>
                        </select>
                      </div>

                      <button type="button" data-toggle="modal" data-target="#md_addcart" value="<?php echo $value['id_product'] ?>" class="btn btn-danger btn-lg btn-block cart" >Thêm vào giỏ hàng</button>
                      

                  </div>
                  <div class="ps-shoe__detail"><a class="ps-shoe__name" href="product-detail/<?php echo $value['id_product'].'/'.makeUrl($value['product_name']) ?>"><?php echo $value['product_name'] ?></a>
                    <p >
                      <del><?php
                        if ($value['percent'] > 0) {echo number_format($value['price']).' đ';}?></del>
                      <span style="color: red; font-weight: bold;">
                      <?php 
                        if ($value['percent'] <= 0) {
                          echo number_format($value['price']).' đ';
                        }else{
                          $price = $value['price'] * (1 - ($value['percent']/100));
                          echo number_format($price).' đ';
                        } 
                      ?>
                      </span>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

           <?php
                }
            ?>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- banner ở giữa -->
<div class="ps-section--offer">
  <div class="ps-column"><a class="ps-offer" href="home"><img src="admin/images/banner/home-banner-1.png" alt=""></a></div>
  <div class="ps-column"><a class="ps-offer" href="home"><img src="admin/images/banner/home-banner-2.png" alt=""></a></div>
</div>

<!-- top sales -->
<div class="ps-section--features-product ps-section masonry-root pt-50 pb-80">
  <div class="ps-container">
    <div class="ps-section__header mb-50">
      <h3 class="ps-section__title" data-mask="TOP SALE" style="font-size: 40px; color: #2AC37D;">- SẢN PHẨM GIẢM GIÁ</h3>
      <ul class="ps-masonry__filter">
        <?php 
          $qty = 0;
          $Adidas = 0;
          $Nike = 0;
          $Vans = 0;
          foreach ($rs_pro_sale as $key => $value) {
            $qty ++;
            if (isset($value['cate_name']) && $value['cate_name'] == 'ADIDAS') {
              $Adidas ++; 
            }else if(isset($value['cate_name']) && $value['cate_name'] == 'NIKE'){
              $Nike ++;
            }else if(isset($value['cate_name']) && $value['cate_name'] == 'VANS'){
              $Vans ++;
            }
          }
         ?>
        <li class="current"><a href="#" data-filter="*">All <sup><?php echo $qty ?></sup></a></li>
        <li><a href="#" data-filter=".ADIDAS">Adidas <sup><?php echo $Adidas ?></sup></a></li>
        <li><a href="#" data-filter=".NIKE">Nike <sup><?php echo $Nike ?></sup></a></li>
        <li><a href="#" data-filter=".VANS">Vans <sup><?php echo $Vans ?></sup></a></li>
      </ul>
    </div>

    <div class="ps-section__content pb-50">
      <div class="masonry-wrapper" data-col-md="4" data-col-sm="2" data-col-xs="1" data-gap="30" data-radio="100%">

        <div class="ps-masonry">
          <!-- Sản phẩm -->
          <?php 
              foreach ($rs_pro_sale as $key => $value) { 
          ?>
          <div class="grid-sizer"></div>
          <div class="grid-item <?php echo $value['cate_name'] ?>">
            <div class="grid-item__content-wrapper">
              <div class="ps-shoe mb-30">
                <div class="ps-shoe__thumbnail">
                  <div class="ps-badge" style="background: #cf5050"><span><?php echo $value['percent'] ?>%</span></div>
                  <!-- <div class="ps-badge ps-badge--sale ps-badge--2nd" ><span></span></div> -->
                  <!-- Ảnh sản phẩm -->
                <img src="admin/images/product/<?php echo $value['cate_name'].'/'.$value['img'] ?>" alt=""><a class="ps-shoe__overlay" href="product-detail/<?php echo $value['id_product'].'/'.makeUrl($value['product_name']) ?>"></a>
                </div>
                <div class="ps-shoe__content">
                  <div class="ps-shoe__variants">

                      <div class="form-group">
                        <label for="size_home">Size:</label>
                        <select class="form-control size_home" id="size_<?php echo $value['id_product'] ?>" name="size_home" onclick="getSize(<?php echo $value['id_product'] ?>)">
                          <option value="37">37</option>
                          <option value="38">38</option>
                          <option value="39">39</option>
                          <option value="40">40</option>
                          <option value="41">41</option>
                          <option value="42">42</option>
                          <option value="43">43</option>
                        </select>
                      </div>

                      <button type="button" data-toggle="modal" data-target="#md_addcart" value="<?php echo $value['id_product'] ?>" class="btn btn-danger btn-lg btn-block cart" >Thêm vào giỏ hàng</button>
                      

                  </div>
                  <div class="ps-shoe__detail"><a class="ps-shoe__name" href="product-detail/<?php echo $value['id_product'].'/'.makeUrl($value['product_name']) ?>"><?php echo $value['product_name'] ?></a>
                    <p >
                      <del><?php
                        if ($value['percent'] > 0) {echo number_format($value['price']).' đ';}?></del>
                      <span style="color: red; font-weight: bold;">
                      <?php 
                        if ($value['percent'] <= 0) {
                          echo number_format($value['price']).' đ';
                        }else{
                          $price = $value['price'] * (1 - ($value['percent']/100));
                          echo number_format($price).' đ';
                        } 
                      ?>
                      </span>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

           <?php
                }
            ?>
        </div>
      </div>
    </div>
  </div>
</div>

