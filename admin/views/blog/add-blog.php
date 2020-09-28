<?php if (isset($_SESSION['nv'])) {
	header("Location: index.php?page=home");
} ?>
<form action="" method="POST" onsubmit="return validitionBlog()" enctype="multipart/form-data">
	<legend>Thêm mới bài viết</legend>
	<div class="form-group">
		<label for="">Tên bài viết <span id="error_nameblog" style="color: red;">(*)</span></label>
		<input class="form-control" name="name" id="txt_nameblog" onblur="checkNameBlog();"  placeholder="Nhập tên bài viết" />
	</div>

    <div class="form-group">
        <label for="">Ảnh <span style="color: red;">(*)</span></label>
        <input style="width: 230px;" required="" type="file" name="avatar" multiple="" class="form-control" id="">
    </div>

	<div class="form-group">
		<label for="">Mô tả bài viết <span id="error_desblog" style="color: red;">(*)</span></label>
		<textarea class="md-textarea form-control" id="txt_desblog" onblur="checkDesBlog();" rows="5" name="description"></textarea>
	</div>

    <div class="form-group">
        <label for="">Nội dung bài viết	 <span id="error_contentblog" style="color: red;">(*)</span></label>
        <textarea id="txt_contentblog" onblur="checkContentBlog();" required="" class="form-control ckeditor" name="content" id="ckeditor" cols="30" rows="10"></textarea>
    </div>

	<button type="submit" name="sm_add" class="btn btn-dark">
		Thêm mới
	</button>
    <button type="reset" class="btn btn-dark">
        Nhập lại
    </button>
    <a href="index.php?page=list-blog&method=list" class="btn btn-dark">
        Quay lại
    </a>
</form>