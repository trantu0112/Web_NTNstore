<?php 
    if (count($rs_detail) < 1 || !isset($_GET['id-order'])) {
      header('Location: index.php?page=view-order');
    }
 ?>
<div class="container" style="min-height: 700px;">
      <h3 style="padding-bottom: 20px;">Chi tiết đơn hàng</h3>
      <table class="table table-inverse table-bordered">
        <thead>
          <tr>
            <th class="text-center" style="width: 120px;">Mã đơn hàng</th>
            <th class="text-center">Sản phẩm</th>
            <th class="text-center">Size</th>
            <th class="text-center">Số lượng</th>
            <th class="text-center">Giá gốc</th>
            <th class="text-center">Giảm giá (%)</th>
            <th class="text-center">Giá sau giảm</th>
            <th class="text-center">Tổng tiền</th>
          </tr>
        </thead>
        <tbody>
        <?php 
            $total = 0;
              foreach ($rs_detail as $key => $value) {
                $total += $value['total'];
        ?>
            <tr>
              <th class="text-center"><?php echo $value['id_order'] ?></th>
              <td class="text-center"><?php echo $value['product_name'] ?></td>
              <td class="text-center"><?php echo $value['size'] ?></td>
              <td class="text-center"><?php echo $value['quantity_order'] ?></td>
              <td class="text-center"><?php echo number_format($value['price']).' đ' ?></td>
              <td class="text-center"><?php echo $value['percent'] ?></td>
              <td class="text-center"><?php echo number_format($value['price_detail']).' đ' ?></td>
              <td class="text-center"><?php echo number_format($value['total']).' đ' ?></td>
            </tr>
        <?php
            }
        ?>
        </tbody>
      </table>
      <a href="index.php?page=view-order"><button class="btn btn-success">Quay lại</button></a>
</div>