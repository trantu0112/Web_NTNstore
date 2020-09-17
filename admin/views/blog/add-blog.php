<form action="" method="POST" enctype="multipart/form-data">
	<legend>Thêm mới bài viết</legend>
	<div class="form-group">
		<label for="">Tên bài viết <span style="color: red;">(*)</span></label>
		<input type="text" required="" class="form-control" name="name"  placeholder="Nhập tên bài viết" />
	</div>

    <div class="form-group">
        <label for="">Ảnh <span style="color: red;">(*)</span></label>
        <input style="width: 230px;" required="" type="file" name="avatar" multiple="" class="form-control" id="">
    </div>

	<div class="form-group">
		<label for="">Mô tả bài viết <span style="color: red;">(*)</span></label>
		<textarea type="text" required="" class="md-textarea form-control" rows="5" name="description"></textarea>
	</div>

    <div class="form-group">
        <label for="">Nội dung bài viết	 <span style="color: red;">(*)</span></label>
        <textarea type="text" required="" class="form-control ckeditor" name="content" id="ckeditor" cols="30" rows="10"></textarea>
    </div>

	<button type="submit" name="sm_add" class="btn btn-dark">
		Thêm mới
	</button>
    <a href="index.php?page=list-blog&method=list" class="btn btn-dark">
        Quay lại
    </a>
</form>