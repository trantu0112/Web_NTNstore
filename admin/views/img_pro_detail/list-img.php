<?php include_once 'views/noti/noti.php'; ?>
<div class="page-title">
	<?php 
  		foreach ($rs_name as $key => $value) {
  			$product_name = $value['product_name'];
	  	}?>
      <h3>Tên giày: <?php echo $product_name;?></h3>
    <?php 
  		foreach ($rs_name as $key => $value) {
	?>
      <td class="text-center"><img style="width: 20%;margin-bottom: 10px;border: 1px solid #333;" src="images/img_detail/<?php echo $value['name_img'] ?>"></td>

      <?php if(!isset($_SESSION['nv'])){ ?>
      <td class="text-center">
		<a href="index.php?page=list-img&method=edit&id=<?php echo $value['id_detail_img']?>&id_product=<?php echo $value['id_product']?>">
			<button class="btn btn-dark">Sửa</button>
		</a>
		<a onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này chứ?')" href="index.php?page=list-img&method=del&id=<?php echo $value['id_detail_img']?>&id_product=<?php echo $value['id_product'] ?>">
			<button class="btn btn-dark">Xóa</button>
		</a>
	  </td>
	  	<?php
		} ?>
      <?php
	  	}
	  ?>	
</div>
<?php if (!isset($product_name)) {
	header('Location: index.php?page=list-product');
} ?>