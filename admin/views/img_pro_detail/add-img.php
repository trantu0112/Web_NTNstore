<form action="" method="POST" onsubmit="return validition()" enctype="multipart/form-data">
	<legend>Thêm mới ảnh chi tiết sản phẩm</legend>

	<div class="form-group">
		<label for="">Tên sản phẩm<span id="error_cate" style="color: red;">(*)</span></label>
		<select style="width: 230px;" name="name" class="form-control">
			<?php 
				foreach ($rs_name_img as $key => $value) {
			?>
		  		<option value="<?php echo $value['id_product'] ?>"><?php echo $value['product_name'] ?></option>
		  	<?php 	
		  		}
		  	?>
		</select>
	</div>

	<div class="form-group">

		<label for="">Ảnh thứ nhất</label>
		<input style="width: 230px;" type="file" name="img_1" multiple="" class="form-control" id="">
	</div>

	<div class="form-group">

		<label for="">Ảnh thứ hai</label>
		<input style="width: 230px;" type="file" name="img_2" multiple="" class="form-control" id="">
	</div>

	<div class="form-group">

		<label for="">Ảnh thứ ba</label>
		<input style="width: 230px;" type="file" name="img_3" multiple="" class="form-control" id="">
	</div>

	<button type="submit" name="sm_add" class="btn btn-dark">
		Thêm mới
	</button>
</form>