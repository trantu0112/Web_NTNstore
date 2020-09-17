<form action="" method="POST" onsubmit="return validition()" enctype="multipart/form-data">
	<legend>Cập nhật sản phẩm</legend>
	<div class="form-group">
		<label for="">Tên giầy <span id="error_name" style="color: red;">(*)</span></label>
		<input type="text" name="name" class="form-control" id="txt_name" placeholder="Nhập tên giầy" onblur="checkName();" value="<?php if(isset($_SESSION['name'])){echo $_SESSION['name'];} ?>" />
	</div>
	
	<div class="form-group">
		<label for="">Hãng giầy<span id="error_cate" style="color: red;">(*)</span></label>
		<select name="cate" class="form-control">
			<?php 
				foreach ($rs_cate as $key => $value) {
			?>
		  		<option <?php if(isset($_SESSION['cate']) && $_SESSION['cate'] == $value['id_cate']){echo "selected";} ?> value="<?php echo $value['id_cate'] ?>" ><?php echo $value['cate_name'] ?></option>
		  	<?php 	
		  		}
		  	?>
		</select>
	</div>

	<div class="form-group">
		<label for="">Trạng thái <span id="error_qty" style="color: red;">(*)</span></label>
		<select name="status" class="form-control">
			<option <?php if(isset($_SESSION['status']) && $_SESSION['status'] == 'new'){echo "selected";} ?> value="new">new</option>
			<option <?php if(isset($_SESSION['status']) && $_SESSION['status'] == 'sale'){echo "selected";} ?> value="sale">sale</option>
			<option <?php if(isset($_SESSION['status']) && $_SESSION['status'] == 'old'){echo "selected";} ?> value="old">old</option>
		</select>
	</div>

	<div class="form-group">
		<label for="">Số lượng tồn	 <span id="error_qty" style="color: red;">(*)</span></label>
		<input type="text" name="qty" onblur="" class="form-control" id="txt_qty" placeholder="0" value="<?php if(isset($_SESSION['quantity'])){echo $_SESSION['quantity'];} ?>" />
	</div>

	<div class="form-group">
		<label for="">Giá <span id="error_price" style="color: red;">(*)</span></label>
		<input type="text" name="price" onblur="" class="form-control" id="txt_price" placeholder="0" value="<?php if(isset($_SESSION['price'])){echo $_SESSION['price'];} ?>"/>
	</div>

	<div class="form-group">
		<label for="">Giảm giá <span id="error_price" style="color: red;">(*)</span></label>
		<input type="number" min="0" max="100" name="percent" onblur="" class="form-control" id="txt_percent" placeholder="0"  value="<?php if(isset($_SESSION['percent'])){echo $_SESSION['percent'];} ?>" />
	</div>

	<div class="form-group">
		<label for="">Mô tả <span id="error_price" style="color: red;">(*)</span></label>
		<textarea class="form-control ckeditor" name="desc" id="ckeditor" cols="30" rows="10"><?php if(isset($_SESSION['description'])){echo $_SESSION['description'];} ?></textarea>
	</div>

	
	<div class="form-group">

		<label for="">Mẫu giầy</label>
		<input style="width: 230px;" type="file" name="avatar" multiple="" class="form-control" id="">
	</div>

	<button type="submit" name="sm_edit" class="btn btn-dark">
		Cập nhật
	</button>
</form>