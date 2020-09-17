<div class="col-md-12">
    <div class="panel panel-primary">
        <div class="panel-heading">Chỉnh sửa bài viết</div>
        <div class="panel-body">
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="col-md-3">
            <div class="form-group">
                <label for="">Ảnh <span style="color: red;">(*)</span></label>
                    <img src="images/blog/<?php if(isset($_SESSION['avatar'])){echo $_SESSION['avatar'];} ?>" alt="" width="100%">
                <input style="width: 230px;" type="file" name="avatar" multiple="" class="form-control" id="">
            </div>
        </div>
        <div class="col-md-9">
        <div class="form-group">
            <label for="">Tên bài viết <span style="color: red;">(*)</span></label>
            <input type="text" required="" class="form-control" name="name"  placeholder="Nhập tên bài viết" value="<?php if(isset($_SESSION['name'])){echo $_SESSION['name'];} ?>" />
        </div>

        <div class="form-group">
            <label for="">Mô tả bài viết <span style="color: red;">(*)</span></label>
            <textarea type="text" required="" class="md-textarea form-control" rows="5" name="description"><?php if(isset($_SESSION['description'])){echo $_SESSION['description'];} ?></textarea>
        </div>

        <div class="form-group">
            <label for="">Nội dung bài viết	 <span style="color: red;">(*)</span></label>
            <textarea type="text" required="" class="form-control ckeditor" name="content" id="ckeditor" cols="30" rows="10"><?php if(isset($_SESSION['content'])){echo $_SESSION['content'];} ?></textarea>
        </div>

        <button type="submit" name="sm_edit" class="btn btn-dark">
            Cập nhật
        </button>

        <a href="index.php?page=list-blog&method=list" class="btn btn-success">
            Quay lại
        </a>
        </div>
    </form>
        </div>
    </div>
</div>