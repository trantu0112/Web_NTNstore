<?php if (isset($_SESSION['nv'])) {
	header("Location: index.php?page=home");
} ?>
<form action="" method="POST" onsubmit="return validition()" enctype="multipart/form-data">
	<legend>Thêm mới ảnh chi tiết sản phẩm</legend>

	<div class="form-group">
		<label for="">Tên sản phẩm <span id="error_cate" style="color: red;">(*)</span></label>
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

		<label for="">Ảnh <span id="error_cate" style="color: red;">(*)</span></label>
		<input style="width: 230px;" type="file" name="avatar[]" multiple="" multiple="" class="form-control" id="">
	</div>

	<button type="submit" name="sm_add" class="btn btn-dark">
		Thêm mới
	</button>
</form>