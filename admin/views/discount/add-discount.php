<form action="" method="POST" onsubmit="return validition()" enctype="multipart/form-data">
	<legend>Thêm mới mã giảm giá</legend>
	<div class="form-group">
		<label for="">Mã giảm giá<span id="error_code" style="color: red;">(*)</span></label>
		<input type="text" name="code" class="form-control" id="txt_name" placeholder="Nhập mã" />
	</div>

	<div class="form-group">
		<label for="">phần trăm <span id="error_price" style="color: red;">(*)</span></label>
		<input type="number" name="percent" min="0" max="100" onblur="" class="form-control" placeholder="0"/>
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

</form>