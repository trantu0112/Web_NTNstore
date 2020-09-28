<?php if (isset($_SESSION['nv'])) {
    header("Location: index.php?page=home");
} ?>
<form action="" method="POST" onsubmit="return validitionAddPro()" enctype="multipart/form-data">
    <legend>Thêm mới sản phẩm</legend>
    <div class="form-group">
        <label for="">Tên giầy <span id="error_namePro" style="color: red;">(*)</span></label>
        <input name="name" class="form-control" id="txt_namePro" placeholder="Nhập tên giầy" onblur="checkNamePro();" />
    </div>

    <div class="form-group">
        <label for="">Hãng giầy<span style="color: red;">(*)</span></label>
        <select name="cate" class="form-control">
            <?php
            foreach ($rs_cate as $key => $value) {
                ?>
                <option value="<?php echo $value['id_cate'] ?>"><?php echo $value['cate_name'] ?></option>
                <?php
            }
            ?>
        </select>
    </div>

    <div class="form-group">
        <label for="">Trạng thái <span style="color: red;">(*)</span></label>
        <select name="status" class="form-control">
            <option value="new">new</option>
            <option value="sale">sale</option>
            <option value="old">old</option>
        </select>
    </div>

    <div class="form-group">
        <label for="">Số lượng tồn <span id="error_qty" style="color: red;">(*)</span></label>
        <input name="qty" onblur="checkQtyPro();" class="form-control" id="txt_qty" placeholder="0"/>
    </div>

    <div class="form-group">
        <label for="">Giá <span id="error_price" style="color: red;">(*)</span></label>
        <input name="price" onblur="checkPricePro();" class="form-control" id="txt_price" placeholder="0"/>
    </div>

    <div class="form-group">
        <label for="">Giảm giá <span id="error_percent" style="color: red;">(*)</span></label>
        <input name="percent" onblur="checkPercentPro();" class="form-control" id="txt_percent" placeholder="0"/>
    </div>

    <div class="form-group">
        <label for="">Mô tả <span id="error_des" style="color: red;">(*)</span></label>
        <textarea class="form-control" onblur="checkDesPro();" name="desc" id="txt_des" cols="30" rows="10"></textarea>
    </div>

    <div class="form-group">
        <label for="">Mẫu giầy <span style="color: red;">(*)</span></label>
        <input style="width: 230px;" type="file" required="" name="avatar" multiple="" class="form-control" id="" accesskey="">
    </div>

    <button type="submit" name="sm_add" class="btn btn-dark">
        Thêm mới
    </button>
    <button type="reset" class="btn btn-dark">
        Nhập lại
    </button>
    <a href="index.php?page=list-product&method=list" class="btn btn-dark">
        Quay lại
    </a>

</form>