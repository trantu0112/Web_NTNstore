<!-- modal thông báo -->
<?php if (isset($_SESSION['noti-qty']) && $_SESSION['noti-qty'] == 1) {
?>
<div style="width: 210px; float: right" class="alert alert-success" role="alert">
  Số lượng bạn nhập vào không đúng yêu cầu nhập lại!
</div>
<?php
unset($_SESSION['noti-qty']);} ?>
<div style="width: 210px; float: right;display: none;" id="alert_tb_rt" class="alert alert-success" role="alert">
  Cảm ơn bạn đã đánh giá!
</div>
<div style="width: 210px; float: right;display: none;" id="alert_tb_rt_null" class="alert alert-success" role="alert">
  Bạn chưa điền đánh giá!
</div>
<div class="modal fade" id="dialog_view1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
          
              <div class="modal-header">
                  <button type="button"  class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              
              <div class="modal-body" id="noti-add">
                  Đã thêm vào giỏ hàng!<a href="cart"><img title="click vào để đến giỏ hàng!" style="width: 40px;height: 40px; padding-left: 5px;" src="https://cdn.iconscout.com/icon/free/png-256/shopping-cart-442-1151214.png"></a>
              </div>
              
          </div>
      </div>
</div>
<div class="modal fade" id="dialog2" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        
            <div class="modal-header">
                <button type="button"  class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php if (isset($_SESSION['name_acc_home'])) {
              ?>
            <div id="load_body_modal_rt">
            <div class="modal-body" id="form_rt">
                    <label for="">Đánh giá </label><span style="margin-left: 10px;color: #2ac37d;" class="glyphicon glyphicon-star"></span><br>
                    <textarea class="text_rating" id="text_rating_<?php echo $rs_prod['id_product'] ?>" placeholder="Hãy cho chúng tôi biết giá của bạn..."></textarea>
                    <div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
                      <button onclick="addRating(<?php echo $rs_prod['id_product'] ?>)" class="btn btn_sm">Gửi Đánh Giá</button>
                    </div>
            </div>
            </div>
              <?php
            }else{
            ?>
            <div class="modal-body">
                    <h3 style="padding-bottom: 30px;">Bạn chưa đăng nhập. Hãy Đăng nhập để đánh giá!</h1>
                    <button class="btn btn_sm"><a href="login">Đăng nhập</a></button>
            </div>

            <?php
            } ?>     
        </div>
    </div>
</div>

<!-- modal like -->
<div class="modal fade" id="rt" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        
            <div class="modal-header">
                <button type="button"  class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <div class="modal-body">
                    <h3 style="padding-bottom: 30px;">Bạn chưa đăng nhập. Hãy Đăng nhập để đánh giá!</h1>
                    <button class="btn btn_sm"><a href="login">Đăng nhập</a></button>
            </div>
            
        </div>
    </div>
</div>
<!-- end -->
<div class="test">
  <div class="container">
    <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
          </div>
    </div>
  </div>
