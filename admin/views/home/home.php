<!-- responsive equal width cols, can be sm, md, lg, or xl -->
<div class="container">
  <div class="row">
    <div class="col-md-4">
    	<div class="card">
		  <h3 class="card-header">Tổng số sản phẩm</h3>					
		  <div class="card-body">
		  	<br>
		  	<h4 class="card-title"><?php echo $rs_count_prod[0]['COUNT'];?> Sản phẩm</h4>
		  	<br>
		    <a href="index.php?page=list-product" class="btn btn-dark">Xem sản phẩm</a>
		  </div>
		</div>
    </div>
    <div class="col-md-4">
    	<div class="card" >
		  <h3 class="card-header">Đơn hàng</h3>
		  <div class="card-body">
		  	<br>
		  	<h4 class="card-title"><?php echo $rs_count_order[0]['COUNT'];?> Đơn hàng</h4>
		  	<br>
		    <a href="index.php?page=list-order" class="btn btn-dark">Xem đơn hàng</a>
		  </div>
		</div>
    </div>
    <div class="col-md-4">
    	<div class="card">
		  <h3 class="card-header">Tổng số tài khoản</h3>
		  <div class="card-body">
		  	<br>
		  	<h4 class="card-title"><?php echo $rs_count_account[0]['COUNT'];?> Tài khoản</h4>
		  	<br>
		    <a href="index.php?page=list-account" class="btn btn-dark">Xem tài khoản</a>
		  </div>
		</div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4">
    	<div class="card">
		  <h3 class="card-header">Doanh thu hôm nay</h3>
		  <div class="card-body">
		  	<br>
		  	<h4 class="card-title"><?php echo number_format($sum_day);?> đ</h4>
		  	<br>
		  </div>
		</div>
    </div>
   <!--  <div class="col-md-4">
    	<div class="card" >
		  <h3 class="card-header">Doanh thu tuần</h3>
		  <div class="card-body">
		  	<br>
		  	<h4 class="card-title"><?php echo number_format($sum_week);?> đ</h4>
		  	<br>
		  </div>
		</div>
    </div>
    <div class="col-md-4">
    	<div class="card">
		  <h3 class="card-header">Doanh thu tháng</h3>
		  <div class="card-body">
		   
		  </div>
		</div>
    </div> -->
  </div>
</div>