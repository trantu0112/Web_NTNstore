<?php include_once 'views/noti/noti.php'; ?>
<div class="page-title">
  <div class="title_left">
    <h3> Danh sách đơn hàng</h3>
  </div>
  <div class="title_right">
    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
	    <form action="" method="POST" role="form" class="form">
	        <div class="input-group">
	      	
		        <input type="text" name="keys" class="form-control" required="" placeholder="Tìm Kiếm đơn hàng...">
		        <span class="input-group-btn">
		            <button class="btn btn-default" type="submit" name="sb_search">Tìm!</button>
		        </span>
	     
	        </div>
	    </form>
    </div>
  </div>
<table class="table table-inverse table-bordered">
	<thead>
		<tr>
			<th class="text-center">STT</th>
			<th class="text-center">Mã đơn hàng</th>
			<th class="text-center">Chi tiết đơn hàng</th>
			<th class="text-center" style="width: 250px;">Ghi chú</th>
			<th class="text-center">Trừ điểm</th>
			<th class="text-center">Giảm giá</th>
			<th class="text-center">Tổng hóa đơn</th>
			<th class="text-center" style="width: 100px;">Ngày đặt</th>
			<th class="text-center">Trạng thái</th>
			<?php if(!isset($_SESSION['nv'])){ ?>
			<th class="text-center">Chức năng</th>
			<?php } ?>
		</tr>
	</thead>
	<?php 
	  		$stt = 0;
	  		foreach ($rs_order as $key => $value) {
	  		$stt++;
	?>
			
	<tbody>
	    <tr>
	      <th scope="row" class="text-center"><?php echo $stt ?></th>
	      <th class="text-center"><?php echo $value['id_order'] ?></th>
	      <td class="text-center"><a title="click để xem thông tin tài khoản!" href="index.php?page=list-order&method=detail-order&id-order=<?php echo $value['id_order'] ?>&id-acc=<?php echo $value['id_account'] ?>"><?php echo 'Xem thông tin' ?></a></td>
	      <td><?php echo $value['note'] ?></td>
	      <td class="text-center"><?php echo $value['minus_points'] ?></td>
	      <td class="text-center"><?php echo $value['percent'] ?> %</td>
	      <td class="text-center"><?php echo number_format($value['sum_total']).' đ' ?></td>
	      <td class="text-center"><?php echo $value['date_order'] ?></td>
	      <td class="text-center"><?php echo $value['status'] ?></td>
	      <?php if(!isset($_SESSION['nv'])){ ?>
	      <td class="text-center">
			<a onclick="return confirm('Bạn có chắc chắn muốn xóa đơn hàng này chứ?')" href="index.php?page=list-order&method=del&id=<?php echo $value['id_order'] ?>">
				<button class="btn btn-dark">Xóa</button>
			</a>
		  </td>
		  <?php } ?>
	    </tr>
	</tbody>
	<?php
	  	}
	?>

	
</table>
</div>