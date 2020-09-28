<?php if (isset($_SESSION['nv'])) {
    header("Location: index.php?page=home");
} ?>
<form action="" method="POST" onsubmit="return validitionCode()" enctype="multipart/form-data">
    <legend>Thêm mới mã giảm giá</legend>
    <div class="form-group">
        <label for="">Mã giảm giá<span id="error_code" style="color: red;">(*)</span></label>
        <input name="code" onblur="checkCode();" class="form-control" id="txt_code" placeholder="Nhập mã" />
    </div>

    <div class="form-group">
        <label for="">Phần trăm <span id="error_percent" style="color: red;">(*)</span></label>
        <input name="percent" onblur="checkPercent();" id="txt_percent" class="form-control" placeholder="0"/>
    </div>

    <div class="panel panel-danger">
        <div class="panel-heading">
            Thiết lập thời gian
        </div>
        <div class="panel-body">
            <table class="table">
                <tr>
                    <td>Ngày bắt dầu</td>
                    <td>
                        <input type="text" id="timeCheckIn" name="time-in" class="form-control" />
                    </td>
                    <td>Ngày kết thúc</td>
                    <td>
                        <input type="text" id="timeCheckOut" name="time-out" class="form-control" />
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <button type="submit" name="sm_add" class="btn btn-dark">
        Thêm mới
    </button>
    <button type="reset" class="btn btn-dark">
        Nhập lại
    </button>
    <a href="index.php?page=list-discount&method=list" class="btn btn-dark">
        Quay lại
    </a>

</form>