<form action="" method="POST" onsubmit="return validition()" enctype="multipart/form-data">
	<legend>Sửa mã giảm giá</legend>
	<div class="form-group">
		<label for="">Mã giảm giá<span id="error_code" style="color: red;">(*)</span></label>
		<input type="text" name="code" class="form-control" placeholder="Nhập mã" value="<?php if(isset($_SESSION['code'])){echo $_SESSION['code'];} ?>" />
	</div>

	<div class="form-group">
		<label for="">phần trăm <span id="error_price" style="color: red;">(*)</span></label>
		<input type="number" name="percent" min="0" max="100" onblur="" class="form-control" placeholder="0" value="<?php if(isset($_SESSION['percent'])){echo $_SESSION['percent'];} ?>"/>
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
                        <input type="text" id="timeCheckIn" name="time-in" class="form-control" 
                        value="<?php 
                        if(isset($_SESSION['day_create'])){
                            echo date("m/d/Y",strtotime($_SESSION['day_create']));
                        } ?>"
                        />
                    </td>
                    <td>Ngày kết thúc</td>
                    <td>
                        <input type="text" id="timeCheckOut" name="time-out" class="form-control" 
                        value="<?php 
                        if(isset($_SESSION['end_day'])){
                            echo date("m/d/Y",strtotime($_SESSION['end_day']));
                        } ?>"/>
                    </td>
                </tr>
            </table>
        </div>
    </div>

	<button type="submit" name="sm_edit" class="btn btn-dark">
		Cập nhật
	</button>
</form>