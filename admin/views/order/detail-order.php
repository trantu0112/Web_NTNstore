<?php 
if (!isset($_GET['id-order']) || !isset($_GET['id-acc'])) {
	header('Location: index.php?page=list-order');
}else if (count($rs_acc) < 1 || count($rs_detail) < 1) {
	header('Location: index.php?page=list-order');
}else{
	$id_order = $rs_detail[0]['id_order'];
	$id_account = $rs_acc[0]['id_account'];
	if ($id_order == $_GET['id-order'] && $id_account == $_GET['id-acc']) {
?>
<div class="page-title">
  <div class="title_left">
    <h3> Chi tiết đơn hàng</h3>
    <h4>Thông tin khách hàng:</h4>
    <p><strong>Họ và tên: </strong><?php echo $rs_acc[0]['display_name'] ?></p>
    <p><strong>Số điện thoại: </strong><?php echo $rs_acc[0]['phone'] ?></p>
    <p><strong>Email: </strong><?php echo $rs_acc[0]['email'] ?></p>
    <p><strong>Địa chỉ: </strong><?php echo $rs_acc[0]['addres'] ?></p>
  </div>
<table class="table table-inverse table-bordered">
	<thead>
		<tr>
			<th class="text-center" style="width: 100px;">Mã đơn hàng</th>
			<th class="text-center">Sản phẩm</th>
			<th class="text-center">Size</th>
			<th class="text-center">Số lượng</th>
			<th class="text-center">Giá gốc</th>
			<th class="text-center">Giảm giá (%)</th>
			<th class="text-center">Giá</th>
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
	    <tr>
	    	<th class="text-center">Chức năng</th>
	    	<form method="POST">
		    	<td class="text-center" colspan="1"><button type="submit" name="sm_cancel" class="btn btn-dark">Hủy đơn hàng</button></td>
		    	<td class="text-center" colspan="3"><button type="submit" name="sm_move" class="btn btn-dark">Đang giao</button></td>
		    	<td class="text-center" colspan="3"><button type="submit" name="sm_finish" class="btn btn-dark">Hoàn thành</button></td>
	    	</form>
	    </tr>
	</tbody>
</table>
<div>
	<h3><a href="index.php?page=list-order&method=list">Quay lại</a></h3>
</div>
</div>
<div style="float: right;">
    <h3> Trừ điểm: <?php echo $rs_order[0]['minus_points'] ?></h3>
    <h3> Giảm giá: <?php echo $rs_order[0]['percent'] ?> %</h3>
    <h3> Tổng tiền trước giảm: <?php echo number_format($total).' đ' ?></h3>
    <h3> Tổng đơn hàng: <?php echo number_format($rs_order[0]['sum_total']).' đ' ?></h3>
</div>
<?php
	}else{
		header('Location: index.php?page=list-order');
	}
} ?>
