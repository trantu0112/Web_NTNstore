<?php include_once 'views/noti/noti.php'; ?>
<div class="page-title">
  <div class="title_left">
    <h3> Danh sách tài khoản</h3>
  </div>
  <div class="title_right">
    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
	    <form action="" method="POST" role="form" class="form">
	        <div class="input-group">
	      	
		        <input type="text" name="keys" class="form-control" required="" placeholder="Tìm Kiếm Tài Khoản...">
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
			<th class="text-center">Ảnh đại diện</th>
			<th style="width: 200px;" class="text-center">Tên hiển thị</th>
			<th class="text-center">Tên đăng nhập</th>
			<th class="text-center">Số điện thoại</th>
			<th class="text-center">Email</th>
			<th style="width: 200px;" class="text-center">Địa chỉ</th>
			<th class="text-center">Loại tài khoản</th>
			<th class="text-center">Điểm</th>
			<?php if (!isset($_SESSION['nv'])) {
	     	 ?>
			<th class="text-center">Chức năng</th>
			<?php
	      	} ?>	
		</tr>
	</thead>
	<?php 
	  		$stt = 0;
	  		foreach ($rs_acc as $key => $value) {
	  		$stt++;
	?>
			
	<tbody>
	    <tr>
	      <th scope="row" class="text-center"><?php echo $stt ?></th>
	      <th class="text-center"><img style="width: 100px;height: 100px;" src="images/account/<?php echo $value['img_avarta'] ?>"></th>
	      <td><?php echo $value['display_name'] ?></td>
	      <td><?php echo $value['user_name'] ?></td>
	      <td><?php echo $value['phone'] ?></td>
	      <td><?php echo $value['email'] ?></td>
	      <td><?php echo $value['addres'] ?></td>
	      <td><?php echo $value['type'] ?></td>	
	      <td><?php echo $value['points'] ?></td>
	      <?php if (!isset($_SESSION['nv'])) {
	      ?>
	      <td class="text-center">
			<a href="index.php?page=list-account&method=edit&id=<?php echo $value['id_account'] ?>">
				<button class="btn btn-dark">Sửa</button>
			</a>
			<a onclick="return confirm('Bạn có chắc chắn muốn xóa tài khoản này chứ?')" href="index.php?page=list-account&method=del&id=<?php echo $value['id_account'] ?>">
				<button class="btn btn-dark">Xóa</button>
			</a>
		  </td>
		  <?php
	      } ?>	
	    </tr>
	</tbody>
	<?php
	  	}
	?>

</table>
	<nav aria-label="Page navigation example">
	  <ul class="pagination">
	  	<?php  
	  		for ($i = 1; $i <= $pagination; $i++) { 
	  	?>
			<li class="page-item"><a class="page-link" href="index.php?page=list-account&method=list&pages=<?php echo $i; ?>"><?php echo $i; ?></a></li>
	  	<?php
	  		}
	  	?>
	  </ul>
	</nav>
</div>