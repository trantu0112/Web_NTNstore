<?php if (isset($_SESSION['nv'])) {
	header("Location: index.php?page=home");
} ?>
<form action="" method="POST" onsubmit="return validition()" enctype="multipart/form-data">
	<legend>Cập nhật ảnh chi tiết sản phẩm</legend>

	<div class="form-group">
		<label for="">Tên sản phẩm<span id="error_cate" style="color: red;">(*)</span></label>
		<input style="width: 230px;" readonly="" type="text"  class="form-control" value="<?php if(isset($_SESSION['name'])){echo $_SESSION['name'];} ?>" onblur="checkName();" />
	</div>

	<div class="form-group">

		<label for="">Ảnh </label>
		<input style="width: 230px;" type="file" name="img" multiple="" class="form-control" id="">
	</div>

	<button type="submit" name="sm_edit" class="btn btn-dark">
		Cập nhật
	</button>
</form>