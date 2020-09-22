<?php if (isset($_SESSION['nv'])) {
  header("Location: index.php?page=home");
} ?>
<h3> Chỉnh sửa danh mục</h3>
<p>Tên danh mục</p>
<form action="" method="POST">
  <div class="form-group row">
    
    <div class="col-sm-10">
      <input style="width: 300px;" required="" type="text" name="name_cate" class="form-control" value="<?php if(isset($_SESSION['cate_name'])){ echo $_SESSION['cate_name'];}?>">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10 offset-sm-2">
      <button type="submit" name="sm_edit" class="btn btn-dark">Cập nhật</button>
    </div>
  </div>
</form>