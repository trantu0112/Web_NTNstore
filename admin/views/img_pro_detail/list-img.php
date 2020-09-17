<div class="page-title">
  <div class="title_left">
    <h3> Danh sách ảnh chi tiết sản phẩm</h3>
  </div>
  <div class="title_right">
    <!-- <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
	    <form action="" method="POST" role="form" class="form">
	        <div class="input-group">
	      	
		        <input type="text" name="keys" class="form-control" required="" placeholder="Tìm Kiếm Tên Sản Phẩm...">
		        <span class="input-group-btn">
		            <button class="btn btn-default" type="submit" name="sb_search">Tìm!</button>
		        </span>
	     
	        </div>
	    </form>
    </div> -->
  </div>
<table class="table table-inverse table-bordered">
	<thead>
		<tr>
			<th class="text-center">STT</th>
			<th class="text-center" style="width: 150px;">Tên giầy</th>	
			<th class="text-center" colspan="3">Ảnh chi tiết</th>	
			<?php if(!isset($_SESSION['nv'])){ ?>
			<th class="text-center">Chức năng</th>
			<?php
  			} ?>
		</tr>
	</thead>
		<?php 
	  		$stt = 0;
	  		foreach ($rs_img as $key => $value) {
	  		$stt++;
		?>
	<tbody>
	    <tr>
	      <th scope="row" class="text-center"><?php echo $stt;?></th>
	      <td class="text-center"><?php echo $value['product_name'];?></td>
	      <td class="text-center"><img style="width: 40%;" src="images/img_detail/<?php echo $value['name_img_1'] ?>"></td>
	      <td class="text-center"><img style="width: 40%;" src="images/img_detail/<?php echo $value['name_img_2'] ?>"></td>
	      <td class="text-center"><img style="width: 40%;" src="images/img_detail/<?php echo $value['name_img_3'] ?>"></td>
	      <?php if(!isset($_SESSION['nv'])){ ?>
	      <td class="text-center">
			<a href="index.php?page=list-img&method=edit&id=<?php echo $value['id_product']?>">
				<button class="btn btn-dark">Sửa</button>
			</a>
			<a onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này chứ?')" href="index.php?page=list-img&method=del&id=<?php echo $value['id_product']?>">
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
			<li class="page-item"><a class="page-link" href="index.php?page=list-img&method=list&pages=<?php echo $i; ?>"><?php echo $i; ?></a></li>
	  	<?php
	  		}
	  	?>
	  </ul>
	</nav>
</div>