</div>
<div class="ps-product--detail pt-60">
  <div class="ps-container">
    <div class="row">
      <div class="col-lg-10 col-md-12 col-lg-offset-1">
        <div class="ps-product__thumbnail">
          <div class="ps-product__preview">

            <div class="ps-product__variants">
              <?php foreach ($rs_detail as $key => $value) {
               ?>
               <div class="item"><img src="admin/images/img_detail/<?php echo $value['name_img'] ?>" alt=""></div>
               <?php
              } ?>
            </div>
          </div>
          <div class="ps-product__image">
            <?php foreach ($rs_detail as $key => $value) {
               ?>
            <div class="item"><img class="zoom" src="admin/images/img_detail/<?php echo $value['name_img'] ?>" alt="" data-zoom-image="admin/images/img_detail/<?php echo $rs_detail['name_img'] ?>"></div>
            <?php
              } ?>
          </div>
        </div>
        <div class="ps-product__thumbnail--mobile">
          <div class="ps-product__main-img"><img src="" alt=""></div>
          <div class="ps-product__preview owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="20" data-owl-nav="true" data-owl-dots="false" data-owl-item="3" data-owl-item-xs="3" data-owl-item-sm="3" data-owl-item-md="3" data-owl-item-lg="3" data-owl-duration="1000" data-owl-mousedrag="on"><img src="../publics/images/shoe-detail/1.jpg" alt=""><img src="../publics/images/shoe-detail/2.jpg" alt=""><img src="../publics/images/shoe-detail/3.jpg" alt=""></div>
        </div>
        <div class="ps-product__info">
          <div class="ps-product__rating">
            <div id="load_btn_rating"> 
              <div class="rating" id="btn_ratings">
                <a style="font-family: 'Archivo Narrow', sans-serif;font-size: 30px; font-style: bold;">ĐÁNH GIÁ</a>
                  <button data-toggle="modal" data-target="#dialog2" onclick="getRating1(<?php echo $rs_prod['id_product'] ?>)" id="1_<?php echo $rs_prod['id_product'] ?>" value='1' class="btn btn_rt"><span id="clr_1" onmouseover="mouseOver1()" 
                    <?php 
                      if (!isset($rs_rt['rating'])){ echo "onmouseout='mouseOut()'";} 
                      else{
                        if ($rs_rt['rating'] == 1) {
                          echo "onmouseout='mouseOut1()'";
                        }
                      }
                    ?>  
                  class="glyphicon glyphicon-star 
                    <?php 
                      if(isset($rs_rt['rating'])){
                        if($rs_rt['rating']==1){echo 'star_color';}
                        else if($rs_rt['rating']==2){echo 'star_color';}
                        else if($rs_rt['rating']==3){echo 'star_color';}
                        else if($rs_rt['rating']==4){echo 'star_color';}
                        else if($rs_rt['rating']==5){echo 'star_color';}
                      } 
                    ?>
                    "></span></button>
                  <button data-toggle="modal" data-target="#dialog2" onclick="getRating2(<?php echo $rs_prod['id_product'] ?>)" id="2_<?php echo $rs_prod['id_product'] ?>" value='2' class="btn btn_rt"><span id="clr_2" onmouseover="mouseOver2()" 
                    <?php 
                      if (!isset($rs_rt['rating'])) { echo "onmouseout='mouseOut()'";}else{
                        if ($rs_rt['rating'] == 1) {echo "onmouseout='mouseOut1()'";} 
                        else if ($rs_rt['rating'] == 2) {echo "onmouseout='mouseOut2()'";} 
                      }
                      
                    ?> 
                    class="glyphicon glyphicon-star 
                    <?php 
                      if(isset($rs_rt['rating'])){
                        if($rs_rt['rating']==2){echo 'star_color';}
                        else if($rs_rt['rating']==3){echo 'star_color';}
                        else if($rs_rt['rating']==4){echo 'star_color';}
                        else if($rs_rt['rating']==5){echo 'star_color';}
                      } 
                    ?>
                    "></span></button>
                  <button data-toggle="modal" data-target="#dialog2" onclick="getRating3(<?php echo $rs_prod['id_product'] ?>)" id="3_<?php echo $rs_prod['id_product'] ?>" value='3' class="btn btn_rt"><span id="clr_3" onmouseover="mouseOver3()" 
                    <?php 
                      if (!isset($rs_rt['rating'])) { echo "onmouseout='mouseOut()'";}else{
                        if ($rs_rt['rating'] == 1) {echo "onmouseout='mouseOut1()'";} 
                        else if ($rs_rt['rating'] == 2) {echo "onmouseout='mouseOut2()'";} 
                        else if ($rs_rt['rating'] == 3) {echo "onmouseout='mouseOut3()'";} 
                      }
                      
                    ?> 
                  class="glyphicon glyphicon-star 
                    <?php 
                      if(isset($rs_rt['rating'])){
                        if($rs_rt['rating']==3){echo 'star_color';}
                        else if($rs_rt['rating']==4){echo 'star_color';}
                        else if($rs_rt['rating']==5){echo 'star_color';}
                      } 
                    ?>
                    "></span></button>
                  <button data-toggle="modal" data-target="#dialog2" onclick="getRating4(<?php echo $rs_prod['id_product'] ?>)" id="4_<?php echo $rs_prod['id_product'] ?>" value='4' class="btn btn_rt"><span id="clr_4" onmouseover="mouseOver4()" 
                    <?php 
                      if (!isset($rs_rt['rating'])) { echo "onmouseout='mouseOut()'";}else{
                        if ($rs_rt['rating'] == 1) {echo "onmouseout='mouseOut1()'";} 
                        else if ($rs_rt['rating'] == 2) {echo "onmouseout='mouseOut2()'";} 
                        else if ($rs_rt['rating'] == 3) {echo "onmouseout='mouseOut3()'";} 
                        else if ($rs_rt['rating'] == 4) {echo "onmouseout='mouseOut4()'";} 
                      }
                      
                    ?>  
                    class="glyphicon glyphicon-star 
                    <?php 
                      if(isset($rs_rt['rating'])){
                        if($rs_rt['rating']==4){echo 'star_color';}
                        else if($rs_rt['rating']==5){echo 'star_color';}
                      } 
                    ?>
                    "></span></button>
                  <button data-toggle="modal" data-target="#dialog2" onclick="getRating5(<?php echo $rs_prod['id_product'] ?>)" id="5_<?php echo $rs_prod['id_product'] ?>" value='5' class="btn btn_rt"><span id="clr_5" onmouseover="mouseOver5()" 
                    <?php 
                      if (!isset($rs_rt['rating'])) { echo "onmouseout='mouseOut()'";}else{
                        if ($rs_rt['rating'] == 1) {echo "onmouseout='mouseOut1()'";} 
                        else if ($rs_rt['rating'] == 2) {echo "onmouseout='mouseOut2()'";} 
                        else if ($rs_rt['rating'] == 3) {echo "onmouseout='mouseOut3()'";} 
                        else if ($rs_rt['rating'] == 4) {echo "onmouseout='mouseOut4()'";} 
                      }
                      
                    ?> 
                    class="glyphicon glyphicon-star 
                    <?php 
                      if(isset($rs_rt['rating'])){
                        if($rs_rt['rating']==5){echo 'star_color';}
                      } 
                    ?>
                    "></span></button>
                  
              <br><strong>Đánh giá trung bình: 
                <?php
                if (!isset($rs_rt_prod)) {
                }else{
                  $sum = 0;
                foreach ($rs_rt_prod as $key => $value) {
                  $sum += $value['rating'];
                  } 
                }
                if (isset($sum)){
                  if (count($rs_rt_prod)>0) {
                    $tb =(float) ($sum / count($rs_rt_prod)); 
                    echo ROUND($tb,1);
                  }else{
                    $tb = 0;
                    echo $tb;
                  }  
               } ?></strong><span style="padding-left:5px;color: #2ac37d;" class="glyphicon glyphicon-star"></span>    
              </div>
            </div>
          </div>
          <h1><?php echo $rs_prod['product_name'] ?></h1>
          <p class="ps-product__category"><a href="#"> <?php echo $rs_prod['cate_name'] ?></a>
          <h3 class="ps-product__price">
          <?php 
              if ($rs_prod['percent'] <= 0) {
                echo number_format($rs_prod['price']).' đ';
              }else{
                $price = $rs_prod['price'] * (1 - ($rs_prod['percent']/100));
                echo number_format($price).' đ';
              } 
          ?>
            <del><?php if ($rs_prod['percent'] > 0) {echo number_format($rs_prod['price']).' đ';}?></del>
          </h3>
          <div class="ps-product__block ps-product__size">
          <form method="POST" role='form'>
            <h4>SIZE <span style="margin-left: 187px;font-family: 'Archivo Narrow',sans-serif;font-size: 18px;">SỐ LƯỢNG</span></h4>
            <select class="form-control size_detail" name="size">
              <option value="37">37</option>
              <option value="38">38</option>
              <option value="39">39</option>
              <option value="40">40</option>
              <option value="41">41</option>
              <option value="42">42</option>
              <option value="43">43</option>
            </select>
            <div class="form-group">
              <input class="form-control" min="1" max="10" type="number" value="1" name="qty">
            </div>
          </div>
          <div class="ps-product__shopping">
            <button class="ps-btn mb-10" type="submit" name="sm_addCart">Thêm vào giỏ hàng<i class="ps-icon-next"></i></button>
          </div>
        </form>
        </div>
        <div class="clearfix"></div>
        <div class="ps-product__content mt-50">
          <ul class="tab-list" role="tablist">
            <li><a href="#tab_02" aria-controls="tab_02" role="tab" data-toggle="tab">Đánh giá của khách hàng</a></li>
          </ul>
        </div>
        <div class="tab-content mb-60">
          <div id="load_cmt">
          <div class="tab-pane" role="tabpanel" id="tab_02">
            <p class="mb-20"><?php echo count($rs_rt_prod) ?> Đánh giá cho <strong><?php echo $rs_prod['product_name'] ?></strong></p>
            <?php
                if (!isset($rs_rt_prod)) {
                 }else{
                  $sum = 0;
                foreach ($rs_rt_prod as $key => $value) {
                  $sum += $value['rating'];
            ?>
            <div class="ps-review">
              <div class="ps-review__thumbnail"><img src="admin/images/account/<?php echo $value['img_avarta'] ?>" alt=""></div>
              <div class="ps-review__content">
                <header>
                  <?php 
                      switch ($value['rating']) {
                        case '1':
                  ?>
                  <span style="color: #2ac37d;" class="glyphicon glyphicon-star"></span>
                  <?php
                          break;
                        case '2':
                  ?>
                  <span style="color: #2ac37d;" class="glyphicon glyphicon-star"></span>
                  <span style="color: #2ac37d;" class="glyphicon glyphicon-star"></span>
                  <?php
                          break;
                        case '3':
                  ?>
                  <span style="color: #2ac37d;" class="glyphicon glyphicon-star"></span>
                  <span style="color: #2ac37d;" class="glyphicon glyphicon-star"></span>
                  <span style="color: #2ac37d;" class="glyphicon glyphicon-star"></span>
                  <?php
                          break;
                        case '4':
                  ?>
                  <span style="color: #2ac37d;" class="glyphicon glyphicon-star"></span>
                  <span style="color: #2ac37d;" class="glyphicon glyphicon-star"></span>
                  <span style="color: #2ac37d;" class="glyphicon glyphicon-star"></span>
                  <span style="color: #2ac37d;" class="glyphicon glyphicon-star"></span>
                  <?php
                          break;
                        case '5':
                  ?>
                  <span style="color: #2ac37d;" class="glyphicon glyphicon-star"></span>
                  <span style="color: #2ac37d;" class="glyphicon glyphicon-star"></span>
                  <span style="color: #2ac37d;" class="glyphicon glyphicon-star"></span>
                  <span style="color: #2ac37d;" class="glyphicon glyphicon-star"></span>
                  <span style="color: #2ac37d;" class="glyphicon glyphicon-star"></span>
                  <?php
                          break;
                      }
                   ?>
                  
                  <p><a> <?php echo $value['display_name'] ?> </a><?php echo date("H:i - d/m/Y",strtotime($value['day_create']));?>
                </header>
                <p><?php echo $value['rating_proc'] ?></p>
              </div>
            </div>
            <?php
                  }
                }
             ?>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="ps-section--features-product ps-section masonry-root pt-50 pb-80">
  <div class="ps-container">
    <div class="ps-section__header mb-50">
      <h3 class="ps-section__title" data-mask="Product" style="font-size: 40px; color: #2AC37D;">Sản Phẩm vừa xem</h3>
    </div>
  <div class="ps-section__content pb-50">
      <div class="masonry-wrapper" data-col-md="4" data-col-sm="2" data-col-xs="1" data-gap="30" data-radio="100%">

        <div class="ps-masonry">
          <!-- Sản phẩm -->
          <?php 
            if(isset($_SESSION['views'])){

              foreach ($_SESSION['views'] as $key => $value) { 
          ?>
          <div class="grid-sizer"></div>
          <div class="grid-item">
            <div class="grid-item__content-wrapper">
              <div class="ps-shoe mb-30">
                <div class="ps-shoe__thumbnail">
                  <?php if ($value['percent'] > 0) {
                  ?>
                   <div class="ps-badge" style="background: #cf5050"><span><?php echo $value['percent'] ?>%</span></div>
                  <?php
                  }else if($value['status'] == 'new'){
                  ?>
                  <div class="ps-badge" style="background: #2AC37D"><span>NEW</span></div>
                  <?php
                  } ?>
                 
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

                      <button type="button" data-toggle="modal" data-target="#dialog_view1" value="<?php echo $value['id_product'] ?>" class="btn btn-danger btn-lg btn-block cart" >Thêm vào giỏ hàng</button>
                      

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
              }
            ?>
          </div>
        </div>
      </div>
  </div>
</div>