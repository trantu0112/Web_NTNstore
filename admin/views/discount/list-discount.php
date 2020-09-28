<?php include_once 'views/noti/noti.php'; ?>
<div class="page-title">
  <!-- Bảng -->
  <h3> Danh sách mã giảm giá</h3>
  <table class="table table-bordered ">
	  <thead class="thead-dark">
	    <tr>
	      <th class="text-center" >STT</th>
	      <th class="text-center" >Mã giảm</th>
	      <th class="text-center" >Phần trăm</th>
	      <th class="text-center" >Ngày bắt đầu</th>
	      <th class="text-center" >Ngày kết thúc</th>
	      <th class="text-center" >Trạng thái</th>
	      <?php if(!isset($_SESSION['nv'])){
  		  ?>
	      <th class="text-center">Chức năng</th>
	      <?php
  			} ?>
	    </tr>
	  </thead>
	  <?php 
	  		$stt = 0;
	  		foreach ($rs_discount as $key => $value) {
	  		$stt++;
	  ?>
			
	  <tbody>
	    <tr>
	      <th scope="row" class="text-center"><?php echo $stt ?></th>
	      <td class="text-center" ><?php echo $value['code'] ?></td>
	      <td class="text-center" ><?php echo $value['percent'] ?></td>
	      <td class="text-center" ><?php echo date("H:i:s - d/m/Y",strtotime($value['day_create'])); ?></td>
	      <td class="text-center" ><?php echo date("H:i:s - d/m/Y",strtotime($value['end_day'])); ?></td>
	      <td class="text-center" ><?php if(time() > strtotime($value['end_day'])){echo "Hết hạn";}else{echo "Còn hạn";} ?></td>
	      <?php if(!isset($_SESSION['nv'])){
  		  ?>
	      <td class="text-center">
			<a href="index.php?page=list-discount&method=edit&id=<?php echo $value['id_discount'] ?>">
				<button class="btn btn-dark">Sửa</button>
			</a>
			<a onclick="return confirm('Bạn có chắc chắn muốn xóa mã giảm giá này chứ?')" href="index.php?page=list-discount&method=del&id=<?php echo $value['id_discount'] ?>">
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
	<!-- /Bảng -->
</div>