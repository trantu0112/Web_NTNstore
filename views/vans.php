<div class="modal fade" id="md_addcart_vans" role="dialog" aria-hidden="true">
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
<?php if (count($rs_pro) < 1) {
  header('Location: 1');
} ?>
<div class="ps-section--features-product ps-section masonry-root pt-50 pb-80">
  <div class="ps-container">
  <div class="ps-section__header mb-50">
    <h3 class="ps-section__title" data-mask="VANS" style="font-size: 40px; color: #2AC37D;">- VANS</h3>
  </div>
  <div class="ps-product-action">
    <div class="ps-product__filter">
        <select class="ps-select selectpicker" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
            <option value="default">SẮP XẾP THEO</option>
            <option value="vans/1/asc">GÍA TĂNG DẦN</option>
            <option value="vans/1/desc">GÍA GIẢM DẦN</option>
        </select>
    </div>
  </div>

  <div class="ps-section__content pb-50">
    <div class="masonry-wrapper" data-col-md="4" data-col-sm="2" data-col-xs="1" data-gap="30" data-radio="100%">

      <div class="ps-masonry">
        <!-- Sản phẩm -->
        <?php 
            foreach ($rs_pro as $key => $value) { 
        ?>
        <div class="grid-sizer"></div>
        <div class="grid-item <?php echo $value['cate_name'] ?>">
          <div class="grid-item__content-wrapper">
            <div class="ps-shoe mb-30">
              <div class="ps-shoe__thumbnail">
                <?php if ($value['status'] == 'new') {
                ?>
                <div class="ps-badge"><span>New</span></div>
                <?php
                }else if($value['status'] == 'sale'){
                ?>
                <div class="ps-badge" style="background: #cf5050"><span><?php echo $value['percent'] ?>%</span></div>
                <?php
                } ?>
                
                
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

                    <button type="button" data-toggle="modal" data-target="#md_addcart_vans" value="<?php echo $value['id_product'] ?>" class="btn btn-danger btn-lg btn-block cart" >Thêm vào giỏ hàng</button>
                    

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
<div class="ps-product-action">
  <div class="ps-pagination">
    <ul class="pagination">
      <li><a class="page-link" href="vans/<?php 
            if(isset($_GET['pages'])){
              $page = $_GET['pages'];
              if($page <= 1){
                echo $page;
              }else{
                echo $page -= 1;
              }
            }
        ?>/<?php echo $method; ?>"><i class="fa fa-angle-left"></i></a></li>
      <?php  
          for ($i = 1; $i <= $pagination; $i++) { 
        ?>
        <li <?php if (isset($_GET["pages"]) && $_GET["pages"] == $i) {echo 'class="active"';} ?>><a class="page-link" href="vans/<?php echo $i; ?>/<?php echo $method; ?>"><?php echo $i; ?></a></li>
        <?php
          }
        ?>
        <li><a href="vans/<?php 
            if(isset($_GET['pages'])){
              $page = $_GET['pages'];
              if($page == $pagination){
                echo $page;
              }else{
                echo $page += 1;
              }
            }
        ?>/<?php echo $method; ?>"><i class="fa fa-angle-right"></i></a></li>
    </ul>
  </div>
</div>


