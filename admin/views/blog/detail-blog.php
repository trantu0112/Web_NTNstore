<?php
foreach ($rs_blog as $key => $value) {
?>
<div class="col-md-12">
	<div class="panel panel-primary">
		<div class="panel-heading">Chi tiết bài viết</div>
		<div class="panel-body">
			<div class="col-md-3">
				<img src="images/blog/<?php echo $value["post_avatar"] ?>" alt="Error" width="100%" />
			</div>
			<div class="col-md-9">
				<h1 style="margin: 0;">
					<?php echo $value["post_name"] ?>
				</h1>
				<p style="margin-top: 10px; font-style: italic">
					<b>Mô tả: </b>
					<?php echo $value["description"] ?>
				</p>
				<fieldset>
					<legend>Nội dung chính</legend>
					<?php echo $value["content"] ?>
				</fieldset>
				<!-- btn -->
				<a href="index.php?page=list-blog&method=edit&id=<?php echo $value["id_post"];?>" class="btn btn-dark">Cập nhật</a>
				<a href="index.php?page=list-blog&method=list" class="btn btn-dark">Quay lại</a>
			</div>
		</div>
	</div>
</div>
<?php
}
?>