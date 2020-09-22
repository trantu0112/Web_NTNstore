<div class="container">
  <div class="row" >
    <div class="col-md-3 col-left-menu" style="padding-top: 20px;" >
      <ul class="nav side-menu">
        <li><i class="fa fa-home"></i> Tài khoản của tôi
          <ul class="nav child_menu">
            <li><a href="account-information">Hồ sơ</a></li>
          </ul>
        </li>
      </ul>
      <ul>
         <li><a href="view-order"><i class="fa fa-home"></i> Đơn hàng</a></li>
      </ul>
    </div>
    <div class="col-md-9 col-right-menu">    
      <h3 style="padding-bottom: 10px;">Đơn hàng của bạn</h3>
      <ul>
        <li class="view-order <?php if (isset($_SESSION['all'])) {echo "active-view";} ?>" ><a id="all" href="">Tất cả</a></li>
        <li class="view-order <?php if (isset($_SESSION['process'])) {echo "active-view";} ?>"><a id="process" href="">Đang xử lý</a></li>
        <li class="view-order <?php if (isset($_SESSION['delivery'])) {echo "active-view";} ?>"><a id="delivery" href="">Đang giao</a></li>
        <li class="view-order <?php if (isset($_SESSION['done'])) {echo "active-view";} ?>"><a id="done" href="">Đã giao</a></li>
       <li class="view-order <?php if (isset($_SESSION['cancel'])) {echo "active-view";} ?>"><a id="cancel" href="">Đã hủy</a></li>
      </ul>
      <table class="table table-bordered text-center" >
        <thead>
          <tr>
            <th class="text-center">Mã đơn hàng</th>
            <th class="text-center">Chi tiết đơn hàng</th>
            <th class="text-center">Ngày đặt</th>
            <th class="text-center">Trạng thái đơn hàng</th>
          </tr>
        </thead>
        <div id="load-table-views">
          <tbody id="view-all">
            <?php 
            if (isset($_SESSION['view'])) {
              foreach ($_SESSION['view'] as $key => $value) {
            ?>
            <tr>
              <td><?php echo $value['id_order'] ?></td>
              <td><a href="index.php?page=view-detail-order&id-order=<?php echo $value['id_order'] ?>">Xem chi tiết</a></td>
              <td><?php echo $value['date_order'] ?></td>
              <td><?php echo $value['status'] ?></td>
            </tr>
            <?php
              }
            } ?>
          </tbody>
         </div>
      </table>  
    </div>
  </div>
</div>